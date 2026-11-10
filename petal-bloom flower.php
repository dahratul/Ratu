<?php
$namaToko = "Petal & Bloom";
$tagline = "Flowers That Speak From The Heart ♡";

$products = [
    [
        "nama" => "Pink Rose Bouquet",
        "deskripsi" => "Buket mawar pink yang manis dan elegan.",
        "harga" => 150000,
        "gambar" => "https://images.unsplash.com/photo-1680563899402-26c3a712831f?w=500"
    ],
    [
        "nama" => "Colorful Bouquet",
        "deskripsi" => "Rangkaian buket bunga warna-warni yang ceria.",
        "harga" => 175000,
        "gambar" => "https://images.unsplash.com/photo-1649700292230-363fb9a05993?w=500"
    ],
    [
        "nama" => "Sweet Flower Bouquet",
        "deskripsi" => "Buket bunga cantik untuk hadiah spesial.",
        "harga" => 200000,
        "gambar" => "https://images.unsplash.com/photo-1714385272470-f70c12dd5dcd?w=500"
    ]
];

$services = [
    [
        "nama" => "♡ Custom Bouquet",
        "deskripsi" => "Membuat buket sesuai pilihan bunga dan warna."
    ],
    [
        "nama" => "♡ Flower Gift",
        "deskripsi" => "Rangkaian bunga untuk hadiah dan momen spesial."
    ],
    [
        "nama" => "♡ Flower Delivery",
        "deskripsi" => "Melayani pengiriman bunga untuk pelanggan."
    ]
];

$alamat = "Jl. Melati No. 10";
$email = "petalandbloom@gmail.com";
$instagram = "@petalandbloom";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $namaToko; ?> - Flower Shop</title>

    <style>
        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #fff7f8;
            color: #76545e;
        }

        /* HEADER */
        header {
            background-color: #fce8ed;
            text-align: center;
            padding: 25px;
        }

        header h1 {
            color: #b76e83;
            font-family: Georgia, serif;
            font-size: 36px;
            margin: 0;
        }

        header p {
            color: #a47d85;
            font-style: italic;
            margin-bottom: 0;
        }

        /* NAVIGASI */
        nav {
            background-color: #c98296;
            text-align: center;
            padding: 15px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 15px;
            font-weight: bold;
        }

        nav a:hover {
            color: #ffe2e9;
        }

        /* HALAMAN UTAMA */
        .hero {
            background:
                linear-gradient(rgba(75, 35, 48, 0.30),
                rgba(75, 35, 48, 0.30)),
                url("https://images.unsplash.com/photo-1746822132410-0aa489a964f2?auto=format&fit=crop&fm=jpg&q=85&w=1600")
                center/cover;

            min-height: 450px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding: 30px;
        }

        .hero h2 {
            font-family: Georgia, serif;
            font-size: 43px;
        }

        .hero p {
            font-size: 17px;
            line-height: 1.7;
        }

        .btn {
            display: inline-block;
            background-color: #d88fa3;
            color: white;
            padding: 13px 27px;
            text-decoration: none;
            border-radius: 25px;
            margin-top: 15px;
        }

        .btn:hover {
            background-color: #b76e83;
        }

        /* KONTEN */
        .content {
            padding: 45px 8%;
            text-align: center;
        }

        .content h2 {
            color: #b76e83;
            font-family: Georgia, serif;
            font-size: 29px;
            margin-bottom: 20px;
        }

        .about-text {
            max-width: 750px;
            margin: auto;
            line-height: 1.8;
            color: #927780;
        }

        /* PRODUK */
        .products {
            display: flex;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;
        }

        .card {
            background-color: white;
            width: 260px;
            padding: 15px;
            border-radius: 15px;
            box-shadow: 0 4px 12px #f0dce2;
        }

        .card img {
            width: 100%;
            height: 210px;
            object-fit: cover;
            border-radius: 12px;
        }

        .card h3 {
            color: #b76e83;
        }

        .card p {
            color: #927780;
        }

        .price {
            color: #c17f91 !important;
            font-weight: bold;
        }

        /* LAYANAN */
        .services {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .service-card {
            background-color: #fce8ed;
            padding: 25px;
            width: 250px;
            border-radius: 15px;
        }

        .service-card h3 {
            color: #b76e83;
        }

        .service-card p {
            color: #927780;
        }

        /* KONTAK */
        #contact {
            background-color: #f9e9eb;
        }

        /* FOOTER */
        footer {
            background-color: #c98296;
            color: white;
            text-align: center;
            padding: 20px;
        }

        /* TAMPILAN HP */
        @media screen and (max-width: 600px) {
            nav a {
                display: inline-block;
                margin: 7px;
            }

            .hero h2 {
                font-size: 30px;
            }

            .products, .services {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <header>
        <h1><?php echo $namaToko; ?></h1>
        <p><?php echo $tagline; ?></p>
    </header>

    <!-- NAVIGASI -->
    <nav>
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#products">Products</a>
        <a href="#services">Services</a>
        <a href="#contact">Contact</a>
    </nav>

    <main>

        <!-- HOME -->
        <section id="home" class="hero">
            <div>
                <h2>Bloom With Love</h2>

                <p>
                    Beautiful flowers for your beautiful moments.
                    Share happiness through every bouquet.
                </p>

                <a href="#products" class="btn">Explore Flowers ♡</a>
            </div>
        </section>

        <!-- ABOUT -->
        <section id="about" class="content">
            <h2>About Our Flower Shop</h2>

            <p class="about-text">
                Petal & Bloom adalah toko bunga yang menyediakan
                berbagai rangkaian bunga segar dan cantik.
                Kami percaya bahwa bunga memiliki cara istimewa
                untuk menyampaikan perasaan, menciptakan kenangan,
                dan membawa kebahagiaan bagi setiap orang.
            </p>
        </section>

        <!-- PRODUCTS -->
        <section id="products" class="content">
            <h2>Our Lovely Flowers</h2>

            <div class="products">

                <?php foreach ($products as $product): ?>

                    <div class="card">

                        <img
                            src="<?php echo htmlspecialchars($product['gambar']); ?>"
                            alt="<?php echo htmlspecialchars($product['nama']); ?>"
                        >

                        <h3>
                            <?php echo htmlspecialchars($product['nama']); ?>
                        </h3>

                        <p>
                            <?php echo htmlspecialchars($product['deskripsi']); ?>
                        </p>

                        <p class="price">
                            Rp<?php echo number_format($product['harga'], 0, ',', '.'); ?>
                        </p>

                    </div>

                <?php endforeach; ?>

            </div>
        </section>

        <!-- SERVICES -->
        <section id="services" class="content">
            <h2>Our Services</h2>

            <div class="services">

                <?php foreach ($services as $service): ?>

                    <div class="service-card">

                        <h3>
                            <?php echo htmlspecialchars($service['nama']); ?>
                        </h3>

                        <p>
                            <?php echo htmlspecialchars($service['deskripsi']); ?>
                        </p>

                    </div>

                <?php endforeach; ?>

            </div>
        </section>

        <!-- CONTACT -->
        <section id="contact" class="content">
            <h2>Contact Us</h2>

            <p>Alamat: <?php echo htmlspecialchars($alamat); ?></p>
            <p>Email: <?php echo htmlspecialchars($email); ?></p>
            <p>Instagram: <?php echo htmlspecialchars($instagram); ?></p>
        </section>

    </main>

    <!-- FOOTER -->
    <footer>
        <p>© <?php echo date("Y"); ?> <?php echo $namaToko; ?> Flower Shop</p>
        <p>Made with Love & Flowers ♡</p>
    </footer>

</body>
</html>
