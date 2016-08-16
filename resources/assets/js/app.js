
var app = angular.module('app', ['ui.router', 'ngRoute', 'ngAnimate', 'ng-jwplayer', 'app-controllers']);

app.config(function($stateProvider, $urlRouterProvider) {

  $urlRouterProvider.otherwise("home");

  $stateProvider
    .state('home', {
      url: "/home",
      templateUrl: "/home"
    })
    .state('film', {
      url: "/film",
      templateUrl: "film",
    });
});

// app.config(['$interpolateProvider', function($interpolateProvider) {
//   $interpolateProvider.startSymbol('<%');
//   $interpolateProvider.endSymbol('%>');
// }]);

app.config(function($interpolateProvider) {
  $interpolateProvider.startSymbol('//');
  $interpolateProvider.endSymbol('//');
});
