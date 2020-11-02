<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model{
    public function getId(){
        return $this->attributes['id'];
    }

    public function getName(){
        return $this->attributes['name'];
    }

    public function getLink(){
        return $this->attributes['link'];
    }

    public function getDescription(){
        return $this->attributes['description'];
    }
    
    public function getCategoria(){
        return $this->attributes['categoria'];
    }
}