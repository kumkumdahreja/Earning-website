<?php
// Only start a session if one isn't already active
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$isLoggedIn = isset($_SESSION['user']);
$user = $isLoggedIn ? $_SESSION['user'] : null;
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
    <a class="navbar-brand" href="home.php">
      <img src="https://via.placeholder.com/150x50?text=LOGO" alt="Logo" class="logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'earn.php' ? 'active' : '' ?>" href="earn.php">Earn</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : '' ?>" href="contact.php">Contact</a>
        </li>
      </ul>
      <div class="auth-buttons">
        <?php if ($isLoggedIn): ?>
          <a href="profile.php" class="btn-profile">
            <i class="fas fa-user-circle"></i> Profile
          </a>
        <?php else: ?>
          <a href="login.php" class="btn-login">Login</a>
          <a href="login.php?action=register" class="btn-register">Register</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</nav>