

installExp = function (jsonPath) {
    
  // Template
  var source = $('#exp-template').html();
  var expTemplate = Handlebars.compile(source);
  
  $.getJSON(jsonPath)
    .done(function(json) {
        var html = expTemplate(json);
        $("#exp-block").append(html);
    })
    .fail(function( jqxhr, textStatus, error ) {
      console.log( "Request Failed: " + textStatus + ", " + error );
  });
}