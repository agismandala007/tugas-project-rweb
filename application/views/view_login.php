<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php echo form_open('login/add'); ?>
        <label for="inputNim">NIM</label><br>
        <input type="number" name="inputNim"><br>
        <label for="inputNama">Nama</label><br>
        <input type="text" name="inputNama"><br>
        <label for="inputEmail">Email</label><br>
        <input type="email" name="inputEmail"><br>
        <label for="inputPassword">Password</label><br>
        <input type="password" name="inputPassword"><br>
        <button type="submit">Login</button>
    <?php echo form_close(); ?>
</body>
</html>