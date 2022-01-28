<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class Students extends Component
{
	public $firstname;
	public $lastname;
	public $email;
	public $phone;
	public $ids;
	public $searchItem;

	public function resetInputFields(){
		$this->firstname = '';
		$this->lastname = '';
		$this->email='';
		$this->phone='';
	}

	public function store(){
		$validateData = $this->validate([
			'firstname'=>	'required',
			'lastname'=>	'required',
			'email'=>	'required|email',
			'phone'=>	'required',
		]);
		Student::create($validateData);
		session()->flash('message', 'Student has been created successfully');
		$this->resetInputFields();
		$this->emit('studentAdded');
	}

	public function edit($id){
		$students = Student::where('id',$id)->first();
		$this->ids = $students->id;
		$this->firstname = $students->firstname;
		$this->lastname = $students->lastname;
		$this->email = $students->email;
		$this->phone = $students->phone;
	}

	public function update(){
		$this->validate([
			'firstname'=>	'required',
			'lastname'=>	'required',
			'email'=>	'required|email',
			'phone'=>	'required',
		]);
		if($this->ids){
			$student = Student::find($this->ids);
			$student->update([
				'firstname' =>	$this->firstname,
				'lastname' =>	$this->lastname,
				'email' =>	$this->email,
				'phone' =>	$this->phone,
			]);
			session()->flash('message','Student has been updated successfully');
			$this->resetInputFields();
			$this->emit('studentUpdated');
		}
	}

	public function delete($id){
		if($id){
			Student::where('id',$id)->delete();
			session()->flash('message','the student has been deleted successfully');
		}
	}

	use WithPagination;
    public function render()
    {	
    	$searchItem = '%'.$this->searchItem.'%';
    	$students = Student::where('firstname','LIKE',$searchItem)
    						->orWhere('lastname','LIKE',$searchItem)
    						->orWhere('email','LIKE',$searchItem)
    						->orWhere('phone','LIKE',$searchItem)
    						->orderBy('id','DESC')->paginate(3);
        return view('livewire.students',['students'=>$students]);
    }
}
