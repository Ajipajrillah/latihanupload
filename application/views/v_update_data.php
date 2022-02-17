<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?= base_url('profile/action_update_data')?>" method="post">
    <center><table>
        <tr>
            <td>nama siswa</td>
            <td>;</td>
             <td>
                 <input type="hidden"name="id"value="<?=$profile['id']?>">
                 <input type="text"name="nama_siswa"class="form-control"value="<?
            $profile['nama_siswa']?>">
            </td>
        </tr>
        <tr>
            <td>jenis kelamin</td>
            <td>;</td>
            <td><input type="radio"name="jenis_kelamin"value="L">L
            <td><input type="radio"name="jenis_kelamin"value="P">P
        </tr>
        <tr>
            <td>alamat</td>
            <td>;</td>
            <td><texarea type="text"name="alamat"class="form-control"><?
            $profile['alamat']?></texarea ></td>
        </tr>
        <tr>
            <td>no hp</td>
            <td>;</td>
            <td><input type="text"name="no_hp"class="form-control"value="<?
            $profile['no_hp']?>">></td>
        </tr>
        <tr>
            <td colspan="3"class="text-center">
                <button type="submit" class="btn btn-primary">edit</button>
                <button type="submit" class="btn btn-primary">batal</button>
               
            </td>
        </tr>
        <tr>
</table>
</form>
</body>
</html>