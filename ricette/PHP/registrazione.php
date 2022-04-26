<?php
require __DIR__.'/template.php';
crea_Nav();
?>
<form action="registrazione2.php" method="post">
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required> 
    </div>
    <div class="form-group">
        <label for="Conferma Password">Conferma Password</label>
        <input type="password" class="form-control" id="Conferma Password" name="Conferma Password" placeholder="Conferma Password" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <hr>
    <p>Sei già registrato? <a href="/PHP_Zaniolo/ricette/PHP/login.php">Login</a></p>
</form>
<?php
require __DIR__.'/script.php';
script_vari();
?>
<script>
    $(document).ready(function() {
        $('#email').on('change', function() {
            var email = $('#email').val();
            $.ajax({
                url: 'controllo_Registrazione.php',
                type: 'POST',
                data: {
                    email: email
                },
                success: function(data) {
                    if (data == 'true') {
                        $('#email').addClass('is-invalid');
                        $('#email').removeClass('is-valid');
                        $('#emailHelp').text('Email già utilizzata');
                    } else {
                        $('#email').addClass('is-valid');
                        $('#email').removeClass('is-invalid');
                        $('#emailHelp').text('Email disponibile');
                    }
                }
            });
        });
    });
</script>
