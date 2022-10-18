<html>

<head>
    <title>Form Input Siswa</title>
</head>

<body>
    <center>
        <form action="<?= base_url('datasiswa/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Siswa
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>NIS</th>
                    <td>:</td>
                    <td>
                        <input type="number" name="nis" id="nis">
                    </td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="kelas" id="kelas">
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="date" name="tgllahir" id="tgllahir">
                    </td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="tmplahir" id="tmplahir">
                    </td>
                </tr>
                <tr>
                    <th>alamat</th>
                    <td>:</td>
                    <td>
                    <textarea rows="10" cols="45" name="alamat" id="alamat"></textarea>
                    </td>
                </tr>
                <tr>
                    <th>Jenis kelamin</th>
                    <td>:</td>
                    <td>
                    <input type="radio" name="jnskel" value="Laki-Laki"> Laki - Laki
                    <input type="radio" name="jnskel" value="Perempuan"> Perempuan
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">Pilih Agama</option>
                            <option value="2">Islam</option>
                            <option value="3">Kristen</option>
                            <option value="3">Katolik</option>
                            <option value="3">Budha</option>
                            <option value="3">Hindu</option>
                            <option value="3">Protestan</option>
                            <option value="3">Khonghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>