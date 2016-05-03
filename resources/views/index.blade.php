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

    <article class="timeline">
        <p class="timeline__name">name name name</p>
        <p class="timeline__img"><img src="https://scontent.cdninstagram.com/t51.2885-15/e35/13102513_210436942675064_1963626264_n.jpg?se=7"></p>
        <p class="timeline__msg">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
    </article>
    <article class="timeline">
        <p class="timeline__name">name name name</p>
        <p class="timeline__img"><img src="https://scontent.cdninstagram.com/t51.2885-15/e35/13102513_210436942675064_1963626264_n.jpg?se=7"></p>
        <p class="timeline__msg">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
    </article>
    <article class="timeline">
        <p class="timeline__name">name name name</p>
        <p class="timeline__img"><img src="https://scontent.cdninstagram.com/t51.2885-15/e35/13102513_210436942675064_1963626264_n.jpg?se=7"></p>
        <p class="timeline__msg">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
    </article>
    <article class="timeline">
        <p class="timeline__name">name name name</p>
        <p class="timeline__img"><img src="https://scontent.cdninstagram.com/t51.2885-15/e35/13102513_210436942675064_1963626264_n.jpg?se=7"></p>
        <p class="timeline__msg">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
    </article>

@section('nav')
    @include('layouts.nav')
@show

<script src="{{ asset('js/nav.js') }}"></script>
</body>
</html>