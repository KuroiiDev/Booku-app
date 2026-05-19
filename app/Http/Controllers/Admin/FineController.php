<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fine;
use Illuminate\Http\Request;

class FineController extends Controller
{
    public function index()
    {
        return view('admin.fines.index');
    }

    public function show($id)
    {
        return view('admin.fines.show');
    }

    public function markPaid(Fine $fine)
    {
        //
    }
}
