<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_database";

$user_id = $_POST['user_id'];
$user_name = $_POST['user_name'];
$user_last_name = $_POST['user_last_name'];
$user_email = $_POST['user_email'];

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}

//Insert values
$sql = "insert into user_data (user_name, user_last_name, user_email) 
      values ('" . $user_name . "', '" . $user_last_name . "', '" . $user_email . "')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>