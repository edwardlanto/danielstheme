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
})(jQuery);