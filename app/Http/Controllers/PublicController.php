<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function landing()
    {
        return view('public.landing');
    }

    public function catalog()
    {
        return view('public.catalog');
    }

    public function show($slug)
    {
        return view('public.book-detail');
    }
}
