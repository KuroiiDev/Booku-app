<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
        return view('member.wishlist');
    }

    public function toggle(Book $book)
    {
        //
    }
}
