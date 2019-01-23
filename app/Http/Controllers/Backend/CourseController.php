<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\User;
use Auth;

class CourseController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth:admin');
    }
    
    public function index(){
    	$courses = Course::orderBy('id','desc')->get();
    	return view('backend.pages.course.index',compact('courses'));
    }
    public function create(){
    	return view('backend.pages.course.create');
    }
    public function store(Request $request){
    	$this->validate($request, [
         'course_name' => 'required',  
         'course_id' => 'required', 'string', 
         'credit' => 'required', 'integer', 
         'trimester' => 'required', 'string', 
    	]);

    	$course = new Course();
    	$course->time_slot_id = $request->time_slot_id;
    	$course->section_id = $request->section_id;
    	$course->registration_id = $request->registration_id;
    	$course->course_name = $request->course_name;
    	$course->login_id = Auth::User()->login_id;
    	$course->course_id = $request->course_id;
    	$course->credit = $request->credit;
    	$course->trimester = $request->trimester;
    	$course->grade = $request->grade;
    	$course->point = $request->point;
    	$course->course_status = $request->course_status;

    	$course->save();

        session()->flash('success','A New Course Has Added Successfully !!');
    	return redirect()->route('course.index');
    }

    public function edit($id){
        $course = Course::find($id);
        if (!is_null($course)) {
            return view('backend.pages.course.edit', compact('course'));
        }else{
            return redirect()->route('course.index');
        }
    }
    public function update(Request $request, $id){
        $this->validate($request, [
         'course_name' => 'nullable',    
        ]);

        $course = Course::find($id);
        $course->time_slot_id = $request->time_slot_id;
    	$course->section_id = $request->section_id;
    	$course->registration_id = $request->registration_id;
    	$course->course_name = $request->course_name;
    	$course->login_id = Auth::User()->login_id;
    	$course->course_id = $request->course_id;
    	$course->credit = $request->credit;
    	$course->trimester = $request->trimester;
    	$course->grade = $request->grade;
    	$course->point = $request->point;
    	$course->course_status = $request->course_status;

        $course->save();

        session()->flash('success','Course Updated Successfully !!');
        return redirect()->route('course.index');
    }
    public function delete($id){
        $course = Course::find($id);
        if (!is_null($course)) {
            $course->delete();
        }
        session()->flash('success','Course Deleted Successfully !!');
        return back();
    }
}
