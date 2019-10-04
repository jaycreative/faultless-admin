app.controller('ProfileController', function($scope, $http) {
  $scope.title= "This is the main screen of the App try this";
  $scope.next= "This is the next line";

  $scope.init = function(id){
    //$scope.id = id;
    $http.post("functions/selectProfile.php", {'id':id}).then(function(response){  
      $scope.names = response.data;
     //alert($scope.names);
    });
};

//need to include function to get # of hoses owned
//Need to also fix the problem with the new tabs opening up new sections

  // $scope.tab1 = function() {
  //   //var a = document.getElementById("tab1");
  //   //var x = document.getElementById("tab2");
  //   //var x = document.getElementById("tab3");
  //   //var x = document.getElementById("tab4");{
  //   document.getElementById("tab1").style.display = "block";
  //   document.getElementById("tab2").style.display = "none";
  //   document.getElementById("tab3").style.display = "none";
  //   document.getElementById("tab4").style.display = "none";
  // };

  // $scope.tab2 = function() {
  //   //var a = document.getElementById("tab1");
  //   //var x = document.getElementById("tab2");
  //   //var x = document.getElementById("tab3");
  //   //var x = document.getElementById("tab4");{
  //   document.getElementById("tab1").style.display = "none";
  //   document.getElementById("tab2").style.display = "block";
  //   document.getElementById("tab3").style.display = "none";
  //   document.getElementById("tab4").style.display = "none";
  // };

//   function myFunction() {
//     var x = document.getElementById("myDIV");
//     if (x.style.display === "none") {
//       x.style.display = "block";
//     } else {
//       x.style.display = "none";
//     }
//   }

//   function myFunction() {
//     var x = document.getElementById("myDIV");
//     if (x.style.display === "none") {
//       x.style.display = "block";
//     } else {
//       x.style.display = "none";
//     }
//   }

//   function myFunction() {
//     var x = document.getElementById("myDIV");
//     if (x.style.display === "none") {
//       x.style.display = "block";
//     } else {
//       x.style.display = "none";
//     }
//   }
  

});

