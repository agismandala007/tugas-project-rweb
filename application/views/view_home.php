<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>./assets//img/svg/logo.svg" type="image/x-icon">
    <title>Home</title>

    <style>
        body {
            background: linear-gradient(#6a11cb, #2575fc);
            background-attachment: fixed;
            color: #fff;
        }
        /* Mengatur tampilan pagination */
        div.dataTables_paginate {
        margin-top: 10px;
        }

        /* Mengatur tampilan tombol pagination */
        div.dataTables_paginate ul.pagination li.page-item a.page-link {
        color: #221fca;
        border: 1px solid #337ab7;
        }

        div.dataTables_paginate ul.pagination li.page-item.active a.page-link {
        background-color: #0e0af5;
	    border-color: #7a6dec;
        color: #fff;
        }

        div.dataTables_paginate ul.pagination li.page-item.disabled a.page-link {
        color: #ddd;
        }

        div.dataTables_paginate ul.pagination li.page-item:hover a.page-link {
        background-color: #1916ce;
        color: #fff;
        }

    </style>
</head>

<body>
    <header>
    <!-- navbar -->
    <nav class="navbar" data-bs-theme="dark" style="background-color: #6851EE;">
        <div class="container-fluid">
            <a class="navbar-brand"><img src="<?php echo base_url(); ?>./assets//img/svg/logo.svg" alt=""> Informatic Monitoring</a>
            <div class="d-flex" role="search">
                <a class="btn" href="<?php echo base_url('login/index'); ?>" style="background-color: #6851EE; color: white;">LOGIN</a>
                <a class="btn" href="<?php echo base_url('registrasi/index'); ?>" style="background-color: #6851EE; color: white;">REGISTER</a>
                </div>
        </div>
    </nav>
    </header><br><br>

    <main>
    <div class="container" data-aos="fade-up">
    <!-- table and search -->
    <h4>DATA MAHASISWA</h4><br>
    <div class="table-responsive-sm">
    <table class="table table-hover table-bordered table-striped" id="table">
        <thead class="table-primary">
            <tr>
                <td>No.</td>
                <td>Nim</td>
                <td>Nama</td>
                <td>Dosen Pembimbing</td>
                <td>Status</td>
            </tr>
        </thead>
        <tbody>
        <?php
        $i = 1;
        if (!empty($data)) {
            foreach ($data as $row) {
        ?>
                <tr>
                    <td><?php echo $i++ ?>.</td>
                    <td><?php echo $row->nim ?></td>
                    <td><?php echo $row->nama ?></td>
                    <td><?php echo $row->dosenPembimbing ?></td>
                    <td><?php echo $row->status ?></td>
                </tr>
        <?php
            }
        } else {
            echo "<td colspan='5'>Data Tidak Ditemukan !</td>";
        }
        ?>
        </tbody>
    </table>
    </div>
    </div>
    </main>

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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });

    AOS.init({
        once: true,
        duration: 2000,
      });
</script>
</html>