<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <script async="async" src="https://www.googletagservices.com/tag/js/gpt.js"></script>
        {{--<script src="https://content.jwplatform.com/libraries/YZYQJ1FP.js"></script>--}}
        <script src="https://content.jwplatform.com/libraries/0Ev3Y9Qw.js"></script>
        <script>jwplayer.key="ABCdeFG123456SeVenABCdeFG123456SeVen==";</script>

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
              <img src='http://pubads.g.doubleclick.net/gampad/ad?iu=/316192035/preroll&sz=8x8&t=&c=12345678'/>
              <div id="myElement"></div>
              <div id="companion-ad"></div>

                <script>

                    var deviceType = 'desktop';
                    var device = 'desktop';
                    var mediaId = 'VID0011223344';
                    var width = 480, height = 270;
                    var mediaTitle = 'jwplayer test video';
                    //var streamPageUrl = '//www.youtube.com/watch?v=8CjdLYBDUqw'
                    var streamPageUrl = 'https://content.jwplatform.com/videos/hWF9vG66-TNpruJId.mp4';
                    var imageUrl = '//content.jwplatform.com/thumbs/hWF9vG66-480.jpg';
                    var mediaPageUrl = 'https://content.jwplatform.com/videos';
                    var ott = 'bigstar';
                    var genres = 'animation';
                    var partners = 'acme';

                    var tag = 'http://pubads.g.doubleclick.net/gampad/ads?' +
                        'sz=8x8&' +
                        'iu=/316192035/preroll&' +
                        'cust_params=' +
                        'devicetype%3D' + deviceType + '%26' +
                        'width%3D' + width + '%26' +
                        'height%3D' + height + '%26' +
                        'media_id%3D' + mediaId + '%26' +
                        'media_title%3D' + mediaTitle + '%26' +
                        'stream_page_url%3D' + streamPageUrl + '%26' +
                        'page_url%3D' + mediaPageUrl + '%26' +
                        'partners%3D' + partners + '%26' +
                        'genres%3' + genres + '%26' +
                        'device%3D' + device + '%26' +
                        'ott%3D' + ott +
                        '&impl=s&' +
                        'gdfp_req=1&' +
                        'env=vp&' +
                        'output=vast&' +
                        'unviewed_position_start=1' +
                        '&url=' + streamPageUrl + '&' +
                        'description_url=' + mediaPageUrl + '&' +
                        'correlator=bcf262375404d925e970013a4f390b87';

                    var schedule =
                      [{
                        'adbreak-preroll': {
                          tag: tag,
                          offset: 'pre'
                        },
                        'adbreak-preroll': {
                          tag: tag,
                          offset: 'pre'
                        },
                        'adbreak-preroll': {
                          tag: tag,
                          offset: 'pre'
                        },
                        'adbreak-midroll': {
                          tag: tag,
                          offset: 480
                        },
                        'adbreak-midroll': {
                          tag: tag,
                          offset: 960
                        },
                        'adbreak-midroll': {
                          tag: tag,
                          offset: 1440
                        },
                        'adbreak-midroll': {
                          tag: tag,
                          offset: 1920
                        },
                      }];

                      var playerConfig = {
                        file: streamPageUrl,
                        image: imageUrl,
                        advertising: {
                          client: 'googleima',
                          schedule: schedule,
                          admessage: 'The ad will end in xx seconds',
                          skipoffset: 15,
                          cuetext: 'Advertisement',
                          skipmessage: 'Skip ad in xx',
                          skiptext: 'Skip',
                          vpaidmode: 'enabled',
                          companiondiv: {
                            id: 'companion-ad'
                          }

                        }
                      };

                      jwplayer("myElement").setup(playerConfig);

                </script>

            </div>
        </div>
    </body>
</html>
