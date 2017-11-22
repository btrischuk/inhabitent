(function ($) {

  $('.main-navigation .search-field').hide();

  $('.search-submit').click(function () {
    // e.preventDefault()
    $('.search-field').toggle('slow', function () {
      $('.search-field').focus();
    });
    $('.search-field').blur();
  });


  // $('.main-navigation .search-submit')
  // .on('click', function(e){
  //   e.preventDefault();
  //   $('.main-navigation .search-field').toggle().focus(); 
  // });

  // $('.main-navigation .search-field').on('blur', function() {
  //   $(this).toggle();
  // });
  

})(jQuery);