<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            'category'  => 'required',
            'message'   => 'required',
        ]);

        return redirect()->route('thanks');
    }
}
