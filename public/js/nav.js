;(function(w) {
    w.app = w.app || {};

    app.Nav = function() {
        //this.$notifyCount = $('.js-notify-btn');
        //this.$notifyBox = $('.js-notify-box');
        //this.$commentDeleteBtn = $('.js-comment-delete');
        //this.$snippetDeleteBtn = $('.js-snippet-delete');
        this.imgSrc;
        this._initialize();
    };

    app.Nav.prototype = {
        _initialize: function() {
            var url = location.pathname;
            switch (url) {
                case '/':
                    $('#home').addClass('is-selected');
                    break;
                case '/search':
                    $('#search').addClass('is-selected');
                    break;
                case '/upload':
                    $('#upload').addClass('is-selected');
                    break;
                case '/like':
                    $('#like').addClass('is-selected');
                    break;
                case '/mypage':
                    $('#mypage').addClass('is-selected');
                    break;
            }
            $(document).on('change', '.js-input-file', this._imageEditor.bind(this));
            this._getHome();
            //this._toggleClick();
            //this._notifications();
            //this._utilDeleteConfirm();
        },
        _imageEditor: function (e) {
            $('.file-input-label').after('<span></span>');
            //// アップロードするファイルを選択
            //$('input[type=file]').change(function() {
            //    var file = $(this).prop('files')[0];
            //
            //    // 画像以外は処理を停止
            //    if (! file.type.match('image.*')) {
            //        // クリア
            //        $(this).val('');
            //        $('span').html('');
            //        return;
            //    }
            //
            //    // 画像表示
            //    var reader = new FileReader();
            //    reader.onload = function() {
            //        var img_src = $('<img>').attr('src', reader.result);
            //        $('span').html(img_src);
            //    };
            //    reader.readAsDataURL(file);
            //});
            var self = this;
            if (!e.target.files.length) {
                return false;
            }
            var file = e.target.files[0],
                fileReader = new FileReader();
            self.dataUri = undefined;
            fileReader.onload = function(event) {
                self.dataUri = event.target.result;
                var img_src = $('<img>').attr('src', self.dataUri);
                $(img_src).attr('id', 'image');
                $(img_src).hide();
                $('span').html(img_src);

                var Editor = new Aviary.Feather({
                    apiKey: 'cb618725357b49898becda331da82058',
                    language: 'ja',
                    appendTo: 'image-editer',
                    maxSize: 375,
                    onSave: function (imageID, newURL) {
                        //var newImg = newURL;
                        console.log(newURL);
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            'type': 'POST',
                            'url': '/api/upload',
                            'data': {
                                imgPath: newURL
                            }
                        })
                        .done(function (data) {
                            console.log("アップロード成功");
                            location.href="/";
                        })
                        .fail(function (data) {
                            console.log("失敗");
                        });
                    }
                });
                console.log(img_src);
                Editor.launch({
                    //<img>内のidとsrcを取得
                    image: img_src[0].id,
                    url: img_src[0].src
                });
            };
            fileReader.readAsDataURL(file);

            //var image = document.getElementById('image');

        },
        _getHome: function() {
            $.ajax({
                'type': 'GET',
                'url': '/api/home'
            })
            .done(function (data) {
                console.log(data);
                var template = '';
                for (var i = 0; i < data.length; i++) {
                    var date = moment(data[i].created_at).format('YYYY/MM/DD');

                    //var dateTime = new Date(data[i].created_at);
                    template +=
                        '<article class="timeline">' +
                        '<div class="timeline__editor">' +
                            '<p class="editor__name">' + data[i].name + '</p>' +
                        '<p class="edit__time">' + date + '</p>' +
                        '</div>' +
                        '<p class="timeline__img"><img src="' + data[i].imgPath + '"></p>' +
                        '<p class="timeline__msg">' + data[i].desciption + '</p>' +
                        '</article>'
                }
                $('.js-home-timeline').html(template);
            })
            .fail(function(){

            });
        }
    };

})(window);

$(function() {
    var Nav = new app.Nav();
});