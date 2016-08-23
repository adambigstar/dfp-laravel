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

  <script src="/js/app.js"></script>

  @yield('javascripts')

</head>
<body ng-app="app" ng-controller="AppController">

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">BIGSTAR TV</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Dashboard</a></li>
          <li><a href="#">Settings</a></li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">Help</a></li>
        </ul>
        <form class="navbar-form navbar-right">
          <input type="text" class="form-control" placeholder="Search...">
        </form>
      </div>
    </div>
  </nav>

  <div class="container">
    @yield('content')
  </div>
</body>
</html>