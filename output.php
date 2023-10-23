<head>
    <title>ruangguru</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <div class="logo">
        <img src="img/logo.png" width="100px" />
        <p class="slogan">
            <i>Platform Bimbingan Belajar Online #1 di Indonesia</i> <br /><i>Belajar apapun dari siapapun!</i>
        </p>
    </div>
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a class="active" href="form.php">Form</a></li>
        <li><a href="about.html">About Us</a></li>
    </ul>
    <br />
    <h1 style="text-align: center;">Data Diri Pendaftaran</h1>
    <div class="php">
        <?php
        echo "$_POST[email] <br>";
        echo "$_POST[jenis] <br>";
        echo "$_POST[produk] <br>";
        echo "<h2>Thank You</h2>"
        ?>
    </div>

</body>

</html>