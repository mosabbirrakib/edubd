@extends('backend.layouts.master')
@section('content')
<div class="container">
  <div class="row justify-content-center">
   <div class="col-md-10">
    <div class="card">
      <div class="card-header">
        <h3>Add Result</h3>
      </div>
      <div class="card-body">
        <form action="{{ route('result.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          @include('backend.partials.messages')
           <div class="form-group">
              <label for="login_id">Student ID</label>
              <input type="text" class="form-control" name="login_id" id="login_id" placeholder="Enter Student ID">
           </div>
           <div class="form-group">
              <label for="trimester">Trimester</label>
              <input type="text" class="form-control" name="trimester" id="trimester" placeholder="Enter Trimester">
           </div>
           <div class="form-group">
              <label for="course_id">Course ID</label>
              <input type="text" class="form-control" name="course_id" id="course_id" placeholder="Enter Course ID">
           </div>
           <div class="form-group">
              <label for="course_name">Course Name</label>
              <input type="text" class="form-control" name="course_name" id="course_name" placeholder="Enter Course Name">
           </div>
           <div class="form-group">
              <label for="credit">Credit</label>
              <input type="text" class="form-control" name="credit" id="credit" placeholder="Enter Credit">
           </div>
           <div class="form-group">
              <label for="grade">Grade</label>
              <input type="text" class="form-control" name="grade" id="grade" placeholder="Enter Grade">
           </div>
           <div class="form-group">
              <label for="point">Point</label>
              <input type="text" class="form-control" name="point" id="point" placeholder="Enter Point">
           </div>
           <div class="form-group">
              <label for="course_status">Course Status</label>
              <input type="text" class="form-control" name="course_status" id="course_status" placeholder="Enter Course Status">
           </div>
           <div class="form-group">
              <label for="gpa">GPA</label>
              <input type="text" class="form-control" name="gpa" id="gpa" placeholder="Enter GPA">
           </div>
           <div class="form-group">
              <label for="probation">Probation</label>
              <input type="text" class="form-control" name="probation" id="probation" placeholder="Enter Probation">
           </div>         
              <button type="submit" class="btn btn-primary">Add Result</button>
        </form>
      </div>
    </div>
   </div>    
  </div>     
</div>
@endsection
