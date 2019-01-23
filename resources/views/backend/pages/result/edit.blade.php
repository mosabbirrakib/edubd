@extends('backend.layouts.master')
@section('content')
<div class="container">
  <div class="row justify-content-center">
   <div class="col-md-10">
    <div class="card">
      <div class="card-header">
        <h3>Edit Result</h3>
      </div>
      <div class="card-body">
        <form action="{{ route('result.update',$result->result_id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @include('backend.partials.messages')
           <div class="form-group">
              <label for="login_id">Student ID</label>
              <input type="text" class="form-control" name="login_id" id="login_id" value=" {{ $result->login_id }} ">
           </div>
           <div class="form-group">
              <label for="trimester">Trimester</label>
              <input type="text" class="form-control" name="trimester" id="trimester" value=" {{ $result->trimester }} ">
           </div>
           <div class="form-group">
              <label for="course_id">Course ID</label>
              <input type="text" class="form-control" name="course_id" id="course_id" value=" {{ $result->course_id }} ">
           </div>
           <div class="form-group">
              <label for="course_name">Course Name</label>
              <input type="text" class="form-control" name="course_name" id="course_name" value=" {{ $result->course_name }} ">
           </div>
           <div class="form-group">
              <label for="credit">Credit</label>
              <input type="text" class="form-control" name="credit" id="credit" value=" {{ $result->credit }} ">
           </div>
           <div class="form-group">
              <label for="grade">Grade</label>
              <input type="text" class="form-control" name="grade" id="grade" value=" {{ $result->grade }} ">
           </div>
           <div class="form-group">
              <label for="point">Point</label>
              <input type="text" class="form-control" name="point" id="point" value=" {{ $result->point }} ">
           </div>
           <div class="form-group">
              <label for="course_status">Course Status</label>
              <input type="text" class="form-control" name="course_status" id="course_status" value=" {{ $result->course_status }} ">
           </div>
           <div class="form-group">
              <label for="gpa">GPA</label>
              <input type="text" class="form-control" name="gpa" id="gpa" value=" {{ $result->gpa }} ">
           </div>
           <div class="form-group">
              <label for="probation">probation</label>
              <input type="text" class="form-control" name="probation" id="probation" value=" {{ $result->probation }} ">
           </div>
              <button type="submit" class="btn btn-success">Update Result</button>
        </form>
      </div>
    </div>
   </div>    
  </div>     
</div>
@endsection
