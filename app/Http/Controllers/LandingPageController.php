<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    //
    public function home()
    {
        $contributions="100";
        $students = DB::table('tbl_students_data')->get();
        $totalStudentsRegistered = DB::table('tbl_students_data')->count();
        $trainingStations = DB::table('tbl_training_stations')->count();

        $data=[
            'contributions' => $contributions,
            'students' => $students,
            'totalStudentsRegistered' => $totalStudentsRegistered,
            'trainingStations' => $trainingStations,
            

        ];

        return view('collegelanding')->with($data);
    }
}
