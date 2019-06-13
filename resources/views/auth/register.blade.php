@extends('template')
@section('content')
  <style>
   body{
    color: #999;
    background: #e2e2e2;
    font-family: 'Roboto', sans-serif;
    }
  </style>
<div class="row">

    <div class="col-sm-6">
    <div class="signup-form" style="margin-left: 80px; ">
        <form action="{{ url('register') }}" method="post" name="register">
            {{csrf_field()}}
            <div class="form-header">
                <h2>Sign Up</h2>
            </div>

            <div class="form-group">
                <label>Username</label>
                <input type="text"  value="{{ old('name') }}" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="name">
                @if ($errors->has('name'))
                    <span style="color:red; background-color: #ffc0dc" class="invalid-feedback" role="alert">
                         {{ $errors->first('name') }}
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <span style="color:red ;background-color: #ffc0dc" class="invalid-feedback" role="alert">
                        {{ $errors->first('email') }}
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password">
                @if ($errors->has('password'))
                    <span style="color:red ;background-color: #ffc0dc" class="invalid-feedback" role="alert">
                        {{ $errors->first('password') }}
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" id="password-confirm"  autocomplete="new-password"  >
                @if ($errors->has('password_confirmation'))
                    <span style="color:red ;background-color: #ffc0dc"class="invalid-feedback" role="alert">
                        {{ $errors->first('password_confirmation') }}
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
            </div>
        </form>

        <div class="text-center small">Already have an account? <a href="#">Login here</a></div>
    </div>
  </div>
    <div class="col-sm-6">
        <img src="/img/reg.jpg"style=" position: relative;margin-top: 20px;border-top-left-radius:20px;
    border-top-right-radius:20px;">
    </div>
</div>
<script>
     @if(count($errors) >0 &&  !Auth::check())
    $(document).ready(function(){
        $("#myModal").modal("hide");

    });

    @endif
</script>
@stop