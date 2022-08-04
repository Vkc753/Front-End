<?php
$sqlConn =  new mysqli('localhost', 'root', '', 'mims_new');
 
 $result = $sqlConn->query('SELECT * FROM users'); 
 $resultArray = $result->fetch_all(MYSQLI_ASSOC);   
 echo"<pre>";print_r($resultArray);

?>
