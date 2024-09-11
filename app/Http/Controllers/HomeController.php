<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {        
        return view('home.index');
    }

    public function produk()
    {        
        return view('home.product');
    }

    public function layanan()
    {        
        return view('home.service');
    }

    public function kontak()
    {        
        return view('home.contact');
    }
}
