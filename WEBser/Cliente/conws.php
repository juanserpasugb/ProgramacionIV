<?php 
require_once("../nusoap/lib/nusoap.php");
$client = new nusoap_client("http://localhost:8888/WEBser/service.php?wsdl");

?>