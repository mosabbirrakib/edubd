@extends('backend.layouts.master')
@section('content')
<div class="container">
  <div class="row justify-content-center">
   <div class="col-md-10">
    <div class="card">
      <div class="card-header">
        <h3>Add Registration</h3>
      </div>
      <div class="card-body">
        <form action="{{ route('registration.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          @include('backend.partials.messages')
           <div class="form-group">
              <label for="trimester">Trimester</label>
              <input type="text" class="form-control" name="trimester" id="trimester" placeholder="Enter Trimester">
           </div>
           <div class="form-group">
              <label for="course_id">Course ID</label>
              <input type="text" class="form-control" name="course_id" id="course_id" placeholder="Enter Course ID">
           </div>
           <div class="form-group">
              <label for="course_name">Course Title</label>
              <input type="text" class="form-control" name="course_name" id="course_name" placeholder="Enter Course Title">
           </div>
           <div class="form-group">
              <label for="section">Section</label>
              <input type="text" class="form-control" name="section" id="section" placeholder="Enter Section">
           </div>
           <div class="form-group">
              <label for="day">Day</label>
              <input type="text" class="form-control" name="day" id="day" placeholder="Enter Day">
           </div>
           <div class="form-group">
              <label for="room">Room No</label>
              <input type="text" class="form-control" name="room" id="room" placeholder="Enter Room No">
           </div>
           <div class="form-group">
              <label for="time_slot">Time Slot</label>
              <input type="text" class="form-control" name="time_slot" id="time_slot" placeholder="Enter Time Slot">
           </div>         
              <button type="submit" class="btn btn-primary">Add Registration</button>
        </form>
      </div>
    </div>
   </div>    
  </div>     
</div>
@endsection
