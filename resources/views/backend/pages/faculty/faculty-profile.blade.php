@extends('frontend.layouts.master')
@section('content')
<div class="container mt-2">
  <div class="row justify-content-center">
   <div class="col-md-11">
    <div class="card">
      <div class="card-header">
        <h3>Update Faculty Profile</h3>
      </div>
      <div class="card-body">
        <form action="{{ route('profile_update') }}" id="{{ $user->id }}" method="POST" enctype="multipart/form-data">
          @csrf
          @include('backend.partials.messages')
           <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" id="name" 
               @if($user->admin == 1)
                 value=" {{ $user->name }} "
                @endif >
           </div>
           <div class="form-group">
              <label for="login_id">Faculty ID</label>
              <input type="text" class="form-control" name="login_id" id="login_id" @if ($user->admin == 1)
                          value="{{ $user->login_id }}"
                        @endif >
           </div>
           <div class="form-group">
              <label for="email">Faculty Email</label>
              <input type="text" class="form-control" name="email" id="email" 
                @if ($user->admin == 1)
                  value=" {{ $user->email }} "
                @endif >
           </div>
           <div class="form-group">
              <label for="department">Faculty Department</label>
              <input type="text" class="form-control" name="department" id="department" @if ($user->admin == 1)
                            value=" {{ $user->department }} "
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
