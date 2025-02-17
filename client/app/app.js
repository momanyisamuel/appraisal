"use strict";

// Declare app level module which depends on views, and core components
angular
  .module("appraisal", ["ngRoute", "appraisal.signup", "appraisal.login", "appraisal.home"])
  .config([
    "$locationProvider",
    "$routeProvider",
    function ($locationProvider, $routeProvider) {
      $locationProvider.hashPrefix("!");

      $routeProvider.otherwise({ redirectTo: "/login" });
    }
  ]);
