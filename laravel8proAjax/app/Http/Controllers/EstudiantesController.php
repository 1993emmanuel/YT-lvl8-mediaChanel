<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiantes;

class EstudiantesController extends Controller
{
    //
    public function addEstudiantes(){
    	$estudiantes = new Estudiantes();
    	$estudiantes->name = 'JUAN';
    	$estudiantes->email = 'JUAN@gmail.com';
    	$estudiantes->phone = '+52 36 43 33 56';
    	$estudiantes->save();
    	return 'estudiante save successfully';
    }

    public function getAllEstudiantes(){
    	return Estudiantes::all();
    }

}
