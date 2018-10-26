<?php
setcookie('username', 'Joe', time()+60);
session_start();
$_SESSION['authuser']=123;
?>
<html>
    <head>
        <title>
            Find my favorite movie!
        </title>
    </head>
    <body>
        <?php
            $myfavmovie = urlencode('Life of Brian');
            echo '<a href=moviesite_cookies.php?favmovie='. $myfavmovie .'>Click here to see information about my favorite movie!</a>';
        ?>
    </body>
</html>
