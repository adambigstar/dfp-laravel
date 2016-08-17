appControllers.controller('FilmController', ['$scope', '$log', '$sce', 'jwplayerService',
  function ($scope, $log, $sce, jwplayerService) {

    $scope.file = $sce.trustAsResourceUrl('http://content.jwplatform.com/videos/hWF9vG66-TNpruJId.mp4');
    //$scope.file = $sce.trustAsResourceUrl('https://youtu.be/zSWdZVtXT7E');
    $scope.deviceType = 'desktop';
    $scope.device = 'desktop';
    $scope.mediaId = 'VID0011223344';
    $scope.width = 480;
    $scope.height = 270;
    $scope.mediaTitle = 'jwplayer test video';
    $scope.mediaDescription = 'description';
    $scope.streamPageUrl = 'http://content.jwplatform.com/videos/hWF9vG66-TNpruJId.mp4';
    $scope.imageUrl = '//content.jwplatform.com/thumbs/hWF9vG66-480.jpg';
    $scope.mediaPageUrl = 'http://www.bigstar.tv';
    $scope.ott = 'bigstar';
    $scope.genres = 'animation';
    $scope.partners = 'acme';
    $scope.client = "googima";

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
      '&impl=s&' +
      'gdfp_req=1&' +
      'env=vp&' +
      'output=vast&' +
      'unviewed_position_start=1' +
      '&url=' + $scope.streamPageUrl + '&' +
      'description_url=' + $scope.mediaPageUrl + '&' +
      'correlator=bcf262375404d925e970013a4f390b87';

    // 'partners%3D' + $scope.partners + '%26' +
    // 'genres%3' + $scope.genres + '%26' +
    // 'device%3D' + $scope.device + '%26' +
    // 'ott%3D' + $scope.ott +

    $scope.schedule = {
      'adbreak-preroll1': {
        tag: $scope.tag,
        offset: 'pre',
      },
      'adbreak-preroll2': {
        tag: $scope.tag,
        offset: 'pre'
      },
      'adbreak-preroll3': {
        tag: $scope.tag,
        offset: 'pre'
      },
      'adbreak-midroll1': {
        tag: $scope.tag,
        offset: 15
      },
      'adbreak-midroll2': {
        tag: $scope.tag,
        offset: 30
      },
      'adbreak-midroll3': {
        tag: $scope.tag,
        offset: 45
      },
      'adbreak-midroll4': {
        tag: $scope.tag,
        offset: 60
      },
    };

    $scope.options = {
      autostart: true,
      width: "640",
      height: "360",
      image: $scope.imageUrl,
      title: $scope.mediaTitle,
      description: $scope.mediaDescription,
      mediaid: $scope.mediaId,
      advertising: {
        client: $scope.client,
        admessage: 'The ad will end in xx seconds',
        skipoffset: "0",
        cuetext: 'Advertisement',
        skipmessage: 'Skip ad in xx',
        skiptext: 'Skip',
        vpaidmode: 'insecure',
        companiondiv: {
          id: 'companion-ad'
        },
        schedule: $scope.schedule
      }
    };

    $scope.$on('ng-jwplayer-ready', function(event, args) {
      $log.info('Player ' + args.playerId + ' ready. Playing video');
      var player = jwplayerService.myPlayer[args.playerId];
      //player.play(true);
    });

  }]);
