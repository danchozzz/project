<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index(){
        $profile= Profile::all();
        return view ('5' ) ->with(['profile'=>$profile]);
    }
    public function store(Request $request) {
        $profile = Profile::create([
            'имя' => $request->имя,
            'фамилия' => $request->фамилия,
            'номер телефона' => $request->номер,
        ]);
        
        return back();
    }
}

