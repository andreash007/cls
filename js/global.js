(function ($) {
  Drupal.behaviors.cls = {
    attach: function (context, settings) {
      /**
       * Add div with Description in footer menu
       */
      var Description, url, rmore;
      $('.pane-menu-menu-footer ul.nav li').each(function() {
        Description = $(this).find('a').attr('title');
        $(this).find('a').removeAttr('title'); // Remove title attr from link
        url = $(this).find('a').attr('href');
        rmore = "<a href='" + url +"'>Read more</a>"
        $(this).append('<span>' + Description + ' ' + rmore + '</span>')
      });

      /**
       * Add 'posted in' text to blog term
       */
      var term = $('.node-type-blog .field-name-field-term .field-item').html();
      $('.node-type-blog .field-name-field-term .field-item a').remove()
      $('.node-type-blog .field-name-field-term .field-item').append('(posted in ' + (term) + ')');

      /**
       * back to Top
       * http://www.jqueryscript.net/animation/Customizable-Back-To-Top-Button-with-jQuery-backTop.html
       */
      $("body").append("<a id='backTop'>Back To Top</a>")
      $('#backTop').backTop({
        'position' : 200,
        'speed' : 500,
        'color' : '#cccccc',
      });
    }
  };
}(jQuery));