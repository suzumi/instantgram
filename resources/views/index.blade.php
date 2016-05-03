<!DOCTYPE html>
<html>
<head>
    <title>インスタントグラム</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <script src="https://dme0ih8comzn4.cloudfront.net/imaging/v2/editor.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
</head>
<body>
@section('header')
    @include('layouts.header')
@show
<<<<<<< HEAD
<div class="js-home-timeline"></div>
    {{--<article class="timeline">--}}
        {{--<p class="timeline__name">name name name</p>--}}
        {{--<p class="timeline__img"><img src="https://scontent.cdninstagram.com/t51.2885-15/e35/13102513_210436942675064_1963626264_n.jpg?se=7"></p>--}}
        {{--<p class="timeline__msg">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>--}}
    {{--</article>--}}
=======

    <article class="timeline">
        <div class="timeline__editor"><p class="editor__name">name name name</p><p class="edit__time">1時間前</p></div>
        <p class="timeline__img"><img src="https://scontent.cdninstagram.com/t51.2885-15/e35/13102513_210436942675064_1963626264_n.jpg?se=7"></p>
        <p class="timeline__msg">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
    </article>
    <article class="timeline">
        <div class="timeline__editor"><p class="editor__name">name name name</p><p class="edit__time">1時間前</p></div>
        <p class="timeline__img"><img src="https://scontent.cdninstagram.com/t51.2885-15/e35/13102513_210436942675064_1963626264_n.jpg?se=7"></p>
        <p class="timeline__msg">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
    </article>
    <article class="timeline">
        <div class="timeline__editor"><p class="editor__name">name name name</p><p class="edit__time">1時間前</p></div>
        <p class="timeline__img"><img src="https://scontent.cdninstagram.com/t51.2885-15/e35/13102513_210436942675064_1963626264_n.jpg?se=7"></p>
        <p class="timeline__msg">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
    </article>
    <article class="timeline">
        <div class="timeline__editor"><p class="editor__name">name name name</p><p class="edit__time">1時間前</p></div>
        <p class="timeline__img"><img src="https://scontent.cdninstagram.com/t51.2885-15/e35/13102513_210436942675064_1963626264_n.jpg?se=7"></p>
        <p class="timeline__msg">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
    </article>
>>>>>>> 01e423a0f7a3ccaff3049ae30625e01b2d46d99b

@section('nav')
    @include('layouts.nav')
@show

<script src="{{ asset('js/nav.js') }}"></script>
</body>
</html>