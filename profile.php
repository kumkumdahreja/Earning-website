<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <!-- Load Bootstrap CSS first -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Then your custom CSS -->
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="d-flex flex-column min-vh-100">
    <!-- Navbar -->
    <?php include 'assets/components/navbar.php'; ?>
    
    <!-- Main Content -->
    <main class="flex-grow-1 d-flex align-items-center">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="profile-card p-4 p-md-5">
                        <h1 class="text-center mb-4">My Profile</h1>
                        
                        <div class="profile-info mb-4">
                            <div class="mb-3">
                                <h5 class="label">Name:</h5>
                                <p class="value"><?php echo htmlspecialchars($user['name']); ?></p>
                            </div>
                            <div class="mb-3">
                                <h5 class="label">Email:</h5>
                                <p class="value"><?php echo htmlspecialchars($user['email']); ?></p>
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-center gap-3">
                            <a href="home.php" class="btn btn-outline-primary">Back to Home</a>
                            <a href="logout.php" class="btn btn-primary">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php include 'assets/components/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>