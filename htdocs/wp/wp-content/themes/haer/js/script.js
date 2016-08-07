document.body.style.display = 'none';
$(function(){
    var fadeSpeed = 1000;

    // TODO:初回アクセスのみドアのイラストを表示する
    // if($.cookie('access')){
    //     $('.haer-view-02').css({display:'none'});
    // }
    // $(window).load(function(){
    //     $.cookie('access',$('body').addClass('access'))
    // })
    $('.haer-view-02').hide();
    $('.haer-view-01').fadeIn(fadeSpeed);
    $('.haer-view-01').on('click',function(){
        $('.haer-view-01').fadeOut(fadeSpeed,'swing');
        $('.haer-view-02').fadeIn(fadeSpeed,'swing');
    });

    // ページをフェードインする
    $('body').fadeIn(fadeSpeed);
    $(window).on('beforeunload', function(e){
        $('body').fadeOut(fadeSpeed);
    })

    // 少しスクロールしたら header を小さくする
    $(window).on('scroll',function(){
        if($(this).scrollTop() > 10){
            $('header').addClass('is-small');
        } else {
            $('header').removeClass('is-small');
        }
    });

    // グロナビのカレント表示
    var $bodyId = $('header + div').attr('id');
    $('header .haer-nav-global a').each(function(){
        var $navClass = $(this).attr('class');
        if($navClass == $bodyId ){
            $(this).addClass('is-current');
        } else {
            $(this).removeClass('is-current');
        }
    });

    //画像の右クリックを禁止する
    $('img').on('contextmenu',function(){
        return false;
    })

    // アコーディオン
    $('.js-accordion').next().hide();
    $('.js-accordion').on('click', function(){
        $(this).next().slideToggle();
    });
})
