<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lighting</title>
    <link rel="stylesheet" href="../style.css"> <!-- Sesuaikan jalur untuk file CSS -->
    <link rel="icon" href="./image/logo_browser.png" type="image/x-icon">
    <!-- Alternatif jika menggunakan .png atau .svg -->
    <!-- <link rel="icon" href="assets/images/favicon.png" type="image/png"> -->
</head>
    <title>Gallery Lighting</title>
    <style>
         body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .gallery-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* 2 kolom untuk layar kecil */
            gap: 20px; /* Jarak antar gambar */
            padding: 20px;
            max-width: 1200px; /* Batasan lebar maksimal untuk galeri */
            margin: 0 auto; /* Pusatkan container */
        }
        .gallery-item {
            border: 1px solid #ccc;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease;
        }
        .gallery-item:hover {
            transform: scale(1.05); /* Animasi saat hover */
        }
        .gallery-item img {
            width: 100%;
            height: auto;
            display: block;
        }

        /* Aturan untuk tampilan desktop (4 kolom) */
        @media (min-width: 768px) {
            .gallery-container {
                grid-template-columns: repeat(4, 1fr); /* 4 kolom untuk layar lebar (desktop) */
            }
        }

        /* Aturan untuk memperkecil font pada layar kecil */
        @media (max-width: 576px) {
            h1 {
                font-size: 20px; /* Ukuran judul lebih kecil pada layar kecil */
            }
        }
    </style>
<body>
    <?php include './navbar.php'; ?> <!-- Perbaiki jalur dengan ../ -->
    <main class="content">
        <h1>Daftar Gambar Lighting</h1>

        <div class="gallery-container">
        <?php
        // Folder yang berisi gambar
        $folderPath = './image/equipment/lighting/';

        // Memeriksa apakah folder ada
        if (is_dir($folderPath)) {
            // Membaca semua file di dalam folder
            $images = scandir($folderPath);

            // Looping melalui file-file dalam folder
            foreach ($images as $image) {
                // Mengabaikan file . dan ..
                if ($image != '.' && $image != '..') {
                    // Memeriksa apakah file adalah gambar
                    $fileExtension = pathinfo($image, PATHINFO_EXTENSION);
                    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

                    if (in_array(strtolower($fileExtension), $allowedExtensions)) {
                        // Menampilkan gambar dalam grid
                        echo "<div class='gallery-item'>";
                        echo "<img src='{$folderPath}{$image}' alt='{$image}'>";
                        echo "</div>";
                    }
                }
            }
        } else {
            echo "Folder tidak ditemukan.";
        }
        ?>
        </div>
    <?php include './footer.php'; ?> <!-- Perbaiki jalur dengan ../ -->
    </main>
    
</body>
</html>
