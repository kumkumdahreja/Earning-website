<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gaming Rewards</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/home.css" />
  </head>
  <body>

    <!-- navbar section -->
 <?php include 'assets/components/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="hero">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <h1 class="hero-title animate-fade-in">
              PLAYING ONLINE GAMES <span class="highlight">WIN REWARD</span>
            </h1>
            <p
              class="hero-subtitle animate-fade-in"
              style="animation-delay: 0.2s"
            >
              We develop effective plans to move your customers behaviour.<br />
              customer can be always his profit.
            </p>
            <div
              class="divider animate-fade-in"
              style="animation-delay: 0.4s"
            ></div>
            <button
              class="btn-get-started animate-fade-in"
              style="animation-delay: 0.6s"
            >
              Get Started
            </button>
          </div>
          <div class="col-lg-6">
            <img
              src="assets/images/s1.png"
              alt="Gaming"
              class="hero-image animate-fade-in"
              style="animation-delay: 0.3s"
            />
          </div>
        </div>
      </div>
    </section>

<!-- ===== STATS SECTION ===== -->
<section class="stats-section">
  <div class="container">
    <div class="stats-bar">
     <div class="section-divider"></div>
      
      <div class="stats-container">
        <!-- Card 1 -->
        <div class="stat-card">
          <div class="card-content">
            <img src="assets/images/achive1.png" alt="Live Online" class="stat-icon">
            <div class="stat-text">
              <h3 class="stat-number">1200+</h3>
              <p class="stat-label"><span class="dot green"></span> LIVE ONLINE</p>
            </div>
          </div>
        </div>
        
        <!-- Card 2 -->
        <div class="stat-card">
          <div class="card-content">
            <img src="assets/images/achive2.png" alt="Active Member" class="stat-icon">
            <div class="stat-text">
              <h3 class="stat-number">29038+</h3>
              <p class="stat-label"><span class="dot orange"></span> ACTIVE MEMBER</p>
            </div>
          </div>
        </div>
        
        <!-- Card 3 -->
        <div class="stat-card">
          <div class="card-content">
            <img src="assets/images/achive3.png" alt="Daily Reward" class="stat-icon">
            <div class="stat-text">
              <h3 class="stat-number">2000K+</h3>
              <p class="stat-label"><span class="dot pink"></span> DAILY REWARD</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== FEATURES SECTION ===== -->
<section class="features-section">
  <div class="container">
    <!-- Divider Line -->
    <div class="section-divider"></div>
    
    <div class="features-container">
      <!-- Left Side - Image -->
      <div class="feature-image">
        <img src="assets/images/ab.jpg" alt="Playdo Game">
        <div class="image-caption">
          <div class="caption-line"></div>
          <p>If you need know more about playdo <a href="#" class="click-here">Click here</a></p>
        </div>
      </div>
      
      <!-- Right Side - Cards -->
      <div class="feature-cards">
        <!-- Card 1 -->
        <div class="feature-card">
          <div class="card-content">
            <img src="assets/images/ab-icon.png" alt="Live Online" class="card-icon">
            <div class="card-text">
              <h3>Live Online Game</h3>
              <p>Replacing a maintains the amount of lines. When replacing a selection. help agencies to define. define their new business objectives and then.</p>
            </div>
          </div>
        </div>
        
        <!-- Card 2 -->
        <div class="feature-card">
          <div class="card-content">
            <img src="assets/images/ab-icon2.png" alt="Instant Bonus" class="card-icon">
            <div class="card-text">
              <h3>Instant Bonus</h3>
              <p>Replacing a maintains the amount of lines. When replacing a selection. help agencies to define. define their new business objectives and then.</p>
            </div>
          </div>
        </div>
        
        <!-- Card 3 -->
        <div class="feature-card">
          <div class="card-content">
            <img src="assets/images/ab-icon6.png" alt="Live Support" class="card-icon">
            <div class="card-text">
              <h3>Live Support</h3>
              <p>Replacing a maintains the amount of lines. When replacing a selection. help agencies to define. define their new business objectives and then.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== GAMES HISTORY SECTION ===== -->
<section class="games-history-section">
  <div class="container">
    <!-- Divider Line -->
    <div class="section-divider"></div>
    
    <!-- Background Elements -->
    <div class="game-bg-elements">
      <div class="bg-grid-lines"></div>
      <div class="bg-game-icons">
        <i class="fas fa-gamepad"></i>
        <i class="fas fa-dice"></i>
        <i class="fas fa-chess"></i>
      </div>
    </div>
    
    <!-- Content -->
    <div class="games-history-content">
      <h2>Games History</h2>
      <p class="section-description">Dummy text is also used to demonstrate the appearance of different typefaces and layouts</p>
      
      <div class="table-responsive">
        <table class="games-table">
          <thead>
            <tr>
              <th>NAME</th>
              <th>CODE ID</th>
              <th>GAMES</th>
              <th>LEVEL</th>
              <th>REWARD</th>
              <th>GAMES ID</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Ragner Lorth</strong></td>
              <td>Eml-76076</td>
              <td>Redline</td>
              <td>Level-122</td>
              <td>00.83 BTC</td>
              <td>BTC-0.02</td>
            </tr>
            <tr>
              <td>Adams jems</td>
              <td>Eml-65342</td>
              <td>Danger war</td>
              <td>Level-132</td>
              <td>00.83 BTC</td>
              <td>BTC-0.02</td>
            </tr>
            <tr>
              <td>Admond sayhel</td>
              <td>Eml-20053</td>
              <td>Casino</td>
              <td>Level-153</td>
              <td>00.83 BTC</td>
              <td>BTC-0.02</td>
            </tr>
            <tr>
              <td>Jecky chen</td>
              <td>Eml-60754</td>
              <td>Redline</td>
              <td>Level-92</td>
              <td>00.83 BTC</td>
              <td>BTC-0.02</td>
            </tr>
            <tr>
              <td>Junior münd</td>
              <td>Eml-76076</td>
              <td>Casino</td>
              <td>Level-98</td>
              <td>00.83 BTC</td>
              <td>BTC-0.02</td>
            </tr>
            <tr>
              <td>Andrew kolin</td>
              <td>Eml-76076</td>
              <td>Dicks game</td>
              <td>Level-184</td>
              <td>00.83 BTC</td>
              <td>BTC-0.02</td>
            </tr>
            <tr>
              <td>Anjel loyel</td>
              <td>Eml-76076</td>
              <td>Redline</td>
              <td>Level-102</td>
              <td>00.83 BTC</td>
              <td>BTC-0.02</td>
            </tr>
            <tr>
              <td>Jenefer july</td>
              <td>Eml-76076</td>
              <td>Redline</td>
              <td>Level-102</td>
              <td>00.83 BTC</td>
              <td>BTC-0.02</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<!-- ===== REFERRAL BONUS SECTION ===== -->
<section class="referral-section">
  <div class="container">
    <!-- Divider Line -->
    <div class="section-divider"></div>
    
    <div class="referral-content">
      <h2>Referral Bonus Level</h2>
      <p class="section-description">Help agencies to define their new business objectives and then<br>create professional software.</p>
      
      <div class="bonus-cards">
        <!-- Card 1 -->
        <div class="bonus-card">
          <div class="card-number orange">01</div>
          <div class="card-circle orange-icon">
            <i class="fas fa-gift"></i>
          </div>
          <div class="card-text">
            <h3>Level 01 Instant 10%</h3>
            <p>Bonus Reward</p>
          </div>
        </div>
        
        <!-- Card 2 -->
        <div class="bonus-card">
          <div class="card-number blue">02</div>
          <div class="card-circle blue-icon">
            <i class="fas fa-coins"></i>
          </div>
          <div class="card-text">
            <h3>Level 02 Instant 20%</h3>
            <p>Bonus Reward</p>
          </div>
        </div>
        
        <!-- Card 3 -->
        <div class="bonus-card">
          <div class="card-number green">03</div>
          <div class="card-circle green-icon">
            <i class="fas fa-trophy"></i>
          </div>
          <div class="card-text">
            <h3>Level 03 Instant 30%</h3>
            <p>Bonus Reward</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'assets/components/faq.php'; ?>

<!-- ===== CTA SECTION ===== -->
<section class="cta-section">
  <div class="container">
    <!-- Divider Line -->
    <div class="section-divider"></div>
    
    <div class="cta-content">
      <h2>Earn Free Robux the Safe and Fun Way</h2>
      <button class="cta-button pulse-animate">Start Earning</button>
    </div>
  </div>
</section>

<?php include 'assets/components/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/home.js"></script>
  </body>
</html>