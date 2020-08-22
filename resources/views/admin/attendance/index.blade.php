@extends('admin.adminlayouts.master')
@section('title', '| Users')
@section('content')
<div class="table-responsive">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h1><i class="fa fa-users"></i> Manage Attendance
                <section class="float-right">
                     <a href="{{ route('manageleaves.index') }}" class="btn btn-outline-success pull-right">Leaves</a>
                    <a href="{{ route('manageattendance.index') }}" class="btn btn-outline-secondary pull-right">Attendance</a>
                    <a href="{{ route('users.create') }}" class="btn btn-outline-primary">Add User</a>
                </section>
                </h1>
                
            </div>
            <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Student Id</th>
                                <th>Date</th>
                                <th>Satus</th>
                                <th>Actions</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($attendance as $at)
                            <tr>
                                <td>{{$at->name}}</td>
                                <td>{{date('d-m-Y',strtotime($at->created_at))}}</td>
                                <td>{{$at->status}}</td>
                                <form method="post" action="{{action('ManageAttendanceController@update',$at->attendance_id)}}">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                                <td><button type="submit" name="update" class="btn btn-danger rounded-pill" value="absent">Mark Absent</button>
                                    <button type="submit" name="update" class="btn btn-info " value="present">Mark Present</button>
                                    <button type="submit" name="update" class="btn btn-warning " value="leave">Mark Leave</button>
                                </td>
                            </form>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Hover-table ] start-->
    
    <!-- [ Hover-table ] end -->
    
    @endsection