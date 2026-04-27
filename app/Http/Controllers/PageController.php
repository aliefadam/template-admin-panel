<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function charts()
    {
        return view('charts');
    }

    public function components()
    {
        return view('components');
    }

    public function datatables()
    {
        return view('datatables');
    }

    public function settings()
    {
        return view('settings');
    }
}
