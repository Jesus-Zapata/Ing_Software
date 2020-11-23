<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\History;

class HistoryController extends Controller
{

    public function show(){
        $data = [];
        $solution = History::all();

        foreach($solution as $donation){
            if($donation->getuserId() == Auth::id()){
                array_push($data, $donation);
            }
        }
        return view('history.show')->with("data",$data);
    }
}