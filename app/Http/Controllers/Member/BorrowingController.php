<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Borrowing;
use Illuminate\Http\Request;

class BorrowingController extends Controller
{
    public function index()
    {
        return view('member.borrowings.index');
    }

    public function store(Request $request, Book $book)
    {
        //
    }

    public function requestReturn(Borrowing $borrowing)
    {
        //
    }

    public function history()
    {
        return view('member.borrowings.history');
    }
}
