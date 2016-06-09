<?php

include('connection.php');
$username = $_SESSION['users_id'];

try{

    $results = $dbh->query("UPDATE  `users` SET  `active`='0' WHERE  `login` =  '$username'");
    $output = ['success' => true, 'logout' => 'yay'];
    session_unset();
    session_destroy();
    $output = json_encode($output);
    print_r($output);
    exit;

}catch(Exception $e){
    $outpt['exception'] = 'dead';
    exit;
}

//    session_start();
//    require('mysql_connect.php');
//    $username = $_SESSION['users_id'];
//    $query = "UPDATE `users` SET `active` = '0' WHERE `login` = '$username'";
//    if(mysqli_query($conn, $query)){
//        $data['active_reset'][]=true;
//        session_unset();
//        session_destroy();
//    };
//    print(json_encode($data));

?>