appControllers.controller('AppController', ['$rootScope', '$scope', '$log', '$state',
  function ($rootScope, $scope, $log, $state) {
    console.log('app controller');
    $state.go('home');

    $rootScope.showFilm = function() {
      $state.go('film');
    };

    $rootScope.showHome = function() {
      $state.go('home');
    };

    $rootScope.showContact = function() {
      $state.go('contact');
    };

  }]);
