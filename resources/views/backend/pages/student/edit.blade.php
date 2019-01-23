@extends('backend.layouts.master')
@section('content')
<div class="container">
  <div class="row justify-content-center">
   <div class="col-md-10">
    <div class="card">
      <div class="card-header">
        <h3>Edit Student</h3>
      </div>
      <div class="card-body">
        <form action="{{ route('students.update',$student->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @include('backend.partials.messages')
           <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" id="name" 
               @if($student->admin == 0)
                 value=" {{ $student->name }} "
                @endif >
           </div>
           <div class="form-group">
              <label for="login_id">Student ID</label>
              <input type="text" class="form-control" name="login_id" id="login_id" @if ($student->admin == 0)
                          value="{{ $student->login_id }}"
                        @endif >
           </div>
           <div class="form-group">
              <label for="email">Student Email</label>
              <input type="text" class="form-control" name="email" id="email" 
                @if ($student->admin == 0)
                  value=" {{ $student->email }} "
                @endif >
           </div>
           <div class="form-group">
              <label for="department">Student Department</label>
              <input type="text" class="form-control" name="department" id="department" @if ($student->admin == 0)
                            value=" {{ $student->department }} "
                          @endif >
           </div>
           <div class="form-group">
              <label for="batch">Batch</label>
              <input type="text" class="form-control" name="batch" id="batch" @if ($student->admin == 0)
                            value=" {{ $student->batch }} "
                          @endif >
           </div>
           <div class="form-group">
              <label for="password">Password</label>
              <input type="text" class="form-control" name="password" id="password" placeholder="Enter New Password">
           </div>
              <button type="submit" class="btn btn-success">Update Student</button>
        </form>
      </div>
    </div>
   </div>    
  </div>     
</div>
@endsection
