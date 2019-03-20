<!DOCTYPE html>
<html>
    <head>
        <title>Signage Page</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <style type="text/css">
            .box{
                width: 600px;
                margin: 0 auto;
                border: 1px solid #ccc;
            }
        </style>
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="{{asset('plugins/materialize/css/materialize.min.css')}}"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        	
        <!-- Theme Styles -->
        <link href="{{asset('css/alpha.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css"/>
    </head>
    <body class="signin-page loaded cyan darken-1">
        <div class="mn-content valign-wrapper">
            <main class="mn-inner container">
                <div class="valign">
                    <div class="row">
                        <div class="col s12 m6 l4 offset-l4 offset-m3">
                            @if (isset(Auth::user()->email))
                                <script>window.location = "/dashboard";</script>
                            @endif
                
                            @if ($message = Session::get('error'))
                                <strong style="color:white;">{{$message}}</strong>
                            @endif
                
                            @if (count($errors) > 0)
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li style="color:white;">{{$error}}</li>
                                    @endforeach
                                </ul>
                            @endif
                            <div class="card white darken-1">
                                <div class="card-content ">
                                    <span class="card-title">Sign In</span>
                                    <div class="row">
                                        <form class="col s12" method="POST" action="{{url('/auth/login')}}">
                                            {{ csrf_field() }}
                                            <div class="input-field col s12">
                                                <input id="email" name="email" type="email" class="validate">
                                                <label for="email">Email</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="password" name="password" type="password" class="validate">
                                                <label for="password">Password</label>
                                            </div>
                                            <div class="col s12 right-align m-t-sm">
                                                <input type="submit" name="login" class="waves-effect waves-light btn teal" value="sign in" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

         <!-- Javascripts -->
         <script src="{{asset('plugins/materialize/js/materialize.min.js')}}"></script>
         <script src="{{asset('plugins/material-preloader/js/materialPreloader.min.js')}}"></script>
         <script src="{{asset('plugins/jquery-blockui/jquery.blockui.js')}}"></script>
         <script src="{{asset('js/alpha.min.js')}}"></script>
    </body>
</html>