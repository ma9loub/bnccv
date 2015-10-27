

/**
 * Récupère les données du CV pour les afficher dans un div
 * puis installe les évènements pour le scroll
 */
installTimeline = function (jsonPath) {
    
  // Template
  var source = $('#cv-template').html();
  var cvTemplate = Handlebars.compile(source);
  $.getJSON(jsonPath)
    .done(function(json) {
      $.each(json.cv, function(i, val) {
        var html = cvTemplate(val);
        $("#cd-timeline").append(html);
      });
      
      var $timeline_block = $('.cd-timeline-block');
      $timeline_block.each(function () {
          if ($(this).offset().top > $(window).scrollTop() + $(window).height() * 0.75) {
              $(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
          }
      });
      $(window).on('scroll', function () {
          $timeline_block.each(function () {
              if ($(this).offset().top <= $(window).scrollTop() + $(window).height() * 0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden')) {
                  $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
              }
          });
      });
    })
    .fail(function( jqxhr, textStatus, error ) {
      console.log( "Request Failed: " + textStatus + ", " + error );
  });
}