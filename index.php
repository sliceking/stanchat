<?php
    session_start();
    if(empty($_SESSION)){
        $page = 'splash';
    }else{
        $page = 'main';
    }
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
            <script src="./assets/linkify.min.js"></script>
            <script src="./assets/linkify-jquery.min.js"></script>
            <link rel="stylesheet" href="./assets/style.css" type="text/css"/>
            <script src="./assets/script.js"></script>
        </head>
        <body>

            <?php
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