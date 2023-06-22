<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <p>Selamat Datang <?php echo $mahasiswa['nama']; ?></p>
        <a href="<?php echo base_url('HomeMahasiswa/logout'); ?>"> logout</a>
    </header>

    <?php echo form_open_multipart('HomeMahasiswa/upload'); ?>
        <input type="file" name="file_dokumen">
        <button type="submit">Upload</button>
    <?php echo form_close(); ?>
</body>
</html>