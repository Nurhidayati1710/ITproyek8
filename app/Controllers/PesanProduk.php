<?php

namespace App\Controllers;

class PesanProduk extends BaseController
{
    public function index(): string
    {
        return view('pesan_produk');
    }

}