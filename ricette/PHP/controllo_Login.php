<?php
$email = $_POST['email'];
$password = $_POST['password'];
$conn = new mysqli("localhost", "root", "", "musei_e_opere");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM utenti WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    session_start();
    //dalla mail separa l'username
    $user = explode("@", $email);
    $user = $user[0];
    $_SESSION['user'] = $user;
    header("Location: /PHP_Zaniolo/ricette/index.php");
} else {
    echo "<script>alert('Login fallito, come te!');</script>";
    header("Refresh: 0; URL=/PHP_Zaniolo/ricette/PHP/login.php");
} 
$conn->close();
?>