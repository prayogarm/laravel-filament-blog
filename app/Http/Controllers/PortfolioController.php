<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolio = Portfolio::all();
        $kategori = Kategori::all();

        return view('portfolio.index', compact('portfolio','kategori'));
    }

    public function show($slug)
    {
        $kategori = Kategori::where('slug', $slug)->first();
        $portfolio = $kategori->portfolios()->orderBy('created_at')->paginate(12);
        return view('portfolio.show', [
            'portfolio' => $portfolio,
            'kategori' => $kategori
        ]);
    }

    public function detail(Portfolio $portfolio)
    {
        return view('portfolio.detail', compact('portfolio'));
    }
}
