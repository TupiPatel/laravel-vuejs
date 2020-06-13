<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    //
    public function contact()
    {
        return view('contact');
    }

    public function submit(Request $request) {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        /*
          Add mail functionality here.
        */

        $details = [
            'name' => $request->name,
            'message' => $request->message
        ];

         \Mail::to($request->email)->send(new \App\Mail\MyTestMail($details));

        return response()->json(null, 200);
    }
}

