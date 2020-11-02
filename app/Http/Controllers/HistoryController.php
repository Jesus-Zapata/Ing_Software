<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donation;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    
    public function show(){
        $data = [];
        $data["donations"] = Donation::all();
        return view('homeDonate')->with("data",$data);
    }
}