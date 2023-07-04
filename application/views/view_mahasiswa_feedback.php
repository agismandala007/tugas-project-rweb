<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Feedback</title>

    <style>
        tr,
        td {
            border: 1px solid black;
        }
        a {
        text-decoration: none;
        color: white;
        }
        .offcanvas-header {
        background-color: #6851EE;
        }

        .offcanvas-header .offcanvas-title {
        border-bottom: 1px solid white;
        padding-bottom: 5px;
        }

        .offcanvas-body {
        background-color: #6851EE;
        }

        .offcanvas-title,
        .text-body-emphasis {
        color: white;
        }

        .text-body-secondary {
        color: #f8f9fa;
        }
    </style>

</head>

<body>
    <!-- navbar -->
    <nav class="navbar" data-bs-theme="dark" style="background-color: #6851EE;">
        <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><span class="navbar-toggler-icon"></span></button>

            <div class="d-flex" style="color: white;">
            <i class="bi bi-person-circle">  <?php echo $mahasiswa['nama']; ?></i>    
            </div>
        </div>
        
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Informatic Monitoring</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
        <hr class="border border-light border-3 opacity-75">
            <div class="d-grid gap-2 col-6 mx-auto">
              <h6 class="text-body-secondary"><i class="bi bi-play-fill"></i> <a href="<?php echo base_url('HomeMahasiswa'); ?>">Upload</a></h6>
              <h6 class="text-body-secondary"><i class="bi bi-play-fill"></i> <a href="<?php echo base_url('MahasiswaFeedback'); ?>">Feedback</a></h6>
            </div>
            <div class="d-grid gap-2 col-9 mx-auto"><br><br><br><br><br><br><br><br><br><br><br><br>
              <hr class="border border-light border-1 opacity-75">
              <h5 class="text-body-secondary"><i class="bi bi-box-arrow-right"></i> <a href="<?php echo base_url('HomeMahasiswa/logout'); ?>"> Logout</a></h5>
        </div>
        </div>
      </nav><br><br><br>    

    <div class="container">
    <h2>Riwayat Revisi</h2><br>
    <!-- table and search -->
    <div class="table-responsive-sm">
    <table class="table table-hover table-bordered table-striped" id="table">
        <thead class="table-primary">
            <tr>
                <td>No.</td>
                <td>Tanggal</td>
                <td>Nama</td>
                <td>File</td>
            </tr>
        </thead>
        <tbody>
        <?php
        if (!empty($feedback)) {
            $i = 1;
            foreach ($feedback as $row) { ?>
                <tr>
                    <td><?php echo $i++ . "."; ?></td>
                    <td><?php echo $row->date; ?></td>
                    <td><?php echo $row->nama; ?></td>
                    <td><a href="<?php echo base_url('MahasiswaFeedback/download/' . $row->id) ?>">Download</a></td>
                </tr>
        <?php }
        } else {
            echo "<td colspan='5'>Data Tidak Ditemukan !</td>";
        } ?>
        </tbody>
    </table>
    </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</script>
</html>