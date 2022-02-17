<form action="<?= base_url('profile/action_tambah_data_profile')?>" method="post">
    <center><table>
        <tr>
            <td>nama siswa</td>
            <td>;</td>
            <td><input type="text"name="nama_siswa"class="form-control"></td>
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
            <td><input type="text"name="alamat"class="form-control"></td>
        </tr>
        <tr>
            <td>no hp</td>
            <td>;</td>
            <td><input type="text"name="no_hp"class="form-control"></td>
        </tr>
        <tr>
            <td colspan="3"><hr></td>
        </tr>
        <tr>
            <td colspan="3"class="text-center">
                <button type="submit" class="btn btn-primary">simpan</button>
                <button type="submit" class="btn btn-primary">batal</button>
              
            </td>
        </tr>
        
    </table></center>


</form>