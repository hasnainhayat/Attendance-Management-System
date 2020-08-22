@extends('users.userslayouts.master')
@section('content')
<div class="container d-flex justify-content-center  mt-2">
	<div class="card">
		<div class="card-body">
			<h1 class="bg-warning text-center">
			<i class="fas fa-info-circle"></i> Your <small>Info</small>
			</h1>
			<table class="table">
				<tbody>
					<tr>
						<td rowspan="2"><img src="{{ Auth::user()->image }}" width="150px" height="150px" class="rounded-circle"></td>
						<th>Student Id </th>
						<td>{{ Auth::user()->id }}</td>
						<th>Name</th>
						<td>{{ Auth::user()->name }}</td>
					</tr>
					<tr>
						<th>Email</th>
						<td>{{ Auth::user()->email }}</td>
						<th>Joining Date</th>
						<td>{{ Auth::user()->created_at }}</td>
					</tr>
					<tr>
						<td colspan="4" class="text-center" colspan="2">
							<form method="post" action="{{route('index.store')}}">
								@csrf
								<select name="student_id" hidden="">
									<option>{{ Auth::user()->id }}</option>
								</select>
								<button  type="submit" class="btn btn-success " name="status" value="present">Mark Attendance</button>
								<a href="requestleave" class="btn btn-warning">Request Leave</a>
								<a href="myattendance" class="btn btn-dark">view Attendance</a>
							</form>
						</td>
					</tbody>
				</table>
				
				@if($message=Session::get('success'))
				<div class="alert alert-success alert-dismissible fade show" role="alert">
   <p>{{$message}}</p>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
					
				
				@endif

					@if($message=Session::get('found'))
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
   <p>{{$message}}</p>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
					
				
				@endif

			</div>
		</div>
	</div>
	@stop