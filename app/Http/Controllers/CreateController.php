<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\History;
use App\User;

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
        $valor = $request["value"];
        $points = [];
        $points["points"] = DB::table('users')->where('id',$userId)->value('points') + (int)$valor;
        $donationData = [];
        $donationData["name"] = $request["name"];
        $donationData["value"] = $request["value"];
        $donationData["userId"] = $userId;
        
        User::updatePoints($userId, $points);
        History::createHistory($donationData);
        return view('history.create');
    }
}