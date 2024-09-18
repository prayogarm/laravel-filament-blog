<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $kategori = Kategori::orderby('id', 'asc')->get();

        return view('home.index', compact('kategori'));
    }

    public function produk()
    {       
        $kategori = Kategori::orderby('id', 'asc')->get();
        return view('home.product', compact('kategori'));
    }

    public function layanan()
    {        
        return view('home.service');
    }

    public function kontak()
    {        
        return view('home.contact');
    }

    public function promo()
    {        
        return view('home.promo');
    }
}
