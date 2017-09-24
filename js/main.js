(function($){

    $('.first-shuffle').click();
    $('.filtr-container').filterizr();

    $('.space-out').on('click', function(){
        $(this).addClass('button-active');
        $(this).siblings().removeClass('button-active');

    })

    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
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

     

    // $('.wp-post-image').addClass('col-sm-3');

    

})(jQuery);
