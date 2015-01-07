$(function(){
    $('.accContainer').hide();
    $('.accordion:first').next().slideDown();
$(".accordion").click(function() {
   
              $('.accordion:odd').next().slideUp();
              $('.accordion:even').next().slideUp();
              $(this).next().slideDown();
              return false;
});
});
  