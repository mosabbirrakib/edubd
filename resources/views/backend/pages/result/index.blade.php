@extends('backend.layouts.master')
@section('content')
<div class="container">
  <div class="row justify-content-center">
   <div class="col-md-12"> 
    <div class="card">
      <div class="card-header">
        <h3>Manage Result</h3>
      </div>
      <div class="card-body">
        @include('backend.partials.messages')
        <table class="table table-hover table-striped" id="dataTable">
          <thead>
            <tr>
            <th>Serial No</th>
            <th>Student ID</th>
            <th>Trimester</th>
            <th>Course ID</th>
            <th>Course Name</th>
            <th>Credit</th>
            <th>Grade</th>
            <th>Point</th>
            <th>Course Status</th>
            <th>GPA</th>
            <th>Probation</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
            @foreach($results as $result)
            <tr>
              <td>{{ $loop->index+1 }}</td>
              <td>
                  {{ $result->login_id }}
              </td>
              <td>
                  {{ $result->trimester }}
              </td>
              <td>
                  {{ $result->course_id }}
              </td>
              <td>
                  {{ $result->course_name }}
              </td>
              <td>
                  {{ $result->credit }}
              </td>
              <td>
                  {{ $result->grade }}
              </td>
              <td>
                  {{ $result->point }}
              </td>
              <td>
                  {{ $result->course_status }}
              </td>
              <td>
                  {{ $result->gpa }}
              </td>
              <td>
                  {{ $result->probation }}
              </td>              
              <td><a href="{{ route('result.edit', $result->result_id) }}" class="btn btn-success">Edit</a>
              <a href="#deleteModal{{ $result->result_id }}" data-toggle="modal" class="btn btn-danger">Delete</a>

              <!--Delete Modal -->
              <div class="modal fade" id="deleteModal{{ $result->result_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Are You Sure Want To Delete ?</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="{{ route('result.delete', $result-> result_id) }}" method="post">
                        @csrf
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
            <th>Student ID</th>
            <th>Trimester</th>
            <th>Course ID</th>
            <th>Course Name</th>
            <th>Credit</th>
            <th>Grade</th>
            <th>Point</th>
            <th>Course Status</th>
            <th>GPA</th>
            <th>Probation</th>
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
