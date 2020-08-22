@extends('users.userslayouts.master')
@section('content')

<div class="auth-wrapper">
    <div class="auth-content">
        <div class="auth-bg">
            <span class="r"></span>
            <span class="r s"></span>
            <span class="r s"></span>
            <span class="r"></span>
        </div>
        <div class="card">
            <div class="card-body text-center">
            	<form method="POST" action="{{action('SettingsController@update',Auth::user()->id)}}" enctype="multipart/form-data">
                    @csrf
                                  <input type="hidden" name="_method" value="PATCH">
                <div class="mb-4">
                    <label for="image" class=""><img src="{{ Auth::user()->image  }}" alt="{{ Auth::user()->name  }}'s image" class="rounded-circle" height="100px" width="100px" for="image"></label>
                </div>
                <input type="hidden" name="id" value="{{ Auth::user()->id}}">
                <h3 class="mb-4">Settings</h3>
                
                    <div class="input-group mb-3">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name}}" required autocomplete="name" autofocus placeholder="User Name">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                    </div>
                    <div class="input-group mb-3">
                         <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email  }}" required autocomplete="email" placeholder="Email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                    </div>
                    <div class="input-group mb-4">
                         <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                    </div>
                    <div class="input-group mb-5">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                    </div>
                      <div class="input-group mb-5" hidden="">
                            <input id="image" type="file" class="form-control" name="image" value="{{ Auth::user()->image}}">
                    </div>
                    
                    <button class="btn btn-primary shadow-2 mb-4" type="submit">Save</button>
                    
                </form>
            </div>
        </div>
    </div>
</div>












@stop