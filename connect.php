<?php

$link = mysql_connect ("localhost","root","12345678");
	$sql = "database";
	$tblname = "admin";

if ($link)
{
	echo "Connectted successfully <br>";
	mysql_close($link);
	}

else
	{
		die('Could not connect : ' . mysqli_error());
		}
?>