<html>

<head>
    <title>Cookies</title>
</head>

<body>

<?php 
//cookie name
$cookie_name="user";
//cookie value
$cookie_value="John Doe";
//setcookie() function must appear before the <html> tag
setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");//86400=1 day
if(!isset($_COOKIE[$cookie_name])){
    echo "Cookie named '".$cookie_name."' is not set!<br>";
}else{
    echo "Cookie '".$cookie_name."' is set!<br>";
    echo "Value is: ".$_COOKIE[$cookie_name];
}
?>

</body>

</html>