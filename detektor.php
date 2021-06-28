<?php
$username = 'loremipsum'; // použij vlastní skripty pro získání přezdívky přihlášeného uživatele
$loggedin = 'true'; // použij vlastní skripty pro zjištění, pokud je uživatel přihlášen
$onlineusers = file_get_contents('onlineusers.txt'); // klidně použij připojení do databáze místo fwrite
$token = '(' . $username . ' - ' . date("j. n. Y, H:i") . ')
'; if ($loggedin and !str_contains($onlineusers, $token)) {
$fp = fopen('onlineusers.txt', 'a');
fwrite($fp, $token);
fclose($fp);
}
/* tento řádek smaž pokud chceš aby se počítali pouze uživatelé co nejsou afk */ echo '<meta http-equiv="refresh" content="30">';
?>