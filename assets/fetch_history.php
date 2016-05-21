<?php
session_start();
require('mysql_connect.php');
$query = "SELECT * FROM `chat_history`
ORDER BY `chat_history`.`id`  DESC
LIMIT 50";
$result = mysqli_query($conn, $query);
$output = ['success'=>false];
if(mysqli_num_rows($result)) {
    $output = ['success' => true];
    while ($row = mysqli_fetch_assoc($result)) {
        $output['data'][] = $row;
    }
}
print(json_encode($output));

?>