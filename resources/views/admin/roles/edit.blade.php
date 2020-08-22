@extends('admin.adminlayouts.master')

@section('title', '| Edit Role')

@section('content')

<div class="d-flex justify-content-center">
<div class='col-lg-10 col-lg-offset-4 '>
    <h1 class="text-center text-info"><i class='fa fa-key'></i> Edit Role: {{$role->name}}</h1>
    <hr>

    {{ Form::model($role, array('route' => array('roles.update', $role->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('name', 'Role Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <h5><b>Assign Permissions</b></h5>
    @foreach ($permissions as $permission)

        {{Form::checkbox('permissions[]',  $permission->id, $role->permissions ) }}
        {{Form::label($permission->name, ucfirst($permission->name)) }}<br>

    @endforeach
    <br>
    <div class="text-center">
    {{ Form::submit('Edit', array('class' => 'btn btn-outline-primary col-md-4')) }}

    {{ Form::close() }}
    </div>    
</div>
</div>
@endsection