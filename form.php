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
    <h3 class="judulForm">Formulir Tiket</h3>
    <div class="center">
        <form method="post" action="output.php" class="w-100">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="text" name="email" placeholder="name@example.com" id="email">
            </div><br>
            <div class="form-group">
                <label for="jenis">Jenis Courses (Premium/Reguler)</label>
                <select name="jenis" size="1">
                    <option value="premium" selected>Premium</option>
                    <option value="reguler">Reguler</option>
                </select>
            </div><br>
            <div class="form-group">
                <label for="produk">Jenis Produk</label>
                <select name="produk" size="1">
                    <option value="roboguru" selected>roboguru</option>
                    <option value="ruangbaca">ruangbaca</option>
                    <option value="ruangkelas">ruangkelas</option>
                    <option value="ruanguji">ruanguji</option>
                    <option value="ruangles">ruangles</option>
                    <option value="ruanglesonline">ruanglesonline</option>
                    <option value="ruangbaca">ruangbaca</option>
                </select>
            </div><br>
            <div>
                <center><input class="submit" type="submit" value="simpan"></center>
            </div>
        </form>
    </div>
</body>

</html>