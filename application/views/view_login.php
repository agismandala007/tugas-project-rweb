<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <title>Login</title>
</head>
<body>
    <header class="px-3 py-2 border-bottom mb-3">
        <div class="container d-flex flex-wrap justify-content-center">
            <a href="<?php echo base_url('home') ?>">Website</a>
            <div class="text-end">
                <a class="btn btn-primary" href="<?php echo base_url('login/index'); ?>">Login</a>
                <a class="btn btn-light text-dark me-2" href="<?php echo base_url('registrasi/index'); ?>">Register</a>
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