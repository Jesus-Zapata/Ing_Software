<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class History extends Model{
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
}