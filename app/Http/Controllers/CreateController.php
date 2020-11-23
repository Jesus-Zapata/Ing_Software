<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\History;

class CreateController extends Controller
{
    
    public function create(){
        return view('history.create');
    }

    public function save(Request $request){
        $request->validate([
            "name" => "required",
            "value"=> "required",
        ]);
        $userId = Auth::id();

        $donationData = [];
        $donationData["name"] = $request["name"];
        $donationData["value"] = $request["value"];
        $donationData["userId"] = $userId;
        
        History::createHistory($donationData);
        return view('history.create');
    }
}