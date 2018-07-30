<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class FooController extends Controller
{
	public function hello(Request $request) {
		$books = Book::all();
		return view('foo', ['books' => $books]);
	}
}
