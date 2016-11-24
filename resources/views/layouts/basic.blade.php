<!DOCTYPE html>
<html class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"
      lang="{{App::getLocale()}}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A Web Application for home delivery business">
    <meta name="author" content="Theme Author: Coderthemes">
    <meta name="author" content="Lead Developer: Geraldo B. Landre">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App Favicon -->
    <link rel="shortcut icon" href="/images/favicon.ico">

    <!-- App title -->
    <title>{{config('app.name')}}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

    <!-- Switchery css -->
    <link href="/css/switchery.min.css" rel="stylesheet">

    <!-- App CSS -->
    <link href="/css/style.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    @yield('head-extensions')

    <script src="/js/modernizr.min.js"></script>
    <script>UPLOADCARE_PUBLIC_KEY = "cc79e063e30c7c41996d";</script>
    <script src="https://ucarecdn.com/widget/2.10.1/uploadcare/uploadcare.full.min.js" charset="utf-8"></script>

    <!-- This is where the widget will be. Don't forget the name attribute! -->
    <!-- <input type="hidden" role="uploadcare-uploader" name="my_file" /> -->
</head>
<body>

@yield('navigation-bar')

@yield('basic-content')

<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="/js/jquery.min.js"></script>
<script src="/js/tether.min.js"></script><!-- Tether for Bootstrap -->
<script src="/js/bootstrap.min.js"></script>
<script src="/js/waves.js"></script>
<script src="/js/jquery.nicescroll.js"></script>
<script src="/js/switchery.min.js"></script>

<!--Morris Chart-->
<script src="/js/morris.min.js"></script>
<script src="/js/raphael-min.js"></script>

<!-- Counter Up  -->
<script src="/js/jquery.waypoints.js"></script>
<script src="/js/jquery.counterup.min.js"></script>

<!-- App js -->
<script src="/js/jquery.core.js"></script>
<script src="/js/jquery.app.js"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
</script>

@yield('page-js')

</body>
</html>
