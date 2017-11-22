(function ($) {


  // $('#search-bar').click(function (e) {
  //   e.preventDefault()
  //   $('#search-field').toggle('slow', function () {
  //     $('#search-field').focus();
  //   });
  //   $('#search-field').blur();
  // });


  $('.main-navigation .search-field').hide();
  $('.main-navigation .search-submit').on('click', function(e){
    e.preventDefault();
    $('.main-navigation .search-field').toggle().focus(); 
  });

  $('.main-navigation .search-field').on('blur', function() {
    $(this).toggle();
  });
  

})(jQuery);