<?php
try
{
	$con = new PDO("pgsql:host=127.0.0.1;dbname=cv;user=postgres;password=Pankaj@123");
	//echo "connection is done";
}
catch(PDOException $e)
{
	echo "connection is not done = ".$e;
}
