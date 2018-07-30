<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CinemovController extends Controller
{
	public function index(Request $request) {
		return view('cinemov');
	}
}
