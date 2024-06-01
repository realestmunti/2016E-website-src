<?php
header("Content-Type: text/plain");
$username = $_GET["username"];
$server = $_GET["server"];
$charapps = $_GET["charapps"];
$rank = $_GET["rank"];
$userid = $_GET["userid"];
$data = array(
"jobId" => "Test",
"status" => 2,
"joinScriptUrl" => "http://www.rdx.ct8.pl/game/Join.ashx?placeId=1818&username=$username&server=$server&rank=$rank&charapps=$charapps&userid=$userid",
"authenticationUrl" => "http://www.rdx.ct8.pl/Login/Negotiate.ashx",
"authenticationTicket" => "1",
"message" => "null"
);
$jsonData = json_encode($data);
echo $jsonData;
?>