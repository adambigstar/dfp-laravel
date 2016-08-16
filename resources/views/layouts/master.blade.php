<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/images/favicon.ico">

  <title>BIGSTAR TV - @yield('title')</title>

  <link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/app.css">
  @yield('stylesheets')

  <script src="/vendor/jquery/dist/jquery.min.js"></script>
  <script src= "/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src= "/vendor/angular/angular.min.js"></script>
  <script src= "/vendor/angular-animate/angular-animate.min.js"></script>
  <script src= "/vendor/angular-aria/angular-aria.min.js"></script>
  <script src= "/vendor/angular-loader/angular-loader.min.js"></script>
  <script src= "/vendor/angular-messages/angular-messages.min.js"></script>
  <script src= "/vendor/angular-mocks/angular-mocks.js"></script>
  <script src= "/vendor/angular-resource/angular-resource.min.js"></script>
  <script src= "/vendor/angular-route/angular-route.min.js"></script>
  <script src= "/vendor/angular-sanitize/angular-sanitize.min.js"></script>
  <script src= "/vendor/angular-touch/angular-touch.min.js"></script>
  <script src="/vendor/angular-ui-router/release/angular-ui-router.js"></script>

  <script src="/vendor/jwplayer/jwplayer.js"></script>
  <script>jwplayer.key="GE2JX7e69GX40av0azfSavIhSG2BsawITMRrug"</script>
  <script src="/vendor/ng-jwplayer/jwplayer.js"></script>

  <script src="/js/app.js"></script>

  @yield('javascripts')

</head>
<body ng-app="app" ng-controller="AppController">
<div class="site-wrapper">

  <div class="site-wrapper-inner">

    <div class="cover-container">

      <div class="masthead clearfix">
        <div class="inner">
          <h3 class="masthead-brand">BIGSTAR TV</h3>
          <nav>
            <ul class="nav masthead-nav">
              <li><a href ng-click="showHome()">Home</a></li>
              <li><a href ng-click="showFilm()">Film</a></li>
              <li><a href ng-click="showContact()">Contact</a></li>
            </ul>
          </nav>
        </div>
      </div>

      <div class="inner cover">
        @yield('content')
      </div>

      <div class="mastfoot">
        <div class="inner">
          <p>&copy; 2016 <a href="bigstar.tv">BIGSTAR TV</a></p>
        </div>
      </div>

    </div>

  </div>

</div>

</body>
</html>