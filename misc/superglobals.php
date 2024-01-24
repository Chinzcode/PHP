<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

echo $_SERVER["DOCUMENT_ROOT"];
echo "<br>";
echo $_SERVER["PHP_SELF"];
echo "<br>";
echo $_SERVER["SERVER_NAME"];
echo "<br>";
echo $_SERVER["REQUEST_METHOD"];

//localhost/Mywebsite/index.php?name=trym&eyecolor=blue

echo $_GET["name"];
echo $_GET["eyecolor"];
echo $_REQUEST["name"];
echo $_FILES["name"];
echo $_COOKIE["name"];
$_SESSION["username"] = "Solberg";
echo $_SESSION["username"];
$_ENV[""];

?>
</body>
</html>