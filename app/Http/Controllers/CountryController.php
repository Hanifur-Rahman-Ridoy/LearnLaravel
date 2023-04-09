<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    function demo()
    {

        return view('home', ['name' => 'Hanifur Rahman']);
    }


    function storeContact(Request $request)
    {
        dd($request->all());
    }
}
