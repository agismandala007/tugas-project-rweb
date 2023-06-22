<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login</title>
</head>
<body>
    <header>
        <div>
            <a href="<?php echo base_url('home') ?>">Website</a>
            <div>
                <a href="<?php echo base_url('login/index'); ?>">Login</a>
                <a href="<?php echo base_url('registrasi/index'); ?>">Register</a>
            </div>
        </div>
    </header>

    <?php echo validation_errors(); ?>
    <?php echo form_open(base_url('login/validasi')); ?>
        <label for="inputEmail">Email</label><br>
        <input type="email" name="inputEmail"><br>

        <label for="inputPassword">Password</label><br>
        <input type="password" name="inputPassword"><br>

        <button type="submit">Login</button>
    <?php echo form_close(); ?>

</body>
</html>