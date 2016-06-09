<?php
    session_start();
?>

<!doctype html>
    <html>
        <head>
            <title>StanChat</title>
            <link rel="stylesheet" href="./assets/bootstrap.min.css">
            <script src="./assets/jquery.min.js"></script>
            <script src="./assets/bootstrap.min.js"></script>
            <script src="./assets/linkify.min.js"></script>
            <script src="./assets/linkify-jquery.min.js"></script>
            <link rel="stylesheet" href="./assets/style.css" type="text/css"/>
            <script src="./assets/script.js"></script>
        </head>
        <body>

            <?php

                if(empty($_SESSION)){
                    $page = 'splash';

                }else{
                    $page = 'main';
                }

                include('./assets/inc/header.php');
                include("./assets/inc/$page.php");

                if ($page === 'main'){
            ?>
                    <script>
                        var main = true;
                        fetch_history();
                        fetch_online_users();
                        setInterval(fetch_history,2500);
                        setInterval(fetch_online_users,4000);
                    </script>
                    <?php
                }
                include('./assets/inc/footer.php');
            ?>
        </body>
    </html>
