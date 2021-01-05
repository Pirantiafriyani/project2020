@extends('layouts/login')
@section('content_login')

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="username" class="placeholder"><b>Username</b></label>
                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div>
            <div class="form-group">
                <label for="password" class="placeholder"><b>Password</b></label>
                <a href="#" class="link float-right">Forget Password ?</a>
                <div class="position-relative">
                    <input id="password" class="form-control" type="password" name="password" required
                        autocomplete="current-password" />
                    <div class="show-password">
                        <i class="icon-eye"></i>
                    </div>
                </div>
            </div>
            <div class="form-group form-action-d-flex mb-3">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="remember" class="custom-control-input" id="remember_me">
                    <label class="custom-control-label m-0" for="rememberme">{{ __('Remember me') }}</label>
                </div>
                <a href="{{ route('loket.index') }}" class="btn btn-secondary col-md-5 float-right mt-3 mt-sm-0 fw-bold">Sign In</a>
            </div>
            
        </form>


@endsection