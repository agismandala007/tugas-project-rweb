<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>

    <style>
        tr, td{
            border: 1px solid black;
        }
    </style>
</head>
<body>

<header>
        <p><?php echo $nama['nama']; ?></p>
    </header>

    <table>
        <tr>
            <td>Nama : </td>
            <td><?php echo $namaMahasiswa[0]->nama; ?></td>
        </tr>
        <tr>
            <td>NIM : </td>
            <td><?php echo $namaMahasiswa[0]->nim; ?></td>
        </tr>
        <?php echo form_open_multipart('DosenUpload/upload'); ?>
        <tr>
            <td>Status :</td>
            <td>                
                <select name="inputStatus">
                    <option value="Koreksi">Koreksi</option>
                    <option value="Revisi">Revisi</option>
                    <option value="Selesai">Selesai</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">

                <input type="file" name="file_dokumen">
                <button type="submit">Upload</button>
            <?php echo form_close(); ?>
            </td>
        </tr>
    </table>


</body>
</html>