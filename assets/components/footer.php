<!-- ===== FOOTER SECTION ===== -->
<footer class="footer-section">
  <div class="container">
    <!-- Newsletter Section -->
    <div class="newsletter-section">
      <h3>Stay Updated</h3>
      <p>Subscribe to our newsletter for the latest updates and offers</p>
      <form class="newsletter-form" action="subscribe.php" method="POST">
        <input type="email" name="email" placeholder="Type Email" required>
        <button type="submit" class="subscribe-btn">Subscribe</button>
      </form>
    </div>

    <!-- Footer Links -->
    <div class="footer-links-container">
      <div class="footer-column">
        <h4>GAMES LIST</h4>
        <ul>
          <?php
          $games = ["Dicks game", "Lobestar", "Gangstar", "Royal Casino", "Align fight", "Black night"];
          foreach ($games as $game) {
            echo "<li><a href='game.php?name=" . urlencode($game) . "'>$game</a></li>";
          }
          ?>
        </ul>
      </div>

      <div class="footer-column">
        <h4>COMPANY</h4>
        <ul>
          <?php
          $companyLinks = [
            "About us" => "about.php",
            "Services" => "services.php",
            "Events" => "events.php",
            "Promotion" => "promotions.php",
            "Transition" => "transition.php",
            "Social Media" => "social.php"
          ];
          foreach ($companyLinks as $text => $url) {
            echo "<li><a href='$url'>$text</a></li>";
          }
          ?>
        </ul>
      </div>

      <div class="footer-column">
        <h4>ACCOUNT</h4>
        <ul>
          <?php
          $accountLinks = [
            "Ripple coin" => "ripple.php",
            "Bitcoin" => "bitcoin.php",
            "Ethereum" => "ethereum.php",
            "Light coin" => "lightcoin.php",
            "Coin base" => "coinbase.php",
            "Gold Coin" => "goldcoin.php"
          ];
          foreach ($accountLinks as $text => $url) {
            echo "<li><a href='$url'>$text</a></li>";
          }
          ?>
        </ul>
      </div>

      <div class="footer-column">
        <h4>SUPPORT</h4>
        <ul>
          <?php
          $supportLinks = [
            "Customer Care" => "support.php",
            "Live chat" => "chat.php",
            "Notification" => "notifications.php",
            "Privacy" => "privacy.php",
            "Terms & Condition" => "terms.php",
            "Contact us" => "contact.php"
          ];
          foreach ($supportLinks as $text => $url) {
            echo "<li><a href='$url'>$text</a></li>";
          }
          ?>
        </ul>
      </div>
    </div>

    <!-- Copyright -->
    <div class="copyright">
      <p>Copyright © <?php echo date("Y"); ?> playdo All Rights Reserved</p>
    </div>
  </div>
</footer>