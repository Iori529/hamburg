$(function(){

    $('.js-button').click(function(){

        $('.js-open').toggleClass("open");
        $('.p-shadow').toggleClass("shadow");
        $('body').toggleClass("fixed")
    })
    //変数の設定
var $body = $('body');

//スクロール量を保存
var scrollTop;

//スクロールを固定
function bodyFixedOn() {
  scrollTop = $(window).scrollTop();
  
  $body.css({
    position: 'fixed',
    top: -scrollTop
  });
}

//スクロールの固定を解除
function bodyFixedOff() {
  $body.css({
    position: '',
    top: ''
  });
  
  $(window).scrollTop(scrollTop);
}

//モーダルのトリガーをクリックしたとき
$('.js-button').on('click', function() {
  bodyFixedOn();
});

//モーダルの閉じるボタンをクリックしたとき
$('.js-button').on('click', function() {
  bodyFixedOff();
});
})
$(function(){
    $(window).resize(function(){
      if($(window).width()>=1025 && $('body').css("position")=="fixed"){
        $('body').toggleClass("fixed");
        $('.p-shadow').toggleClass("shadow");
      }
      if($(window).width()<1025 && $('body').css("position")!="fixed"){
        $('.js-open').removeClass("open");
      }
    })
})
