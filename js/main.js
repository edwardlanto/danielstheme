(function($){

    $('.first-shuffle').click();
    $('.filtr-container').filterizr();

    $('.space-out').on('click', function(){
        $(this).addClass('button-active');
        $(this).siblings().removeClass('button-active');

    })

    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true,
        'maxWidth':'700px'
      })

    // var options = {
    //        animationDuration: 0.5, //in seconds
    //        filter: 'all', //Initial filter
    //        callbacks: { 
    //           onFilteringStart: function() { },
    //           onFilteringEnd: function() { },
    //           onShufflingStart: function() { },
    //           onShufflingEnd: function() { },
    //           onSortingStart: function() { },
    //           onSortingEnd: function() { }
    //        },
    //        delay: 0, //Transition delay in ms
    //        delayMode: 'progressive', //'progressive' or 'alternate'
    //        easing: 'ease-out',
    //        filterOutCss: { //Filtering out animation
    //           opacity: 1,
    //           transform: 'scale(0.5)'
    //        },
    //        filterInCss: { //Filtering in animation
    //           opacity: 1,
    //           transform: 'scale(1)'
    //        },
    //        layout: 'sameSize', //See layouts
    //        selector: '.filtr-container',
    //        setupControls: true 
    //     } 
    //     //You can override any of these options and then call...
    //     var filterizd = $('.filtr-container').filterizr(options);
    //     //If you have already instantiated your Filterizr then call...
    //     filterizd.filterizr('setOptions', options);

     

    // $('.wp-post-image').on('click', fuction(){

    // })

    // $('.wp-post-image').on('click', function(){
    //     $('.wp-post-image').css({
    //         "opacity":"0"
    //     })
    // })

    // $('.lb-outerContainer').on('click', function(){
    //     $('.wp-post-image').css({
    //         "opacity":"1"
    //     })
    // })

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

    

})(jQuery);
