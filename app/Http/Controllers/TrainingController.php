<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainingController extends Controller
{
    //

    public function home()
    {
        $contributions="";

        $data=[
            'contributions' => $contributions,
            

        ];

        return view('training.home')->with($data);
    }
}
