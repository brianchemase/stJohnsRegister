<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class TrainingController extends Controller
{
    //

    public function home()
    {
        $contributions="100";
        $students = DB::table('tbl_students_data')->get();
        $totalStudentsRegistered = DB::table('tbl_students_data')->count();
        $trainingStations = DB::table('tbl_training_stations')->count();
        $courses_registered = DB::table('tbl_courses')->count();
        $enrollments = DB::table('enrollments')->count();
        $certified_members = DB::table('certified_members')->count();


       
        $monthlyData = [];

        // Query to count certifications issued each month
        $certificationsCountByMonth = DB::table('certified_members')
            ->select(DB::raw('MONTH(approvaldate) as month'), DB::raw('COUNT(*) as total'))
            ->groupBy(DB::raw('MONTH(approvaldate)'))
            ->get();

        // Loop through the result and populate the monthly data array
        foreach ($certificationsCountByMonth as $row) {
            // Extract month and total from the result row
            $month = $row->month;
            $total = $row->total;
            
            // Assign the total to the respective month in the monthly data array
            // Here, we're using month numbers as keys (1 for January, 2 for February, etc.)
            // If you want month names as keys, you can use date('F', mktime(0, 0, 0, $month, 1))
            $monthlyData[$month] = $total;
        }

        // Fill in any missing months with 0
        for ($i = 1; $i <= 12; $i++) {
            if (!isset($monthlyData[$i])) {
                $monthlyData[$i] = 0;
            }
        }

        // Sort the array by keys (months)
        ksort($monthlyData);

        $data=[
            'contributions' => $contributions,
            'students' => $students,
            'totalStudentsRegistered' => $totalStudentsRegistered,
            'trainingStations' => $trainingStations,
            'monthlyData' => $monthlyData,
            'courses_registered' => $courses_registered,
            'enrollments' => $enrollments,
            'certified_members' => $certified_members,

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

        //$registeredby=Auth::user()->name;

        // Insert data into the database using the DB facade
        try {
            DB::table('tbl_students_data')->insert([
                'full_names' => $request->input('full_names'),
                'national_id' => $request->input('national_id'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'gender' => $request->input('gender'),
                'registration_date' => now(), // Assuming you want to save the current date
                'registered_by' => $request->input('registered_by'), // You might want to get the logged-in user or set it differently
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


    public function registerCourses()
    {
        $contributions="";
        $courses = DB::table('tbl_courses')->get();

        $data=[
            'contributions' => $contributions,
            'courses' => $courses,

            

        ];

        return view('training.trainingCourses')->with($data);
    }

    public function saveCourses(Request $request)
    {
        // Validate the form data
        $request->validate([
            'course_name' => 'required|string',
            'course_duration' => 'required|string',
            'course_cost' => 'required',
        ]);

        // Insert data into the database using the DB facade
        try {
            DB::table('tbl_courses')->insert([
                'course_name' => $request->input('course_name'),
                'course_duration' => $request->input('course_duration'),
                'course_cost' => $request->input('course_cost'),
            ]);

            return redirect()->back()->with('success', 'Course registered successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error registering Course. Please try again.');
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
