<?php
session_start();

// Sample blog posts data
$posts = [
    [
        'title' => 'New Rewards System Launch',
        'excerpt' => 'We are excited to announce our completely revamped rewards system with better prizes and more ways to earn.',
        'date' => 'June 15, 2023',
        'author' => 'Alex Johnson',
        'category' => 'Updates'
    ],
    [
        'title' => 'Top 5 Games to Earn Rewards',
        'excerpt' => 'Check out our list of the top 5 games that offer the best rewards for players this month.',
        'date' => 'May 28, 2023',
        'author' => 'Sarah Williams',
        'category' => 'Guides'
    ],
    [
        'title' => 'Community Tournament Results',
        'excerpt' => 'See who won our latest community tournament and what amazing prizes they took home.',
        'date' => 'May 10, 2023',
        'author' => 'Mike Chen',
        'category' => 'Events'
    ],
    [
        'title' => 'How to Maximize Your Earnings',
        'excerpt' => 'Learn these pro tips to get the most out of your gaming sessions and earn more rewards.',
        'date' => 'April 22, 2023',
        'author' => 'Alex Johnson',
        'category' => 'Tips'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Playdo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/blog.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="d-flex flex-column min-vh-100">
    <?php include 'assets/components/navbar.php'; ?>
    
    <main class="blog-main">
        <section class="blog-hero">
            <div class="container">
                <h1>Playdo Blog</h1>
                <p>Latest news, updates and gaming tips</p>
            </div>
        </section>

        <section class="blog-content">
            <div class="container">
                <div class="blog-grid">
                    <?php foreach ($posts as $post): ?>
                    <article class="blog-card">
                        <div class="card-header">
                            <span class="category"><?= $post['category'] ?></span>
                            <span class="date"><?= $post['date'] ?></span>
                        </div>
                        <div class="card-body">
                            <h2><?= $post['title'] ?></h2>
                            <p><?= $post['excerpt'] ?></p>
                        </div>
                        <div class="card-footer">
                            <span class="author">By <?= $post['author'] ?></span>
                            <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                    <?php endforeach; ?>
                </div>

                <div class="pagination">
                    <a href="#" class="page-link active">1</a>
                    <a href="#" class="page-link">2</a>
                    <a href="#" class="page-link">3</a>
                    <a href="#" class="page-link">Next <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </section>
    </main>

    <?php include 'assets/components/footer.php'; ?>
</body>
</html>