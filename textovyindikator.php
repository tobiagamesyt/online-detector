<?php
$username = 'loremipsum';
$onlineusers = file_get_contents('onlineusers.txt');;
$token = '(' . $username . ' - ' . date("j. n. Y, H:i") . ')';
if (str_contains($onlineusers, $token)) {
echo $username . ' je online.';
} else {
echo $username . ' je offline.';
}
?>