    $(document).on('pagecreate','#index', function() {
      $('#linktohome').on( "click", function() {
        $.mobile.changePage('#index', { transition: 'slide', allowSamePageTransition: true, reverse: false});
      });
      $('#linktoreg').on( "click", function() {
        $.mobile.changePage('registro.php', { transition: 'slide'});
      });
    });
    
    $(document).on('pagecreate','#conf', function() {
      $('#linkConfhome').on( "click", function() {
        $.mobile.changePage('index.php', { transition: 'slide', reverse: true});
      });
    });
    
        $(document).on('pagecreate','#reg', function() {
      $('#linkReghome').on( "click", function() {
        $.mobile.changePage('index.php', { transition: 'slide', reverse: true});
      });
    });
    $("#form1").on('submit',function(){return false;});
    $( "[type='submit']" ).button();