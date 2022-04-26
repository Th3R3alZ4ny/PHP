<?php
session_start();
require __DIR__.'/PHP/template.php';
require __DIR__.'/PHP/script.php';
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
} else {
    header("Location: /PHP_Zaniolo/ricette/PHP/login.php");
}
crea_Nav();
script_vari(); ?>
        <div class="row">
            <div class="col-12">
                <h1>Benvenuto <?php echo $user; ?></h1>
            </div>
        </div>
<script>
    //check if the user is logged in then show the logout button
    var user = "<?php echo $user; ?>";
    var login = document.getElementById('login');
    var logout = document.getElementById('logout');
    if (user) {
        login.hidden = true;
        logout.hidden = false;
    }
</script>
</body>
</html>
