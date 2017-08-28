(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('select').material_select();
    $(window).scroll(function() {
        posicionarMenu();
    });

  }); // end of document ready
})(jQuery); // end of jQuery name space

function posicionarMenu() {
    var altura_del_header = $('#headInf').outerHeight(true);
    var altura_del_menu = $('.docs-header').outerHeight(true);
    if ($(window).scrollTop() >= altura_del_header){
        $('#menuAPI').addClass('navfixed');
        $("#headInf").addClass('navbar-fixed');
    } else {
      $("#headInf").removeClass('navbar-fixed');
        $('#menuAPI').removeClass('navfixed');
    }
}
