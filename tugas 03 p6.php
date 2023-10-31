<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 03 p6</title>
</head>
<body>
    <h1>From Registrasi</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <pre>
        Isi Data Dibawah ini    :
        Nama                    <input type="text" name="nama"/>
        Alamat                  <textarea name="alamat" rows="5" cols="40"></textarea>
        Tempat Lahir            <input type="text" name="tpl"/>
        Tanggal Lahir           <input type="text" name="tgl"/></td>
        Jenis Kelamin           <input type="radio" name="jeniskel" value="Laki-Laki">Laki-Laki <input type="radio" name="jeniskel" value="Prempuan">Prempuan
        Pendidikan              <select name="pendidikan">                     
                                <option value="-Pilih-">
                                <option value="PELAJAR">PELAJAR
                                <option value="MAHASISWA">MAHASISWA</select>

        <input type="submit" value="tampil"/><input type="reset" value="batal"/></td><tr>
</pre>
</form>

    <h1>Data Registrasi</h1>
<?php
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $tpl=$_POST['tpl'];
    $tgl=$_POST['tgl'];
    $jeniskel=$_POST['jeniskel'];
    $pendidikan=$_POST['pendidikan'];  
?>
<table border="1" callspacing="3" callpadding="5">
    <tr>
        <td>Nama</td>
        <td><?php echo $nama; ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><?php echo $alamat; ?></td>
    </tr>
    <tr>
        <td>Tempat Lahir            </td>
        <td><?php echo $tpl; ?></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td><?php echo $tgl; ?></td>
    </tr>
    <tr>
        <td>Jeniskelamin</td>
        <td><?php echo $jeniskel; ?></td>
    </tr>
    <tr>
        <td>Pendidikan</td>
        <td><?php echo $pendidikan; ?></td>
    </tr>
</table>
<a href="Forminputregistrasi.php">Back To Home</a>

</body>
</html>