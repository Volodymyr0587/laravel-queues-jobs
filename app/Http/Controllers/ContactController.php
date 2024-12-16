<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|min:1|max:255',
            'email' => 'required|email',
            'message' => 'required|string|min:1|max:5000',
        ]);
        dd($request->all());
    }
}
