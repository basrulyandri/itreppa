<?php
$time = time();
return [
	"Auth-Id" => "pascastiami",
	"Auth-Token" => hash_hmac("sha256","pascastiami"."::"."8Drv2GjomPARQYCNuOqKHVsF6lMifnWgpascastiami"."::".$time,"8Drv2GjomPARQYCNuOqKHVsF6lMifnWgpascastiami"),
	"Timestamp" => $time
];