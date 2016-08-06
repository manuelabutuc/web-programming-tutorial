<?php
include("functions.php");


$conn=getConnection();


$nume=$_POST["nume"];
$prenume=$_POST["prenume"];
$telefon=$_POST["telefon"];

$result = pg_query_params($conn, "insert into \"Agenda\" (nume,prenume,telefon) values($1,$2,$3)", array($nume,$prenume,$telefon));


pg_close($conn);


?>