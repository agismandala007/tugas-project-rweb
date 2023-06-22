<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register</title>
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


    <?php echo form_open('registrasi/add'); ?>
        <label for="inputNim">NIM</label><br>
        <input type="number" name="inputNim"><br>
        <label for="inputNama">Nama</label><br>
        <input type="text" name="inputNama"><br>
        <label for="inputEmail">Email</label><br>
        <input type="email" name="inputEmail"><br>

        <label for="inputDosen">Dosen Pembimbing</label><br>
    
            <select name="inputDosen">
            <?php foreach ($data as $row) { ?>
                <option value="<?=$row->nama?>"><?=$row->nama?></option>
            <?php } ?>
            </select><br>
        
        <label for="inputPassword">Password</label><br>
        <input type="password" name="inputPassword"><br>
        <button type="submit">Register</button>
    <?php echo form_close(); ?>
</body>

</html>