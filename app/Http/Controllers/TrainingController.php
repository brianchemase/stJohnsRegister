<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrainingController extends Controller
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

        return view('training.home')->with($data);
    }

    public function table()
    {
        $contributions="";

        $data=[
            'contributions' => $contributions,
            

        ];

        return view('training.table')->with($data);
    }


    public function Studenttable()
    {
        $contributions="";
        $students = DB::table('tbl_students_data')->get();
        
        $data=[
            'contributions' => $contributions,
            'students' => $students, 
        ];

        return view('training.studentstable')->with($data);
    }

    
    public function registerstudent(Request $request)
    {
        // Validate the form data
        $request->validate([
            'full_names' => 'required|string',
            'national_id' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'gender' => 'required|string',
            //'zip' => 'required|string',
        ]);

        // Insert data into the database using the DB facade
        try {
            DB::table('tbl_students_data')->insert([
                'full_names' => $request->input('full_names'),
                'national_id' => $request->input('national_id'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'gender' => $request->input('gender'),
                'registration_date' => now(), // Assuming you want to save the current date
                'registered_by' => 'admin', // You might want to get the logged-in user or set it differently
            ]);

            return redirect()->back()->with('success', 'Student registered successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error registering student. Please try again.');
        }
    }


    public function registerTrainingStations()
    {
        $contributions="";
        $stations = DB::table('tbl_training_stations')->get();

        $data=[
            'contributions' => $contributions,
            'stations' => $stations,

            

        ];

        return view('training.trainingStations')->with($data);
    }

    public function savetrainingstation(Request $request)
    {
        // Validate the form data
        $request->validate([
            'station_name' => 'required|string',
            'location' => 'required|string',
            'status' => 'required|in:active,inactive',
        ]);

        // Insert data into the database using the DB facade
        try {
            DB::table('tbl_training_stations')->insert([
                'station_name' => $request->input('station_name'),
                'location' => $request->input('location'),
                'status' => $request->input('status'),
            ]);

            return redirect()->back()->with('success', 'Training station registered successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error registering training station. Please try again.');
        }
    }





    public function StudentEnrolmenttab()
    {
        $contributions="";
        $students = DB::table('tbl_students_data')->get();

        $data=[
            'contributions' => $contributions,
            'students' => $students,
            

        ];

        return view('training.studentsEnrolment')->with($data);
    }

    public function StudentCompletion()
    {
        $contributions="";

        $data=[
            'contributions' => $contributions,
            

        ];

        return view('straining.confirmedtable')->with($data);
    }
}
