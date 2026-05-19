<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Borrowing;
use Illuminate\Http\Request;

class ReturnController extends Controller
{
    public function index()
    {
        return view('admin.returns.index');
    }

    public function verify(Borrowing $borrowing)
    {
        //
    }
}
