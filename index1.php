<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awesome CSS Responsive Navigation </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.2-web/css/all.min.css">
</head>

<body>
    <header>
        <input type="checkbox" name="" id="chk1">
        <div class="logo">
            <h1>Web Master</h1>
        </div>
        <div class="search-box">
            <form action="">
                <input type="text" name="search" id="srch" placeholder="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <ul>
            <li><a href="index1.php?modul=home">Home</a></li>
            <li><a href="index1.php?modul=product">Product</a></li>
            <li><a href="index1.php?modul=blog">Blog</a></li>
            <li><a href="index1.php?modul=contact">Contact</a></li>
            <li>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </li>
        </ul>
        <div class="menu">
            <label for="chk1">
                <i class="fa fa-bars"></i>
            </label>
        </div>
    </header>
    <div id="main-content">
        <?php
        if (isset($_GET['modul'])) {
            $pages = $_GET['modul'];
        } else {
            $pages = "home";
        }

        if (!isset($_GET['modul']) || $pages == "home") {
            ?>
            <div id="content-home">
                <h1>Title Home</h1><br>
                <p>Selamat Datang di website kami lorepsum.<br>
                    smkn 9.<br>
                    jurusan rekayasa perangkat lunak.<br>
                    di kelas 11.</p>
            </div>
            <?php
        }
        if ($pages == "product") {
            ?>
            <div id="content-product">
                <h1>Title Product</h1><br>
                <p>Selamat Datang di website kami.<br>
                    smkn 9.<br>
                    jurusan RPL.<br>
                    di kelas 11.</p>
                <a href="index1.php?modul=product1">product1</a><br>
                <a href="index1.php?modul=product2">product2</a><br>
                <a href="index1.php?modul=product1">product3</a><br>
            </div>
            <?php
        }
        if ($pages == "product1") {
            ?>
            <div id="content-about">
                <h1>Produk Olahraga</h1><br>
                <label>Dumbel</label><br>
                <label>Matras Yoga</label><br>
                <label>Tali Skipping</label>
            </div>
            <?php
        }
        ?>
    </div>
    <?php
    if ($pages == "product2") {
        ?>
        <div id="content-about">
            <h1>Produk Elektronik</h1><br>
            <label>Handphone</label><br>
            <label>TV</label><br>
            <label>Laptop</label>
        </div>
        <?php
    }
    ?>
    <?php
    if ($pages == "product3") {
        ?>
        <div id="content-about">
            <h1>Produk Furniture</h1><br>
            <label>Lemari</label><br>
            <label>Meja</label><br>
            <label>Laptop</label>
        </div>
        <?php
    }
    ?>
    <?php
    ?>
    <?php
    if ($pages == "blog") {
        ?>
        <div id="content-blog">
            <h1>Title Blog</h1><br>
            <p>Selamat Datang di website kami.<br>
                smkn 9.<br>
                jurusan RPL.<br>
                di kelas 11.</p>
        </div>
        <?php
    }
    if ($pages == "contact") {
        ?>
        <div id="content-contact">
            <h1>Title Contact</h1><br>
            <p>Selamat Datang di website kami.<br>
                smkn 9.<br>
                jurusan RPL.<br>
                di kelas 11.</p>
            <a href="index1.php?modul=aboutme">Tentang Saya</a>
        </div>
        <?php
    }
    if ($pages == "aboutme") {
        ?>
        <div id="content-about">
            <h1>Tentang Saya</h1><br>
            <label>Nama : Zahwa</label><br>
            <label>Kelas : XI Rpl-1</label><br>
            <label>Umur : 16 Tahun</label>
        </div>
        <?php
    }
    ?>
    </div>
</body>

</html>