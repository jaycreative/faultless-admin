app.controller('ProductController', function($scope, $http) {
  $scope.title= "This is the main screen of the App try this";
  $scope.next= "This is the next line";

  $scope.init = function(id, hoseType){
    //$scope.id = id;
     $http.post("functions/selectProducts.php", {'id':id, 'hoseType':hoseType}).then(function(response){  
       $scope.names = response.data;
      //alert($scope.names);
     });
};

});

