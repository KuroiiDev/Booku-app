<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Borrowing;
use Illuminate\Http\Request;

class BorrowingController extends Controller
{
    public function index()
    {
        return view('admin.borrowings.index');
    }

    public function show($id)
    {
        return view('admin.borrowings.show');
    }

    public function requests()
    {
        return view('admin.borrowings.requests');
    }

    public function approve(Borrowing $borrowing)
    {
        //
    }

    public function reject(Borrowing $borrowing)
    {
        //
    }
}
