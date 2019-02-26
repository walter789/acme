<?php
$conn = mysqli_connect("localhost:3306","root","","demo");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$fn = $_POST['fn'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$sql = "INSERT INTO quote(name, email, message) VALUES('".$fn."','".$email."','".$msg."')";
if (mysqli_query($conn, $sql)) { 
    echo "New record created successfully";
} else {
    echo "Error: ";
}
mysqli_close($conn);
?>