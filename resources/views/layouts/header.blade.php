
<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="user-menu">
                    <ul>
                        <li><a href="#"><i class="fa fa-user"></i> My Account</a></li>
                        <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>
                        <li><a href="cart.html"><i class="fa fa-user"></i> My Cart</a></li>
                        <li><a href="checkout.html"><i class="fa fa-user"></i> Checkout</a></li>
                        @if(!Auth::check())
                        <li><a type="button" class="btn btn-default btn-lg" id="myBtn"><i class="fa fa-user"></i> Login</a></li>
                        @else
                            <li><a type="button" href="{{url('logout')}}" style="text-decoration: none" class="btn btn-default  btn-lg" > <i class="fa fa-user">Logout</i></a></li>
                        @endif
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="header-right">
                    <ul class="list-unstyled list-inline">
                        <li class="dropdown dropdown-small">
                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">currency :</span><span class="value">USD </span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">USD</a></li>
                                <li><a href="#">INR</a></li>
                                <li><a href="#">GBP</a></li>
                            </ul>
                        </li>

                        <li class="dropdown dropdown-small">
                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">English</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">German</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End header area -->

<div class="container">


    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog ">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>Sign In / Register</h4>
                </div>
                <div class="modal-body" style="padding:60px 60px;">
                    <form role="form" action="{{ route('login') }}" method="post">
                        {{ csrf_field() }}

                        @if ($errors->has('error_login'))
                            <span style="color:red; background-color: #ffc0dc;font-size:16px;padding-right:10px;" class="help-block">
                                     {{ $errors->first('error_login') }}
                            </span>
                        @endif

                        <div class="form-group">
                            <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('login_email') ? ' is-invalid' : '' }}" name="login_email" value="{{ old('login_email') }}" placeholder="Enter email">
                            @if ($errors->has('login_email'))

                                <span class="invalid-feedback" style="color: red" role="alert">
                                   {{ $errors->first('login_email') }}
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('login_password') ? ' is-invalid' : '' }}" name="login_password"  placeholder="Enter password">
                            @if ($errors->has('login_password'))

                                <span class="invalid-feedback" style="color:red;" role="alert">
                                   {{ $errors->first('login_password') }}
                                </span>
                            @endif
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="remember" value="" checked>Remember me</label>
                        </div>
                        <button type="submit" id="login" class="btn btn-success btn-block " value="Login"><span class="glyphicon glyphicon-off"></span> Login</button>
                    </form>
                </div>
                <div class="modal-footer ">
                     <div class="row">
                        <div class="col-sm-6">
                            <p style="text-align: left">Not a member?<button type="submit" class="btn btn-danger btn-default  " style=" background-color: #ff8079;text-align: right" ><a href="{{route("register")}}" style="color: white;text-decoration: none">Sign Up</a></button></p>
                        </div>
                        <div class="col-sm-6">
                             <p style="text-align:right">Forgot <a  class=" "  id="forgbtn" >Password?</a></p>
                        </div>
                     </div>
                </div>
            </div>

        </div>
    </div>
</div>


{{--/*forget pas modal*/--}}



<div class="container">


    <!-- Modal -->
    <div class="modal fade" id="forget" role="dialog">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>Sign In / Register</h4>
                </div>
                <div class="modal-body" style="padding:60px 60px;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form role="form" action="{{ route('password.email')}}" method="post">
                    {{ csrf_field() }}


                            <div class="form-group">
                            <label for="usrname"><span class="glyphicon glyphicon-user"></span> Email</label>
                            <input  type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('sendmail') }}" placeholder="Enter email">

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" style="color: red" role="alert">
                                   {{ $errors->first('email') }}
                                </span>
                            @endif
                        </div>
                        <button type="submit" id="subfor"  class="btn btn-success btn-block" ><span class="glyphicon glyphicon-off"></span>submit</button>
                    </form>
                </div>
        </div>
    </div>
  </div>
</div>
<script>

    $(document).ready(function(){
        $("#myBtn").click(function(){
            $("#myModal").modal();


        });

        $("#forgbtn").click(function(){
            $("#forget").modal();
            $("#myModal").modal("hide");

        });
    });
   @if($errors->has('email')||session('status'))
   $(document).ready(function () {
       $("#forget").modal("show");
      $("#myModal").modal("hide");


   });
   @endif
   @if($errors->has('login_email')|| $errors->has('login_password')||$errors->has('error_login') )

       $(document).ready(function () {
          // $("#forget").modal();
           $("#myModal").modal("show");


       });


   @elseif(count($errors)>0 )

        $(document).ready(function(){
            $("#myModal").modal();
            $("forget").modal('hide');
        });

   @endif




</script>
