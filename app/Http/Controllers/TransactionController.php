<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TransactionController extends Controller
{
    //

    public function index()
    {
        // Fetch data from the URL
        $response = Http::get('https://transactions.stjohnkenya.org/send_trans.php');

        // Decode JSON response
        $data = $response->json();

        // Pass data to the view
        return view('Payments', ['transactions' => $data]);
    }
}
