{{-- \resources\views\roles\index.blade.php --}}
@extends('admin.adminlayouts.master')

@section('title', '| Roles')

@section('content')

<div class="table-responsive">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h1 class="text-info"><i class="fa fa-key"></i> Roles
                <section class="float-right">
                    <a href="{{ URL::to('roles/create') }}" class="btn btn-outline-success pull-right">Add Role</a>
                    <a href="{{ route('permissions.index') }}" class="btn btn-outline-secondary pull-right">Permission</a>
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
                    <th>Role</th>
                    <th>Permissions</th>
                    <th>Operation</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($roles as $role)
                <tr>

                    <td>{{ $role->name }}</td>

                    <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}
                    <td class="table-form">
                    <a href="{{ URL::to('roles/'.$role->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                    {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id] ]) !!}
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