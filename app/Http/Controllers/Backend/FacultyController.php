<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\User;

class FacultyController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth:admin');
    }
    
    public function index(){
    	$faculties = User::orderBy('id','desc')->Where('admin',1)->get();
    	return view('backend.pages.faculty.index',compact('faculties'));
    }
    public function create(){
    	return view('backend.pages.faculty.create');
    }
    public function store(Request $request){
    	$this->validate($request, [
         'name' => 'required',  
         'login_id' => 'required', 'string', 'max:9', 'unique:users', 
         'department' => 'required', 'string', 
         'email' => 'required', 'string',
         'admin' => 'required', 'numeric',
         'password' => 'required', 'string', 'min:6', 'confirmed', 
    	]);

    	$faculty = new User();
    	$faculty->name = $request->name;
    	$faculty->login_id = $request->login_id;
    	$faculty->department = $request->department;
    	$faculty->email = $request->email;
    	$faculty->admin = $request->admin;
    	$faculty->password = Hash::make($request->password);

    	//Insert Image
        //if ($request->hasFile('image')) {
		    //insert that image
        	//$image = $request->file('image');	
		   // $img = time(). '.' .$image->getClientOriginalExtension();
		   // $location = public_path('images/brands/' .$img);
		    //Image::make($image)->save($location);
		    //$brand->image = $img;
       // }
    	$faculty->save();

        session()->flash('success','Faculty Has Added Successfully!!');
    	return redirect()->route('faculty.index');
    }

    public function edit($id){
        $faculty = User::find($id);
        if (!is_null($faculty)) {
            return view('backend.pages.faculty.edit', compact('faculty'));
        }else{
            return redirect()->route('faculty.index');
        }
    }
    public function update(Request $request, $id){
        $this->validate($request, [
         'name' => 'nullable',    
        ]);

        $faculty = User::find($id);
        $faculty->name = $request->name;
    	$faculty->login_id = $request->login_id;
    	$faculty->department = $request->department;
    	$faculty->email = $request->email;
    	$faculty->admin = $request->admin;
    	$faculty->password = Hash::make($request->password);

        //Insert Image
        //if (count($request->image) > 0) {
        //if ($request->hasFile('image')) {
            //Delete the old image from folder
            //if (File::exists('images/brands/'.$faculty->image)) {
              // File::delete('images/facultys/'.$faculty->image);  
            //}

            //insert that image
            //$image = $request->file('image');   
            //$img = time(). '.' .$image->getClientOriginalExtension();
            //$location = public_path('images/facultys/' .$img);
            //Image::make($image)->save($location);
            //$faculty->image = $img;
        //}
        $faculty->save();

        session()->flash('success','Faculty Info Updated Successfully!!');
        return redirect()->route('faculty.index');
    }
    public function delete($id){
        $faculty = User::find($id);
        if (!is_null($faculty)) {
            //Delete faculty image
            //if (File::exists('images/facultys/'.$faculty->image)) {
              // File::delete('images/facultys/'.$faculty->image);  
            //}
            $faculty->delete();
        }
        session()->flash('success','Faculty Info Deleted Successfully !!');
        return back();
    }
}
