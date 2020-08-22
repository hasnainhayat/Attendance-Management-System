@extends('admin.adminlayouts.head')
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
                <div class="mb-4">
                    <i class="feather icon-user-plus auth-icon"></i>
                </div>
                <h3 class="mb-4">Sign up</h3>
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="User Name">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                    </div>
                    <div class="input-group mb-3">
                         <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
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
                      <div class="input-group mb-5">
                            <input id="image" type="file" class="form-control" name="image">
                    </div>
                    
                    <button class="btn btn-primary shadow-2 mb-4" type="submit">Sign up</button>
                    <p class="mb-0 text-muted">Allready have an account? <a href="login"> Log in</a></p>
                </form>
            </div>
        </div>
    </div>
</div>



@extends('admin.adminlayouts.footer')