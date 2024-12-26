<?php
include 'app/album/libs/load.php';

$user = "fooboo";
$pass = "decneg-napCaf-jakcy1";
$result = user::login ($user, $pass);
if ($result) {
echo "Login Success, $result [username]";
} else {
echo "Login failed";
}
