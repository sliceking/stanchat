<?php
    session_start();
?>

<!doctype html>
    <html>
        <head>
            <title>StanChat</title>
            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
            <!-- jQuery library -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
            <!-- Latest compiled JavaScript -->
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="./assets/style.css" type="text/css"/>
            <script src="./assets/script.js"></script>
        </head>
        <body>
            <?php
                include('./assets/inc/header.php');
                include('./assets/inc/splash.php');
                include('./assets/inc/footer.php');

            ?>

        </body>
    </html>