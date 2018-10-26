<?php
//session start
session_start();
$_SESSION['username'] = $_POST['user'];
$_SESSION['userpass'] = $_POST['pass'];
$_SESSION['authuser'] = 0;

// check username and password information
if (($_SESSION['username'] == 'Joe') && ($_SESSION['userpass'] == '12345')){
    $_SESSION['authuser'] = 1;
}else{
    echo 'Sorry, but you don\'t have permission to view this page!';
    exit();
}
?>
<html>
<head>
    <title>
        Find My Favorite Movie!
    </title>
</head>
<body>
<?php
$myfavmovie= urlencode('Life of Brian');
echo '<a href = moviesite_form.php?favmovie='.$myfavmovie.'>Click here to see information about my favorite movie!</a>'
?>
</body>
</html>
