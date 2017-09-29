(function($){

    $('.first-shuffle').click();

    $('.space-out').on('click', function(){
        $(this).addClass('button-active');
        $(this).siblings().removeClass('button-active');

    })

    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true,
        'maxWidth':'700px'
      })

      $('.main-carousel').flickity({
        // options
        cellAlign: 'left',
        contain: true
      });
      


    $('.filtr-item').on('click', function(){
        var filterItemHeight = $(this).height();
        console.log(filterItemHeight)
        $(this).removeClass('col-sm-3').addClass('col-sm-9 col-sm-offset-2')
        $(this).siblings().addClass('hidden');
        $('.filtre-container').addClass('row')
        $(this).css({
            "transform":""
        })
        $(".image-text").removeClass('hidden');
        $('#secondary').css({
            "margin-top":"3500px"
        })

        
    })

    //redisplay portfolio images

    $('.space-out').on('click', function(){
        $('.filtr-item').removeClass('hidden');
        $('.image-text').addClass('hidden');
        $('.filtr-item').removeClass('col-sm-9').addClass('col-sm-3')
        $('#secondary').css({
            "margin-top":"100vw"
        })
    })

    $('.filtr-container').filterizr();

    

})(jQuery);
