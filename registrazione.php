<?php

$_usr=$_REQUEST['usr'];
$_pw=$_REQUEST['pw'];
$_cpw=$_REQUEST['cpw'];
$_cognome=$_REQUEST['cognome'];
$_nome=$_REQUEST['nome'];
$_email=$_REQUEST['email'];
$_telefono=$_REQUEST['telefono'];
$_qualifica=$_REQUEST['qualifica'];
#$_area=$_REQUEST['area'];

//connessione al database
$hostname="localhost";
$username="root";
$password="";
$dbname="fiera";
$conn=new mysqli($hostname, $username, $password, $dbname);
//controllo di avvenuta connessione
if ($conn->connect_error){
	die("errore di connessione");

$_query="SELECT * FROM espositori WHERE username='{$_usr}'";

$tabella=$conn->query($_query);
if ($tabella-> num_rows == 1)
  echo("Utente già esistente");
else {
  $_query1="INSERT INTO espositori(username,password,cognome,nome,email,qualifica,area,telefono)
          VALUES ('{$_usr}','{$_pw}','{$_cognome}','{$_nome}','{$_email}',{$_qualifica},1,'{$_telefono}')";
echo $_query1;
$ris=$conn->query($_query1);
if ($ris)
  echo"Insert ok";
else {
  echo "Errore insert";
  echo $_query1;
}




#echo $_query;

// per prima cosa verifico che il file sia stato effettivamente caricato
print_r($_FILES);
if (!isset($_FILES['userfile']) || !is_uploaded_file($_FILES['userfile']['tmp_name'])) {
  
  
    echo 'Non hai inviato nessun file...';
  //exit;    
}

//percorso della cartella dove mettere i file caricati dagli utenti

$uploaddir = 'uploads/';

//Recupero il percorso temporaneo del file
$userfile_tmp = $_FILES['userfile']['tmp_name'];

//recupero il nome originale del file caricato
$userfile_name = $_FILES['userfile']['name'];

$ext_ok = array('html', 'odt', 'pdf');
$temp = explode('.', $_FILES['userfile']['name']);
$ext = end($temp);
if (!in_array($ext, $ext_ok)) {
  echo 'Il file ha un estensione non ammessa!';
  exit;
}

//copio il file dalla sua posizione temporanea alla mia cartella upload
if (move_uploaded_file($userfile_tmp, $uploaddir . $userfile_name)) {
  //Se l'operazione è andata a buon fine...
  echo 'File inviato con successo.';
}else{
  //Se l'operazione è fallita...
  echo 'Upload NON valido!'; 
}
}
?>