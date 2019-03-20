<!DOCTYPE html>
<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Signage - @yield('title')</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
       
        <!-- Styles -->
        
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="{{asset('plugins/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">        
        <link type="text/css" rel="stylesheet" href="{{asset('plugins/materialize/css/materialize.min.css')}}"/>
        	
        <!-- Theme Styles -->
        <link href="{{asset('css/alpha.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css"/>
    </head>
    <body class="loaded">
        <div class="mn-content fixed-sidebar">
            @section('header')
            <header class="mn-header navbar-fixed">
                <nav class="cyan darken-1">
                    <div class="nav-wrapper row">
                        <section class="material-design-hamburger navigation-toggle">
                            <a href="#" data-activates="slide-out" class="show-on-large material-design-hamburger__icon reverse-icon">
                                <span class="material-design-hamburger__layer"></span>
                            </a>
                        </section>
                        <div class="header-title col s3">      
                            <span class="chapter-title">DATA CENTER</span>
                        </div>
                        <ul class="right col s9 m3 nav-right-menu">
                            @if (isset(Auth::user()->email))
                                <li>
                                    <a href="{{url('/auth/logout')}}">Logout</a>
                                </li>
                                <li>
                                    <strong>{{Auth::user()->email}}</strong>
                                </li>
                            @else
                                <script>window.location = "/auth";</script>
                            @endif       
                        </ul>
                    </div>
                </nav>
            </header>
            @show  
            @section('sidebar')
            <aside id="slide-out" class="side-nav white fixed">
                <div class="side-nav-wrapper">
                    <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                        <li class="no-padding active">
                            <a class="waves-effect waves-grey active" href="{{url('/dashboard')}}"><i class="material-icons">settings_input_svideo</i>Dashboard</a>
                        </li>
                        <li class="no-padding">
                            <a class="collapsible-header waves-effect waves-grey"><i class="material-icons dp48">perm_identity</i>Users<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="{{url('/admin')}}">Administrator</a></li>
                                    <li><a href="{{url('/customer')}}">Customer</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="no-padding">
                            <a class="collapsible-header waves-effect waves-grey"><i class="material-icons dp48">web</i>Design<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="mailbox.html">Layout</a></li>
                                    <li><a href="search.html">Template</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="no-padding">
                            <a class="collapsible-header waves-effect waves-grey"><i class="material-icons dp48">group_work</i>Groups<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="ui-icons.html">Group-1</a></li>
                                    <li><a href="ui-parallax.html">Group-2</a></li>
                                    <li><a href="ui-preloader.html">Group-3</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="no-padding">
                            <a class="collapsible-header waves-effect waves-grey"><i class="material-icons dp48">settings</i>Settings<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="ui-icons.html">Network</a></li>
                                    <li><a href="ui-parallax.html">Group</a></li>
                                    <li><a href="ui-preloader.html">Map</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </aside>
            @show  
            <main class="mn-inner">
                @yield('content')
            </main>
        </div>
        <script src="{{asset('plugins/materialize/js/materialize.min.js')}}"></script>
        <script src="{{asset('plugins/material-preloader/js/materialPreloader.min.js')}}"></script>
        <script src="{{asset('plugins/jquery-blockui/jquery.blockui.js')}}"></script>
        <script src="{{asset('plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('js/alpha.min.js')}}"></script>
        <script src="{{asset('js/pages/table-data.js')}}"></script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
    </body>
@stack('javascript')
</html>