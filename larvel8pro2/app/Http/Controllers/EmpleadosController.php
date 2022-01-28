<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleados;

use App\DataTables\EmpleadosDataTable;


class EmpleadosController extends Controller
{
    //
    public function index(EmpleadosDataTable $dataTable){
    	return $dataTable->render('empleados');
    }

}
