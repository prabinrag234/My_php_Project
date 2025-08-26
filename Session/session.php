<html>

<head>
    <title>Session</title>
</head>

<body>
<?php
//session start
session_start();
//set session variable
$_SESSION["favcolor"]="green";
echo "Session variables are set.";
echo "Favorite color is ".$_SESSION["favcolor"];
//remove all session variables
session_unset();
echo "Favorite color is ".$_SESSION["favcolor"];
//destroy the session
session_destroy();
echo "Favorite color is ".$_SESSION["favcolor"];
?>

</body>

</html>