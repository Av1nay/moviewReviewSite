<?php
session_start();
$_SESSION ['username'] = 'Joe12345';
$_SESSION ['authuser'] = 123;
?>
<html>
<head>
    <title>Find My Favorite Movie!</title>
</head>
<body>
<?php
$myfavmovie = urlencode('Life of Brian');
echo '<a href=moviesite_cookies.php?favmovie='.$myfavmovie.'>'.'Click here to see my favorite movie!'.'</a>';
?>
</body>
</html>