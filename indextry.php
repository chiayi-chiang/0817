<?php
    session_start();//$_SESSION
    if(isset($_POST["btnOK"])){
        $_SESSION["who"] = $_POST["txtUserName"];
        header("Location: hellotry.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "post" action=""><!--傳值給自己-->
    your name:<input type="text" name = "txtUserName">
    <input type = "submit" name="btnOK" value="ok">
    </form>
</body>
</html>