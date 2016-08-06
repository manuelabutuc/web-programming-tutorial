<?php
include("functions.php");


$conn=getConnection();

$records=getContacts($conn);

pg_close($conn);


echo json_encode($records);


//$fileName="../js/mocks/load-contacts.json";
//$allContactsStr=file_get_contents($fileName);
//echo $allContactsStr;

?>