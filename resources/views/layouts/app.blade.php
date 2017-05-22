<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Organent</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
            padding-top:120px;
        }
        .field-divided{
          width: 35%;
          border-style: solid;
          border-color: rgba(242, 44, 175, 0.91);

        }
        .fa-btn {
            margin-right: 6px;
        }
        hr{
          margin: 0px;
          border-color: #ff9273; /* For browsers that do not support gradients */
          border-color: -webkit-linear-gradient(left,#be0043, #ff9273); /* For Safari 5.1 to 6.0 */
          border-color: -o-linear-gradient(right, #be0043, #ff9273); /* For Opera 11.1 to 12.0 */
          border-color: -moz-linear-gradient(right, #be0043, #ff9273); /* For Firefox 3.6 to 15 */
          border-color: linear-gradient(to right, #be0043, #ff9273); /* Standard syntax (must be last) */
        }
        .bg-1 {
    background: #ff9273; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(#ff9273,#be0043);
    background: -o-linear-gradient(#ff9273,#be0043); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(#ff9273,#be0043); /* For Firefox 3.6 to 15 */
    background: linear-gradient(#ff9273,#be0043); /* Standard syntax */

    color: #ffffff;
}
.bg-2 {
  background: #ff9273; /* For browsers that do not support gradients */
  background: -webkit-linear-gradient(left,#be0043, #ff9273); /* For Safari 5.1 to 6.0 */
  background: -o-linear-gradient(right, #be0043, #ff9273); /* For Opera 11.1 to 12.0 */
  background: -moz-linear-gradient(right, #be0043, #ff9273); /* For Firefox 3.6 to 15 */
  background: linear-gradient(to right, #be0043, #ff9273); /* Standard syntax (must be last) */

  color: #ffffff;
}
.bg-3 {
    background-color: #ffffff; /* White */
    color: #555555;
}

.bg-5{
  background-color: #fccbc0;
}
.bg-6{
background-color:#be0043;

}

.container-fluid {
    padding-top: 10px;
    padding-bottom: 30px;
}
.navbar {
  padding-top: 15px;

    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
    background:#ffffff;
}
.navbar-nav  li a:hover {
    color: #1abc9c !important;

}


table.ex2 {
  border-collapse: separate;
  border-spacing: 50px 50px;
}
.box1{
  padding-top: 15px;
  padding-left: 20px;
}
.box2{

  padding-left: 100px;
}
.box3{
  padding-bottom: 50px;
}
.box4{
  padding-top: 20px;
  padding-right:30px;
}
.grad2{
  border-color: #ff9273; /* For browsers that do not support gradients */
  border-color: -webkit-linear-gradient(left,#be0043, #ff9273); /* For Safari 5.1 to 6.0 */
  border-color: -o-linear-gradient(right, #be0043, #ff9273); /* For Opera 11.1 to 12.0 */
  border-color: -moz-linear-gradient(right, #be0043, #ff9273); /* For Firefox 3.6 to 15 */
  border-color: linear-gradient(to right, #be0043, #ff9273); /* Standard syntax (must be last) */
}
.bordered {
    width: 200px;
    height: 30px;

    border: 1px solid #ff9273;

  }
  .bordered1 {
      width: 1200px;
      height: 100px;

      border: 1px solid #ff9273;


    }
    .bordered2 {
        width: 1200px;
        height: 400px;

        border: 1px solid #ff9273;


      }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default   navbar-fixed-top" >
      <center><img src="{{URL::asset('/img/sym-06.png')}}" alt="profile Pic" height="50" width="50"></center>

      <hr />
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button  type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>

                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="nav navbar-nav" href="{{ url('/') }}" style="color:black; ">
                    <img src="{{URL::asset('/img/symbol-22.png')}}" alt="profile Pic" height="45" width="90">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->


                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}" style="color:#be0043; background-color:#fccbc0; margin-right:2px;" >FOR ORGANIZER</a></li>
                        <li><a href="{{ url('/login') }}" style="color:#be0043; background-color:#fccbc0; margin-right:2px;" >sign in</a></li>
                        <li><a href="{{ url('/register') }}" style="color:#be0043; background-color:#fccbc0;">register</a></li>
                    @else
                        <li><a href="{{ url('/login') }}" style="color:#be0043; background-color:#fccbc0; margin-right:2px;" >CALENDAR</a></li>
                        <li><a href="{{ url('/login') }}" style="color:#be0043; background-color:#fccbc0; margin-right:2px;" >SEARCH</a></li>
                        <li><a href="{{ url('/profile') }}" style="color:#be0043; background-color:#fccbc0; margin-right:2px;" >PROFILE</a></li>
                        <li><a href="{{ url('/myevent') }}" style="color:#be0043; background-color:#fccbc0; margin-right:2px;" >MYEVENT</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
        <hr />
    </nav>




    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
