<?php
include "config.php";

$data = json_decode(file_get_contents("php://input"));

$request = $data->request;

// // Fetch All records
if ($request == 1) {
    echo "Entered request 1 successfully";

    $username = $data->username;
    $password = $data->password;

    $sql = "SELECT username, password FROM `verein` WHERE username = \"$username\" AND password = \"$password\"";
    $user_data = mysqli_query($link, $sql);
    if (mysqli_num_rows($user_data) == 0) {
        echo "Gerade 0 Ergebnisse.";
    } else {
        echo "Sollte geklappt haben";
    }

    exit;
}

// add person
if ($request == 2) {
    echo "Entered request 2 successfully";

    $fname = $data->vorname;
    $lname = $data->nachname;
    $phone = $data->telefon;
    $plz = $data->plz;
    $city = $data->ort;
    $address = $data->adresse;
    $eID = $data->eID;

    $sql = "INSERT INTO `teilnehmer`(name, vorname, telefonnummer, plz, ort, adresse, eID) VALUES(\"$lname\", \"$fname\", \"$phone\", \"$plz\", \"$city\", \"$address\", \"$eID\")";

    if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . mysqli_error($link);
    }

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
