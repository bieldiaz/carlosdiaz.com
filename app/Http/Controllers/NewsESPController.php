<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\novedades;

class NewsESPController extends Controller
{
    public function index()
    {
        $news = novedades::all();
        return view('newsESP')->with('news', $news);
    }
}
