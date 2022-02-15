<?php
//recupero dati inseriti nella pagina chiamante
$usr=$_REQUEST['usr'];
$pw=$_REQUEST['pw'];
$cognome=$_REQUEST['cognome'];
$qualifica=$_REQUEST['qualifica'];
//connessione al database
$hostname="localhost";
$username="root";
$password="";
$dbname="fiera";
$conn=new mysqli($hostname, $username, $password, $dbname);
//controllo di avvenuta connessione
if ($conn->connect_error)
	die("errore di connessione");

$query="insert ......";
//esecuzione della query tramite il metodo query.La query restituisce una tabella temporanea
$tabella=$conn->query($query);
?>