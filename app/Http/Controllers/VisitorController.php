<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitorController extends Controller
{
    //
    public function store(Request $request)
    {

        //return $request->all();


        // Validate the form data
        $request->validate([
            'idno' => 'required|string',
            'name' => 'required|string',
            'phone' => 'required|numeric',
            'email' => 'nullable|email',
            'purpose' => 'required|string',
        ]);

        try {
            $timeIn = now();
            // Use the DB facade to insert data
            DB::table('visitors_data')->insert([
                'idno' => $request->idno,
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'purpose' => $request->purpose,
                'time_in' => $timeIn, // Set time_in to the captured time
                'time_out' => null, // Set time_out to null initially
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $phone=$request->phone;
            $client=$request->name;
            $message="Dear $client\nWelcome to ST Johns Ambulance Head Offices.\nFor further enquiries feel free to reach the reception area.";
            // Optionally, you can redirect the user after successful submission
            $Notify = $this->SendNotification($phone, $message);
            return redirect()->back()->with('success', 'Welcome. Your data has been registered.');
           
        } catch (\Exception $e) {
            // Handle the exception (e.g., log it, show an error message)
            return back()->withInput()->withErrors(['error' => 'Failed to submit the form. Please try again.']);
        }
    }

    public function showVisitors()
    {
        $visitors = DB::table('visitors_data')->get();

        return view('visitors', ['visitors' => $visitors]);
    }



    public function SendNotification($phone, $message)
    {
        // Define the JSON data to send
        $data = [
            "phone" => $phone,
            "message" => $message,
        ];

        $apikey="e9e34425b54b697792a9d4ebe61acdd6";
        $shortcode="STJOHNKENYA";
        $partnerID="9907";
        $serviceId=0;

                $smsdata=array(
                    "apikey" => $apikey,
                    "shortcode" => $shortcode,
                    "partnerID"=> $partnerID,
                    "mobile" => $phone,
                    "message" => $message,
                    //"serviceId" => $serviceId,
                    //"response_type" => "json",
                    );
                    
                $smsdata_string=json_encode($smsdata);
                //echo $smsdata_string."\n";

                $smsURL="https://sms.textsms.co.ke/api/services/sendsms/";

                //POST
                $ch=curl_init($smsURL);
                curl_setopt($ch,CURLOPT_CUSTOMREQUEST,"POST");
                curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
                curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
                curl_setopt($ch,CURLOPT_POSTFIELDS,$smsdata_string);
                curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                curl_setopt($ch,CURLOPT_HTTPHEADER,array(
                    'Content-Type: application/json',
                    'Content-Length: '.strlen($smsdata_string)
                    )	
                );
                $response=curl_exec($ch);
                $err = curl_error($ch);
                curl_close($ch);

        // Output the response from the endpoint
       // return "Response: " . $response;
    }
}
