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
            'category'  => 'required',
            'message'   => 'required',
        ]);

        if ($request->has('email')) {
            $request->validate([
                'email' => 'required|email'
            ]);
        } else if ($request->has('number')) {
            $request->validate([
                'number' => 'required|numeric'
            ]);
        }


        $data = [
            'name'          => $request->name,
            'number'        => '+'.$request->country_code.$request->number,
            'email'         => $request->email,
            'category'      => $request->category,
            'description'   => $request->message,
            'type'          => 'web-support',
        ];
        dd($data['number']);
        try {
            $url = app('domainName') . '/api/customer/store';

            $response = Http::asForm()->post($url, $data);

            if ($response->successful()) {
                return redirect()->route('thanks');
            } else {
                if (!$response->successful()) {
                    return back()->with('error', 'Message sent faild, try again laters');
                }
            }
        } catch (\Exception $e) {
            return back()->with('error', 'Server error');
        }
    }
}
