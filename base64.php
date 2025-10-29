
<?php

// $pass = isset($_GET['pass']) ? $_GET['pass'] : 'password123'; // ternary operator   
// echo(md5($pass));

// $str = <<<End
// password1636363636363636363636363
// 6363636363636363636363636363 
// bnsdjhcvjhvsdcvjsvcjhvsdjhcvjh636
// End;

// echo("Data Length: " . strlen($str) . "\n");

// $md5 = md5($str);
// $md5len = strlen($md5);

// $b64 = base64_encode($str);
// $b64len = strlen($b64);

// echo("MD5:  $md5 (Length: $md5len)\n"); // Security through obscurity
// echo("Base64:  $b64 (Length: $b64len)\n");

// $data = "hello";



// foreach (hash_algos() as $v) {

//         $r = hash($v, $data, false);

//         printf("%-12s %3d %s\n", $v, strlen($r), $r);

// }

// $time = microtime(true);

// $options = [
//     // Increase the bcrypt cost from 12 to 13.
//     'cost' => 7,
// ];
// echo password_hash("123", PASSWORD_BCRYPT, $options);
// echo "\nTook time".(microtime(true) - $time)." seconds\n";


$hash = '$2y$07$DvdiElj5GZx8ZENZ.8t2Qu6.JfD8eavggZNB/0qqko.HfoUjPYiYu';

if (password_verify('123', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
?>

