<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

use App\Exports\EmployeeExport;
use Excel;

use App\Imports\EmployeeImport;

class EmployeeController extends Controller
{
    //
	public function addEmployee(){
		$employee = [
			['name'=>'Emmanuel', 'email'=>'emmanuel@correo.com.mx','phone'=>'123456789', 'salary'=>'5000', 'department'=>'SEO'],
			['name'=>'juan', 'email'=>'juan@correo.com.mx','phone'=>'123456789', 'salary'=>'2501474', 'department'=>'secretary'],
			['name'=>'pedro', 'email'=>'pedro@correo.com.mx','phone'=>'018000', 'salary'=>'100000000', 'department'=>'java'],
			['name'=>'Emmanuel2', 'email'=>'emmanuel2@correo.com.mx','phone'=>'123456789', 'salary'=>'5000', 'department'=>'SEO'],
			['name'=>'jua2', 'email'=>'jua2@correo.com.mx','phone'=>'123456789', 'salary'=>'2501474', 'department'=>'secretary'],
			['name'=>'pedr2', 'email'=>'pedr2@correo.com.mx','phone'=>'018000', 'salary'=>'100000000', 'department'=>'java'],
			['name'=>'Emmanue3', 'email'=>'emmanue3@correo.com.mx','phone'=>'123456789', 'salary'=>'5000', 'department'=>'SEO'],
			['name'=>'jua3', 'email'=>'jua3@correo.com.mx','phone'=>'123456789', 'salary'=>'2501474', 'department'=>'secretary'],
			['name'=>'pedr3', 'email'=>'pedr3@correo.com.mx','phone'=>'018000', 'salary'=>'100000000', 'department'=>'java']
		];
		Employee::insert($employee);
		return "all record has been inserted successfully";
	}

	//
	public function exportIntoExcel(){
		return Excel::download(new EmployeeExport, 'ejemplo.xlsx');
	}

	//
	public function exportIntoCSV(){
		return Excel::download(new EmployeeExport, 'employee.csv');
	}

	//
	public function importFrom(){
		return view('import-form');
	}

	//
	public function import(Request $request){
		Excel::import(new EmployeeImport,$request->file);
		return 'Record are imported successfully';
	}


}
