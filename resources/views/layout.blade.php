<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Home | Luuk Tito</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>

<div class="container">

    <div class="masthead">
        <h3 class="text-muted">Portfolio - Luuk Tito - Informatica Jaar 2</h3>
        <div role="navigation">
            <ul class="nav nav-justified">
                <li class="{{ Request::path() ==  'home' ? 'active' : ''  }}"><a href="{{ url('home') }}">Home</a></li>
                <li class="{{ Request::path() ==  'about' ? 'active' : ''  }}"><a href="{{ url('about') }}">Wie ben ik</a></li>
                <li class="{{ Request::path() ==  'cv' ? 'active' : ''  }}"><a href="{{ url('cv') }}">Curriculum Vitae</a></li>
                <li class="{{ Request::path() ==  'projects' ? 'active' : ''  }}"><a href="{{ url('projects') }}">Projecten</a></li>
                <li class="{{ starts_with(Request::path(), 'school') ? 'active' : ''  }}"><a href="{{ url('school') }}">School (SLC)</a></li>
                <li class="{{ Request::path() ==  'contact' ? 'active' : ''  }}"><a href="{{ url('contact') }}">Contact</a></li>
            </ul>
        </div>
        @if(starts_with(Request::path(), 'school'))
            <div role="navigation">
                <ul class="nav nav-justified">
                    <li class="{{ Request::path() ==  'school' ? 'active' : ''  }}"><a href="{{ url('school') }}">Periode 3</a></li>
                    <li class="{{ Request::path() ==  'school2' ? 'active' : ''  }}"><a href="{{ url('school2') }}">Periode 4</a></li>
                    <li class="{{ Request::path() ==  'school3' ? 'active' : ''  }}"><a href="{{ url('school3') }}">Periode 7</a></li>
                </ul>
            </div>
        @endif
    </div>

    @yield('content')

    <!-- Site footer -->
    <footer class="footer">
        <p class="text-center">&copy; 2016 - Luuk Tito</p>
    </footer>

</div> <!-- /container -->
</body>
</html>
