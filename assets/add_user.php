<?php
session_start();
require('mysql_connect.php');
$username = trim(filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING));
$password = trim(filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING));
$query = "INSERT INTO `users`(`login`, `pass`, `active`) VALUES ('$username','$password','1')";
//$result = mysqli_query($conn, $query);
$output = ['success'=>false];
mysqli_query($conn,$query);
if(mysqli_affected_rows($conn)){
    $output = ['success' => true, 'id' => mysqli_insert_id($conn)];
    $_SESSION['users_id']= $username;
}
//if(mysqli_num_rows($result)) {
//    $output = ['success'=>true];
//}
print(json_encode($output));

?>