<?php
include "config.php";

$data = json_decode(file_get_contents("php://input"));

$request = $data->request;

// // Fetch All records
// if($request == 1){
//   $userData = mysqli_query($con,"select * from users order by id desc");

//   $response = array();
//   while($row = mysqli_fetch_assoc($userData)){
//     $response[] = $row;
//   }

//   echo json_encode($response);
//   exit;
// }

// add person
if($request == 2){
    echo "Entered request 2 successfully";
    
    $fname = $data->fname;
    $lname = $data->lname;
    $phone = $data->phone;
    $plz = $data->plz;
    $city = $data->city;
    $address = $data->address;
    $eID = $data->eID;

    $sql = "INSERT INTO `teilnehmer`(name, vorname, telefonnummer, plz, ort, adresse, eID) VALUES(\"$lname\", \"$fname\", \"$phone\", \"$plz\", \"$city\", \"$address\", \"$eID\")";
    
    if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . mysqli_error($link);
      }

    // mysqli_query($link, "INSERT INTO teilnehmer(name, vorname, telefonnummer, plz, ort, adresse, eID) VALUES('".$lname."','".$fname."','".$phone."', '".$plz."', '".$city."', '".$address."', '".$eID."')");
    
    // echo "Insert successfully";

    exit;
  }

// Add record
// if($request == 2){
//   $username = $data->username;
//   $name = $data->name;
//   $email = $data->email;

//   $userData = mysqli_query($con,"SELECT * FROM users WHERE username='".$username."'");
//   if(mysqli_num_rows($userData) == 0){
//     mysqli_query($con,"INSERT INTO users(username,name,email) VALUES('".$username."','".$name."','".$email."')");
//     echo "Insert successfully";
//   }else{
//     echo "Username already exists.";
//   }

//   exit;
// }

// // Update record
// if($request == 3){
//   $id = $data->id;
//   $name = $data->name;
//   $email = $data->email;

//   mysqli_query($con,"UPDATE users SET name='".$name."',email='".$email."' WHERE id=".$id);
 
//   echo "Update successfully";
//   exit;
// }

// // Delete record
// if($request == 4){
//   $id = $data->id;

//   mysqli_query($con,"DELETE FROM users WHERE id=".$id);

//   echo "Delete successfully";
//   exit;
// }
?>