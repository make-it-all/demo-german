(function(window){
  $(function(){

    $('select').chosen({width: '100%'});


    $('a[data-confirm]').on('click', function(e){
      e.preventDefault();
      confirm($(this).data('confirm'));
    });

    $('[data-close-button]').on('click', function(){
      $(this).parent().fadeOut();
    });


    $('form#login_form').on('submit', function(e){
      var error = false;
      $(this).find('input').each(function(){
        if (this.value === '') {
          error = true
          $(this).addClass('field_with_errors');
        } else {
          $(this).removeClass('field_with_errors');
        }
      });
      if (error === true) {
        e.preventDefault();
      }
    });
    console.log("HIdd")


  });





  $(function(){

    $('input[type=search]').closest('form').on('submit', function(e){
      e.preventDefault();

      $('[data-search-result]').each(function(){
        $(this).replaceWith(this.childNodes);
      });

      var $search_field = $(this).find('input[type=search]')
      var search_term = $search_field.val();
      var indexes = $('[data-searchable]').map(function(){return $(this).index();});

      $('tbody tr').each(function(){
        var row = this;
        var found = false;
        $.each(indexes, function(){
          var $td = $(row).find('td').eq(this);
          var text = $td.text();

          if (text.indexOf(search_term) > -1) {
            found = true;
            $td.html(text.replace(new RegExp('(' + search_term + ')', 'g'), '<span data-search-result class="highlight">$1</span>'));
          }
        });

        (found)? $(row).show() : $(row).hide();

      });
    });


  });






})(window);
