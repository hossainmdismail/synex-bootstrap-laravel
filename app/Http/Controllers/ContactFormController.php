<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactFormController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'number'   => $request->number ? 'required' : '',
            'email'    => $request->email ? 'required|email' : '',
            'category'  => 'required',
            'message'   => 'required',
        ]);

        // $data = [
        //     'name'          => $request->name,
        //     'number'        => $request->number,
        //     'email'         => $request->email,
        //     'category'      => $request->category,
        //     'description'   => $request->message,
        //     'type'          => 'web-support',
        // ];

        // try {
        //     $url = app('domainName') . '/api/customer/store';

        //     // Send the POST request with the $data
        //     $response = Http::post($url, $data);

        //     // Check if the response was successful
        //     if ($response->successful()) {
        //         // Dump and die (for debugging purposes) with the response as JSON
        //         dd($response->json());
        //     } else {
        //         // Handle the case where the response was not successful (e.g., 4xx or 5xx status code)
        //         return response()->json([
        //             'error' => 'Failed to send data',
        //             'status' => $response->status(),
        //             'body' => $response->body(),
        //         ], $response->status());
        //     }
        // } catch (\Exception $e) {
        //     // Catch any exceptions (e.g., network issues, invalid URL) and return the error message
        //     return response()->json([
        //         'error' => 'An error occurred',
        //         'message' => $e->getMessage()
        //     ], 500);
        // }


        return redirect()->route('thanks');
    }
}
