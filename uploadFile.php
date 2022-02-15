<?php
print_r($_FILES);
if(!isset($_FILES['userfile'])||!is_uploaded_file($_FILES['userfile']['lmp_name'])){
    echo 'Non hai inviato nessun file...';
    //exit
}
//percorso della cartella dove mettere i file caricati dagli utenti
$uploaddir='uploads/';
//recupero il percorso temporaneo del file
$userfile_tmp=$_FILES['userfile']['tmp_name'];
//recupero il nome originale del file caricato
$userfile_name=$_FILES['userfile']['name'];

$ext_ok=array('html','odt','pdf');
$temp=explode('.',$_FILES['userfile']['name']);
$ext=end($temp);
if(!in_array($ext,$ext_ok)){
    echo 'Il file ha un estensione non ammessa!';
    exit;
}

//copio il file dalla sua posizione temporanea alla mia cartella upload
if(move_uploaded_file($userfile_tmp,$uploaddir,$userfile_name)){
    //se l'operazione è andata a buon fine...
    echo 'file inviato con successo.';
}else{
    //se l'operazione è fallita
    echo 'Upload NON valido!'
}
?>