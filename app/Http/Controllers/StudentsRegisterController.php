<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class StudentsRegisterController extends Controller
{
    //

    public function StudentSelfRegister()
    {
        $contributions="";
        $stations = DB::table('tbl_training_stations')->get();
        $courses = DB::table('tbl_courses')->get();

        //return $courses;

        $data=[
            'contributions' => $contributions,
            'stations' => $stations,
            'courses' => $courses, 

        ];

        return view('studentSelfRegister')->with($data);
    }

    public function SelfEnrolmentTab(Request $request) {
        // Validate the form data
        $validatedData = $request->validate([
            'idno' => 'required|string|max:255',
            'account' => 'required|string|max:8',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'nullable|email',
            'course' => 'required',
            'station' => 'required',
            'startdate' => 'required|date',
            'paymentmode' => 'required',
        ]);

         // Save the enrollment data to the database using DB facade
        $enrollmentId = DB::table('enrollments')->insertGetId([
        'idno' => $request->idno,
        'account' => $request->account,
        'name' => $request->name,
        'phone' => $request->phone,
        'email' => $request->email,
        'course' => $request->course,
        'station' => $request->station,
        'startdate' => $request->startdate,
        'paymentmode' => $request->paymentmode,
        'created_at' => now(),
        'updated_at' => now()
    ]);

     // Check if the student with the given idno exists in tbl_students_data
     $student = DB::table('tbl_students_data')->where('national_id', $request->idno)->first();

     // If the student with the given idno doesn't exist, insert into tbl_students_data
     if (!$student) {
         // Insert data into tbl_students_data
         DB::table('tbl_students_data')->insert([
             'national_id' => $request->idno,
             'full_names' => $request->name,
             'phone' => $request->phone,
             'gender' => $request->gender,
             'email' => $request->email,
             'registration_date' => now(),
             'registered_by' => "Self Online"
         ]);
     }


     // Check if the payment mode is 'mpesa' and execute a function
    if ($request->paymentmode === 'mpesa') {
        //$this->executeMpesaFunction($request); // Call your function
        $phone = $request->phone; // Example phone number
        $Amount = '10'; // Example amount
        $accountno = $request->account; 

        $this->payment($phone, $Amount, $accountno);
        return redirect()->back()->with('success', 'Enrolment submitted successfully. Enter your pin to complete payment');

    }
    
        // Redirect the user or return a response
        return redirect()->back()->with('success', 'Form submitted successfully');
    }

    public function EnrolledStudentstable()
    {
        $contributions="";
        $students = DB::table('enrollments')->get();
        $courses = DB::table('tbl_courses')->get();
        $stations = DB::table('tbl_training_stations')->get();

        $students = DB::table('enrollments')
            ->join('tbl_courses', 'enrollments.course', '=', 'tbl_courses.id')
            ->select('enrollments.*', 'tbl_courses.course_name')
            ->get();


        //return $students;
        
        $data=[
            'contributions' => $contributions,
            'students' => $students, 
            'courses' => $courses, 
            'stations' => $stations,
        ];

        return view('training.studentenrolmenttable')->with($data);
    }


    public function anotherFunction() {
        // Assuming you have the required data here
        $phone = '0702230627'; // Example phone number
        $Amount = '10'; // Example amount
        $accountno = 'ABC121113'; // Example account number
    
        // Call the payment function and pass the required parameters
        $this->payment($phone, $Amount, $accountno);
    }
    

    public function payment($phone, $Amount, $accountno)
    {
       

       
          //$phone=$_POST['phone'];
         // $AccountReference=$_POST['accno'];
          $TransactionDesc="Training Enrolment";
          $AccountReference=$accountno;
          //$Amount=$_POST['amount'];
          
          $length=strlen($phone);
            if ($length==10)
                {
                $tel= substr($phone, 1);
                    $code="254";
                    $PartyA = $code.$tel;
                //echo $to;
                }
            elseif($length<=8)
                {
                $to=$phone;
                echo "invalid phone";
                //echo $to;
                }
            elseif($length >=11)
                {
                $PartyA=$phone;
                //echo $to;
                } 
        
      
        # access token
        $consumerKey = 'zwIdqxhxNhXyMC3FzzZFAKZHXZ1xuHmWC6iKOcDaVCIIw34z'; //Fill with your app Consumer Key
        $consumerSecret = 'gFpN6CAGeNngqXlDSTGcy6oGD68PgEjSA67WAIYUnEzTWOi6APu3es5hvr31kjXf'; // Fill with your app Secret
      
        # define the variales
        # provide the following details, this part is found on your test credentials on the developer account
        $BusinessShortCode = '224444';
        //$BusinessShortCode = '580900';
        $Passkey = 'd7744a046891518fcd6f72f75931938aaa389fb757b886dbd9d826efd30d3f7b';  
        
        /*
          This are your info, for
          $PartyA should be the ACTUAL clients phone number or your phone number, format 2547********
          $AccountRefference, it maybe invoice number, account number etc on production systems, but for test just put anything
          TransactionDesc can be anything, probably a better description of or the transaction
          $Amount this is the total invoiced amount, Any amount here will be 
          actually deducted from a clients side/your test phone number once the PIN has been entered to authorize the transaction. 
          for developer/test accounts, this money will be reversed automatically by midnight.
        */
        
        // $PartyA = '254704170146'; // This is your phone number, 
        //$AccountReference = 'GURUSNATION';
        //$TransactionDesc = 'STAY SAFE DURING COVID';
        //$Amount = '1';
       
        # Get the timestamp, format YYYYmmddhms -> 20181004151020
        $Timestamp = date('YmdHis');    
        
        # Get the base64 encoded string -> $password. The passkey is the M-PESA Public Key
        $Password = base64_encode($BusinessShortCode.$Passkey.$Timestamp);
      
        # header for access token
        $headers = ['Content-Type:application/json; charset=utf8'];
      
          # M-PESA endpoint urls
       // $access_token_url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
       // $initiate_url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
        
         $access_token_url = 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
        $initiate_url = 'https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
      
        # callback url
        $CallBackURL = 'https://briananikayi.com/mpesa/call_back.php';  
      
        $curl = curl_init($access_token_url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_HEADER, FALSE);
        curl_setopt($curl, CURLOPT_USERPWD, $consumerKey.':'.$consumerSecret);
        $result = curl_exec($curl);
        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $result = json_decode($result);
        $access_token = $result->access_token;  
        curl_close($curl);
      
        # header for stk push
        $stkheader = ['Content-Type:application/json','Authorization:Bearer '.$access_token];
      
        # initiating the transaction
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $initiate_url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $stkheader); //setting custom header
      
        $curl_post_data = array(
          //Fill in the request parameters with valid values
          'BusinessShortCode' => $BusinessShortCode,
          'Password' => $Password,
          'Timestamp' => $Timestamp,
          'TransactionType' => 'CustomerPayBillOnline',
          'Amount' => $Amount,
          'PartyA' => $PartyA,
          'PartyB' => $BusinessShortCode,
          'PhoneNumber' => $PartyA,
          'CallBackURL' => $CallBackURL,
          'AccountReference' => $AccountReference,
          'TransactionDesc' => $TransactionDesc
        );
      
        $data_string = json_encode($curl_post_data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        $curl_response = curl_exec($curl);
        //print_r($curl_response);
      
    }
}
