<?php

session_start();

include('connection.php');

$output = ['success' => false];
$output['post']= $_POST['operation'];

    if ($_POST['operation'] == 'login') {
        include('login.php');

    }elseif ($_POST['operation'] == 'add_user'){
        include('add_user.php');
    
    }elseif ($_POST['operation'] == 'chat_post'){
        include ('chat_post.php');

    }elseif ($_POST['operation'] == 'fetch_users'){
        include('fetch_users.php');

    }elseif ($_POST['operation'] == 'fetch_history'){
        include('fetch_history.php');

    }elseif ($_POST['operation'] == 'logout'){
        include('logout.php');

    }

$output = json_encode($output);
print_r($output);


?>