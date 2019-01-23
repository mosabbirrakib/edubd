<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\User;

class StudentsController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth:admin');
    }
    
    public function index(){
    	$students = User::orderBy('id','desc')->Where('admin',0)->get();
    	return view('backend.pages.student.index',compact('students'));
    }
    public function create(){
    	return view('backend.pages.student.create');
    }
    public function store(Request $request){
    	$this->validate($request, [
         'name' => 'required',  
         'login_id' => 'required', 'string', 'max:9', 'unique:users', 
         'department' => 'required', 'string', 
         'email' => 'required', 'string',
         'password' => 'required', 'string', 'min:6', 'confirmed', 
         'batch' => 'required', 'string', 
    	]);

    	$student = new User();
    	$student->name = $request->name;
    	$student->login_id = $request->login_id;
    	$student->department = $request->department;
        $student->email = $request->email;
    	$student->batch = $request->batch;
    	$student->password = Hash::make($request->password);

    	//Insert Image
        //if ($request->hasFile('image')) {
		    //insert that image
        	//$image = $request->file('image');	
		   // $img = time(). '.' .$image->getClientOriginalExtension();
		   // $location = public_path('images/brands/' .$img);
		    //Image::make($image)->save($location);
		    //$brand->image = $img;
       // }
    	$student->save();

        session()->flash('success','Student Has Added Successfully!!');
    	return redirect()->route('students.index');
    }

    public function edit($id){
        $student = User::find($id);
        if (!is_null($student)) {
            return view('backend.pages.student.edit', compact('student'));
        }else{
            return redirect()->route('students.index');
        }
    }
    public function update(Request $request, $id){
        $this->validate($request, [
         'name' => 'nullable',    
        ]);

        $student = User::find($id);
        $student->name = $request->name;
    	$student->login_id = $request->login_id;
    	$student->department = $request->department;
    	$student->email = $request->email;
        $student->batch = $request->batch;
    	$student->password = Hash::make($request->password);

        //Insert Image
        //if (count($request->image) > 0) {
        //if ($request->hasFile('image')) {
            //Delete the old image from folder
            //if (File::exists('images/brands/'.$student->image)) {
              // File::delete('images/students/'.$student->image);  
            //}

            //insert that image
            //$image = $request->file('image');   
            //$img = time(). '.' .$image->getClientOriginalExtension();
            //$location = public_path('images/students/' .$img);
            //Image::make($image)->save($location);
            //$student->image = $img;
        //}
        $student->save();

        session()->flash('success','Student Info Updated Successfully!!');
        return redirect()->route('students.index');
    }
    public function delete($id){
        $student = User::find($id);
        if (!is_null($student)) {
            //Delete student image
            //if (File::exists('images/students/'.$student->image)) {
              // File::delete('images/students/'.$student->image);  
            //}
            $student->delete();
        }
        session()->flash('success','Student Info Deleted Successfully !!');
        return back();
    }
}
