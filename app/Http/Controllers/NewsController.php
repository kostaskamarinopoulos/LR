<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Latestnew;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
	public function index()
	{
		$latestnew=latestnew::all();
        return view('latestnews.index', compact('latestnew'));
    }
}
