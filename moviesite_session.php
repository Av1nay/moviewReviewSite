<?php
session_start();
//Check to see if user has logged in with a valid password
if ($_SESSION['authuser'] != 123){
    echo 'Sorry, but you don\'t have permission to view this page!';
    exit();
}
?>
<html>
<head>
    <title>My Movie Site - <?php echo $_GET['favmovie']; ?></title>
</head>
<body>
<?php

echo 'Welcome to our site,'.$_SESSION['username'].'! <br>My favorite movies is '.$_GET['favmovie'].'<br>';
$movierate = 5;
echo 'My movie rating for this movie is: ' .$movierate ;
?>
</body>
</html>