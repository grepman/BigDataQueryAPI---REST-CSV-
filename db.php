<?php

$con = mysql_connect("*******","********","*******");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
mysql_select_db("blueaxsh_pykih", $con);

//echo nl2br("db Connection -> 200 \n");

?>