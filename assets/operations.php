<?php

include('connection.php');

$data = ['success' => false];

$operation = $_POST['operation'];

if ($operation == 'login'){
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

}else {
    $data['errors'] = 'invalid operation';

}

$data = json_encode($data);
print_r($data);


?>