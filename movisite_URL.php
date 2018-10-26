<html>
<head>
    <title>My Movie Site - <?php echo $_GET['favmovie']; ?></title>
</head>
<body>
<?php
echo 'My favorite movies is '.$_GET['favmovie'].'<br>';
$movierate = 5;
echo 'My movie rating for this movie is: ' .$movierate ;
?>
</body>
</html>