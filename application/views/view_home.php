<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        td, th {
            border: 1px solid black;
        }
    </style>

    <title>Home</title>
</head>

<body>
    <header>
        <div>
            <?php echo form_open('home/cari'); ?>
            <input type="text" name="cariNama" placeholder="Cari Berdasarkan Nama">
            <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                </svg></button>
            <?php echo form_close(); ?>

            <div>
                <a href="<?php echo base_url('login/index'); ?>">Login</a>
                <a href="<?php echo base_url('registrasi/index'); ?>">Register</a>
            </div>
        </div>
    </header>

    <table>
        <tr>
            <td>No.</td>
            <td>Nim</td>
            <td>Nama</td>
            <td>Dosen Pembimbing</td>
            <td>Status</td>
        </tr>
        <?php
        $i = 1;
        foreach ($data as $row) { ?>
            <tr>
                <td><?php echo $i++ ?>.</td>
                <td><?php echo $row->nim ?></td>
                <td><?php echo $row->nama ?></td>
                <td><?php echo $row->dosenPembimbing ?></td>
                <td><?php echo $row->status ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>