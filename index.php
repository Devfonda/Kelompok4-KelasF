<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kopi Kenangan Senja</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">

    <!-- Feather Icons -->
      <script src="https://unpkg.com/feather-icons"></script>

    <!-- Style -->
     <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<nav class="navbar">
    <a href="#" class="navbar-logo">Kenangan<span>Senja.</span></a>

    <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Kontak</a>
    </div>

    <div class="navbar-extra">
        <a href="#" id="Search"><i data-feather="search"></i></a>
        <a href="#" id="Shopping-Cart"><i data-feather="shopping-cart"></i></a>
        <a href="#" id="Hamburger-menu"><i data-feather="menu"></i></a>
    </div>
</nav>

<section class="hero" id="home">
    <main class="content">
        <h1>Mari Nikmati Secangkir <span>Kopi</span></h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, quaerat?</p>
        <a href="#" class="cta">Beli Sekarang</a>
    </main>
</section>

<!-- About Section -->
<section id="about" class="about">
    <h2><span>Tentang</span> Kami</h2>

    <div class="row">
        <div class="about-img">
            <img src="img/Tentang-Kami.jpg" alt="Tentang Kami">
        </div>
        <div class="content">
            <h3>Kenapa memilih kopi kami</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias voluptate ab minima corrupti repellat dolorum.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda a laborum, aliquid qui porro ipsam excepturi atque placeat ea nemo!</p>
        </div>
    </div>
</section>
<!-- About Section end-->

<!-- Menu Section start -->
 <section id="menu" class="menu">
    <h2><span>Menu</span> Kami</h2>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam temporibus, quibusdam sint ipsa eaque ipsum.</p>

    <div class="row">
        <div class="menu-card">
            <img src="img/menu/espresso.jpg" alt="espresso" class="menu-card-img">
            <h3 class="menu-card-title">- Espresso -</h3>
            <p class="menu-card-price">IDR 15K</p>
        </div>
        <div class="menu-card">
            <img src="img/menu/espresso.jpg" alt="espresso" class="menu-card-img">
            <h3 class="menu-card-title">- Espresso -</h3>
            <p class="menu-card-price">IDR 15K</p>
        </div>
        <div class="menu-card">
            <img src="img/menu/espresso.jpg" alt="espresso" class="menu-card-img">
            <h3 class="menu-card-title">- Espresso -</h3>
            <p class="menu-card-price">IDR 15K</p>
        </div>
        <div class="menu-card">
            <img src="img/menu/espresso.jpg" alt="espresso" class="menu-card-img">
            <h3 class="menu-card-title">- Espresso -</h3>
            <p class="menu-card-price">IDR 15K</p>
        </div>
        <div class="menu-card">
            <img src="img/menu/espresso.jpg" alt="espresso" class="menu-card-img">
            <h3 class="menu-card-title">- Espresso -</h3>
            <p class="menu-card-price">IDR 15K</p>
        </div>
        <div class="menu-card">
            <img src="img/menu/espresso.jpg" alt="espresso" class="menu-card-img">
            <h3 class="menu-card-title">- Espresso -</h3>
            <p class="menu-card-price">IDR 15K</p>
        </div>
    </div>
 </section>
<!-- Menu Section END -->
 
<!-- Contact Start-->
 <section id="contact" class="contact">
    <h2><span>Kontak</span> Kami</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, ratione.</p>

    <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.2493653328274!2d110.74863370000003!3d-7.547763199999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a148d8d70b9d9%3A0xc1e245d411c6ff6a!2sSTMIK%20AMIKOM%20Surakarta!5e0!3m2!1sen!2sid!4v1731010942934!5m2!1sen!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
        
            <form action="">
                <div class="input-group">
                    <i data-feather="user"></i>
                    <input type="text" placeholder="nama">
                </div>
                <div class="input-group">
                    <i data-feather="mail"></i>
                    <input type="text" placeholder="email">
                </div>
                <div class="input-group">
                    <i data-feather="phone"></i>
                    <input type="text" placeholder="no hp">
                </div>
                <button type="submit" class="btn">kirim pesan</button>
            </form>
    </div>
 </section>
<!-- Contact End-->

<!-- Footer Start -->
 <footer>
    <div class="socials">
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
    </div>

    <div class="links">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Kontak</a>
    </div>

    <div class="credit">
        <p>Created By <a href="">Kelompok 4 Kelas F</a>. | &copy; 2023</p>
    </div>
 </footer>
<!-- Footer End -->
    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

    <!-- JS -->
     <script src="js/script.js"></script>
</body>
</html>