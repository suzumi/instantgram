<!DOCTYPE html>
<html>
<head>
    <title>インスタントグラム</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <script src="https://dme0ih8comzn4.cloudfront.net/imaging/v2/editor.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
</head>
<body>
    <header class="header">
        <div class="">instantgram</div>
    </header>

    <div class=""></div>
    <p class="img-upload"><img src="http://www.terabo.net/wordpress/wp-content/uploads/python-logo-master-v3-TM.png" id="image" width="100%"></p>
    <input type="file" name="pic" class="upload-img">

    <footer class="footer">
        <ul class="footer__list">
            <li class="is-selected"><p class="footer-list__inner"><img src="img/home.png" alt=""></p></li>
            <li><p class="footer-list__inner"><img src="img/serch.png" alt=""></p></li>
            <li><p class="footer-list__inner"><img src="img/upload.png" alt=""></p></li>
            <li><p class="footer-list__inner"><img src="img/like.png" alt=""></p></li>
            <li><p class="footer-list__inner"><img src="img/profile.png" alt=""></p></li>
        </ul>
    </footer>
<script src="main.js"></script>
<script>
    //<body>内の画像要素を取得
    var image = document.getElementById('image');

    // 画像編集エディタを利用するための準備
    var Editor = new Aviary.Feather({
        apiKey: 'cb618725357b49898becda331da82058',
        language: 'ja'
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