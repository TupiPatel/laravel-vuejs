<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    public function formSubmit(Request $request)

    {

    	$imageName = time().'.'.$request->image->getClientOriginalExtension();

        $request->image->move(public_path('images/header'), "header3.jpg");

        

    	return response()->json(['success'=>'You have successfully upload image.']);

    }
}
