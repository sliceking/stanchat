<?php
    session_start();
    session_unset();
    session_destroy();
    $output = 'logged out';
    print(json_encode($output));

?>