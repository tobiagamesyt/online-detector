<?php
$username = 'loremipsum';
$onlineusers = file_get_contents('onlineusers.txt');;
$token = '(' . $username . ' - ' . date("j. n. Y, H:i") . ')';
if (str_contains($onlineusers, $token)) {
echo '<div style="background-color:#0f0; border:1px solid green; border-radius:50px; width:10px; height:10px;" title="Je online."></div>';
} else {
echo '<div style="background-color:#666; border:1px solid 999; border-radius:50px; width:10px; height:10px;" title="Je offline."></div>';
}
?>