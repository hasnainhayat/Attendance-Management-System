{{-- \resources\views\permissions\index.blade.php --}}
@extends('admin.adminlayouts.master')
@section('title', '| Permissions')
@section('content')


<div class="table-responsive">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h1 class="text-info"><i class="fa fa-key"></i>Available Permissions
                <section class="float-right">
                    <a href="{{ route('roles.index') }}" class="btn btn-outline-success pull-right">Roles</a>
                    <a href="{{ route('permissions.create') }}" class="btn btn-outline-secondary pull-right">Add Permission</a>
                    <a href="{{ route('users.index') }}" class="btn btn-outline-primary">Users</a>
                </section>
                </h1>
                <hr>
            </div>
            <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table table-hover">
                         <thead>
                <tr>
                    <th>Permissions</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                <tr>
                    <td>{{ $permission->name }}</td>
                    <td class="table-form">
                        <a href="{{ URL::to('permissions/'.$permission->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Hover-table ] start -->
    
    <!-- [ Hover-table ] end -->
    
    @endsection