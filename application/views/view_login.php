<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>./assets//img/svg/logo.svg" type="image/x-icon">
    <title>Monitoring Informatic</title>
    <style>
        body {
            background: linear-gradient(#6a11cb, #2575fc);
            background-attachment: fixed;
            color: #fff;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            
            padding-top: 100px;
        }
        .card {
        border: none;
        border-radius: 10px;
        }

        .card-body {
        padding: 30px;
        }
        
        .btn-primary {
            background-color: #3c32c5;
            color: #fff;
        }

        .btn-primary:hover {
        background-color: #251abc;
        color: #fff;
        }

        .btn-primary:focus {
        box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
        }
        footer{
            padding-top: 40px;
        }
        /* @media (max-width: 500px) {
            .footer {
                display: none;
            }
        } */

    </style>
</head>
<body>
<header>
    <!-- navbar -->
    <nav class="navbar" data-bs-theme="dark" style="background-color: #6851EE;">
        <div class="container-fluid">
            <a href="<?php echo base_url('home') ?>" class="navbar-brand"><img src="<?php echo base_url(); ?>./assets//img/svg/logo.svg" alt=""> Informatic Monitoring</a>
            <div class="d-flex" role="search">
                <a class="btn" href="<?php echo base_url('login/index'); ?>" style="background-color: #6851EE; color: white;">LOGIN</a>
                <a class="btn" href="<?php echo base_url('registrasi/index'); ?>" style="background-color: #6851EE; color: white;">REGISTER</a>
            </div>
        </div>
    </nav>
    </header>

    <div class="container">
        <!-- form login -->
        <div class="card" style="width: 35rem; background-color: #f7f7f7;" data-aos="fade-up">
        <div class="card-body">
            <div class="position-absolute top-0 start-50 translate-middle-x">
                <h4 style="color: #2575fc;">LOGIN</h4>
            </div><br>
            
            <?php echo validation_errors(); ?>
            <?php echo form_open(base_url('login/validasi')); ?>
            <div class="mb-3">
                <input type="email" name="inputEmail" class="form-control" id="exampleFormControlInput1" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <input type="password" name="inputPassword" class="form-control" id="exampleFormControlInput1" placeholder="Password" required> 
            </div>
            <hr>
            <button class="btn btn-primary" type="submit">LOGIN</button>
            <?php echo form_close(); ?>
        </div>
        </div>
    </div>
    
    <!-- ! Footer -->
    <footer class="footer">
        <div class="container footer--flex">
            <div class="footer-start">
                <p>2023 © Informatic Monitoring - All right reversed</p>
            </div>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        once: true,
        duration: 2000,
      });
</script>
</html>