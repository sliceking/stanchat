<?php
session_start();
require('mysql_connect.php');
$username = trim(filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING));
$password = trim(filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING));
$query = "SELECT * FROM `users` WHERE login = '$username' and pass = '$password'";
$result = mysqli_query($conn, $query);
$output = ['success'=>false];
if(mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $output['data'][] = $row;
        $output = ['success' => true, 'user_id' => $output['data'][0]['id']];
        $_SESSION['users_id']= $output['user_id'];
    }
}
print(json_encode($output));

?>