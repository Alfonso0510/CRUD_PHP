<?php

$con=mysql_connect("localhost", "root","");
mysql_selectdb("dbcrud", $con);

mysql_query("SET NAME 'utf8'");

?>