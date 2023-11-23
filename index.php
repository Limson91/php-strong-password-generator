<?php
require './function.php';

$pw_char = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!£$%&/()=?^+*-_';
$pw_length = $_GET['pw-length'] ?? 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
</head>

<body>
    <form action="" method="GET">
        <input type="text" name="pw-length">
        <input type="submit" value="Send">
    </form>

    <h3>
        <?php if($pw_length > 0) { ?>
        Your secure password is: <?php } echo passwordGenerator($pw_char, $pw_length, $password); ?>
    </h3>
</body>
</html>