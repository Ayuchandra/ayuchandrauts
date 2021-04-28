<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = "Halaman home";
        $content['mahasiswa'] = array(
            'nama' => 'Luh Putu Ayu Chandra Dewi',
            'nim' => '1915101055'
        );

        return view('admin/beranda', compact('title', 'content'));
    }

    public function dashboard()
    {
        $title = "Penyewaan Pakaian Tari Bali";

        return view('admin/dashboard', compact('title'));
    }
}
