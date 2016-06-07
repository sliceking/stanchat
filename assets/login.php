<?php

//session_start();
//
//$username = trim(filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING));
//$password = trim(filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING));
//
//try{
//    $results = $dbh->query("SELECT * FROM `users` WHERE login = '$username' and pass = '$password'");
//    $data = $results;
//
//} catch(Exception $e){
//    $data['exception'] = $e->getMessage();
//    exit;
//
//}

session_start();
require('mysql_connect.php');
$username = trim(filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING));
$password = trim(filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING));
$query = "SELECT * FROM `users` WHERE login = '$username' and pass = '$password'";
$query2 = "UPDATE `users` SET `active` = '1' WHERE `login` = '$username'";
$result = mysqli_query($conn, $query);
$data = ['success'=>false];
if(mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data['data'][] = $row;
        $data = ['success' => true, 'user_id' => $output['data'][0]['login']];
        $_SESSION['users_id']= $data['user_id'];
    }
    if(mysqli_query($conn, $query2)){
        $data['active'][] = true;
    };
}
//print(json_encode($output));

?>