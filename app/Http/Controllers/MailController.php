<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MyMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(){
       return view('3');
    }
    public function send(Request $request){
        $data = new \stdClass();
        
        $data->message = $request->message;

        Mail::to('190103437@stu.sdu.edu.kz')->send(new MyMail($data));
        return back();

    }

}
