<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiantes extends Model
{
    use HasFactory;
    protected $table = 'estudiantes';


    public function setEmailAttribute($value){
    	$this->attributes['email'] = strtolower($value);
    }

    public function getNameAttribute($value){
    	return strtoupper($value);
    }

    public function getPhoneAttribute($value){
    	return str_replace(" ", "", $value);
    }
    


}
