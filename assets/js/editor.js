$(document).ready(function() {
    $('#video').change(function() {
      console.log('caca');
      var video = $('#video').val();
      if ( video.indexOf( "youtube" ) >= 0 ) {
        video = video.substring( video.indexOf( "v=" ) + 2 );
        video = "http://www.youtube.com/embed/" + video + "?html5=1&autoplay=1&autohide=0&controls=0&enablejsapi=1&showinfo=0";
        $('#
        leditor').html("<object width=\"640\" height=\"360\"><param name=\"movie\" value=\"" + video + "\"/><param name=\"allowFullScreen\" value=\"false\"/><param name=\"allowscriptaccess\" value=\"always\"/><embed width=\"640\" height=\"360\" src=\"" + video + "\" class=\"youtube-player\" type=\"text/html\" allowscriptaccess=\"always\" allowfullscreen=\"false\"/></object>");
      }
    });
});
