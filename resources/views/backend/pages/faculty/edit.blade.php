@extends('backend.layouts.master')
@section('content')
<div class="container">
  <div class="row justify-content-center">
   <div class="col-md-10">
    <div class="card">
      <div class="card-header">
        <h3>Edit Faculty</h3>
      </div>
      <div class="card-body">
        <form action="{{ route('faculty.update',$faculty->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @include('backend.partials.messages')
           <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" id="name" 
               @if($faculty->admin == 1)
                 value=" {{ $faculty->name }} "
                @endif >
           </div>
           <div class="form-group">
              <label for="login_id">faculty ID</label>
              <input type="text" class="form-control" name="login_id" id="login_id" @if ($faculty->admin == 1)
                          value="{{ $faculty->login_id }}"
                        @endif >
           </div>
           <div class="form-group">
              <label for="email">Faculty Email</label>
              <input type="text" class="form-control" name="email" id="email" 
                @if ($faculty->admin == 1)
                  value=" {{ $faculty->email }} "
                @endif >
           </div>
           <div class="form-group">
              <label for="department">Faculty Department</label>
              <input type="text" class="form-control" name="department" id="department" @if ($faculty->admin == 1)
                            value=" {{ $faculty->department }} "
                          @endif >
           </div>
           <div class="form-group">
              <label for="department">Faculty Role</label>
              <input type="text" class="form-control" name="admin" id="admin" @if ($faculty->admin == 1)
                            value=" {{ $faculty->admin }} "
                          @endif >
           </div>
           <div class="form-group">
              <label for="password">Password</label>
              <input type="text" class="form-control" name="password" id="password" placeholder="Enter New Password">
           </div>
              <button type="submit" class="btn btn-success">Update Faculty</button>
        </form>
      </div>
    </div>
   </div>    
  </div>     
</div>
@endsection
