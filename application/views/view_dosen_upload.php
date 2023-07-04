<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Upload</title>

    <style>
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
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
            aria-controls="offcanvasExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="d-flex" style="color: white;">
            <i class="bi bi-person-circle">  <?php echo $nama['nama']; ?></i>    
            </div>
        </div>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Informatic Monitoring</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body p-4">
            <hr class="border border-light border-3 opacity-75">
            <div class="d-grid gap-2 col-6 mx-auto">
              <h6 class="text-body-secondary"><i class="bi bi-play-fill"></i> <a class="nava" href="<?php echo base_url('HomeDosen'); ?>">Data Mahasiswa</a></h6>
            </div>
            <div class="d-grid gap-2 col-9 mx-auto"><br><br><br><br><br><br><br><br><br><br><br>
              <hr class="border border-light border-1 opacity-75">
              <h5 class="text-body-secondary"><i class="bi bi-box-arrow-right"></i> <a class="nava" href="<?php echo base_url('HomeDosen/logout'); ?>"> Logout</a></h5>
            </div>
          </div>
        </div>
      </nav><br><br><br>
    
      <div class="container">
    <h2>Data Mahasiswa</h2><br>
    <!-- table and search -->
    <div class="table-responsive-sm">
    <table class="table table-bordered table-striped" id="table">
        <tbody>
        <tr>
            <td>Nama</td>
            <td><?php echo $namaMahasiswa[0]->nama; ?></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td><?php echo $namaMahasiswa[0]->nim; ?></td>
        </tr>
        <?php echo form_open_multipart('DosenUpload/upload/' . $namaMahasiswa[0]->id); ?>
        <tr>
            <td>Status</td>
            <td>
                <select name="inputStatus" class="form-select w-25" aria-label="Default select example">
                    <option value="Bab 1 Revisi">Bab 1 Revisi</option>
                    <option value="Bab 2 Revisi">Bab 2 Revisi</option>
                    <option value="Selesai">Selesai</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <input class="form-control w-50" type="file" name="file_dokumen" id="formFile">
                    <button class="btn btn-primary" type="submit">Upload</button>
                    <?php echo form_close(); ?>
                </div> 
            </td>
        </tr>
        </tbody>
    </table>
    </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>