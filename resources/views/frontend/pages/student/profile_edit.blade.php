@extends('frontend.layouts.master')
@section('content')
<div class="container mt-2">
  <div class="row justify-content-center">
   <div class="col-md-10">
    <div class="card">
      <div class="card-header">
        <h3>Update Student Profile</h3>
      </div>
      <div class="card-body">
        <form action="{{ route('profile_update') }}" id="{{ $user->id }}" method="POST" enctype="multipart/form-data">
          @csrf
          @include('backend.partials.messages')
           <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" id="name" 
               @if($user->admin == 0)
                 value=" {{ $user->name }} "
                @endif >
           </div>
           <div class="form-group">
              <label for="login_id">Student ID</label>
              <input type="text" class="form-control" name="login_id" id="login_id" @if ($user->admin == 0)
                          value="{{ $user->login_id }}"
                        @endif >
           </div>
           <div class="form-group">
              <label for="email">Student Email</label>
              <input type="text" class="form-control" name="email" id="email" 
                @if ($user->admin == 0)
                  value=" {{ $user->email }} "
                @endif >
           </div>
           <div class="form-group">
              <label for="department">Student Department</label>
              <input type="text" class="form-control" name="department" id="department" @if ($user->admin == 0)
                            value=" {{ $user->department }} "
                          @endif >
           </div>
           <div class="form-group">
              <label for="batch">Batch</label>
              <input type="text" class="form-control" name="batch" id="batch" @if ($user->admin == 0)
                            value=" {{ $user->batch }} "
                          @endif >
           </div>
           <div class="form-group">
              <label for="password">Password</label>
              <input type="text" class="form-control" name="password" id="password" placeholder="Enter New Password">
           </div>
              <button type="submit" class="btn btn-success">Update Profile</button>
        </form>
      </div>
    </div>
   </div>    
  </div>     
</div>
@endsection
