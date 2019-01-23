@extends('backend.layouts.master')
@section('content')
<div class="container">
  <div class="row justify-content-center">
   <div class="col-md-10">
    <div class="card">
      <div class="card-header">
        <h3>Add Student</h3>
      </div>
      <div class="card-body">
        <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          @include('backend.partials.messages')
           <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
           </div>
           <div class="form-group">
              <label for="login_id">Student ID</label>
              <input type="text" class="form-control" name="login_id" id="login_id" placeholder="Enter Login ID">
           </div>
           <div class="form-group">
              <label for="email">Student Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
           </div>
           <div class="form-group">
              <label for="department">Student Department</label>
              <input type="text" class="form-control" name="department" id="department" placeholder="Enter Department">
           </div>
           <div class="form-group">
              <label for="batch">Batch</label>
              <input type="text" class="form-control" name="batch" id="batch" placeholder="Enter Batch">
           </div>
           <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
           </div>          
              <button type="submit" class="btn btn-primary">Add Student</button>
        </form>
      </div>
    </div>
   </div>    
  </div>     
</div>
@endsection
