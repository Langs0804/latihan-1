<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form submission result</title>
</head>
<body>
    <h2>form submission result</h2>
    
    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        // Retrieve form data
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $tempat_lahir = $_POST["tempat_lahir"];
        $tanggal_lahir = $_POST["tanggal_lahir"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
        $pendidikan = $_POST["pendidikan"];

        // Display submitted data
        echo "<p>Nama: $nama</p>";
        echo "<p>alamat: $alamat</p>";
        echo "<p>tempat lahir: $tempat_lahir</p>";
        echo "<p>tanggal lahir: $tanggal_lahir</p>";
        echo "<p>jenis kelamin: $jenis_kelaminr</p>";
        echo "<p>pendidikan: $pendidikan</p>";
    }
    else {
        // If the form is not submitted, redirect to the form page
        header("Location: inputform.php");
    }
    ?>

</body>
</html>