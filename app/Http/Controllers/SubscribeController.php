<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);
        return redirect()->route('thanks');
    }
}
