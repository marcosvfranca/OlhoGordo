var feed = new Instafeed({
    accessToken: 'IGQVJXU0JmY1psUXBBR3F0ZAE9ScmVWbTNWamJYRGlNVUctRGRmYkhmNnJWSy1fcmxNeHFRODJfcl9tZAnlnd3p4dXp0c2VEc2FOZAjkxYXA0RXdkbjlpU0hrQ0tHckIzRGtNTy02bERNSU1DUVB5WDhnOAZDZD',
    limit: 8,
    template: '<div class="col-lg-3 col-md-6 col-sm-6 single-blog varrerFeed"  title="{{caption}}">' +
        '                <div class="thumb">' +
        '                    <img alt="{{caption}}" class="img-fluid" src="{{image}}">' +
        '                </div>' +
        '                <p class="date" data="{{timestamp}}"></p>' +
        // '                <a href="{{link}}" target="_blank"><h4 class="textOpen" data-text="{{caption}}"></h4></a>' +
        '                <p class="textOpen" data-text="{{caption}}">{{caption}}</p>' +
        // '                <div class="meta-bottom d-flex justify-content-between">' +
        // '                    <p><span class="lnr lnr-heart"></span> 15 Likes</p>' +
        // '                    <p><span class="lnr lnr-bubble"></span> 02 Comments</p>' +
        // '                </div>' +
        '            </div>',
    after: function () {
        $('.varrerFeed').each(function () {
            var p = $(this).find('p.date');
            var data= new Date(p.attr('data'));
            p.text((data.getUTCDate() > 9 ? data.getUTCDate() : '0' + data.getUTCDate()) + '/'
                    + (data.getMonth() > 9 ? data.getMonth() : '0' + data.getMonth()) + '/'
                    + data.getFullYear());

            var elemento = $(this).find('p.textOpen');
            var text = elemento.attr('data-text').substr(0, 40);
            var textSplit = text.split(' ');
            textSplit.splice(textSplit.length - 1, 1);
            elemento.text(textSplit.join(' ') + '...');
        });
    }

});
feed.run();

