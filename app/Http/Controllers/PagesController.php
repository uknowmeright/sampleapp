<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home(){
    	$people = ['Taylor', 'matt', 'jeffrey'];

    	return view('welcome', compact('people'));
    }

    public function about(){

    	return view('about');
    }

    public function contact(){

    	return view('contact');
    }

    public function terms(){

    	return view('terms');
    }
}
