@extends('frontend.pages.registration.layouts.master')
@section('content')
<div class="container">
	<div class="card">
		<div class="card-body">
			<h3 style="letter-spacing: 2px; word-spacing: 3px;">Pre Advising New</h3>
			<div class="rtop-line"></div>
				@foreach($s_info as $info)
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-3">
							<table>
								<th>Student ID: &nbsp&nbsp&nbsp</th>
								<td>
									<input type="text" readonly="readonly" value=" {{$info->login_id}}">
								</td>
							</table>
						</div>
						<div class="col-md-9">
							<table>
								<th>
									Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								</th>
								<td>
									{{$info->name}}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   
								</td>
								&nbsp
								<th>Batch: </th>
								<td>
									{{$info->batch}}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								</td>
								<th>Program: </th>
								<td>
									BS{{$info->department}}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								</td>
							</table>
						</div>
						&nbsp
						<div class="col-md-9">
							<table>
								@foreach($results as $result)
								<th>
									CGPA: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								</th>
								<td>
									{{$result->cgpa}}   
								</td>
								@endforeach
							</table>
						</div>
						&nbsp
						<div class="col-md-9">
							<table>
								@foreach($results as $result)
								<th>
									Probation: &nbsp&nbsp&nbsp&nbsp&nbsp
								</th>
								<td>
									{{$result->probation}}
								</td>
								@endforeach
							</table>
						</div>
					</div>
				</div>
				@endforeach
			<div class="mid-line"></div>
			<div class="container">
				<div class="card">
					<div class="card-body">
						<fieldset>
							<legend>Pre Advising New</legend>
							<div class="row">
								<table class="gpa-table">
									<tr>
										<th class="gpa-th-td bg-color">Trimester</th>
										<th class="gpa-th-td bg-color">Course ID</th>
										<th class="gpa-th-td bg-color">Course Title</th>
										<th class="gpa-th-td bg-color">Credit</th>
										<th class="gpa-th-td bg-color">Action</th>
									</tr>
									@foreach($registrations as $registration)
									<tr>
										<td class="gpa-th-td">{{$registration->trimester}}</td>
										<td class="gpa-th-td">{{$registration->course_id}}</td>
										<td class="gpa-th-td">{{$registration->course_name}}</td>
										<td class="gpa-th-td">{{$registration->credit}}</td>
										<td class="gpa-th-td">
											<a href="{{route('section_selection',$registration->registration_id)}}">Take</a>
										</td>
									</tr>
									@endforeach
								</table>
							</div>
						</fieldset>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection