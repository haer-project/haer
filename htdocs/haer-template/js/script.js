// document.body.style.display = 'none';
$(function(){
    var fadeSpeed = 1000;

    // 初回アクセスのみドアのイラストを表示する
    var firstAccess = function(){
        var $access = $.cookie('access');
        if($access !== 'ok'){
            $.cookie('access', 'ok', { expires: 1 });
            $('.haer-view-02').hide();
            $('.haer-view-01').fadeIn(fadeSpeed);
            $('.haer-view-01').on('click',function(){
                $('.haer-view-01').fadeOut(fadeSpeed,'swing');
                $('.haer-view-02').fadeIn(fadeSpeed,'swing');
            });
            console.log('ご訪問ありがとうございます！')
        } else {
            $('.haer-view-02').fadeIn(fadeSpeed,'swing');
            console.log('2回めのご訪問ありがとうございます！')
        }
    }
    if($('.haer-view-01').length) firstAccess();


    // ページをフェードインする
    // var fadeInContents = function(){
    //     $('body').fadeIn(fadeSpeed);
    //     $(window).on('beforeunload', function(e){
    //         $('body').fadeOut(fadeSpeed);
    //     })
    // }();

    // 少しスクロールしたら header を小さくする
    var scrollSmallHeader = function(){
        $(window).on('scroll',function(){
            if($(this).scrollTop() > 10){
                $('header').addClass('is-small');
            } else {
                $('header').removeClass('is-small');
            }
        });
    }();

    // グロナビのカレント表示
    var addCurrent = function(){
        var $bodyId = $('header + div').attr('id');
        $('header .haer-nav-global a').each(function(){
            var $navClass = $(this).attr('class');
            if($navClass == $bodyId ){
                $(this).addClass('is-current');
            } else {
                $(this).removeClass('is-current');
            }
        });
    }();

    //画像の右クリックを禁止する
    var saveBlockImage = function(){
        $('img').on('contextmenu',function(){
            return false;
        })
    }();

    // アコーディオン
    var accordion = function(){
        $('.js-accordion').next().hide();
        $('.js-accordion').on('click', function(){
            $(this).next().slideToggle();
        });
    }();
})
