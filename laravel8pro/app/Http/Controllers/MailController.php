<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function sendEmail(){
    	$details = [
    		'title'	=>	'Mail from laravel Test',
    		'body'	=>	'this is a test only'
    	];

    	Mail::to("deskbot.emmanuel@gmail.com")->send(new TestMail($details));
    	return "this mail is sent successfully";

    }
}
