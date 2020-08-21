<?php
setcookie("my_cookie","sample value", time()+86400,"/");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
<?php 
if(!isset($_COOKIE["my_cookie"])){
    echo "Cookie Not Set.<br>";
} else {
    echo "Cookie Value : " . $_COOKIE["my_cookie"] . "<br>";
}
?>
</body>
</html>