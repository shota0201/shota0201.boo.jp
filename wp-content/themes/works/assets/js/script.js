/* スライダー */
$(function(){
  $('.js-slider').slick({
    autoplay:true,
    dots:true,
    infinite:true,
    speed:1500,
    fade:true,
    cssEase:'linear'
  });
});

/* ハンバーガーメニュー */
$(function(){
  $('#nav_toggle').click(function(){
        $("header").toggleClass('open');
    $("nav").slideToggle(500);
      });
});

/* フェードイン */
$(function(){
  $(window).scroll(function (){
      $('.js-fadein').each(function(){
          var targetElement = $(this).offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (scroll > targetElement - windowHeight + 200){
              $(this).css('opacity','1');
              $(this).css('transform','translateY(0)');
          }
      });
  });
});

/* フェードイン wrapper */
$(window).on('load', function() {
  $('.result').css({opacity: '0'}).animate({opacity: '1'}, 2000);
  $('.loading').hide();
});


/* スムーススクロール */
$(function(){

// ボタンの要素を指定します。ここでは「.js-topBtn」を指定
 var $btn = $('.js-topBtn');
 var isHidden = true;

//  デフォルトは非表示
 $btn.hide();
   $(window).scroll(function () {

// 2100pxスクロールした時点でフェードイン表示する
 if( $(this).scrollTop() >1800 ) {
     if( isHidden ) {
         $btn.stop(true,true).fadeIn(200);
         isHidden = false;
     }
 } else {

//最上段から240pxの位置に戻るとフェードアウトで消える
  if( !isHidden ) {
      $btn.stop(true,true).fadeOut();
      isHidden = true;
  }
 }
});

// クリックイベントの登録
 $btn.click(function(){

//  ページトップへスクロール
 $('html, body').animate({
         'scrollTop': 0

// 1/1000秒でスピード調整
   }, 500);

// デフォルトイベントのキャンセル
     return false;
 });
});

$(document).ready(function(){
    $("#topBtn").hide();
    $(window).on("scroll", function() {
        if ($(this).scrollTop() > 100) {
            $("#topBtn").fadeIn("fast");
        } else {
            $("#topBtn").fadeOut("fast");
        }
        scrollHeight = $(document).height(); //ドキュメントの高さ
        scrollPosition = $(window).height() + $(window).scrollTop(); //現在地
        footHeight = $("footer").innerHeight(); //footerの高さ（＝止めたい位置）
        if ( scrollHeight - scrollPosition  <= footHeight ) { //ドキュメントの高さと現在地の差がfooterの高さ以下になったら
            $("#topBtn").css({
                "position":"absolute", //pisitionをabsolute（親：wrapperからの絶対値）に変更
                "bottom": footHeight + 20 //下からfooterの高さ + 20px上げた位置に配置
            });
        } else { //それ以外の場合は
            $("#topBtn").css({
                "position":"fixed", //固定表示
                "bottom": "20px" //下から20px上げた位置に
            });
        }
    });
    $('#topBtn').click(function () {
        $('body,html').animate({
        scrollTop: 0
        }, 400);
        return false;
    });
});

/* tell pc非表示 */
var ua = navigator.userAgent.toLowerCase();
var isMobile = /iphone/.test(ua)||/android(.+)?mobile/.test(ua);
if (!isMobile) {
    $('a[href^="tell:"]').on('click', function(e) {
        e.preventDefault();
    });
}

/* スムーススクロール（全体） */
jQuery(function(){
   jQuery('a[href^="#"]').click(function() {// # クリック処理
      var speed = 500; //スクロール速度ミリ秒
      var href= jQuery(this).attr("href"); // アンカーの値取
      // 移動先を取得
      var target = jQuery(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;// 移動先を数値で取得
      // スムーススクロール
      jQuery('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
   });
});