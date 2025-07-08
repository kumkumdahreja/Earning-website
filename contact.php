<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';
    
    $success = !empty($name) && !empty($email) && !empty($message);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Playdo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/home.css"> 
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="d-flex flex-column min-vh-100">
    <?php include 'assets/components/navbar.php'; ?>
    
    <main class="contact-main">
        <section class="contact-hero">
            <div class="container">
                <h1>Contact Us</h1>
                <p>Have questions? We're here to help!</p>
            </div>
        </section>

        <div class="container">
            <div class="contact-layout">
                <!-- Contact Form Section -->
                <section class="contact-form-section">
                    <?php if (isset($success) && $success): ?>
                        <div class="alert alert-success">
                            Thank you for your message! We'll get back to you soon.
                        </div>
                    <?php endif; ?>
                    
                    <form method="POST" class="contact-form">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea id="message" name="message" rows="8" required></textarea>
                        </div>
                        <button type="submit" class="submit-btn">Send Message</button>
                    </form>
                </section>

                <!-- Contact Info Section -->
                <section class="contact-info-section">
                    <h2>Our Information</h2>
                    <div class="contact-info-cards">
                        <div class="info-card">
                            <i class="fas fa-map-marker-alt"></i>
                            <h3>Our Location</h3>
                            <p>123 Gaming Street, Virtual City, VC 12345</p>
                        </div>
                        <div class="info-card">
                            <i class="fas fa-phone"></i>
                            <h3>Phone</h3>
                            <p>+1 (555) 123-4567</p>
                        </div>
                        <div class="info-card">
                            <i class="fas fa-envelope"></i>
                            <h3>Email</h3>
                            <p>support@playdo.com</p>
                        </div>
                        <div class="info-card">
                            <i class="fas fa-clock"></i>
                            <h3>Working Hours</h3>
                            <p>Monday - Friday: 9AM - 6PM</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <?php include 'assets/components/footer.php'; ?>
</body>
</html>