<?php

try{
    $results = $dbh->query("SELECT `login` FROM `users` WHERE `active` = '1'");
    $output = ['success' => true, 'data' => $results->fetchAll(PDO::FETCH_ASSOC)];
}catch(Exception $e){
    $output = ['success' => false, 'fetch_users' => 'fail'];
}

//
//session_start();
//require('mysql_connect.php');
//$query = "SELECT `login` FROM `users` WHERE `active` = '1'";
//$result = mysqli_query($conn, $query);
//$output = ['success'=>false];
//if(mysqli_num_rows($result)) {
//    $output = ['success' => true];
//    while ($row = mysqli_fetch_assoc($result)) {
//        $output['data'][] = $row;
//    }
//}
//print(json_encode($output));

?>