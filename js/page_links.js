    $(document).on('pagecreate','#index', function() {
      $('#linktopage1').on( "click", function() {
        $.mobile.changePage('#index', { transition: 'slide', allowSamePageTransition: true, reverse: false});
      });
      $('#linktopage2').on( "click", function() {
        $.mobile.changePage('page2.html', { transition: 'slide'});
      });
    });
    $(document).on('pagecreate','#page2', function() {
      $('#linkself').on( "click", function() {
        $.mobile.changePage('#page2', { transition: 'slide', allowSamePageTransition: true, reverse: false});
      });
      $('#linkpage1').on( "click", function() {
        $.mobile.changePage('index.html', { transition: 'slide', reverse: true});
      });
    });