@extends('users.userslayouts.master')
@section('content')
<div class="container d-flex justify-content-center">
  <!--table to showcase leave data-->
  <div class="card col-md-12">
    <div class="card-body">
      <h1 class="bg-warning text-center">
      <i class="fab fa-leanpub"></i> My <small>Leaves</small>
      <a href="requestleave" class="btn btn-danger float-right m-1">Request Leave</a>
      </h1>
      <table class="table table-hover table-bordered">
        <thead class="thead-dark">
         
          <tr>
            <th scope="col">Leave Id</th>
            <th scope="col">Reason</th>
            <th scope="col">Status</th>
            <th scope="col">From</th>
            <th scope="col">To</th>
          </tr>
          
        </thead>
        <tbody>
           @foreach($leaves as $leave)
          <tr>
            <td>{{$leave->leave_id}}</td>
            <td>{{$leave->reason}}</td>
             <td>{{$leave->status}}</td>
              <td>{{$leave->from}}</td>
               <td>{{$leave->to}}</td> 
          </tr>
          @endforeach
          
        </tbody>
      </table>
    </div>
  </div>
</div>

@stop