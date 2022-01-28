<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Image;

class Images extends Component
{	
	public $images = [];

	use WithFileUploads;
	public function uploadImages(){
		foreach($this->images as $key=>$image){
			$this->images[$key]	= $image->store('multi-image','public');
		}
		$this->images = json_encode($this->images);
		Image::create(['filename'=>$this->images]);
		session()->flash('message','Image successfully uploaded');
		$this->emit('imagesUploaded');
	}

    public function render()
    {
        return view('livewire.images');
    }
}
