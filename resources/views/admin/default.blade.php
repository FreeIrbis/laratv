<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="{{ url('css/bootstrap.css') }}" rel="stylesheet">
    <style type="text/css">
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }
        .sidebar-nav {
            padding: 9px 0;
        }

        @media (max-width: 980px) {
            /* Enable use of floated navbar text */
            .navbar-text.pull-right {
                float: none;
                padding-left: 5px;
                padding-right: 5px;
            }
        }
    </style>
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="{{url('/')}}">Laravel TV</a>
            <div class="nav-collapse collapse">
                <p class="navbar-text pull-right">

                </p>
                <ul class="nav">
                    <li class="{{ Request::is('adminzone') ? 'active' : '' }}"><a href="{{url('/adminzone')}}">Главная</a></li>
                    <li class="{{ Request::is('adminzone/channels') ? 'active' : '' }}"><a href="{{url('/adminzone/channels')}}">Каналы</a></li>
                    <li class="{{ Request::is('adminzone/categories') ? 'active' : '' }}"><a href="{{url('/adminzone/categories')}}">Категории</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span9">
            @yield('content')
        </div><!--/span-->
            @yield('sidebar')
    </div><!--/row-->

    <hr>

    <footer>
        <p>&copy; Company 2017</p>
    </footer>

</div>

<script src="{{ url('js/bootstrap.min.js') }}"></script>
</body>
</html>