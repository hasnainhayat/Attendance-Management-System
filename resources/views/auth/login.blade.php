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
                        <i class="feather icon-unlock auth-icon"></i>
                    </div>
                    <h3 class="mb-4">Login</h3>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                    <div class="input-group mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="Email">

                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="input-group mb-4">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">

                         @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="form-group text-left">
                        <div class="checkbox checkbox-fill d-inline">
                            <input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-a1" checked="">
                            <label for="checkbox-fill-a1" class="cr"> Remember me</label>
                        </div>
                    </div>
                    <button class="btn btn-primary shadow-2 mb-4">Login</button>
                    @if (Route::has('password.request'))
                    <p class="mb-2 text-muted">Forgot password? <a href="{{ route('password.request') }}">Reset</a></p>
                                @endif
                    
                    <p class="mb-0 text-muted">Don’t have an account? <a href="register">Signup</a></p>
                </form>
                </div>
            </div>
        </div>
    </div>

@extends('admin.adminlayouts.footer')