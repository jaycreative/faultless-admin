<?php
 //select dashboard collapseables
 $connect = mysqli_connect("localhost", "root", "LastkingS01", "Faultless");  
 $data = json_decode(file_get_contents("php://input"));
 $newHose = mysqli_real_escape_string($connect, $data->newHose);
//$id_num = mysqli_real_escape_string($connect, $data->id);
 //$id_num = mysqli_real_escape_string($data->id);

// $idd = mysqli_real_escape_string($connect, 'ID432223');

 $output = array();

 $sql = "SELECT * FROM hose WHERE HoseType = ?";
 //fix this into a join
 //$query = "SELECT * FROM product";
//  $result = mysqli_query($connect, $query);

//   if(mysqli_num_rows($result) > 0)
//   {
//        echo "1";
//   }  else {
//       echo "0";
//   }

  $stmt = mysqli_stmt_init($connect);
  if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "SQL statement failed!";
   } else {
        mysqli_stmt_bind_param($stmt, "s", $newHose);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        while ($row = mysqli_fetch_assoc($result)) {
             $output[] = $row;
        }

        //echo json_encode($output);
        if(empty($output)){
            echo "0";
        } else {
            echo "1";
        }
   }
 ?>
