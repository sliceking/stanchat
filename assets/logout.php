<?php
    session_start();
    require('mysql_connect.php');
    $username = $_SESSION['users_id'];
    $query = "UPDATE `users` SET `active` = '0' WHERE `login` = '$username'";
    if(mysqli_query($conn, $query)){
        $data['active_reset'][]=true;
        session_unset();
        session_destroy();
    };
    print(json_encode($data));

?>