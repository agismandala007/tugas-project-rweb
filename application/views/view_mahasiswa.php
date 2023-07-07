<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Monitoring Informatic</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>./assets//img/svg/logo.svg" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url(); ?>./assets/css/style.css">
</head>

<body>
  <div class="layer"></div>
    <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
  <div class="page-flex">
  <!-- ! Sidebar -->
  <aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="<?php echo base_url('MahasiswaFeedback'); ?>" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                <span class="icon logo" aria-hidden="true"></span>
                <div class="logo-text">
                    <span class="logo-title">Informatic</span>
                    <span class="logo-subtitle">Monitoring</span>
                </div>
            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a class="active" href="<?php echo base_url('HomeMahasiswa'); ?>"><span class="icon document" aria-hidden="true"></span> Submit Thesis</a>
                </li>
                <li>
                    <a href="<?php echo base_url('MahasiswaFeedback'); ?>"><span class="icon paper" aria-hidden="true"></span> Feedback Dosen</a>
                </li>
                <ul class="cat-sub-menu"></ul> 
            </ul>
            <ul class="sidebar-body-menu"></ul>         
        </div>
    </div>
    <div class="sidebar-footer">
      <i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"><a href="<?php echo base_url('HomeMahasiswa/logout'); ?>"> Logout</a></i>
    </div>
  </aside>

  <div class="main-wrapper">
    <!-- ! Main nav -->
    <nav class="main-nav--bg">
      <div class="container main-nav">
        <div class="main-nav-start">
          <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
            <span class="sr-only">Switch theme</span>
            <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
            <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
          </button>
        </div>

        <div class="main-nav-end">
          <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
            <span class="sr-only">Toggle menu</span>
            <span class="icon menu-toggle--gray" aria-hidden="true"></span>
          </button>
          <div class="nav-user-wrapper">
            <div class="stat-cards-info__num">
              <i class="fa-regular fa-user">  <?php echo $mahasiswa['nama']; ?></i>    
            </div>
          </div>
        </div>
      </div>
    </nav>
    
    <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">
      <div class="container">
        <h2 class="main-title">Upload File</h2>
        <!-- form upload -->
        <div class="  col-xl-6">
          <article class="stat-cards-item">
            <?php echo form_open_multipart('HomeMahasiswa/upload'); ?>
            <div class="mb-3">
                <input class="form-control w-10" type="file" name="file_dokumen" id="formFile">
            </div>
            <hr>
            <button class="btn btn-primary" type="submit">Upload</button>
            <?php echo form_close(); ?>
          </article>
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

<!-- Chart library -->
<script src="<?php echo base_url(); ?>./assets/plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="<?php echo base_url(); ?>assets/plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="<?php echo base_url(); ?>assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/8d3ba567bd.js" crossorigin="anonymous"></script>
</body>

</html>