
var app = angular.module('app', ['ui.router', 'ngRoute', 'ngAnimate', 'app-controllers']);

app.config(function($stateProvider, $urlRouterProvider) {

  $urlRouterProvider.otherwise("film");

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

app.config(function($interpolateProvider) {
  $interpolateProvider.startSymbol('<%');
  $interpolateProvider.endSymbol('%>');
});
