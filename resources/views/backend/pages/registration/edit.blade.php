@extends('backend.layouts.master')
@section('content')
<div class="container">
  <div class="row justify-content-center">
   <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3>Edit Registration</h3>
      </div>
      <div class="card-body">
        <form action="{{ route('registration.update',$registration->registration_id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @include('backend.partials.messages')
           <div class="form-group">
              <label for="trimester">Trimester</label>
              <input type="text" class="form-control" name="trimester" id="trimester" value="{{$registration->trimester}}">
           </div>
           <div class="form-group">
              <label for="course_id">Course ID</label>
              <input type="text" class="form-control" name="course_id" id="course_id" value="{{$registration->course_id}}">
           </div>
           <div class="form-group">
              <label for="course_name">Course Title</label>
              <input type="text" class="form-control" name="course_name" id="course_name" value="{{$registration->course_name}}">
           </div>
           <div class="form-group">
              <label for="section">Section</label>
              <input type="text" class="form-control" name="section" id="section" value="{{$registration->section}}">
           </div>
           <div class="form-group">
              <label for="day">Day</label>
              <input type="text" class="form-control" name="day" id="day" value="{{$registration->day}}">
           </div>
           <div class="form-group">
              <label for="room">Room No</label>
              <input type="text" class="form-control" name="room" id="room" value="{{$registration->room}}">
           </div>
           <div class="form-group">
              <label for="time_slot">Time Slot</label>
              <input type="text" class="form-control" name="time_slot" id="time_slot" value="{{$registration->time_slot}}">
           </div>
              <button type="submit" class="btn btn-success">Update Registration</button>
        </form>
      </div>
    </div>
   </div>    
  </div>     
</div>
@endsection
