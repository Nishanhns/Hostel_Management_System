<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;

class hostelController extends Controller
{
	public function hostelAdd01(Request $r)
	{
		$name=$r->input('name');//post input
		$address=$r->input('address');//post input
		$single_room=$r->input('single_room');//post input
		$double_room=$r->input('double_room');//post input
		DB::table('hostel')->insert(['name' => $name,'location' => $address,'single_room' => $single_room,'double_room' => $double_room]);
		return redirect ('/hostel')->with('alert', 'New Hostel Add Sucessfully!!!');
	}
	public function bookingNow(Request $r)
	{
		$id=$r->input('id');//post input
		return view('bookingNow',['id'=>$id]);
	}

	public function bookingNow01(Request $r)
	{
		$hostel_id=$r->input('id');//post input
		$checkin=$r->input('checkin');//post input
		$checkout=$r->input('checkout');//post input
		$single_room=$r->input('single_room');//post input
		$double_room=$r->input('double_room');//post input
		$user_id = session('user_id');
		$username = session('username');
		DB::table('booking')->insert(['hostel_id' => $hostel_id,'user_id' => $user_id,'checkin' => $checkin,'checkout' => $checkout,'single_room' => $single_room,'double_room' => $double_room,'flag' => '0']);


$result = DB::select("SELECT `name` FROM `hostel` WHERE id='$hostel_id'");
foreach($result as $post)
			{$hostel = $post->name;}

        $to = session('email');
        $subject = 'Hostel Booking Confirmation';
        $content = ' 
        <h1>Booking Confirmation</h1>
        <p>Hello '.$username.',</p>
        <p>We received your hostel booking reservation</p>
        
		<table border="1">
		<tr>
		<td>Hostel Name</td><td>Check In</td><td>Check Out</td><td>Single Room</td><td>Double Room</td>
		</tr>
		<tr>
		<td>'.$hostel.'</td>
		<td>'.date('d-M-Y', strtotime($checkin)).'</td>
		<td>'.date('d-M-Y', strtotime($checkout)).'</td>
		<td>'.$single_room.'</td>
		<td>'.$double_room.'</td>
		</tr>
		</table>
       
		<br>
        <p>Best regards,<br>HMS</p>
		
		';
        Mail::send([], [], function ($message) use ($to, $subject, $content) {
            $message->to($to)
                ->subject($subject)
                ->html($content);
        });
		return redirect ('/booking')->with('alert', 'Hostel Booking Add Sucessfully!!!');
	}
	
	public function hostelDel(Request $r)
	{
		$id=$r->input('id');//post input
		$result = DB::table('hostel')->where('id', $id)->delete();
		return redirect ('/hostel')->with('alert', 'Hostel Delete Sucessfully!!!');
	}
	public function hostelEdit(Request $r)
	{
		$id=$r->input('id');//post input
		return view('hostelEdit',['id'=>$id]);
	}
	public function hostelEdit01(Request $r)
	{
		$id=$r->input('id');//post input
		$name=$r->input('name');//post input
		$address=$r->input('address');//post input
		$single_room=$r->input('single_room');//post input
		$double_room=$r->input('double_room');//post input
		
		$result = DB::table('hostel')->where('id', $id)->update(['name' => $name,'location' => $address,'single_room' => $single_room,'double_room' => $double_room]);
		return redirect ('/hostel')->with('alert', 'Hostel Update Sucessfully!!!');

	}
	
	
	
	
	
	
	
	
}
