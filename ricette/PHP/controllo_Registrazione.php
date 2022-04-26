<?php
$email = $_POST['email'];
# connect to db musei_e_opere
$conn = mysqli_connect('localhost', 'root', '', 'musei_e_opere');
# check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
# check if email already exists
$sql = "SELECT * FROM utenti WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    echo 'true';
} else {
    echo 'false';
}
?>