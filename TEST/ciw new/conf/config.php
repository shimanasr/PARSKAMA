<?php

 $server='localhost';
 $user='root';
 $pass='';
 $db='ciw01';
 
 mysql_connect($server,$user,$pass) or die(mysql_error());
 mysql_select_db ($db) or die(mysql_error());

?>