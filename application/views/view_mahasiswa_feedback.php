<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>

    <style>
        tr, td{
            border: 1px solid black;
        }
    </style>

</head>
<body>
    <header>
        <p><?php echo $mahasiswa['nama']; ?></p>
        <a href="<?php echo base_url('HomeMahasiswa/logout'); ?>"> logout</a>
    </header>

    <section>
        <ul>
            <li><a href="<?php echo base_url('HomeMahasiswa'); ?>">Upload</a></li>
            <li><a href="<?php echo base_url('MahasiswaFeedback'); ?>">Feedback</a></li>
        </ul>
    </section>

    <h2>Riwayat Revisi</h2>
    <table>
        <tr>
            <td>No.</td>
            <td>Tanggal</td>
            <td>Nama</td>
            <td>File</td>
        </tr>
        <?php
            $i=1; 
            foreach($feedback as $row)
            { ?>
            <tr>
                <td><?php echo $i++ . "."; ?></td>
                <td><?php echo $row->date; ?></td>
                <td><?php echo $row->nama; ?></td>
                <td><a href="<?php echo base_url('MahasiswaFeedback/download/' . $row->id) ?>">Download</a></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>