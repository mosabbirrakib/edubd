@extends('frontend.pages.registration.layouts.master')
@section('content')
<div class="container">
	<div class="card">
		<div class="card-body">
			<h3 style="letter-spacing: 2px; word-spacing: 3px;">Student Course History</h3>
				@foreach($s_info as $info)
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-3">
							<div class="top-line"></div>
							<table>
								<th>
									Student ID: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								</th>
								<td>
									<input type="text" readonly="readonly" value=" {{$info->login_id}}">
								</td>
							</table>
						</div>
						<div class="col-md-9">
							<div class="top-line1"></div>
							<table>
								<th>
									Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
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
							<div class="top-line2"></div>
							<table>
								@foreach($results as $result)
								<th>
									CGPA: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								</th>
								<td>
									{{$result->cgpa}}   
								</td>
								@endforeach
							</table>
						</div>
						<div class="col-md-9">
							<div class="top-line3"></div>
							<table>
								@foreach($degrees as $degree)
								<th>
									Degree Required: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								</th>
								<td>
									{{$degree->degree_requird}}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   
								</td>
								&nbsp
								   <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								 		Complete Credit(s): 
							       </th>
								<td>
									{{$degree->complete_credits}}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								</td>
								<th>&nbsp&nbsp
									Attended Credit(s): 
								</th>
								<td>
									{{$degree->attended_credits}}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
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
							<legend>Trimester wise GPA and CGPA</legend>
							<div class="row">
								<table class="gpa-table">
									<tr>
										<th class="gpa-th-td bg-color">Trimester</th>
										<th class="gpa-th-td bg-color">Credit</th>
										<th class="gpa-th-td bg-color">Term GPA</th>
										<th class="gpa-th-td bg-color">CGPA</th>
									</tr>
									@foreach($results as $result)
									<tr>
										<td class="gpa-th-td">{{$result->trimester}}</td>
										<td class="gpa-th-td">{{$result->credit}}</td>
										<td class="gpa-th-td">{{$result->gpa}}</td>
										<td class="gpa-th-td">{{$result->cgpa}}</td>
									</tr>
									@endforeach
								</table>
							</div>
						</fieldset>
					</div>
				</div>
			</div>
            <br><br>
			<div class="container">
				<div class="card">
					<div class="card-body">
						<fieldset>
							<legend>Result of Completed Courses</legend>
							<div class="row">
								<table class="gpa-table">
									<tr>
										<th class="gpa-th-td bg-color">Trimester</th>
										<th class="gpa-th-td bg-color">Course ID</th>
										<th class="gpa-th-td bg-color">Course Name</th>
										<th class="gpa-th-td bg-color">Credit</th>
										<th class="gpa-th-td bg-color">Grade</th>
										<th class="gpa-th-td bg-color">Point</th>
										<th class="gpa-th-td bg-color">Course Status</th>
									</tr>
									@foreach($results as $result)
									<tr>
										<td class="gpa-th-td">{{$result->trimester}}</td>
										<td class="gpa-th-td">{{$result->course_id}}</td>
										<td class="gpa-th-td">{{$result->course_name}}</td>
										<td class="gpa-th-td">{{$result->credit}}</td>
										<td class="gpa-th-td">{{$result->grade}}</td>
										<td class="gpa-th-td">{{$result->point}}</td>
										<td class="gpa-th-td">{{$result->course_status}}</td>
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
