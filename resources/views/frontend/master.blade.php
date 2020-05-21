<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{asset('usertemplate/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('usertemplate/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('usertemplate/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('usertemplate/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('usertemplate/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('usertemplate/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('usertemplate/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{asset('images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/ico/apple-touch-icon-57-precomposed.png')}}">

    <link rel="stylesheet" href="{{asset('https://mmwebfonts.comquas.com/fonts/?font=myanmar3')}}" />
    
    <style type="text/css">
       
        .unicode{
            font-family:Myanmar3,Yunghkio,'Masterpiece Uni Sans';
        }
    </style>
</head><!--/head-->
<body>

    @include('frontend/body')


@yield('content')
@include('frontend/footer1')
</body>
<script src="{{asset('usertemplate/js/jquery.js')}}"></script>
    <script src="{{asset('usertemplate/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('usertemplate/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('usertemplate/js/price-range.js')}}"></script>
    <script src="{{asset('usertemplate/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('usertemplate/js/main.js')}}"></script>
</html>