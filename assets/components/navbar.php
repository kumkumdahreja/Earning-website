<?php
// Check if user is logged in (you'll need to implement your authentication logic)
$isLoggedIn = false; // This should come from your session/auth system
?>

<!-- Top Info Bar -->
<div class="top-bar">
  <div class="container">
    <div class="contact-info">
      <span><i class="fas fa-envelope"></i> info@gamingrewards.com</span>
      <span><i class="fas fa-phone"></i> +1 (123) 456-7890</span>
    </div>
    <div class="social-icons">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-discord"></i></a>
    </div>
  </div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="https://via.placeholder.com/150x50?text=LOGO" alt="Logo" class="logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'play.php' ? 'active' : '' ?>" href="play.php">Play</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'rewards.php' ? 'active' : '' ?>" href="rewards.php">Rewards</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : '' ?>" href="contact.php">Contact</a>
        </li>
      </ul>
      <div class="auth-buttons">
        <?php if ($isLoggedIn): ?>
          <div class="dropdown profile-dropdown">
            <button class="btn-profile dropdown-toggle" data-bs-toggle="dropdown">
              <i class="fas fa-user-circle"></i> My Profile
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="dashboard.php">Dashboard</a></li>
              <li><a class="dropdown-item" href="rewards.php">Rewards</a></li>
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
          </div>
        <?php else: ?>
          <button class="btn-login" onclick="window.location.href='login.php'">Login</button>
          <button class="btn-register" onclick="window.location.href='register.php'">Register</button>
        <?php endif; ?>
      </div>
    </div>
  </div>
</nav>