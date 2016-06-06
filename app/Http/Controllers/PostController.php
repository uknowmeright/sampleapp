<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
use Task;

class PostController extends Controller
{

	public function index()
	{
		$users = db::table('users')->get();

		return view('results', compact('users'));

	}

    public function store(Request $request)
    {
        $this->validate($request, [
        'firstName' => 'required|max:255',
        'lastName' => 'required|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|digits:10'
    	]);

    	$fname = $request->input('firstName');
    	$lname = $request->input('lastName');
    	$email = $request->input('email');
    	$phone = $request->input('phone');

   		DB::table('users')->insert(
    		['fname' => $fname, 'lname' => $lname, 'email' => $email, 'phone' => $phone]
		);

		//return redirect()->route('thankyou', [$request]);

		return view('thankyou', ['fname' => $fname, 'lname' => $lname, 'email' => $email, 'phone' => $phone]);

    }
}