<?php
include_once('../../../base/autoload.php');
header('Content-Type: application/json; charset=utf-8');

ini_set('error_reporting',E_ALL);
ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);

$sql = 'SELECT
		
		 p.id
		,p.nome
		,p.registro

     	 FROM profissional p
		 ';

echo json_encode(TDataTables::simple($_REQUEST, $sql), true);

