<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    // protected $validated;
    function storeContact(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|max:250',
            'email' => 'required|unique:students|max:80',
            'password' => 'required|min:6|max:12',

        ]);
        dd($request->all());
    }
}
