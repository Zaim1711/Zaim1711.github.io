<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multimedia Service</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./image/logo_browser.png" type="image/x-icon">
    <!-- Alternatif jika menggunakan .png atau .svg -->
    <!-- <link rel="icon" href="assets/images/favicon.png" type="image/png"> -->
</head>

<body>
    <?php include 'navbar.php'; ?>
        <main class="content">
            <section class="content-block content-block-right">
                <div class="text-content">
                    <p>____</p>
                    <div class="tagline">GET STARTED</div>
                    <h1>Apa yang anda butuhkan?</h1>
                    <p>Kami menyediakan layanan persewaan multimedia dan produksi panggung yang unggul, siap membantu
                        Anda menciptakan acara yang tak terlupakan dengan teknologi dan kreativitas terbaik.</p>
                    <a href="./equipment.php" class="read-more">Read more</a>
                </div>
                <img class="image" src="./image/content/Westin.jpg" alt="Service Image 1">
            </section>
        
            <section class="content-block content-block-left">
                <div class="text-content">
                    <div class="tagline">EVENT ESSENTIALS</div>
                    <h1>Memilih Perlengkapan Acara yang Tepat!</h1>
                    <p>Pastikan acara Anda didukung dengan teknologi multimedia terbaik yang sesuai dengan kebutuhan.
                        Kami menyediakan berbagai pilihan peralatan dan layanan produksi panggung untuk memberikan hasil
                        maksimal dalam setiap proyek Anda.</p>
                    <a href="./equipment.php" class="read-more">Read more</a>
                </div>
                <img class="image" src="./image/content/content2.png" alt="Service Image 2">
            </section>

           <div class="our-services">
    <div class="our-services-title">Our Enterprise</div>
        <div class="services-container">

            <!-- LED SCREEN -->
            <a href="./led_home.php" class="service-rectangle">
                <div class="rectangle-text">
                    <img src="./image/content/led.png" alt="">
                    <h2>LED SCREEN</h2>
                </div>
            </a>

            <!-- PRODUCTION -->
            <a href="./production_home.php" class="service-rectangle">
                <div class="rectangle-text">
                    <img src="./image/content/product.png" alt="">
                    <h2>PRODUCTION</h2>
                </div>
            </a>

            <!-- LIGHTING -->
            <a href="./lighting_home.php" class="service-rectangle">
                <div class="rectangle-text">
                    <img src="./image/content/lighting.png" alt="">
                    <h2>LIGHTING</h2>
                </div>
            </a>

            <!-- SOUND SYSTEM -->   
            <a href="./soundsystem_home.php" class="service-rectangle">
                <div class="rectangle-text">
                    <img src="./image/content/soundsystem.png" alt="">
                    <h2>SOUND SYSTEM</h2>
                </div>
            </a>

            <!-- PARTY SUPPLIES -->
            <a href="./party_supplies.php" class="service-rectangle">
                <div class="rectangle-text">
                    <img src="./image/content/party.png" alt="">
                    <h2>PARTY SUPPLIES</h2>
                </div>
            </a>

            <a href="./genset.php" class="service-rectangle">
                <div class="rectangle-text">
                    <img src="./image/content/Genset.png" alt="">
                    <h2>GENSET</h2>
                </div>
            </a>
            
        </div>
    </div>


        
            <?php include 'footer.php'; ?>
        </main>

    </div>
</body>

</html>