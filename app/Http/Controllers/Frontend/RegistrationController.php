<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Registration;
use App\Models\Result;
use App\Models\Info;
use App\User;
use Auth;
use Yajra\DataTables\DataTables;

class RegistrationController extends Controller
{
	//Section Part
    public function section_selection(){
    	$s_info = Auth::user()->get()->where('login_id',Auth::user()->login_id);
        $results = Result::where('login_id',Auth::user()->login_id)->get();
        $registrations=Registration::where('login_id',Auth::user()->login_id)->get();
    	return view('frontend.pages.registration.section_selection', compact('s_info','results','registrations'));
    }

    //Pre Advising
    public function pre_advising(){
        $s_info = Auth::user()->get()->where('login_id',Auth::user()->login_id);
        $results = Result::where('login_id',Auth::user()->login_id)->get();
        $degrees = Info::where('login_id',Auth::user()->login_id)->get();
        //$registrations=Registration::where('login_id',Auth::user()->login_id)->get();
        $registrations=Registration::all();
        
        return view('frontend.pages.registration.pre_advising', compact('s_info','results','degrees','registrations'));
    }

    //Result Part
    public function result(){
    	$s_info = Auth::user()->get()->where('login_id',Auth::user()->login_id);
    	$results = Result::where('login_id',Auth::user()->login_id)->get();
    	$degrees = Info::where('login_id',Auth::user()->login_id)->get();
    	return view('frontend.pages.registration.result', compact('s_info','results','degrees'));
    }
}
