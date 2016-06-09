<?php

session_start();

include('connection.php');

$output = ['success' => false];

$operation = $_POST['operation'];

    if ($operation == 'login') {
        include('login.php');

    }elseif ($operation == 'add_user'){
        include('add_user.php');
    
    }elseif ($operation == 'chat_post'){
        include ('chat_post.php');

    }elseif ($operation == 'fetch_users'){
        include('fetch_users.php');

    }elseif ($operation == 'fetch_history'){
        include('fetch_history.php');

    }elseif ($operation == 'logout'){
        include('logout.php');
    }

$output = json_encode($output);
print_r($output);


?>