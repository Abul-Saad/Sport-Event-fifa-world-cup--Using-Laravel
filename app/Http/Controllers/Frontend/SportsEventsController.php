<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SportsEventsController extends Controller
{
    //
    function index()
    {
        return view('frontend.index');
    }
    function about()
    {
        return view('frontend.about');
    }
    function blog()
    {
        return view('frontend.blog');
    }
    function contact()
    {
        return view('frontend.contact');
    }
    function news()
    {
        return view('frontend.news');
    }
    function single_blog()
    {
        return view('frontend.single-blog');
    }
    function team()
    {
        return view('frontend.team');
    }
}
