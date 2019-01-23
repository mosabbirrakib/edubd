@extends('backend.layouts.master')
@section('content')
<div class="container">
  <div class="row justify-content-center">
   <div class="col-md-10">
    <div class="card">
      <div class="card-header">
        <h3>Add Faculty</h3>
      </div>
      <div class="card-body">
        <form action="{{ route('faculty.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          @include('backend.partials.messages')
           <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
           </div>
           <div class="form-group">
              <label for="login_id">Faculty ID</label>
              <input type="text" class="form-control" name="login_id" id="login_id" placeholder="Enter Login ID">
           </div>
           <div class="form-group">
              <label for="email">Faculty Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
           </div>
           <div class="form-group">
              <label for="department">Faculty Department</label>
              <input type="text" class="form-control" name="department" id="department" placeholder="Enter Department">
           </div>
           <div class="form-group">
              <label for="admin">Faculty Role</label>
              <input type="text" class="form-control" name="admin" id="admin" placeholder="Enter Role">
           </div>
           <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
           </div>          
              <button type="submit" class="btn btn-primary">Add Faculty</button>
        </form>
      </div>
    </div>
   </div>    
  </div>     
</div>
@endsection
