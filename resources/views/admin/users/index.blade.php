{{-- \resources\views\users\index.blade.php --}}
@extends('admin.adminlayouts.master')
@section('title', '| Users')
@section('content')

<div class="table-responsive">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h1><i class="fa fa-users"></i> User Administration
                <section class="float-right">
                    <a href="{{ route('roles.index') }}" class="btn btn-outline-success pull-right">Roles</a>
                    <a href="{{ route('permissions.index') }}" class="btn btn-outline-secondary pull-right">Permissions</a>
                    <a href="{{ route('users.create') }}" class="btn btn-outline-primary">Add User</a>
                </section>
                </h1>
                <hr>
               
            </div>
            <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Date/Time Added</th>
                                <th>User Roles</th>
                                <th>Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                                <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                                <td class="table-form">
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">Edit</a>
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
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