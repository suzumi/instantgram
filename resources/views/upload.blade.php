<!DOCTYPE html>
<html>
<head>
    <title>インスタントグラム</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
{{--<p class="img-upload"><img src="http://www.terabo.net/wordpress/wp-content/uploads/python-logo-master-v3-TM.png"--}}
                           {{--id="image" width="100%"></p>--}}
<label class="file-input-label" for="file_photo">
    ＋写真を選択
    <input type="file" name="pic" class="upload-img js-input-file" accept="image/*" id="file_photo" style="display:none;">
</label>

@section('nav')
    @include('layouts.nav')
@show

<script src="{{ asset('js/nav.js') }}"></script>
<script>
    //<body>内の画像要素を取得
    var image = document.getElementById('image');

    // 画像編集エディタを利用するための準備
    var Editor = new Aviary.Feather({
        apiKey: 'cb618725357b49898becda331da82058',
        language: 'ja',
        appendTo: 'image-editer',
        maxSize: 375,
        onSave: function (imageID, newURL) {
            var img = document.getElementById(imageID);
            img.src = newURL;
        }
    });

    // 保存したら、Webサイトの画像も反映する設定
    //        onSave: function(imageID, newURL) {
    //          var img = document.getElementById(imageID);
    //          img.src = newURL; //自動生成された画像URLを、既存の画像URLと差し替え
    //        }
    //    });

    //  画像要素をクリックしたら、「編集エディタ」を表示
    image.addEventListener('click', function () {
        Editor.launch({
            //<img>内のidとsrcを取得
            image: image.id,
            url: image.src
        });
    });

</script>
</body>
</html>