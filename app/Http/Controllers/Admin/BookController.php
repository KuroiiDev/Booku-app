<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('admin.books.index');
    }

    public function create()
    {
        return view('admin.books.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('admin.books.show');
    }

    public function edit($id)
    {
        return view('admin.books.edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function qrCode($id)
    {
        return view('admin.books.qr');
    }
}
