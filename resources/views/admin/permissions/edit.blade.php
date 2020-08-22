@extends('admin.adminlayouts.master')

@section('title', '| Edit Permission')

@section('content')

<div class="d-flex justify-content-center">
<div class='col-lg-10 col-lg-offset-4'>

    <h1 class="text-center text-info"><i class='fa fa-key'></i> Edit {{$permission->name}}</h1>
    <br>
    {{ Form::model($permission, array('route' => array('permissions.update', $permission->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with permission data --}}

    <div class="form-group">
        {{ Form::label('name', 'Permission Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>
    <br>
    <div class="text-center">
    {{ Form::submit('Edit', array('class' => 'btn btn-outline-primary col-md-4')) }}

    {{ Form::close() }}
</div>
</div>
</div>

@endsection