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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</head>
<body>

@include('layouts.header')

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span9">
            @yield('content')
        </div><!--/span-->
        @yield('sidebar')
    </div><!--/row-->

    <hr>

    @include('layouts.footer')

</div><!--/.fluid-container-->










<script src="{{ url('js/bootstrap.min.js') }}"></script>
</body>
</html>