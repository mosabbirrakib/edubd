@extends('backend.layouts.master')
@section('content')
<div class="container">
  <div class="row justify-content-center">
   <div class="col-md-10">
    <div class="card">
      <div class="card-header">
        <h3>Add Time Slot</h3>
      </div>
      <div class="card-body">
        <form action="{{ route('time_slot.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          @include('backend.partials.messages')
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
              <button type="submit" class="btn btn-primary">Add Time Slot</button>
        </form>
      </div>
    </div>
   </div>    
  </div>     
</div>
@endsection
