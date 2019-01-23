@extends('backend.layouts.master')
@section('content')
<div class="container">
  <div class="row justify-content-center">
   <div class="col-md-11"> 
    <div class="card">
      <div class="card-header">
        <h3>Manage Section</h3>
      </div>
      <div class="card-body">
        @include('backend.partials.messages')
        <table class="table table-hover table-striped" id="dataTable">
          <thead>
            <tr>
            <th>Serial No</th>
            <th>Section</th>
            <th>Capacity</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
            @foreach($sections as $section)
            <tr>
              <td>{{ $loop->index+1 }}</td>
              <td>
                  {{ $section->section }}
              </td>
              <td>
                  {{ $section->capacity }}
              </td>              
              <td><a href="{{ route('section.edit', $section->section_id) }}" class="btn btn-success">Edit</a>
              <a href="#deleteModal{{ $section->section_id }}" data-toggle="modal" class="btn btn-danger">Delete</a>

              <!--Delete Modal -->
              <div class="modal fade" id="deleteModal{{ $section->section_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Are You Sure Want To Delete ?</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="{{ route('section.delete', $section->section_id) }}" method="post">
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
            <th>Section</th>
            <th>Capacity</th>
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
