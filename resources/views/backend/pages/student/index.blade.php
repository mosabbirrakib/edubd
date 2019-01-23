@extends('backend.layouts.master')
@section('content')
<div class="container">
  <div class="row justify-content-center">
   <div class="col-md-11"> 
    <div class="card">
      <div class="card-header">
        <h3>Manage Student</h3>
      </div>
      <div class="card-body">
        @include('backend.partials.messages')
        <table class="table table-hover table-striped" id="dataTable">
          <thead>
            <tr>
            <th>Serial No</th>
            <th>Student Name</th>
            <th>Student ID</th>
            <th>Student Email</th>
            <th>Student Department</th>
            <th>Batch</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
            @foreach($students as $student)
            <tr>
              <td>{{ $loop->index+1 }}</td>
              <td>
                @if ($student->admin == 0)
                  {{ $student->name }}
                @endif
              </td>
              <td>
                @if ($student->admin == 0)
                  {{ $student->login_id }}
                @endif
              </td>
              <td>
                @if ($student->admin == 0)
                  {{ $student->email }}
                @endif
              </td>
              <td>
                @if ($student->admin == 0)
                  {{ $student->department }}
                @endif
              </td>
              <td>
                @if ($student->admin == 0)
                  {{ $student->batch }}
                @endif
              </td>
              <td><a href="{{ route('students.edit', $student->id) }}" class="btn btn-success">Edit</a>
              <a href="#deleteModal{{ $student->id }}" data-toggle="modal" class="btn btn-danger">Delete</a>

              <!--Delete Modal -->
              <div class="modal fade" id="deleteModal{{ $student->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Are You Sure Want To Delete ?</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="{{ route('students.delete', $student->id) }}" method="post">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger">Permanent Delete</button>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success " data-dismiss="modal">Cancel</button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
            </tr>
          @endforeach
          </tbody>
          <tfoot>
            <tr>
            <th>Serial No</th>
            <th>Student Name</th>
            <th>Student ID</th>
            <th>Student Email</th>
            <th>Student Department</th>
            <th>Batch</th>
            <th>Action</th>
          </tr>
          </tfoot>
        </table>
      </div>
    </div>
   </div>    
  </div>     
</div>
@endsection
