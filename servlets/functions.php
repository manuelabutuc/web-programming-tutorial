<?php
function getContacts($conn){
    $result = pg_query($conn, 'select * from "Agenda"');
    $records = array();
    while ($row = pg_fetch_array($result)) {

        $person = array(
            "id" => $row["id"],
            "nume" => $row["nume"],
            "prenume" => $row["prenume"],
            "telefon" => $row["telefon"]
        );
        $records[] = $person;
    }
    return $records;
}

function getConnection(){
    return $conn = pg_connect("host=54.93.65.5 port=5432 dbname=4_Manu user=fasttrackit_dev password=fasttrackit_dev");
}

?>

