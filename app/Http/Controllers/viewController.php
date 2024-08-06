<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    function index(){
        return view('index');
    }
    function about(){
        return view('about');
    }
    function blogDetails(){
        return view('blog-details');
    }
    function blog(){
        return view('blog');
    }
    function contact(){
        return view('contact');
    }
    function projectDetails(){
        return view('project-details');
    }
    function projects(){
        return view('projects');
    }
    function sampleInnerPage(){
        return view('sample-inner-page');
    }
    function serviceDetails(){
        return view('service-details');
    }
    function services(){
        return view('services');
    }
}
