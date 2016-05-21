<?php
session_start();
require('mysql_connect.php');
$username = $_SESSION['users_id'];
$text = addslashes($_POST['text']);
$query = "INSERT INTO `chat_history`(`user`, `text`) VALUES ('$username','$text')";
$result = mysqli_query($conn, $query);
$output = ['success'=>false];
if(mysqli_num_rows($result)) {
    $output = ['success'=>true];
    while ($row = mysqli_fetch_assoc($result)) {
        $output['data'][] = $row;

    }
}
print(json_encode($output));

?>