<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    
	function check(Request $r)
	{
			
		$username=$r->input('username');//post input
		$password=$r->input('password');//post input
		$username01 = "";
		
		$result = DB::select("select `id`,`username`, `password`, `email`, `role` from user where `username` ='$username'");
		foreach($result as $post)
		{
			$username01 = $post->username;
			$email = $post->email;
			$db_password = $post->password;
			$role = $post->role;
			$id = $post->id;
		}
		if($username01!="")
		{	
			if($username==$username01 && md5($password)==$db_password)
			{
				$r->session()->put('user_id',$id);
				$r->session()->put('username',$username);
				$r->session()->put('email',$email);
				$r->session()->put('role',$role);
				return redirect ('home');
			}
			else
			{ 
			 $r->session()->flash('alert','Please enter valid Password !!!');
			 return redirect ('/');
			}
		}

		if($username01=="")
		{
			 $r->session()->flash('alert','Please enter valid Username !!!');
			 return redirect ('/');
		}
	}
	
	function registration01(Request $r)
	{
		$username=$r->input('username');//post input
		$password=$r->input('password');//post input
		$email=$r->input('email');//post input


		DB::table('user')->insert(['username' => $username,'password' => md5($password),'email' => $email,'role' => 'user']);



		return redirect ('/')->with('alert', 'Registration Successfully!!! Please login with your username and Password');

	}	
	
	
	
	
	
}
