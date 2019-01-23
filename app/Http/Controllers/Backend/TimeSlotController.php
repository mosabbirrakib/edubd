<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TimeSlot;

class TimeSlotController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth:admin');
    }
    
    public function index(){
    	$time_slots = TimeSlot::orderBy('time_slot_id','desc')->get();
    	return view('backend.pages.time_slot.index',compact('time_slots'));
    }
    public function create(){
    	return view('backend.pages.time_slot.create');
    }
    public function store(Request $request){
    	$this->validate($request, [
         'day' => 'required',  
         'room' => 'required', 
         'time_slot' => 'required',  
    	]);

    	$time_slot = new TimeSlot();
    	$time_slot->day = $request->day;
    	$time_slot->room = $request->room;
    	$time_slot->time_slot = $request->time_slot;

    	$time_slot->save();

        session()->flash('success','A New TimeSlot Has Added Successfully !!');
    	return redirect()->route('time_slot.index');
    }

    public function edit($time_slot_id){
        $time_slot = TimeSlot::find($time_slot_id);
        if (!is_null($time_slot)) {
            return view('backend.pages.time_slot.edit', compact('time_slot'));
        }else{
            return redirect()->route('time_slot.index');
        }
    }
    public function update(Request $request, $time_slot_id){

        $time_slot = TimeSlot::find($time_slot_id);
        $time_slot->day = $request->day;
    	$time_slot->room = $request->room;
    	$time_slot->time_slot = $request->time_slot;

        $time_slot->save();

        session()->flash('success','TimeSlot Updated Successfully !!');
        return redirect()->route('time_slot.index');
    }
    public function delete($time_slot_id){
        $time_slot = TimeSlot::find($time_slot_id);
        if (!is_null($time_slot)) {
            $time_slot->delete();
        }
        session()->flash('success','TimeSlot Deleted Successfully !!');
        return back();
    }
}
