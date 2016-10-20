@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/logindb">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn  fa-sign-in"></i> Login
                                </button>
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                        <br><br> <div class="col-md-50 col-md-offset-1 ">

                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="col-md-6">
                    </div>

</div>
                    <form action="{{route('googleSignin')}}" method="get">
                        <input type="hidden" name="number" value="1" />
                        <button type="submit" class="btn btn-primary" style="font-size: 14px">
                            <i class="fa fa-btn fa-sign-in"></i> Login using Google
                        </button>
                    </form>
    <br>
                    <form action="{{route('facebookSignin')}}" method="get">
                      <input type="hidden" name="number" value="2" />
                      <button type="submit" class="btn btn-warning" style="font-size: 13px">
                      <i class="fa fa-btn fa-sign-in"></i> Login using Facebook
                       </button>
                   </form>



<br>

                    <form action="{{route('twitterSignin')}}" method="get">
                        <input type="hidden" name="number" value="3" />
                        <button type="submit" class="btn btn-info" style="font-size: 14px">
                            <i class="fa fa-btn fa-sign-in"></i> Login using Twitter
                        </button>
                    </form>
<br>




                    <form action="{{route('linkedinSignin')}}" method="get">
                        <input type="hidden" name="number" value="4" />
                        <button type="submit" class="btn btn-success" style="font-size: 15px">
                            <i class="fa fa-btn fa-sign-in"></i> Login using Linked
                        </button>
                    </form>
<br>
                    <form action="{{route('githubSignin')}}" method="get">
                        <input type="hidden" name="number" value="5" />
                        <button type="submit" class="btn btn-danger" style="font-size: 15px">
                            <i class="fa fa-btn fa-sign-in"></i> Login using Github
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
