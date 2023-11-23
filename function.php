<?php
function passwordGenerator($pw_char, $length, &$password) {
    $password = '';
    $passwordLength = strlen($pw_char);

    for($i=0; $i<$length; $i++) {
        $index = rand(0, $passwordLength);
        $char = $pw_char[$index];
        $password .= $char;
    } return $password;
}

?>