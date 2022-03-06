<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index()
    {
        return view('layouts.backend.main');
    }
    public function dasboard()
    {
        return view('page-backend.dasboard'); // Lokasi file : resources/views/beranda.php
    }
    public function kelolaProduk()
    {
        return view('page-backend.kelola-data-produk');
    }
    public function kelolaPemesanan()
    {
        return view('page-backend.kelola-pemesanan'); //Lokasi file : resources/views/beranda.php
    }
    public function kelolaCheckout(){
        return view('page-backend.kelola-data-checkout');
    }
    public function kelolaPelanggan(){
        return view('page-backend.kelola-data-history-pelanggan');
    }
    public function kelolaSosmed()
    {
        return view('page-backend.kelola-sosial-media');
    }
    public function setting()
    {
        return view('page-backend.pengaturan');
    }
    public function login()
    {
        return view('page-backend.admin-login');
    }
}
