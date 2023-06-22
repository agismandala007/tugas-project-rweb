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

    <section>
        <ul>
            <li><a href="<?php echo base_url('HomeMahasiswa'); ?>">Upload</a></li>
            <li><a href="<?php echo base_url('HomeMahasiswa/feedback'); ?>">Feedback</a></li>
        </ul>
    </section>

    <h2>Riwayat Revisi</h2>
    <table>
        <tr>
            <td>No.</td>
            <td>Nama</td>
            <td>File</td>
        </tr>
        <?php
            $i=0; 
            foreach($dokumen as $row)
            { ?>

            <td><?php $i++; ?></td>
            <td><?php echo $row->nama; ?></td>
            <td><?php echo $row->data; ?></td>


        <?php } ?>
    </table>
</body>
</html>