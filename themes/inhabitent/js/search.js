(function ($) {
  
  $('.main-navigation #search-field').hide();


  $('#search-submit').click(function() {
    $('#search-field').toggle( function(){
    $('#search-field').focus();
    });
  });

  
  $('#search-field').on('blur', function (){
    $('.search-field').toggle()
  });


})(jQuery);

  

