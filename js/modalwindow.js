// JavaScript Document

<!--モーダルウィンドウのフェードイン-->

$(function () {
  $('.openModal1').click(function(){
      $('.modalArea1').fadeIn();
      $(this).blur();
  });
  $('.closeModal1 , .modalBg').click(function(){
    $('.modalArea1').fadeOut();
  });
  
    $('.openModal2').click(function(){
      $('.modalArea2').fadeIn();
      $(this).blur();
  });
  $('.closeModal2 , .modalBg').click(function(){
    $('.modalArea2').fadeOut();
  });
  
      $('.openModal3').click(function(){
      $('.modalArea3').fadeIn();
      $(this).blur();
  });
  $('.closeModal3 , .modalBg').click(function(){
    $('.modalArea3').fadeOut();
  });
  
      $('.openModal4').click(function(){
      $('.modalArea4').fadeIn();
      $(this).blur();
  });
  $('.closeModal4 , .modalBg').click(function(){
    $('.modalArea4').fadeOut();
  });
  
});