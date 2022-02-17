<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><table border="1">
        <thead>
            <tr>
                <td>no</td>
                <td>NAMA SISWA</td>
                <td>JENIS KELAMIN</td>
                <td>ALAMAT</td>
                <td>NO HP</td>
                <td>ACTION</td>
                
            </tr></center>
        </thead>
        <H3>SMK NU TASIKMALAYA AJI PAJRILLAH</H3>
        <br>
        <a href="<?= base_url('profile/tambah_data_profile')?>">TAMBAH DATA PROFILE </a>
    <tbody>
        <?php $no =1; foreach($profile as $p){?>
        <tr>
            <td><?= $no?></td>
            <td><?= $p->nama_siswa?></td>
            <td><?= $p->jenis_kelamin?></td>
            <td><?= $p->alamat?></td>
            <td><?= $p->no_hp?></td>
            <td><a href="<?= base_url('profile/update_data'.$p->id)?>">edit </a>||
            <a href="<?= base_url('profile/delete_data'.$p->id)?>">delete </a></td>
            
            
            
        </tr>   
        <?php $no++;}?>
</tbody>
</table>
            
</body>
</html>