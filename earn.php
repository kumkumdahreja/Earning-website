<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play Games | Playdo</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/earn.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="d-flex flex-column min-vh-100">
    <?php include 'assets/components/navbar.php'; ?>
    
    <main class="play-container">

        <h1 class="page-title">PLAY GAMES</h1>
        
        <!-- Options Cards -->
        <div class="options-cards">
            <a href="earn.php" class="option-card">
                <div class="option-icon" style="background: #FF6B6B;">
                    <i class="fas fa-coins"></i>
                </div>
                <div class="option-content">
                    <h3>Earn Robux</h3>
                    <p>Complete tasks to earn rewards</p>
                </div>
            </a>
            
            <a href="withdraw.php" class="option-card">
                <div class="option-icon" style="background: #4ECDC4;">
                    <i class="fas fa-wallet"></i>
                </div>
                <div class="option-content">
                    <h3>Withdraw</h3>
                    <p>Cash out your earnings</p>
                </div>
            </a>
            
            <a href="rewards.php" class="option-card">
                <div class="option-icon" style="background: #FFA07A;">
                    <i class="fas fa-trophy"></i>
                </div>
                <div class="option-content">
                    <h3>Rewards & Promocodes</h3>
                    <p>Claim special offers</p>
                </div>
            </a>
            
            <a href="events.php" class="option-card">
                <div class="option-icon" style="background: #A0E7E5;">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <div class="option-content">
                    <h3>Event</h3>
                    <p>Participate in special events</p>
                </div>
            </a>
        </div>

        <!-- Offerwalls Section -->
<section class="offerwalls-section">
    <div class="section-container">
        <div class="section-header">
            <h2>Offerwalls</h2>
            <p>Complete offers or watch videos to get robux</p>
        </div>
        
        <div class="offerwall-grid">
            <!-- Row 1 -->
            <div class="offerwall-card">
                <div class="brand-logo-container">
                    <img src="assets/images/brands/torox.png" alt="TOROX" class="brand-logo">
                </div>
                <button class="play-now-btn">Play Now</button>
            </div>
            
            <div class="offerwall-card">
                <div class="brand-logo-container">
                    <img src="assets/images/brands/lootably.png" alt="Lootably" class="brand-logo">
                </div>
                <button class="play-now-btn">Play Now</button>
            </div>
            
            <div class="offerwall-card">
                <div class="brand-logo-container">
                    <img src="assets/images/brands/autstudios.png" alt="AUTSTUDOS" class="brand-logo">
                </div>
                <button class="play-now-btn">Play Now</button>
            </div>
            
            <div class="offerwall-card">
                <div class="brand-logo-container">
                    <img src="assets/images/brands/bitlabs.png" alt="BitLabs" class="brand-logo">
                </div>
                <button class="play-now-btn">Play Now</button>
            </div>
            
            <!-- Row 2 - Added 2 more cards -->
            <div class="offerwall-card">
                <div class="brand-logo-container">
                    <img src="assets/images/brands/adgate.png" alt="AdGatemedia" class="brand-logo">
                </div>
                <button class="play-now-btn">Play Now</button>
            </div>
            
            <div class="offerwall-card">
                <div class="brand-logo-container">
                    <img src="assets/images/brands/offers.png" alt="OFFERS" class="brand-logo">
                </div>
                <button class="play-now-btn">Play Now</button>
            </div>
        </div>
    </div>
</section>

<!-- Surveys Section -->
<section class="offerwalls-section">
    <div class="section-container">
        <div class="section-header">
            <h2>Surveys <span class="badge">HOT</span></h2>
            <p>Answer and complete surveys to get robux</p>
        </div>
        
        <div class="offerwall-grid">
            <!-- Survey Item 1 -->
            <div class="offerwall-card">
                <div class="brand-logo-container">
                    <img src="assets/images/brands/bitlabs.png" alt="BitLabs" class="brand-logo">
                </div>
                <button class="play-now-btn">Start Now</button>
            </div>
            
            <!-- Survey Item 2 -->
            <div class="offerwall-card">
                <div class="brand-logo-container">
                    <img src="assets/images/brands/prime.png" alt="Prime Surveys" class="brand-logo">
                </div>
                <button class="play-now-btn">Start Now</button>
            </div>
            
            <!-- Survey Item 3 -->
            <div class="offerwall-card">
                <div class="brand-logo-container">
                    <img src="assets/images/brands/cpx.png" alt="CPX RESEARCH" class="brand-logo">
                </div>
                <button class="play-now-btn">Start Now</button>
            </div>
            
            <!-- Survey Item 4 -->
            <div class="offerwall-card">
                <div class="brand-logo-container">
                    <img src="assets/images/brands/theorem.png" alt="theoremreach" class="brand-logo">
                </div>
                <button class="play-now-btn">Start Now</button>
            </div>
        </div>
    </div>
</section>

<!-- Tasks Section -->
<section class="offerwalls-section">
    <div class="section-container">
        <div class="section-header">
            <h2>Tasks <span class="badge">NEW</span></h2>
            <p>Follow our social media accounts for some free Robux!</p>
        </div>
        
        <div class="offerwall-grid">
            <!-- Task Item 1 -->
            <div class="offerwall-card">
                <div class="brand-logo-container">
                    <i class="fab fa-instagram social-icon"></i>
                </div>
                <button class="play-now-btn">Follow Now</button>
            </div>
            
            <!-- Task Item 2 -->
            <div class="offerwall-card">
                <div class="brand-logo-container">
                    <i class="fab fa-twitter social-icon"></i>
                </div>
                <button class="play-now-btn">Follow Now</button>
            </div>
            
            <!-- Task Item 3 -->
            <div class="offerwall-card">
                <div class="brand-logo-container">
                    <i class="fab fa-facebook social-icon"></i>
                </div>
                <button class="play-now-btn">Follow Now</button>
            </div>
            
            <!-- Task Item 4 -->
            <div class="offerwall-card">
                <div class="brand-logo-container">
                    <i class="fab fa-discord social-icon"></i>
                </div>
                <button class="play-now-btn">Join Now</button>
            </div>
        </div>
    </div>
</section>
    </main>

    <?php include 'assets/components/footer.php'; ?>
</body>
</html>