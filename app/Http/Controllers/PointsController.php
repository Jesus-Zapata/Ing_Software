<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;

use Illuminate\Http\Request;
use App\History;

class PointsController extends Controller
{

    public function scores(){
        $solution = User::all();
        $count=0;
        $aux = [];
        foreach($solution as $user){
            $aux[$count] = $user;
            $count++;
        }

        for($x = 0; $x<count($aux); $x++){
            for($i = 0; $i<count($aux)-$x-1; $i++){
                if($aux[$i]->points<$aux[$i+1]->points){
                    $temp = $aux[$i+1];
                    $aux[$i+1] = $aux[$i];
                    $aux[$i] = $temp;
                }
            }
        }
        return view('scoreboard')->with("scoreboard",$aux);
    }
}