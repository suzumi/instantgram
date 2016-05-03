;(function(w) {
    w.app = w.app || {};

    app.Common = function() {
        this.$notifyCount = $('.js-notify-btn');
        this.$notifyBox = $('.js-notify-box');
        this.$commentDeleteBtn = $('.js-comment-delete');
        this.$snippetDeleteBtn = $('.js-snippet-delete');

        this._initialize();
    };

    app.Common.prototype = {
        _initialize: function() {
            this._toggleClick();
            this._notifications();
            this._utilDeleteConfirm();
        },
        _utilDeleteConfirm: function() {
            this.$commentDeleteBtn.on('click', function() {
                if(window.confirm("このコメントを削除してもよろしいですか？")) {
                    location.href = $(this).attr('href');
                } else {
                    return false;
                }
            });

            this.$snippetDeleteBtn.on('click', function() {
                if(window.confirm("この投稿を削除してもよろしいですか？")) {
                    location.href = $(this).attr('href');
                } else {
                    return false;
                }
            });
        }
    };

})(window);

$(function() {
    var Common = new app.Common();
});