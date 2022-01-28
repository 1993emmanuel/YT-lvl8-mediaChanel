<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ZipArchive;
use File;

class Zipcontroller extends Controller
{
    //
    public function zipFile(){
    	$zip = new ZipArchive;
    	$filename = 'comprimido.zip';
    	if($zip->open(public_path($filename),ZipArchive::CREATE == TRUE)){
    		$files = File::files(public_path('myfiles'));
    		foreach($files as $key => $value){
    			$relativeNameinZip = basename($value);
    			$zip->addFile($value, $relativeNameinZip);
    		}
    		$zip->close();
    	}
    	return response()->download(public_path($filename));
    }
}
