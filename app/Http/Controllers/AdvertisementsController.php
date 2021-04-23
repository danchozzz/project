<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisements;
use App\Models\Profile;

class AdvertisementsController extends Controller
{
    public function index(){
        $advertisements= Advertisements::all();
        return view ('4' ) ->with(['advertisements'=>$advertisements]);
    }
    public function store(Request $request) {
        $Id = $request->хозяин;
        $profile = Profile::find($Id);
        if ($profile == null) {
            return response(['message' => 'profile not found'], 404);
        }

        else {
            Advertisements::create([
                'Марка' => $request->марка,
                'Модель' => $request->модель,
                'год выпуска' => $request->год,
                'Описание' => $request->описание,
                'хозяин' => $request->хозяин
                
            ]);
        }

        return back();
    }
}
