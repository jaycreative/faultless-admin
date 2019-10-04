var app = angular.module("myApp", ["ngRoute"]);

app.config(function ($routeProvider) { 
    $routeProvider 
      .when('/', { 
        templateUrl: 'views/dashboard.php',
        controller: "DashboardController" 
      })
      .when('/product', { 
        templateUrl: 'views/product.php',
        controller: "ProductController"
      })
      .when('/search', { 
        templateUrl: 'views/search.php'
      })
      .when('/profile', { 
        templateUrl: 'views/profile.php',
        controller: "ProfileController"
      })
      .otherwise({
          template: "<h1>Broken Link selected!</h1>"
      });
 
  });