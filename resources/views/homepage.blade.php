<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage Before Login</title>
    
    <style>
        /* CSS Reset */
        body {
            margin: 0;
            padding: 0;
            height: 100vh; /* Gunakan vh agar body tingginya penuh */
            overflow: hidden;
            font-family: Arial, sans-serif;
        }

        /* Fullscreen video background */
        .video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        /* Content over the video */
        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            color: white;
            height: 100vh; /* Sesuaikan dengan tinggi body */
            background: rgba(0, 0, 0, 0.5); /* Overlay gelap agar teks mudah dibaca */
        }

        .content h1 {
            font-size: 3rem;
            margin: 0.5rem 0;
        }

        .content p {
            font-size: 1.5rem;
            margin: 1rem 0;
        }

        /* Button styles */
        .button-container {
            margin-top: 1.5rem;
        }

        .btn {
            display: inline-block;
            margin: 0 0.5rem;
            padding: 0.8rem 1.5rem;
            font-size: 1.2rem;
            color: white;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <video class="video-background" autoplay muted loop>
        <source src="padangMalam.mp4" type="video/mp4">
        Your browser does not support the video tag.
        <audio src=""></audio>
    </video>

    <div class="content">
        <h1>Welcome to Website Kota Padang</h1>
        <p>Padang: Negeri Sejuta Cita Rasa, Warisan Budaya Kaya, Alam yang Memukau.</p>
        <div class="button-container">
            <a href="login.php" class="btn">Login</a>
            <a href="./registrasi.php" class="btn">Register</a>
        </div>
    </div>
</body>
</html>