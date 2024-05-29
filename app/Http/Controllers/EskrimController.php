<?php

namespace App\Http\Controllers;

use App\Models\eskrims;
use Illuminate\Http\Request;

class EskrimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
       return view('home');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
       $es = eskrims::with('flavor')->get();
       return view('catalog',['eskrim'=>$es]); 
    }

}
