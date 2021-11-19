@extends('dispatcher.layout.auth')

@section('content')
<div>
    <div class="row">
        <div class="col-md-4">
            <div class="box b-a-0" style="top: 132px; box-shadow: none;height: 448px;">
                <div class="p-2 text-xs-center">
                    <h2>Dispatcher Login</h2>
                </div>
                <form class="form-material mb-1" role="form" method="POST" action="{{ url('/dispatcher/login') }}" >
                {{ csrf_field() }}
                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="email" name="email" required="true" class="form-control" id="email" placeholder="Email">
                        @if ($errors->has('email'))
                            <span class="help-block" style="margin-left: 55px;color: red;">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" name="password" required="true" class="form-control" id="password" placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="help-block" style="margin-left: 55px;color: red;">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group mb-0">
                        <input type="checkbox" name="remember"> Remember Me
                    </div>
                    <br>
                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-success btn-block waves-effect waves-light btn-lg">Sign in
                        <i class="ti-arrow-right float-xs-right"></i></button>
                    </div>
                </form>
                <!--<div class="p-2 text-xs-center text-muted">
                    <a class="text-black" href="{{ url('/dispatcher/password/reset') }}"><span class="underline">Forgot Your Password?</span></a>
                </div>-->
            </div>
        </div>
        <div class="col-md-8">
        <img src="{{asset('asset/front_dashboard/img/login.jpg')}}" alt="Dispatcher Panel" style="width: 100%;">
        </div>
        
    </div>
</div>
@endsection
