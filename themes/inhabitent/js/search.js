(function ($) {
  
  $('.main-navigation #search-field').hide();


  $('#search-submit').click(function() {
    $('#search-field').toggle( 'slow', function(){
    $('#search-field').focus();
    });
  });

  
  $('#search-field').on('blur', function (){
    $('.search-field').toggle()
  });

  // $('.main-navigation #search-field').hide();


  // $('#search-submit').click(function () {
  //   // e.preventDefault()
  //   $('#search-field').toggle(function () {
  // });


  // });

  // (function ($){
  //   $('#search-toggle').on('click', function() {
  //     $('#search-field').animate( { width: '200px' }, 500 ).focus();
  //   });
  //   $('#search-field').on('blur', function() {
  //       $('#search-field').animate( { width: '0px', border:"none" }, 500 );
  //   });
  //   $('#search-field').animate( { width: 0 }, 0 );
      
  // })(jQuery);
  

  // $('.main-navigation .search-submit')
  // .on('click', function(e){
  //   e.preventDefault();
  //   $('.main-navigation .search-field').toggle().focus(); 
  // });

})(jQuery);

  

