
@extends('layouts.main')
@section('content')               
    <section id="signin-form">
        <h1>Sign In</h1>
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                <div class="col-md-6">
                    <img src="img/email.gif" alt="Email Address">
                    <input id="email" type="email" class="form-control" name="email" placeholder="Email Address">
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
                    <img src="img/password.gif" alt="Password">
                    <input id="password" type="password" class="form-control" name="password" placeholder="*********" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8 col-md-offset-4">
                    <button type="submit" class="secondary-cart-btn">
                        SIGN IN
                    </button>
                    <!-- <a class="btn btn-link" href="{{ route('password.request') }}"> 
                             Forgot Your Password? 
                            </a> -->
                </div>
            </div>
        </form>
    </section><!-- end signin-form -->

    <section id="signup">
    <h2>I'm a new customer</h2>
    <h3>You can create an account in just a few simple steps.<br>
        Click below to begin.</h3>
    <a href="{{ route('register') }}" class="default-btn">CREATE NEW ACCOUNT</a>
    </section><!--- end signup -->
@endsection
