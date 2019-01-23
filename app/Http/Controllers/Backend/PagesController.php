<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;

class PagesController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth:admin');
    }
    
    public function student(){
    	$users = User::orderBy('id','desc')->get();
    	return view('backend.pages.student.student-data',compact('users'));
    }

    public function faculty(){
    	$users = User::orderBy('id','desc')->get();
    	return view('backend.pages.faculty.faculty-data',compact('users'));
    }

    //Faculty Profile Update
    public function profile_edit(){
    	$user = Auth::user();
    	return view('backend.pages.faculty.faculty-profile',compact('user'));
    }

    public function profile_update(Request $request){
    	$user = Auth::user();

    	$user->name = $request->name;
    	$user->login_id = $request->login_id;
    	$user->department = $request->department;
        $user->email = $request->email;
    	if ($request->password !=NULL || $request->password !="") {
    		$user->password = Hash::make($request->password);
    	}
    	$user->save();

    	session()->flash('success','Profile Updated Successfully !!');
    	return back();
    }
}
