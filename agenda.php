<?php
include("header-tpl.php");
?>


    <div id="breadcrumb">HOME : welcome home</div>

    <h1>Agenda</h1>

    <form action="agenda.php" method="post">
        <input type="text" name="Nume" placeholder="Nume">
        <input type="text" name="Prenume" placeholder="Prenume">
        <input type="text" name="Telefon" placeholder="Telefon">
        <button>Add</button>
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