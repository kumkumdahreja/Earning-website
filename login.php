<?php
session_start();

// Simple user storage
$usersFile = 'users.json';

// Initialize users file if it doesn't exist
if (!file_exists($usersFile)) {
    file_put_contents($usersFile, json_encode([]));
}

$users = json_decode(file_get_contents($usersFile), true);

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        foreach ($users as $user) {
            if ($user['email'] === $email && $user['password'] === $password) {
                $_SESSION['user'] = $user;
                header('Location: home.php');
                exit();
            }
        }
        
        $error = "Invalid email or password";
    } elseif (isset($_POST['register'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        foreach ($users as $user) {
            if ($user['email'] === $email) {
                $error = "Email already registered";
                break;
            }
        }
        
        if (!isset($error)) {
            $newUser = [
                'name' => $name,
                'email' => $email,
                'password' => $password
            ];
            
            $users[] = $newUser;
            file_put_contents($usersFile, json_encode($users));
            
            $_SESSION['user'] = $newUser;
            header('Location: home.php');
            exit();
        }
    }
}

$action = isset($_GET['action']) && $_GET['action'] === 'register' ? 'register' : 'login';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ucfirst($action); ?> | Playdo</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
\
</head>
<body>
    <div class="auth-container">
        <div class="auth-box">
            <?php if ($action === 'login'): ?>
            <div class="auth-header">
                <h1>Sign In</h1>
            </div>
            <div class="auth-body">
                <?php if (isset($error)): ?>
                <div class="error-message"><?php echo $error; ?></div>
                <?php endif; ?>
                <form class="auth-form" method="POST">
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="login">Sign In</button>
                    </div>
                </form>
                <div class="auth-footer">
                    <p>Don't have an account? <span class="auth-toggle" onclick="window.location.href='login.php?action=register'">Sign Up</span></p>
                </div>
            </div>
            <?php else: ?>
            <div class="auth-header">
                <h1>Sign Up</h1>
            </div>
            <div class="auth-body">
                <?php if (isset($error)): ?>
                <div class="error-message"><?php echo $error; ?></div>
                <?php endif; ?>
                <form class="auth-form" method="POST">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="register">Sign Up</button>
                    </div>
                </form>
                <div class="auth-footer">
                    <p>Already have an account? <span class="auth-toggle" onclick="window.location.href='login.php'">Sign In</span></p>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>