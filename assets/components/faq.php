<?php
// Define FAQ items as an array of associative arrays
$faqItems = [
    [
        'question' => 'How can I earn free Robux on BloxEarn?',
        'answer' => '
            <p>BloxEarn is a trusted platform that enables Roblox players to earn free Robux by completing fun activities. These activities include trying new games, sharing opinions through surveys, watching videos, and more.</p>
            <p>We partner with popular brands and advertisers who sponsor these activities. When you participate, you get rewarded with Robux that can be instantly withdrawn to your Roblox account.</p>
        '
    ],
    [
        'question' => 'Is BloxEarn safe to use?',
        'answer' => '
            <p>Absolutely. At BloxEarn, the safety and legitimacy of our platform is our utmost priority.</p>
            <p>We implement strict measures to protect our users:</p>
            <ul>
                <li>We will NEVER ask for your Roblox password</li>
                <li>All activities are optional and provided by trusted, reputable partners</li>
                <li>Personal information is securely handled in accordance with our Privacy Policy</li>
            </ul>
            <p>With 24/7 support and a proven track record since 2019, you can use BloxEarn with confidence. Earn your Robux with peace of mind!</p>
        '
    ],
    [
        'question' => 'How is BloxEarn able to give away free Robux?',
        'answer' => '
            <p>BloxEarn makes earning Robux simple:</p>
            <ol>
                <li>Choose an activity you\'d like to complete from our list of available offers</li>
                <li>Follow the instructions to complete the activity</li>
                <li>Earn Robux upon successful completion</li>
                <li>Withdraw your Robux earnings instantly to your Roblox account</li>
            </ol>
            <p>Advertisers pay us a commission for these completed activities, which allows us to purchase the Robux that we award to our users. It\'s a win-win!</p>
        '
    ],
    [
        'question' => 'How can I withdraw my Robux?',
        'answer' => '
            <p>Cashing out your hard-earned Robux on BloxEarn is quick and easy. We offer several convenient payout methods:</p>
            <ul>
                <li>Group Payouts: Receive Robux directly deposited to your Roblox account</li>
                <li>VIP Server (Private Server) Payouts: Receive Robux from private server purchases</li>
                <li>Gamepass Payouts: Receive Robux from gamepass sales in your experiences</li>
            </ul>
            <p>Once you request a withdrawal, payouts are typically processed within 5 minutes or less. Our system automatically processes withdrawals, so you can enjoy your Robux without any delays.</p>
            <p>If you ever experience an unusual delay, our dedicated support team is available 24/7 on Discord and will promptly resolve the issue.</p>
        '
    ]
];
?>

<!-- ===== FAQ SECTION ===== -->
<section class="faq-section">
  <div class="container">
    <!-- Divider Line -->
    <div class="section-divider"></div>
    
    <div class="faq-content">
      <h2>Frequently Asked Questions</h2>
      <p class="section-description">Find answers to common questions about BloxEarn</p>
      
      <div class="faq-container">
        <?php foreach ($faqItems as $index => $faq): ?>
        <!-- FAQ Item <?php echo $index + 1; ?> -->
        <div class="faq-item">
          <div class="faq-question">
            <h3><?php echo htmlspecialchars($faq['question']); ?></h3>
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="faq-answer">
            <?php echo $faq['answer']; ?>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<script>
// ===== FAQ SECTION JS =====
document.addEventListener('DOMContentLoaded', function() {
  const faqItems = document.querySelectorAll('.faq-item');
  
  faqItems.forEach(item => {
    const question = item.querySelector('.faq-question');
    
    question.addEventListener('click', () => {
      // Close all other items
      faqItems.forEach(otherItem => {
        if (otherItem !== item && otherItem.classList.contains('active')) {
          otherItem.classList.remove('active');
        }
      });
      
      // Toggle current item
      item.classList.toggle('active');
    });
  });
  
  // Animation when section comes into view
  const faqObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.animationPlayState = 'running';
        faqObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });

  document.querySelectorAll('.faq-item').forEach(item => {
    item.style.animation = 'fadeInUp 0.5s ease-out forwards';
    item.style.animationPlayState = 'paused';
    faqObserver.observe(item);
  });
});
</script>