appControllers.controller('FilmController', ['$scope', '$log', '$sce', 'jwplayerService',
  function ($scope, $log, $sce, jwplayerService) {
    $scope.file = $sce.trustAsResourceUrl('http://content.jwplatform.com/videos/hWF9vG66-TNpruJId.mp4');
    $scope.deviceType = 'desktop';
    $scope.device = 'desktop';
    $scope.mediaId = 'VID0011223344';
    $scope.width = 480;
    $scope.height = 270;
    $scope.mediaTitle = 'jwplayer test video';
    //var streamPageUrl = '//www.youtube.com/watch?v=8CjdLYBDUqw'
    $scope.streamPageUrl = 'http://content.jwplatform.com/videos/hWF9vG66-TNpruJId.mp4';
    $scope.imageUrl = '//content.jwplatform.com/thumbs/hWF9vG66-480.jpg';
    $scope.mediaPageUrl = 'https://content.jwplatform.com/videos';
    $scope.ott = 'bigstar';
    $scope.genres = 'animation';
    $scope.partners = 'acme';

    $scope.tag = 'http://pubads.g.doubleclick.net/gampad/ads?' +
      'sz=8x8&' +
      'iu=/316192035/preroll&' +
      'cust_params=' +
      'devicetype%3D' + $scope.deviceType + '%26' +
      'width%3D' + $scope.width + '%26' +
      'height%3D' + $scope.height + '%26' +
      'media_id%3D' + $scope.mediaId + '%26' +
      'media_title%3D' + $scope.mediaTitle + '%26' +
      'stream_page_url%3D' + $scope.streamPageUrl + '%26' +
      'page_url%3D' + $scope.mediaPageUrl + '%26' +
      'partners%3D' + $scope.partners + '%26' +
      'genres%3' + $scope.genres + '%26' +
      'device%3D' + $scope.device + '%26' +
      'ott%3D' + $scope.ott +
      '&impl=s&' +
      'gdfp_req=1&' +
      'env=vp&' +
      'output=vast&' +
      'unviewed_position_start=1' +
      '&url=' + $scope.streamPageUrl + '&' +
      'description_url=' + $scope.mediaPageUrl + '&' +
      'correlator=bcf262375404d925e970013a4f390b87';

    $scope.schedule =
      [{
        'adbreak-preroll': {
          tag: $scope.tag,
          offset: 'pre'
        },
        'adbreak-preroll': {
          tag: $scope.tag,
          offset: 'pre'
        },
        'adbreak-preroll': {
          tag: $scope.tag,
          offset: 'pre'
        },
        'adbreak-midroll': {
          tag: $scope.tag,
          offset: 480
        },
        'adbreak-midroll': {
          tag: $scope.tag,
          offset: 960
        },
        'adbreak-midroll': {
          tag: $scope.tag,
          offset: 1440
        },
        'adbreak-midroll': {
          tag: $scope.tag,
          offset: 1920
        },
      }];

    $scope.options = {
      height: 270,
      width: 480,
      file: $scope.streamPageUrl,
      image: $scope.imageUrl,
      advertising: {
        client: 'googleima',
        schedule: {
          'adbreak-preroll': {
            tag: $scope.tag,
            offset: 'pre'
          },
          'adbreak-preroll': {
            tag: $scope.tag,
            offset: 'pre'
          },
          'adbreak-preroll': {
            tag: $scope.tag,
            offset: 'pre'
          },
          'adbreak-midroll': {
            tag: $scope.tag,
            offset: 480
          },
          'adbreak-midroll': {
            tag: $scope.tag,
            offset: 960
          },
          'adbreak-midroll': {
            tag: $scope.tag,
            offset: 1440
          },
          'adbreak-midroll': {
            tag: $scope.tag,
            offset: 1920
          },
        },
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

    $scope.$on('ng-jwplayer-ready', function(event, args) {
      $log.info('Player ' + args.playerId + ' ready. Playing video');
      var player = jwplayerService.myPlayer[args.playerId];
      player.play(true);
    });

  }]);
