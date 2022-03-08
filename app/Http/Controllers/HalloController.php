<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalloController extends Controller
{
    public function index()
    {
        return view('minggu3.konten')
                    ->with('title', 'TI-2F/Kel-2');
    }
    public function product1()
    {
        return view('minggu3.product')
                    ->with('title', 'TI-2F/Kel-2')
                    ->with('judul', 'isi product');
    }
    public function news1($news)
    {
        return view('minggu3.news')
                    ->with('title', 'TI-2F/Kel-2')
                    ->with('judul', 'pengertian');
                
    }
    public function program1()
    {
        return view('minggu3.program')
                    ->with('title', 'TI-2F/Kel-2')
                    ->with('judul', 'berita');
                
    }
    public function aboutus()
    {
        return view('minggu3.about-us')
                    ->with('title', 'TI-2F/Kel-2')
                    ->with('judul', 'isi');
                
    }
    public function contactus()
    {
        return view('minggu3.contact-us')
                    ->with('title', 'TI-2F/Kel-2')
                    ->with('judul', 'Hubungi');
                
    }
    
}