@extends('users.userslayouts.master')
@section('content')


<div class="container d-flex justify-content-center">
    <!--table to showcase attendance data-->

    <div class="card col-md-12">
      <div class="card-body">
        <h1 class="bg-warning text-center">
          <i class="fab fa-leanpub"></i> My <small>Attendance</small>
        </h1>
        <table class="table table-hover table-bordered">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Date</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach($shows as $show)
              <tr>
                <td>{{$show->created_at}}</td>
                <td>{{$show->status}}</td>
                
              </tr>
              @endforeach

           
          </tbody>
        </table>
       {{Session::get('success')}}
      </div>


    </div>
  </div>

  @stop