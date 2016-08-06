<?php
include("header-tpl.php");
?>

<?php //Save contact if necessary

if(isset($_POST["nume"])) {  //verificam daca exista, daca a fost introdus numele

    include("servlets/add-contacts.php");


//    $fileName="js/mocks/load-contacts.json";
//    $allContactsStr=file_get_contents($fileName);
//    $allContacts=json_decode($allContactsStr);

//    $lastContact=$allContacts[count($allContacts)-1];
//
//    $newPerson=array(
//        "id"=>$lastContact->id+1,
//        "nume"=>$_POST["nume"],
//        "prenume"=>$_POST["prenume"],
//        "telefon"=>$_POST["telefon"]
 //   );

//    $allContacts[]=$newPerson;
//    file_put_contents($fileName, json_encode($allContacts,JSON_PRETTY_PRINT));
    echo "<p>Contact successfully added!</p>";


}

?>


    <div id="breadcrumb">HOME : welcome home</div>

    <h1>Agenda</h1>

    <form action="" method="post">
        <input type="text" name="nume" placeholder="Nume">
        <input type="text" name="prenume" placeholder="Prenume">
        <input type="text" name="telefon" placeholder="Telefon">
        <button>Save</button>
    </form>
    <br>

    <table id="agenda">
        <thead>
        <tr>
            <th><strong>Nume</strong></th>
            <th><strong>Prenume</strong></th>
            <th><strong>Telefon</strong></th>
            <th width="50"></th>
        </tr>
        </thead>
        <tbody>


        </tbody>
    </table>

<?php
include("footer-tpl.php");
?>