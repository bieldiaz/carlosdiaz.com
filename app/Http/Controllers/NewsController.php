<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\news;


class NewsController extends Controller
{
    public function index()
    {
        $news = news::all();
        return view('news')->with('news', $news);
    }
}
