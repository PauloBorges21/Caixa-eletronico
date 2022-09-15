<?php

    $db = new stdClass;
    $db->driver = 'mysql';
    $db->host = 'localhost';
    $db->port = 3306;
    $db->database = 'aula_caixaeletronico';
    $db->username = 'root';
    $db->password = '';
    $db->unixSocket = '';
    $db->charset = 'utf8';
//     $db->options = [
//   PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
//   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//   PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
//   PDO::ATTR_PERSISTENT => true
// ];
$db->dns = "mysql:dbname={$db->database};port={$db->port};host={$db->host}";

$conn = new PDO($db->dns, $db->username, $db->password);



