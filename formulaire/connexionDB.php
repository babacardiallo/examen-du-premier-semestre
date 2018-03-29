<?php

  $server="localhost";
  $login="root";
  $passwd="";
  $dbname ="gale";



$con = new PDO('mysql:host='.$server.';dbname='.$dbname.';charset=utf8',$login,$passwd);

?>