(function($){
    $("#portfolio-list > li:gt(0)").hide();
    
    setInterval(function() { 
      $('#portfolio-list > li:first')
        .fadeOut(1000)
        .next()
        .fadeIn(1000)
        .end()
        .appendTo('#portfolio-list');
    },  3000);

    //Bootstrap add classes to widgets

    $('.widget-title').addClass('col-sm-offset-4');
    // $('.widget_custom_html').addClass('container');

    $('.widget_custom_html').css({
        "text-align":"center"
    })
})(jQuery);