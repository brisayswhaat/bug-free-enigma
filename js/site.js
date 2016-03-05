jQuery(document).ready(function($) {
    var feed = new Instafeed ({
        clientId: '858621da82bd4f5a990fe2cc9a0d953a',
        accessToken: '17133141.858621d.d2eb21121c114590bd9607dd338b9463',
        target: 'instafeed',
        get: 'user',
        userId: 17133141,
        limit: 9,
        resolution: 'standard_resolution',
        sortBy: 'most-recent'
    });

    feed.run();
});
