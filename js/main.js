(function ($) {

    $('.hamburger').on('click', function () {
        $('.bar').toggleClass('animate');
        $('.nav-list').slideToggle('slow')
    })

    if ($(window).width() < 481){
        $('.portfolio-wrapper').removeClass('filtr-container').addClass('main-carousel');
        $('.portfolio-item').removeClass('filtr-item').addClass('carousel-cell')
    }else{
        $('.portfolio-wrapper').addClass('filtr-container').removeClass('main-carousel');
    }



    $(window).scroll(function () {
        $('.learn-more-container').each(function () {
            var imagePos = $(this).offset().top;
            var imageHeight = $(this).height();
            var topOfWindow = $(window).scrollTop();
            var portfolioTop = $('#portfolio-list').offset().top;

            if (portfolioTop < topOfWindow + imageHeight && imagePos + imageHeight > topOfWindow) {
                $(this).addClass("learn-fade");
            } else {
                $(this).removeClass("learn-fade");
            }
        });
    });


    $('.first-shuffle').click();

    $("#portfolio-list > li:gt(0)").hide();

    setInterval(function () {
        $('#portfolio-list > li:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#portfolio-list');
    }, 3000);

    $('.space-out').on('click', function () {
        $(this).addClass('button-active');
        $(this).siblings().removeClass('button-active');

    })

    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true,
        'maxWidth': '700px'
    })

    $('.main-carousel').flickity({
        // options
        cellAlign: 'left',
        contain: true
    });



    $('.filtr-item').on('click', function () {
        var filterItemHeight = $(this).height();
        console.log(filterItemHeight)
        $(this).removeClass('col-sm-3').addClass('col-sm-9 col-sm-offset-2')
        $(this).siblings().addClass('hidden');
        $('.filtre-container').addClass('row')
        $(this).css({
            "transform": ""
        })
        $(".image-text").removeClass('hidden');
        if ($(window).width() < 481) {
            $('#secondary').css({
                "margin-top": "900px"
            })
        } else {
            $('#secondary').css({
                "margin-top": "3500px"
            })
        }


    })

    //redisplay portfolio images

    $('.space-out').on('click', function () {
        $('.filtr-item').removeClass('hidden');
        $('.image-text').addClass('hidden');
        $('.filtr-item').removeClass('col-sm-9').addClass('col-sm-3')
        $('#secondary').css({
            "margin-top": "100vw"
        })
    })

    $('.filtr-container').filterizr();




})(jQuery);
