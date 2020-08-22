@extends('admin.adminlayouts.master')
@section('title', '| Users')
@section('content')
<div class="table-responsive">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h1><i class="fa fa-users"></i> Manage Leaves
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
                                <th>Student Name</th>
                                <th>Reason</th>
                                <th>Requested on</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Satus</th>
                                <th>Actions</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($leaves as $leave)
                            <tr>
                                <td>{{$leave->name}}</td>
                                <td>{{$leave->reason}}</td>
                                <td>{{date('d-m-Y',strtotime($leave->created_at))}}</td>
                                <td>{{date('d-m-Y',strtotime($leave->from))}}</td>
                                <td>{{date('d-m-Y',strtotime($leave->to))}}</td>
                                <td>{{$leave->status}}</td>
                                <form method="post" action="{{action('ManageLeavesController@update',$leave->leave_id)}}">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                                <td><button type="submit" name="update" class="btn btn-danger" value="declined">Decline</button>
                                    <button type="submit" name="update" class="btn btn-info" value="approved">Approve</button>
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