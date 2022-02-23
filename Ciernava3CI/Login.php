<?php 

?>

<!DOCTYPE html>
<html>
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login</title>

</head>
<body>

    <?php
    
    if($_POST[meno] == "toto" && heslo == "tototot")
    {
echo "si prihlaseny"
    }
    
    else{
echo "nie is prihlaseny";

    }

echo $POST["cislo1"];
$soucet = $_POST['cislo1'] + $_POST['cislo2'];
echo("Soucet: " $soucet); 

?>

</body>
</html>
