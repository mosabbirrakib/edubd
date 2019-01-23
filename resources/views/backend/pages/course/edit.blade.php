@extends('backend.layouts.master')
@section('content')
<div class="container">
  <div class="row justify-content-center">
   <div class="col-md-10">
    <div class="card">
      <div class="card-header">
        <h3>Edit Course</h3>
      </div>
      <div class="card-body">
        <form action="{{ route('course.update',$course->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @include('backend.partials.messages')
           <div class="form-group">
              <label for="course_name">Course Name</label>
              <input type="text" class="form-control" name="course_name" id="course_name" value=" {{ $course->course_name }} ">
           </div>
           <div class="form-group">
              <label for="course_id">Course ID</label>
              <input type="text" class="form-control" name="course_id" id="course_id" value=" {{ $course->course_id }} ">
           </div>
           <div class="form-group">
              <label for="credit">Credit</label>
              <input type="text" class="form-control" name="credit" id="credit" value=" {{ $course->credit }} ">
           </div>
           <div class="form-group">
              <label for="trimester">Trimester</label>
              <input type="text" class="form-control" name="trimester" id="trimester" value=" {{ $course->trimester }} ">
           </div>
              <button type="submit" class="btn btn-success">Update Course</button>
        </form>
      </div>
    </div>
   </div>    
  </div>     
</div>
@endsection
