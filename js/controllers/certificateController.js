app.controller('certificateController', function($scope, $http, $window, transferService) {
  $scope.title= "This is the main screen of the App try this";
  $scope.next= "This is the next line";
  $scope.check2 = "THIS SHOULD WORK";
  $scope.currentDate = new Date();


  $scope.products = transferService.getProducts();
  var username = transferService.getUsername();
  $scope.data = [];
  $scope.crns = [];
  $scope.crns2 = [];

  $scope.init = function(){

  //  alert("Works here");
     for(var i = 0; i < $scope.products.length; i++) {
    
    //     alert($scope.products[i]);
        var productID = $scope.products[i];
         $http.post("functions/selectCertificate.php", {'productID':productID, 'username':username}).then(function(response){  
    //       $scope.names[i] = response.data;
         //alert(response.data);
         $scope.data.push(response.data);
         //alert(response.data[0].CRN);
         //Will need to change this for new data (yes or no)
         if(response.data[0].CRN == "1"){
            $scope.crns.push("CRN");
            $scope.crns2.push("CRN number: OD21281.5 Per TSSA B51")
         } else {
           $scope.crns.push(" ");
           $scope.crns2.push(" ");
         }

         });

    }

  }
  

});
