<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Withdraw | Playdo</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/withdraw.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="d-flex flex-column min-vh-100">
    <?php include 'assets/components/navbar.php'; ?>
    
    <main class="withdraw-container">

        <h1 class="page-title">WITHDRAW YOUR MONEY</h1>
        
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
        
        <div class="withdraw-form-container">
            <div class="form-tabs">
                <button class="tab-btn active" data-tab="private-server">Private Server</button>
                <button class="tab-btn" data-tab="gamepass">Gamepass</button>
            </div>
            
            <div class="form-content">
                <!-- Private Server Form -->
                <div class="tab-pane active" id="private-server">
                    <div class="form-header">
                        <h3>Private Server</h3>
                    </div>
                    
                    <div class="balance-cards">
                        <div class="balance-card">
                            <span class="card-label">Your balance</span>
                            <span class="card-value">0</span>
                        </div>
                        <div class="balance-card">
                            <span class="card-label">Stock</span>
                            <span class="card-value">325,430</span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="private-username">Enter your Roblox username</label>
                        <input type="text" id="private-username" placeholder="Username">
                    </div>
                    
                    <button class="submit-btn">Next</button>
                </div>
                
                <!-- Gamepass Form -->
                <div class="tab-pane" id="gamepass">
                    <div class="form-header">
                        <h3>Gamepass</h3>
                    </div>
                    
                    <div class="balance-cards">
                        <div class="balance-card">
                            <span class="card-label">Your balance</span>
                            <span class="card-value">0</span>
                        </div>
                        <div class="balance-card">
                            <span class="card-label">Stock</span>
                            <span class="card-value">325,430</span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="gamepass-username">Enter your Roblox username</label>
                        <input type="text" id="gamepass-username" placeholder="Username">
                    </div>
                    
                    <button class="submit-btn">Next</button>
                </div>
            </div>
        </div>
    </main>

    <?php include 'assets/components/footer.php'; ?>
    
    <script src="assets/js/withdraw.js"></script>
</body>
</html>