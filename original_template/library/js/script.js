jQuery(function(){

        $('.btn_trigger').on('click',function(){//.btn_triggerをクリックすると
        $('.btn_trigger').toggleClass('close');//.btn_triggerにcloseクラスを付与(ボタンのアニメーション)
        $('.header-nav').fadeToggle(300);//.nav-wrapperが0.3秒でフェードイン(メニューのフェードイン)
        $('body').toggleClass('noscroll');//bodyにnoscrollクラスを付与(スクロールを固定)
    });

    if( $(window).width() <= 768 ){//デバイスの幅が768以下のとき
        $('.menu').on('click',function(){//.nav-item>aをクリックすると
        $('.header-nav').fadeOut(300);//.nav-wrapperが0.3秒でフェードアウト(メニューのフェードアウト)
        $('.btn_trigger').removeClass('close');//.btn_triggerのcloseクラスを削除
        $('body').removeClass('noscroll');//bodyのnoscrollクラスを削除
        });
    }

    //target付与
    $(window).on("scroll", function() {
    let target = $(".section");     
      let isAnimation = "is-animation"; //表示クラスの付与用
      let docH = $(document).innerHeight(); //ページ全体の高さ
      let winH = $(window).innerHeight(); //ウィンドウの高さ
      let bottomPos = docH - winH; //ページ全体の高さ - ウィンドウの高さ = ページの最下部位置
    
    
    function targetAnime(targetName,plusPx) {
        $(targetName).each(function() {
          let targetOffset = $(this).offset().top; //対象の高さ
          let scrollPos = $(window).scrollTop(); //ブラウザ全体のスクロール位置
          let wHeight = $(window).height(); //ブラウザ全体の高さを取得
    
          // 処理のタイミング
        if ((scrollPos + (plusPx)) > targetOffset - wHeight + wHeight / 3) {
            $(this).addClass(isAnimation)          
        } 
        else if (bottomPos <= $(window).scrollTop()) {
            section.last().addClass(isAnimation);          
        }       
        }); 
    };
    targetAnime(target,100);     
    });

        //この下はフェードインfeadin-elmを発火ポイントとして、is-fadeinを付与しています。
    $(window).scroll(function () {
        const windowHeight = $(window).height();
        const scroll = $(window).scrollTop();

        $('.feadin-elm').each(function () {
        const targetPosition = $(this).offset().top;
        if (scroll > targetPosition - windowHeight + 100) {
            $(this).addClass("is-fadein");
        }
        }); 
    });


    $(function(){
        //target付与
        $(window).on("scroll", function() {
        let target = $(".service ");     
          let isAnimation = "is-animation"; //表示クラスの付与用
          let docH = $(document).innerHeight(); //ページ全体の高さ
          let winH = $(window).innerHeight(); //ウィンドウの高さ
          let bottomPos = docH - winH; //ページ全体の高さ - ウィンドウの高さ = ページの最下部位置
        
        
        function targetAnime(targetName,plusPx) {
            $(targetName).each(function() {
              let targetOffset = $(this).offset().top; //対象の高さ
              let scrollPos = $(window).scrollTop(); //ブラウザ全体のスクロール位置
              let wHeight = $(window).height(); //ブラウザ全体の高さを取得
        
              // 処理のタイミング
            if ((scrollPos + (plusPx)) > targetOffset - wHeight + wHeight / 3) {
                $(this).addClass(isAnimation)          
            } 
            else if (bottomPos <= $(window).scrollTop()) {
                section.last().addClass(isAnimation);          
            }       
            }); 
        };
        targetAnime(target,100);     
        });
    
          //この下はフェードインfeadin-elmを発火ポイントとして、is-fadeinを付与しています。
    $(window).scroll(function () {
        const windowHeight = $(window).height();
        const scroll = $(window).scrollTop();
    
        $('.feadin-elm').each(function () {
        const targetPosition = $(this).offset().top;
        if (scroll > targetPosition - windowHeight + 100) {
            $(this).addClass("is-fadein");
        }
        }); 
    });
    
    });

});

jQuery(document).ready(function($) {
    $('.slick1').slick({
        autoplay: true,
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 769, // 399px以下のサイズに適用
            settings: {
                slidesToShow: 1,
            },
        }, ],
    });
});

