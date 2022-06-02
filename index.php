<?php
$link = mysql_connect('mysql02.universofantasias.hospedagemdesites.ws', 'universofantas_1', 'kalixto1969');
if (!$link) {
    die('Não foi possível conectar: ' . mysql_error());
}
echo 'Conexão bem sucedida';
mysql_close($link);
?>