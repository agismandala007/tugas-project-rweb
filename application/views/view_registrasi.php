<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Register</title>
</head>

<body>

<header>
    <!-- navbar -->
    <nav class="navbar" data-bs-theme="dark" style="background-color: #6851EE;">
        <div class="container-fluid">
            <a href="<?php echo base_url('home') ?>" class="navbar-brand">Navbar</a>
            <div class="d-flex" role="search">
                <a class="btn" href="<?php echo base_url('login/index'); ?>" style="background-color: #6851EE; color: white;">Login</a>
                <a class="btn" href="<?php echo base_url('registrasi/index'); ?>" style="background-color: #6851EE; color: white;">Register</a>
                </div>
        </div>
    </nav>
    </header>

    <div class="container">
    <div class="card border-primary mb-3 position-absolute top-50 start-50 translate-middle shadow-lg p-3 mb-5 bg-body-tertiary rounded" style="width: 18rem;">
        <div class="card-body">
            <div class="position-absolute top-0 start-50 translate-middle-x">
                <h4>Registrasi</h4>
            </div><br>
            <?php echo form_open('registrasi/add'); ?>
            <div class="mb-3">
                <input type="number" name="inputNim" class="form-control" id="exampleFormControlInput1" placeholder="NIM" required>
            </div>
            <div class="mb-3">
                <input type="text" name="inputNama" class="form-control" id="exampleFormControlInput1" placeholder="Nama" required> 
            </div>
            <div class="mb-3">
                <input type="text" name="inputEmail" class="form-control" id="exampleFormControlInput1" placeholder="Email" required> 
            </div>
            <select name="inputDosen" class="mb-3 form-select" aria-label="Default select example">
                <option selected disabled>Dosen Pembimbing</option>
                    <?php foreach ($data as $row) { ?>
                    <option value="<?=$row->nama?>"><?=$row->nama?></option>
                    <?php } ?>
            </select>
            <div class="mb-3">
                <input type="password" name="inputPassword" class="form-control" id="exampleFormControlInput1" placeholder="Password" required> 
            </div><hr>
            <button class="btn btn-primary" type="submit">REGISTER</button>
            <?php echo form_close(); ?>
        </div>
        </div>
    </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>