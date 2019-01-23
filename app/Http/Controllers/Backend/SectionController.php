<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Section;

class SectionController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth:admin');
    }
    
    public function index(){
    	$sections = Section::orderBy('section_id','desc')->get();
    	return view('backend.pages.section.index',compact('sections'));
    }
    public function create(){
    	return view('backend.pages.section.create');
    }
    public function store(Request $request){
    	$this->validate($request, [
         'section' => 'required',    
    	]);

    	$section = new Section();
        $section->section = $request->section;
    	$section->capacity = $request->capacity;

    	$section->save();

        session()->flash('success','A New Section Has Added Successfully !!');
    	return redirect()->route('section.index');
    }

    public function edit($section_id){
        $section = Section::find($section_id);
        if (!is_null($section)) {
            return view('backend.pages.section.edit', compact('section'));
        }else{
            return redirect()->route('section.index');
        }
    }
    public function update(Request $request, $section_id){

        $section = Section::find($section_id);
    	$section->section = $request->section;
        $section->capacity = $request->capacity;

        $section->save();

        session()->flash('success','Section Updated Successfully !!');
        return redirect()->route('section.index');
    }
    public function delete($section_id){
        $section = Section::find($section_id);
        if (!is_null($section)) {
            $section->delete();
        }
        session()->flash('success','Section Deleted Successfully !!');
        return back();
    }
}
