<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>personal information form</title>
</head>
<body>
    <h2>personal information form</h2>

    <form method="inputform.php" action="processform.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        <br>

        <label for="alamat">alamat:</label>
        <textarea id="alamat" name="alamat" required></textarea>
        <br>

        <label for="tempat_lahir">tempat lahir:</label>
        <input type="text" id="tempat_lahir" name="tempat lahir" required>
        <br>

        <label for="tanggal_lahir">tanggal lahir:</label>
        <input type="tanggal" id="" name="tanggal_lahir" required>
        <br>

        <label>jenis kelamin:</label>
        <input type="radio" id="pria" name="jenis_kelamin" value="pria" required>
        <label for="pria">pria</label>
        <input type="radio" id="wanita" name="jenis_kelamin" value="wanita" required>
        <label for="wanita">wanita</label>
        <br>

        <label for="pendidikan">pendidikan:</label>
        <select id="pendidikan" name="pendidikan" required>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="S1">S1</option>
            <option value="S2">S2</option>
            <option value="S3">S3</option>
        </select>
        <br>

        <input type="submit" value="submit">
    </form>
</body>
</html>