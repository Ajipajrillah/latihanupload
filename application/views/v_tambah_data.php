<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>tambah data</h1>
<form action="<?=base_url('profile/tambah_data')?>" method="post">
    <table>
        <tr>
            <td>parameter1 </td>
            <td>:</td>
            <td><input type="text"name="nama"></td>
        </tr>
        <tr>
            <td>parameter2 </td>
            <td>:</td>
            <td><input type="text"name="alamat"></td>
        </tr>
        <tr>
            <td>parameter3 </td>
            <td>:</td>
            <td><input type="text"name="nohp"></td>
        </tr>
        <tr>
            <td colspan="3">
                <button type="submit">simpan</button>
            </td>
        </tr>

</form>
</body>
