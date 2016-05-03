<!DOCTYPE html>
<html>
<head>
    <title>サンプル</title>
    <script src="https://dme0ih8comzn4.cloudfront.net/imaging/v2/editor.js"></script>
</head>
<body>
<img src="http://www.terabo.net/wordpress/wp-content/uploads/python-logo-master-v3-TM.png" id="image">
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
