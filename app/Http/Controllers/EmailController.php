<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Mail;

class EmailController extends Controller
{
	public function send(Request $request){
		$title = $request->input('InputName');
		$email = $request->input('InputEmail');
		$content = $request->input('InputMessage');

		Mail::send('emails.send', ['title' => $title, 'content' => $content], function ($message) use ($email, $title)
		{
	
			$message->from($email, $title);

			$message->to('admin@marabele.com');
		
		});

		return response()->json(['message' => 'Request completed']);
		//header("location: contact");
	}
}
