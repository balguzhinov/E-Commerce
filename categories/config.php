<?php
define("DBHOST","localhost");
define("DBUSER","root");
define("DBPASS","root");
define("DB","online_market");

$connection = @mysqli_connect(DBHOST,DBUSER,DBPASS,DB)or die ("Error");
 ?>
