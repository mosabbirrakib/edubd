<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Registration;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrations = Registration::orderBy('registration_id','asc')->get();
        return view('backend.pages.registration.index', compact('registrations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.registration.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'trimester' => 'required',
            'course_id' => 'required',
            'course_name' => 'required',
            'section' => 'required',
            'day' => 'required',
            'room' => 'required',
            'time_slot' => 'required',
        ]);
        $registration = new Registration();
        $registration->trimester = $request->trimester;
        $registration->course_id = $request->course_id;
        $registration->course_name = $request->course_name;
        $registration->section = $request->section;
        $registration->day = $request->day;
        $registration->room = $request->room;
        $registration->time_slot = $request->time_slot;
        $registration->save();
        session()->flash('success','A New Registration added Successfully !!');
        return redirect()->route('registration.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registration = Registration::find($id);
        if (!is_null($registration)) {
            return view('backend.pages.registration.edit', compact('registration'));
        }else{
            return redirect()->route('registration.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $registration = Registration::find($id);
        $registration->trimester = $request->trimester;
        $registration->course_id = $request->course_id;
        $registration->course_name = $request->course_name;
        $registration->section = $request->section;
        $registration->day = $request->day;
        $registration->room = $request->room;
        $registration->time_slot = $request->time_slot;
        $registration->save();
        session()->flash('success','A Registration Updated Successfully !!');
        return redirect()->route('registration.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registration = Registration::find($id);
        if (!is_null($registration)) {
            $registration->delete();
        }
        session()->flash('success','Registration Deleted Successfully !!');
        return back();
    }
}
