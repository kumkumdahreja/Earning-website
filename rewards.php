<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rewards & Promocodes | Playdo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/rewards.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"/>
</head>
<body class="d-flex flex-column min-vh-100">
    <?php include 'assets/components/navbar.php'; ?>
    <main class="rewards-container">
        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Rewards & Promocodes</span>
        </div>

        <!-- Page Heading -->
        <h1 class="page-title">REWARDS & PROMOCODES</h1>
        
        <!-- Option Cards -->
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
            
            <a href="rewards.php" class="option-card active">
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
                    <h3>Events</h3>
                    <p>Participate in special events</p>
                </div>
            </a>
        </div>

        <!-- Promocodes Section -->
        <section class="promocode-section">
            <div class="section-container">
                <div class="section-header">
                    <h2>Rewards & Promocodes</h2>
                    <p>Redeem Promocodes for free Robux and keep an eye on our Discord and other socials for free promocodes!</p>
                </div>
                
                <div class="promocode-input-container">
                    <input type="text" placeholder="Enter Promocode" class="promocode-input">
                    <button class="redeem-btn">Redeem</button>
                </div>
            </div>
        </section>

        <!-- Daily Challenges Section -->
        <section class="challenges-section">
            <div class="section-container">
                <div class="section-header">
                    <h2>Daily Challenges</h2>
                    <p>Complete daily tasks to earn extra rewards</p>
                </div>
                
                <div class="challenge-card">
                    <div class="challenge-content">
                        <input type="checkbox" id="blog-like-challenge" class="challenge-checkbox">
                        <label for="blog-like-challenge" class="challenge-label">
                            Like 2 unique <a href="blog.php">blog posts</a> total, can be done 30 seconds after reading it
                        </label>
                    </div>
                    <div class="reward-amount">+0.2 Robux</div>
                </div>
            </div>
        </section>

        <!-- Level Rewards Section -->
        <section class="level-rewards-section">
            <div class="section-container">
                <div class="section-header">
                    <h2>Earn More Rewards by Leveling Up!</h2>
                    <p>Unlock greater rewards as you progress through levels</p>
                </div>
                
                <div class="level-cards-container">
                    <!-- Level 2-7 -->
                    <div class="level-row">
                        <div class="level-card">
                            <div class="level-header">Lvl 2</div>
                            <div class="level-reward">5 Robux</div>
                            <div class="level-status locked">Locked</div>
                        </div>
                        <div class="level-card">
                            <div class="level-header">Lvl 3</div>
                            <div class="level-reward">5 Robux</div>
                            <div class="level-status locked">Locked</div>
                        </div>
                        <div class="level-card">
                            <div class="level-header">Lvl 4</div>
                            <div class="level-reward">10 Robux</div>
                            <div class="level-status locked">Locked</div>
                        </div>
                        <div class="level-card">
                            <div class="level-header">Lvl 5</div>
                            <div class="level-reward">20 Robux</div>
                            <div class="level-status locked">Locked</div>
                        </div>
                        <div class="level-card">
                            <div class="level-header">Lvl 6</div>
                            <div class="level-reward">40 Robux</div>
                            <div class="level-status locked">Locked</div>
                        </div>
                        <div class="level-card">
                            <div class="level-header">Lvl 7</div>
                            <div class="level-reward">50 Robux</div>
                            <div class="level-status locked">Locked</div>
                        </div>
                    </div>
                    
                    <!-- Level 8-13 -->
                    <div class="level-row">
                        <div class="level-card">
                            <div class="level-header">Lvl 8</div>
                            <div class="level-reward">50 Robux</div>
                            <div class="level-status locked">Locked</div>
                        </div>
                        <div class="level-card">
                            <div class="level-header">Lvl 9</div>
                            <div class="level-reward">50 Robux</div>
                            <div class="level-status locked">Locked</div>
                        </div>
                        <div class="level-card">
                            <div class="level-header">Lvl 10</div>
                            <div class="level-reward">75 Robux</div>
                            <div class="level-status locked">Locked</div>
                        </div>
                        <div class="level-card">
                            <div class="level-header">Lvl 11</div>
                            <div class="level-reward">75 Robux</div>
                            <div class="level-status locked">Locked</div>
                        </div>
                        <div class="level-card">
                            <div class="level-header">Lvl 12</div>
                            <div class="level-reward">75 Robux</div>
                            <div class="level-status locked">Locked</div>
                        </div>
                        <div class="level-card">
                            <div class="level-header">Lvl 13</div>
                            <div class="level-reward">100 Robux</div>
                            <div class="level-status locked">Locked</div>
                        </div>
                    </div>
                    
                    <!-- Level 14-19 -->
                    <div class="level-row">
                        <div class="level-card">
                            <div class="level-header">Lvl 14</div>
                            <div class="level-reward">100 Robux</div>
                            <div class="level-status locked">Locked</div>
                        </div>
                        <div class="level-card">
                            <div class="level-header">Lvl 15</div>
                            <div class="level-reward">200 Robux</div>
                            <div class="level-status locked">Locked</div>
                        </div>
                        <div class="level-card">
                            <div class="level-header">Lvl 16</div>
                            <div class="level-reward">200 Robux</div>
                            <div class="level-status locked">Locked</div>
                        </div>
                        <div class="level-card">
                            <div class="level-header">Lvl 17</div>
                            <div class="level-reward">500 Robux</div>
                            <div class="level-status locked">Locked</div>
                        </div>
                        <div class="level-card">
                            <div class="level-header">Lvl 18</div>
                            <div class="level-reward">500 Robux</div>
                            <div class="level-status locked">Locked</div>
                        </div>
                        <div class="level-card">
                            <div class="level-header">Lvl 19</div>
                            <div class="level-reward">600 Robux</div>
                            <div class="level-status locked">Locked</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'assets/components/footer.php'; ?>
    
    <script src="assets/js/rewards.js"></script>
</body>
</html>