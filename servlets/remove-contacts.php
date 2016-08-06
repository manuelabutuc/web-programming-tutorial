<?php
include("functions.php");


$conn=getConnection();
$id=$_POST["id"];
$result = pg_query($conn, 'DELETE FROM "Agenda" WHERE id=' . $id);

$records=getContacts($conn);

pg_close($conn);

echo json_encode($records);

?>