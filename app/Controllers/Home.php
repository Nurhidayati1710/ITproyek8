<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
public function shop(): string
{
    return view('shop');
}
public function shop_detail(): string
{
    return view('shop_detail');
}
public function login(): string
{
    return view('login');
}
}