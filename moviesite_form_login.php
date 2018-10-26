<?php
session_start();
?>
<html>
<head>
    <title>Please Login</title>
</head>
<body>
    <form method="post" action="passing_info_with_forms.php">
        <p>Enter Your Username:<input type="text" name="user"/> </p>
        <p>Enter Your Password:<input type="password" name="pass"/> </p>
        <p><input type="submit" name="submit" value="submit"/> </p>
    </form>
</body>
</html>
