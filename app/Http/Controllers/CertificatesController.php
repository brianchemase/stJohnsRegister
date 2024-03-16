<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;


class CertificatesController extends Controller
{
    //

    public function MakeCertificate()
    {
        $text="Text";

             $id_no ="123456" ;
             $client_names = "Dennis Matara";
            $serialNo = "Serial No: 255255";
            $personalNo = "2023123456";
            $station = "Station";
            $Designation = "Supervisor";
            $tarehe = "2023-04-23";
            $experyDate = "2023-04-23";
            $imagePath = public_path('img/signature.png'); // Update with the correct path to your image
            //$imagePath = public_path('img/bg/bg.jpg');

            $date=date_create($tarehe);
            $approval_date= date_format($date,"d F Y");

            $date=date_create($experyDate);
            $experyDate= date_format($date,"d F Y");


            $pdf = new Fpdf('L', 'mm', 'A4');
            $pdf->AddPage('L', 'A4');

            $pdf->Image(public_path('img/bg/stjohncert.png'), 0, 0, $pdf->GetPageWidth(), $pdf->GetPageHeight(), 'PNG');
                

                // Add the image
            $pdf->Image($imagePath, 70, 145, 70, 0, 'PNG');

            $pdf->SetFont('Arial', 'B', 16);
            $pdf->SetTextColor(0, 0, 0); // Set text color (RGB values)
            $pdf->SetXY(120, 63); // Set position for text


            // Set a larger font size for $client_names
            $pdf->SetFont('Arial', 'B', 24);
            // $pdf->SetFont('Calligrapher', '', 24); // 'Calligrapher' is an example font name
            $pdf->Cell(0, 90, $client_names, 0, 1); // Add the text

        // Reset font size for the rest of the text
        $pdf->SetFont('Arial', 'B', 16);


       //$pdf->SetXY(12, 153); // Set position for text
      // $pdf->Cell(0, 10, $experyDate, 0, 1); // Add the text


       $pdf->SetXY(175, 160); // Set position for text
       $pdf->Cell(0, 10, $approval_date, 0, 1); // Add the text

       $pdf->SetXY(120, 179); // Set position for text
       $pdf->Cell(0, 10, $serialNo, 0, 0); // Add the text
       
       
       $pdf->Output();
        exit;
    }

    public function getcertificate()
    {

        return view('certificates');
    }

    public function getcert(Request $request)
    {
        // return $request->all();
        $id_no = $request->idno;

        $result = DB::table('certified_members')
        ->where('national_id', $id_no)
        ->orwhere('cert_serial', $id_no)
        ->first();

        if ($result) {
            // The record exists
            // Accessing other values from the result
            $client_names = $result->full_names;
            $tarehe = $result->approvaldate;
            $email = $result->email;
            $training_location = $result->training_location;
            $cert_serial = $result->cert_serial;

                $id_no ="123456" ;
                //$client_names = "Dennis Matara";
                $serialNo = "Serial No: $cert_serial";
                $personalNo = "2023123456";
                $station = "Station";
                $Designation = "Supervisor";
                //$tarehe = "2023-04-23";
                $experyDate = "2023-04-23";
                $imagePath = public_path('img/signature.png'); // Update with the correct path to your image
                //$imagePath = public_path('img/bg/bg.jpg');

                $date=date_create($tarehe);
                $approval_date= date_format($date,"d F Y");

                $date=date_create($experyDate);
                $experyDate= date_format($date,"d F Y");


                $pdf = new Fpdf('L', 'mm', 'A4');
                $pdf->AddPage('L', 'A4');

                $pdf->Image(public_path('img/bg/stjohncert.png'), 0, 0, $pdf->GetPageWidth(), $pdf->GetPageHeight(), 'PNG');
                

                // Add the image
                $pdf->Image($imagePath, 70, 145, 70, 0, 'PNG');

                $pdf->SetFont('Arial', 'B', 16);
                $pdf->SetTextColor(0, 0, 0); // Set text color (RGB values)
                $pdf->SetXY(120, 63); // Set position for text


            // Set a larger font size for $client_names
                $pdf->SetFont('Arial', 'B', 24);
            // $pdf->SetFont('Calligrapher', '', 24); // 'Calligrapher' is an example font name
                $pdf->Cell(0, 90, $client_names, 0, 1); // Add the text

                // Reset font size for the rest of the text
                $pdf->SetFont('Arial', 'B', 16);


            //$pdf->SetXY(12, 153); // Set position for text
            // $pdf->Cell(0, 10, $experyDate, 0, 1); // Add the text


            $pdf->SetXY(175, 160); // Set position for text
            $pdf->Cell(0, 10, $approval_date, 0, 1); // Add the text

            $pdf->SetXY(120, 179); // Set position for text
            $pdf->Cell(0, 10, $serialNo, 0, 0); // Add the text
            
            
            $pdf->Output();
        exit;
        }
            else {
                // The record does not exist
                //return "No record found for ID: $id_no";
                return redirect()->back()->with('error', "No record found for ID: $id_no");
            }
    }



    public function CertificiedStudents()
    {
        $contributions="";
        $students = DB::table('certified_members')->get();
        $courses = DB::table('tbl_courses')->get();
        $stations = DB::table('tbl_training_stations')->get();
        

        $students = DB::table('certified_members')
            ->join('tbl_courses', 'certified_members.courseCode', '=', 'tbl_courses.id')
            ->select('certified_members.*', 'tbl_courses.*') // Select columns you need
            ->get();
        //return $students;

        $data=[
            'contributions' => $contributions,
            'students' => $students, 
            'courses' => $courses, 
            'stations' => $stations, 
            
        ];

        return view('training.CertifiedStudents')->with($data);
    }

    public function registerCertifiedStudent(Request $request)
    {
        try {
            // Validate the form data
            $validatedData = $request->validate([
                'full_names' => 'required|string|max:255',
                'national_id' => 'required|string|max:255',
                'phone' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'approvaldate' => 'required|date',
                'training_station' => 'required',
                'course_id' => 'required|exists:tbl_courses,id',
            ]);

            // Generate cert_serial
            $certSerial = 'SJAK' . date('Ymd') . mt_rand(1, 500);

            // Insert data into the certified_members table
            DB::table('certified_members')->insert([
                'full_names' => $validatedData['full_names'],
                'national_id' => $validatedData['national_id'],
                'phone' => $validatedData['phone'],
                'email' => $validatedData['email'],
                'approvaldate' => $validatedData['approvaldate'],
                'courseCode' => $validatedData['course_id'],
                'training_location' => $validatedData['training_station'],
                'cert_serial' => $certSerial,
                'status' => "valid",
            ]);

            // If insertion is successful, redirect back with success message
            return redirect()->back()->with('success', 'Certified member registered successfully!');
        } catch (\Exception $e) {
            // If an error occurs during insertion, redirect back with error message
            return redirect()->back()->with('error', 'Failed to register certified member. Please try again.');
        }
    }
}
