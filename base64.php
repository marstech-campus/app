
<?php

// $pass = isset($_GET['pass']) ? $_GET['pass'] : 'password123'; // ternary operator   
// echo(md5($pass));

$str = <<<End
password1636363636363636363636363
6363636363636363636363636363 
bnsdjhcvjhvsdcvjsvcjhvsdjhcvjh636
End;

echo("Data Length: " . strlen($str) . "\n");

$md5 = md5($str);
$md5len = strlen($md5);

$b64 = base64_encode($str);
$b64len = strlen($b64);

echo("MD5:  $md5 (Length: $md5len)\n"); // Security through obscurity
echo("Base64:  $b64 (Length: $b64len)\n");

?>

