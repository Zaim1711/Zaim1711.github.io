<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
<style>
    /* Floating WhatsApp Button */
        .whatsapp-button {
            position: fixed;
            bottom: 50px;
            right: 20px;
            background-color: #25D366;
            color: #fff;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            font-size: 24px;
            text-align: center;
            z-index: 1000;
            transition: background-color 0.3s ease;
        }

        .whatsapp-button:hover {
            background-color: #128C7E;
        }
</style>
<div class="">
    <div class="content-background"></div>
    <div class="blur-circle purple"></div>
    <div class="blur-circle brown"></div>
    <div class="blur-circle blue"></div>
    <div class="blur-circle green"></div>
    <div class="blur-circle cyan"></div>
    <img class="main-image" src="./image/hero.png" alt="Main Image" /> 
    <header class="navbar">
    <a href="./index.php">
        <img class="logo" src="./image/logo_white.png" alt="Logo">
    </a>
    <nav class="nav-links">
        <a href="./equipment.php" class="nav-item">Equipment</a>
        <a href="#about" class="nav-item">About us</a>
        <a href="#blog" class="nav-item">Blog</a>
    </nav>
    <div class="burger" onclick="toggleMenu()">
                <i class="bi bi-list"></i> <!-- Bootstrap icon for burger -->
            </div>
</header>
    <a href="https://api.whatsapp.com/send?phone=6282241757759 &amp;text=Mohon informasi lebih detail tentang Salaman Exhibition" class="whatsapp-button" target="_blank">
        <i class="bi bi-whatsapp"></i>
    </a>
     <script>
        function toggleMenu() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('active');
        }
    </script>
</div>