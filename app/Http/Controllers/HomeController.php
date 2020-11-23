<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
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

    
    
    public static function show(){
        $data = [];
        $data["donations"] = DB::table('donations')->get();
        return view('homeDonate')->with("data",$data);
    }

    public function filtro(Request $request){
        $request->validate([
            "filtro" => "required"
        ]);
        $data = [];
        if((strcmp($request["filtro"],"Ninguno")==0)||(strcmp($request["filtro"],"Elige un filtro")==0)){
            $data["donations"] = DB::table('donations')->get();
        }else{
            $data["donations"] = DB::table('donations')->where('categoria',$request["filtro"])->get();
        }
        return view('homeDonate')->with("data",$data);
    }
}
