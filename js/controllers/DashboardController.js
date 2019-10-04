app.controller('DashboardController', function($scope, $http) {
  $scope.title= "This is the main screen of the App try this";
  $scope.next= "This is the next line";
  //$scope.id = 'D432223';

  $scope.displayData = function(){  
    $http.get("functions/selectDash.php", {'id':$scope.id}).then(function(response){  
      alert(response.data);   
      $scope.names = response.data;}
    );  
  }
  
  //
  $scope.init = function(id1, id2, id3){
    //$scope.id = id;
    $http.post("functions/selectDash.php", {'id':id1}).then(function(response){  
      $scope.names1 = response.data;
     //alert($scope.names);
    });
    $http.post("functions/selectDash.php", {'id':id2}).then(function(response){  
      $scope.names2 = response.data;
     //alert($scope.names);
    });
    $http.post("functions/selectDash.php", {'id':id3}).then(function(response){  
      $scope.names3 = response.data;
     //alert($scope.names);
    });
  };

  $scope.addCompany = function(){  
    var username = document.getElementById('username').value; //
    var companyName = document.getElementById('CompanyName').value; //
    var location = document.getElementById('location').value;  //
    var firstName = document.getElementById('firstName').value;
    var lastName = document.getElementById('lastName').value; //
    var email = document.getElementById('email').value; //
    var phoneNumber = document.getElementById('phoneNumber').value; //
    var website = document.getElementById('website').value; //
    var pic = document.getElementById('pic').value; //
    alert(firstName);
    $http.post("functions/addCompany.php", {'username':username, 'companyName':companyName, 'location':location, 'firstName':firstName, 'lastName':lastName, 'email':email, 'phoneNumber':phoneNumber, 'website':website, 'pic':pic}).then(function(response){  
       alert('new Company Added!');   
       $scope.names = response.data;}
     );  
  };

  $scope.addProduct = function(){  
    var productID = document.getElementById('productID').value; //
    var PRusername = document.getElementById('PRusername').value; //
    var customerPO = document.getElementById('customerPO').value;  //
    var orderNum = document.getElementById('orderNum').value;
    var part = document.getElementById('part').value; //
    var fittings = document.getElementById('fittings').value; //
    var lastInspection = document.getElementById('lastInspection').value; //
    var nextInspection = document.getElementById('nextInspection').value; //
    var testedBy = document.getElementById('testedBy').value; //
    var type = document.getElementById('type').value;  //
    var pressure = document.getElementById('pressure').value;
    var diameter = document.getElementById('diameter').value; //
    var length = document.getElementById('length').value; //
    var temperature = document.getElementById('temperature').value; //
    var crn = document.getElementById('crn').value; //
    var inService = document.getElementById('inService').value; //
    $http.post("functions/addProduct.php", {'productID':productID, 'PRusername':PRusername, 'customerPO':customerPO, 'orderNum':orderNum, 'part':part, 'fittings':fittings, 'lastInspection':lastInspection, 'nextInspection':nextInspection, 'testedBy':testedBy, 'type':type, 'pressure':pressure, 'diameter':diameter, 'length':length, 'temperature':temperature, 'crn':crn, 'inService':inService}).then(function(response){  
       alert(response.data);   
       $scope.names = response.data;}
     );  
  };

  $scope.addHose = function(){  
    var newHose = document.getElementById('newHose').value; //
    var url = document.getElementById('url').value; //
    var description = document.getElementById('description').value;  //
    $http.post("functions/addHose.php", {'newHose':newHose, 'url':url, 'description':description}).then(function(response){  
       alert(response.data);   
       $scope.names = response.data;}
     );  
  };

  //may need to call 2 additional function calls for the other collapseables

  //main Point of this controller is to call and display the accordians.
  //Accordings for external are currently as such:

//Ideally, we will store the USername in a variable, that we can call when needed.
//That variable will be connected to the controller (prob through ng-model)
//THen, we pass that variable through the function and return data.

//Will need to change the GROUP BY value later on

});

