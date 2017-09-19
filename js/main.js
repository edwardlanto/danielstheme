(function($){

     //Filterz
     var filterizd = $('.filtr-container').filterizr({
           //options object
        })

            console.log('test worked1');
    $("#portfolio-list > li:gt(0)").hide();
    
    setInterval(function() { 
      $('#portfolio-list > li:first')
        .fadeOut(1000)
        .next()
        .fadeIn(1000)
        .end()
        .appendTo('#portfolio-list');
    },  3000);

    //Smooth Scroll

    $('a[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1500);
                return false;
            }
        }
    }); //smooth-scroll function bracket

    //Bootstrap add classes to widgets

    $('.widget-title').addClass('col-sm-offset-4');
    // $('.widget_custom_html').addClass('container');

    $('.widget_custom_html').css({
        "text-align":"center"
    })

   

})(jQuery);
