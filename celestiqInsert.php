<?php
include 'connection.php'; 

$First_Name=$_POST["First_Name"];
$Last_Name=$_POST["Last_Name"];
$Email_Address=$_POST["Email_Address"];
$Contact_Number=$_POST["Contact_Number"];
$Password=$_POST["password"];
$Confirm_Password=$_POST["ConfirmPassword"];
$date=date("y-m-d");
$Date_Time=date("y-m-d h:i:sa");

$sql = "INSERT INTO login(First_Name,Last_name,Email_Address,Contact_Number,Password,date,Date_Time)
       VALUES('$First_Name','$Last_Name','$Email_Address','$Contact_Number','$Password','$date','$Date_Time')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
