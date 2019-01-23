<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;

class PagesController extends Controller
{
    public function registration(){
    	return view('frontend.pages.registration.layouts.master');
    } 

    //Student Profile Update
    public function profile_edit(){
    	$user = Auth::user();
    	return view('frontend.pages.student.profile_edit',compact('user'));
    }

    public function profile_update(Request $request){
    	$user = Auth::user();

    	$user->name = $request->name;
    	$user->login_id = $request->login_id;
    	$user->department = $request->department;
        $user->email = $request->email;
    	$user->batch = $request->batch;
    	if ($request->password !=NULL || $request->password !="") {
    		$user->password = Hash::make($request->password);
    	}
    	$user->save();

    	session()->flash('success','Profile Updated Successfully !!');
    	return back();
    }
}
