<?php include 'includes/cek_session.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tambah barang - Warung ABC</title>
    </head>
    <body>
        <h1>Tambah Barang</h1>
        <from action="proses_tambah_barang.php" method="POST">
            <table> 
                <tr><td>kode barang</td><td>:</td>
                    <td><input type="text" name="kode_barang" required></td></tr>
                <tr><td>nama barang</td><td>:</td>
                    <td><input type="text" name="nama_barang" required></td></tr>
                <tr><td>harga satuan</td><td>:</td>
                    <td><input type="number" name="harga_satuan" step="0.01" required></td></tr>
                <tr><td>stok</td><td>:</td>
                    <td><input type="number" name="stok" required></td></tr>
                <tr><td>tanggal kadaluarsa</td><td>:</td>
                    <td><input type="date" name="tanggal_kadaluarsa"></td></tr>
                <tr><td colspan="3"><input type="submit" value="simpan"></td></tr>
            </table>
        </from>
        <p><a href="data_barang.php">kembali</a></p>
    </body>
</html>