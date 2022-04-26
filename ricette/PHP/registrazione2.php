<?php
#prendere i dati da form registrazione.php, inserirli nel db
$email = $_POST['email'];
$password = $_POST['password'];
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
    # insert user in db
    $sql = "INSERT INTO utenti (email, password)
    VALUES ('$email', '$password')";
    if (mysqli_query($conn, $sql)) {
    # show success message with an alert and redirect to login page
        echo '<script>alert("Registrazione avvenuta con successo!");
        window.location.href="login.php";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>