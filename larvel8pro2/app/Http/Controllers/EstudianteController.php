<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    //
    public function addStudent(){
    	return view('add-student');
    }

    //
    public function storeStudent(Request $request){
    	$name = $request->name;
    	$image = $request->file('file');
    	$imageName = time().'.'.$image->extension();
    	$image->move(public_path('students'),$imageName);

    	$students = new Estudiante();
    	$students->name = $name;
    	$students->profileimage = $imageName;

    	$students->save();
    	return back()->with('student_added', 'Student has been inserted successfully');
    }

    //
    public function allStudent(){
    	$students = Estudiante::all();
    	return view('all-student',compact('students'));
    }

    //
    public function editStudent($id){
    	$student = Estudiante::find($id);
    	return view('edit-student', compact('student'));
    }

    //
    public function updateStudent(Request $request){
    	$name = $request->name;
    	$image = $request->file('file');
    	$imageName = time().'.'.$image->extension();
    	$image->move(public_path('students'),$imageName);

    	$students = Estudiante::find($request->id);
    	$students->name = $name;
    	$students->profileimage = $imageName;
    	$students->save();
    	return back()->with('student_updated', 'Student has been updated successfully');
    }

    //
    public function deleteStudent($id){
    	$student = Estudiante::find($id);
    	unlink(public_path('students').'/'.$student->profileimage);
    	$student->delete();
    	return back()->with('student_deleted', 'Studen has been deleted successfully!!!!');
    }

}
