<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Document</title>
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
            <i class="bi bi-person-circle">  <?php echo $mahasiswa['nama']; ?></i>    
            </div>
        </div>

        
    
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Collapsed content</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>

  <div class="offcanvas-body p-4">
    <hr class="border border-light border-3 opacity-75">
    <div class="d-grid gap-2 col-6 mx-auto">
      <h6 class="text-body-secondary"><i class="bi bi-play-fill"></i> <a href="<?php echo base_url('HomeMahasiswa'); ?>">Upload</a></h6>
      <h6 class="text-body-secondary"><i class="bi bi-play-fill"></i> <a href="<?php echo base_url('MahasiswaFeedback'); ?>">Feedback</a></h6>
    </div>

    <div class="d-grid gap-2 col-9 mx-auto"><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <h5 class="text-body-secondary"><i class="bi bi-box-arrow-right"></i> <a href="<?php echo base_url('HomeMahasiswa/logout'); ?>"> Logout</a></h5>
    </div>
  </div>
</div>

    </nav>

    <div class="container ">
    <!-- form login -->
    <div class="card border-primary mb-6 position-absolute top-50 start-50 translate-middle shadow-lg p-3 bg-body-tertiary rounded w-50" style="width: 18rem;">
        <div class="card-body">
            <div class="position-absolute top-0 start-50 translate-middle-x">
                <h4>UPLOAD FILE</h4>
            </div><br>
            <?php echo form_open_multipart('HomeMahasiswa/upload'); ?>
            <div class="mb-3">
                <input class="form-control" type="file" name="file_dokumen" id="formFile">
            </div>
            <hr>
            <button class="btn btn-primary" type="submit">Upload</button>
            <?php echo form_close(); ?>
        </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>