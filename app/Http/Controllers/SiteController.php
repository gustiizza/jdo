<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function dasboard()
    {
        return view('page.dasboard'); // Lokasi file : resources/views/beranda.php
    }
    public function KelolaPemesanan()
    {
        return view('page.kelola-pemesanan'); //Lokasi file : resources/views/beranda.php
    }
}
