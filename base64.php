<?php


// $str = "password123";

// echo("Data Langth: ". strlen($str)."\n");
// $md5 = md5($str); 
// $md5len = strlen($md5);

// $b64 = base64_encode($str);
// echo("MD5: $md5 (Length: $md5len )\n");
// echo("Base64: $b64 (Length: ". strlen($b64)." )\n");



//echo(md5($str));

// $data = "hello";



// foreach (hash_algos() as $v) {

//         $r = hash($v, $data, false);

//         printf("%-12s %3d %s\n", $v, strlen($r), $r);

// }
//$time = microtime(true);
// // $options = [
// //     // Increase the bcrypt cost from 12 to 13.
// //     'cost' => 13,
// // ];
//  echo password_hash("123", PASSWORD_BCRYPT, ['cost' => 13]);
 //echo "\n Took time".(microtime(true) - $time)." seconds\n";


//See the password_hash() example to see where this came from.
$hash = '$2y$13$nD9Yh.Vrq/OT3Al77lL3Q.Uq63Fao/D/CYl8aaXaRlSoFAV58zAwe';

if (password_verify('123', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}

?>