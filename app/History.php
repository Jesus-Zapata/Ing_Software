<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class History extends Model{
    protected $fillable = ['name', 'value'];
    public function getId(){
        return $this->attributes['id'];
    }

    public function getName(){ 
        return $this->attributes['name'];
    }

    public function getValue(){
        return $this->attributes['value'];
    }
    public function getUserId(){
        return $this->attributes['userId'];
    }
    public static function createHistory($data){
        DB::table('histories')->insert($data);
    }
}