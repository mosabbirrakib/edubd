@extends('backend.layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h3>Student Information</h3>
                    <table class="table table-hover table-striped" id="dataTable">
                        <div class="row">
                            <div class="col-md-12">
                                <thead>
                                    <tr>
                                    <th>Serial No</th>
                                    <th>ID No</th>
                                    <th>Name</th>
                                    <th>Role</th>
                                </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($users as $user)
                                    @if ($user->admin == 0)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $user->login_id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>
                                            @if ($user->admin == 0)
                                                Student
                                            @endif
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                    <th>Serial No</th>
                                    <th>ID No</th>
                                    <th>Name</th>
                                    <th>Role</th>
                                </tr>
                                </tfoot>
                            </div>
                        </div>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection