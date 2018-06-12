<?php
use Noodlehaus\Config;

require __DIR__ . '/vendor/autoload.php';

$conf = new Config('config.json');

$db = new MysqliDb ($conf["host"], $conf["username"], $conf["password"], $conf["databaseName"]);

$rows = $db->get($conf["tableName"], 10);

var_dump($rows);
