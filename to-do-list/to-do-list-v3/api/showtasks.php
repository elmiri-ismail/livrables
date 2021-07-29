<?php
$dbh = new PDO("mysql:host=localhost;dbname=task","root","Miriismail2002");
$sql = " SELECT * FROM test ";
$TaskQuery = $dbh->query($sql);
$getTask = $TaskQuery->fetchAll(PDO::FETCH_ASSOC);
print_r(json_encode($getTask));
?>
