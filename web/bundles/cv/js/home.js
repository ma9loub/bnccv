

installHome = function (jsonPath) {
    
  // Template
  var source = $('#home-template').html();
  var homeTemplate = Handlebars.compile(source);
  
  $.getJSON(jsonPath)
    .done(function(json) {
        var html = homeTemplate(json.home);
        $("#home-block").append(html);
    })
    .fail(function( jqxhr, textStatus, error ) {
      console.log( "Request Failed: " + textStatus + ", " + error );
  });
}