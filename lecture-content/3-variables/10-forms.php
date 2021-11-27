<?php

    var_dump("GET", $_GET);
    var_dump("POST", $_POST);

    $a = "asd";
    $a[1];
?>
<html>
<head>
</head>
<body>
<form action="" method="post" style="border: 1px solid gray">
    <input style="border: 1px solid gray" name="login" type="text" placeholder="Enter login">
    <br>
    <input style="border: 1px solid gray" name="pwd" type="password" placeholder="Enter pwd">
    <br>
    <input type="submit">
</form>
</body>
</html>
