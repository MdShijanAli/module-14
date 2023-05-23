<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
 function Assignment(Request $request){
    // Question-1
     $name=$request->input('name');
    //  Question-2
     $userAgent=$request->header('User-Agent');
    //  Question-3
     $page=$request->input('page', NULL);


// Question-4

     $data = [
        'message' => 'Success',
        'data' => [
            'name' => 'John Doe',
            'age' => 25,
        ],
    ];

    return response()->json($data, Response::HTTP_OK);


// Question-5

     if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
        $uploadedFile = $request->file('avatar');
        $originalFilename = $uploadedFile->getClientOriginalName();

        $path = $uploadedFile->storeAs('uploads', $originalFilename, 'public');

  
    } else {
        return "No Valid File Found";
    }

    // Question-6

 $rememberToken = $request->cookie('remember_token', null);

 }
}
