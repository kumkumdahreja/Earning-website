<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Playdo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="d-flex flex-column min-vh-100">
    <?php include 'assets/components/navbar.php'; ?>
    
    <main class="about-main">
        <section class="hero-section">
            <div class="container">
                <h1>About Playdo</h1>
                <p class="subtitle">Rewarding gamers since 2023</p>
            </div>
        </section>

        <section class="about-content">
            <div class="container">
                <div class="about-grid">
                    <div class="about-card">
                        <i class="fas fa-gamepad"></i>
                        <h3>Our Mission</h3>
                        <p>To create the most rewarding gaming experience by connecting players with amazing rewards and exclusive content.</p>
                    </div>
                    <div class="about-card">
                        <i class="fas fa-trophy"></i>
                        <h3>Our Vision</h3>
                        <p>To become the leading platform for gamers to earn while playing their favorite games.</p>
                    </div>
                    <div class="about-card">
                        <i class="fas fa-users"></i>
                        <h3>Our Community</h3>
                        <p>Join over 1 million gamers who are already earning rewards through our platform.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'assets/components/footer.php'; ?>
</body>
</html>