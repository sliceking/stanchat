<?php


$username = trim(filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING));
$password = trim(filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING));

$output['username'] = $username;

try{

    $results = $dbh->query("SELECT login FROM `users` WHERE login = '$username' and pass = '$password'");
    $login_result = $results->fetchAll(PDO::FETCH_ASSOC);

    if (isset($login_result[0])){
        $output = ['success' => true, 'data' => $login_result];
        $active_user = $dbh->query("UPDATE `users` SET `active` = '1' WHERE `login` = '$username'");
        $_SESSION['users_id'] = $output['data'][0]['login'];
    } else{
        $output = ['success' => true, 'data' => 'invalid login information'];
    }


} catch(Exception $e){
    $outpt['exception'] = 'dead';
    exit;

}

//session_start();
//require('mysql_connect.php');
//$username = trim(filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING));
//$password = trim(filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING));
//$query = "SELECT * FROM `users` WHERE login = '$username' and pass = '$password'";
//$query2 = "UPDATE `users` SET `active` = '1' WHERE `login` = '$username'";
//$result = mysqli_query($conn, $query);
//$output = ['success'=>false];
//if(mysqli_num_rows($result)) {
//    while ($row = mysqli_fetch_assoc($result)) {
//        $output['data'][] = $row;
//        $output = ['success' => true, 'user_id' => $output['data'][0]['login']];
//        $_SESSION['users_id']= $output['user_id'];
//    }
//    if(mysqli_query($conn, $query2)){
//        $output['active'][] = true;
//    };
//}
//print(json_encode($output));

?>