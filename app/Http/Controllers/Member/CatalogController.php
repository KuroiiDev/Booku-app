<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        return view('member.catalog');
    }

    public function show($slug)
    {
        return view('member.book-detail');
    }
}
