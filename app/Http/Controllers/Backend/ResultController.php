<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Result;

class ResultController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth:admin');
    }
    
    public function index(){
    	$results = Result::orderBy('result_id','desc')->get();
    	return view('backend.pages.result.index',compact('results'));
    }
    public function create(){
    	return view('backend.pages.result.create');
    }
    public function store(Request $request){
    	$this->validate($request, [
         'login_id' => 'required',    
    	]);

    	$result = new Result();
    	$result->login_id = $request->login_id;
    	$result->trimester = $request->trimester;
    	$result->course_id = $request->course_id;
    	$result->course_name = $request->course_name;
    	$result->credit = $request->credit;
    	$result->grade = $request->grade;
    	$result->point = $request->point;
    	$result->course_status = $request->course_status;
    	$result->gpa = $request->gpa;
    	$result->probation = $request->probation;

    	$result->save();

        session()->flash('success','Result Has Added Successfully !!');
    	return redirect()->route('result.index');
    }

    public function edit($result_id){
        $result = Result::find($result_id);
        if (!is_null($result)) {
            return view('backend.pages.result.edit', compact('result'));
        }else{
            return redirect()->route('result.index');
        }
    }
    public function update(Request $request, $result_id){

        $result = Result::find($result_id);
    	$result->login_id = $request->login_id;
    	$result->trimester = $request->trimester;
    	$result->course_id = $request->course_id;
    	$result->course_name = $request->course_name;
    	$result->credit = $request->credit;
    	$result->grade = $request->grade;
    	$result->point = $request->point;
    	$result->course_status = $request->course_status;
    	$result->gpa = $request->gpa;
    	$result->probation = $request->probation;

        $result->save();

        session()->flash('success','Result Updated Successfully !!');
        return redirect()->route('result.index');
    }
    public function delete($result_id){
        $result = Result::find($result_id);
        if (!is_null($result)) {
            $result->delete();
        }
        session()->flash('success','Result Deleted Successfully !!');
        return back();
    }
}
