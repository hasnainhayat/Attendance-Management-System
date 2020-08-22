@extends('admin.adminlayouts.master')
@section('title', '| Users')
@section('content')
<div class="table-responsive">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h1><i class="fa fa-users"></i> System Report
                <section class="float-right">
                    @if(isset($present))
                    <label href="#" class="btn btn-outline-success pull-right p-2">
                        Presents
                        <span class="badge badge-pill badge-light p-2 ">{{$present}}</span>
                        </label>
                        <label href="#" class="btn btn-outline-danger pull-right p2">
                        Absents
                        <span class="badge badge-pill badge-light p-2 ">{{$absents}}</span>
                        </label>
                        <label href="#" class="btn btn-outline-secondary pull-right p2">
                        Leaves
                        <span class="badge badge-pill badge-light p-2 ">{{$leaves}}</span>
                        </label>
                         <label href="#" class="btn btn-outline-secondary pull-right p2">
                        
                        {{$percentage}} %
                        </label>
                    @endif
                </section>
                </h1>
                
            </div>
            <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <form method="post" action="{{route('report')}}">
                                    @csrf
                                    <th class="text-center">
                                        
                                        <label for="example-date-input" class="col-2 col-form-label">From</label>
                                        
                                        <input class="form-control " type="date"  id="example-date-input" name="from" required="">
                                    </th>
                                    <th class="text-center">
                                        
                                        <label for="example-date-input" class="col-2 col-form-label">To</label>
                                        
                                        <input class="form-control" type="date"  id="example-date-input" name="to" required="">
                                    </th>
                                    
                                    <th>
                                        <button class="btn btn-outline-primary" type="submit">Generate Report</button>
                                    </th>
                                    
                                </tr>
                            </form>
                            <tr>
                                <th>Student Name</th>
                                <th>Date</th>
                                <th>Satus</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($attendance))
                            @foreach($attendance as $at)
                            <tr>
                                <td>{{$at->name}}</td>
                                <td>{{date('d-m-Y',strtotime($at->created_at))}}</td>
                                <td>{{$at->status}}</td>
                                
                                
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Hover-table ] start-->
    
    <!-- [ Hover-table ] end -->
    
    @endsection