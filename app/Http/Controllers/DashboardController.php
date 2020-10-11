<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;
Use App\Teacher;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct($value='')
    {
       $this->middleware('auth');
    }

    public function index()
    {
        return view ('dashboard/index');
    }

    
}
