<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        tr, td{
            border: 1px solid black;
        }
    </style>

</head>
<body>

    <header>
        <p><?php echo $nama['nama']; ?></p>
        <a href="<?php echo base_url('homeDosen/logout') ?>">Logout</a>
    </header>

    <table>
        <tr>
            <td>No.</td>   
            <td>NIM</td>
            <td>Nama</td>
            <td>Status</td>
            <td>Dokumen</td>
        </tr>
        <?php $id=1;
        foreach($mahasiswa as $row){ ?>
            <tr>
                <td><?php echo $id++ ?></td>
                <td><?php echo $row->nim ?></td>
                <td><?php echo $row->nama ?></td>
                <td><?php echo $row->status ?></td>
                <td><a href="<?php echo base_url('homedosen/upload') ?>">Upload</a> | <a href="<?php echo base_url('homedosen/download') ?>">Download</a></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>