
$(document).ready(function() {
    "use strict";


    var window_width = $(window).width(),
        window_height = window.innerHeight,
        header_height = $(".default-header").height(),
        header_height_static = $(".site-header.static").outerHeight(),
        fitscreen = window_height - header_height;

    $(".fullscreen").css("height", window_height)
    $(".fitscreen").css("height", fitscreen);

    var htmlString = "";
    var apiKey = 'AIzaSyBVborVAiSYlLbIOtrzvCfU79yL6ToEnfA';
    var channelID = 'UC3KyadRK0Idn_zRepTNcdTA';
    var maxResults = 999;

    $.getJSON('https://www.googleapis.com/youtube/v3/search?key=' + apiKey + '&channelId=' + channelID + '&part=snippet,id&order=date&maxResults=' + (maxResults > 1 ? 1 : maxResults), function(data) {
        $.each(data.items, function(i, item) {
            var videoID = item['id']['videoId'];
            var title = item['snippet']['title'];
            var videoEmbed = "https://www.youtube.com/embed/" + videoID;
            htmlString += '<iframe class="embed-responsive-item" width="560" height="315" src="' + videoEmbed + '" frameborder="0"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        });
        $('#videoYt').html(htmlString);
    });
});

$(window).scroll(function(){
    if($(document).scrollTop() > 10) {
        $('#arrowEsc').hide();
    } else {
        $('#arrowEsc').show();
    }

});
