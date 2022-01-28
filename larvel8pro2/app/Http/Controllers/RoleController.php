<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;

class RoleController extends Controller
{
    //
    public function addRole(){
    	$roles = [
    		['name'=>"administrator"],
    		['name'=>"Editor"],
    		['name'=>"Author"],
    		['name'=>"Contributor"],
    		['name'=>"Subscriber"]
    	];
    	Role::insert($roles);
    	return 'Roles are created successfully';

    }

    //
    public function addUser(){
    	$user = new User();
    	$user->name = 'Julio';
    	$user->email = 'julio@gmail.com';
    	$user->password = encrypt('secret');
    	$user->save();

    	$roleids = [1,3,4];
    	$user->roles()->attach($roleids);

    	return "Record has been created successfully";
    }

    //
    public function getAllRolesByUser($id){
    	$user = User::find($id);
    	$roles = $user->roles;
    	return $roles;
    }

    //
    public function getAllUserByRole($id){
    	$roles = Role::find($id);
    	$user = $roles->users;
    	return $user;
    }

}
