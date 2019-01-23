@extends('backend.layouts.master')
@section('content')
<div class="container">
  <div class="row justify-content-center">
   <div class="col-md-10">
    <div class="card">
      <div class="card-header">
        <h3>Add Section</h3>
      </div>
      <div class="card-body">
        <form action="{{ route('section.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          @include('backend.partials.messages')
           <div class="form-group">
              <label for="section">Section</label>
              <input type="text" class="form-control" name="section" id="section" placeholder="Enter Section">
           </div>
           <div class="form-group">
              <label for="capacity">Capacity</label>
              <input type="text" class="form-control" name="capacity" id="capacity" placeholder="Enter Capacity">
           </div>         
              <button type="submit" class="btn btn-primary">Add Section</button>
        </form>
      </div>
    </div>
   </div>    
  </div>     
</div>
@endsection
