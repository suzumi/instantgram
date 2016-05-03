<!DOCTYPE html>
<html>
<head>
    <title>インスタントグラム</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <script src="https://dme0ih8comzn4.cloudfront.net/imaging/v2/editor.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
</head>
<body>
@section('header')
    @include('layouts.header')
@show

<div id="image-editer" class="image-editer"></div>
<p class="img-upload">
    <img src="http://www.terabo.net/wordpress/wp-content/uploads/python-logo-master-v3-TM.png"
                           id="image" width="100%">
</p>

@section('nav')
    @include('layouts.nav')
@show

<script src="{{ asset('js/nav.js') }}"></script>
</body>
</html>