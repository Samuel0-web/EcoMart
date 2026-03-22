<?php
// partials/footer.php
?>
    <!-- ===== NEWSLETTER SECTION ===== -->
    <section class="newsletter">
        <div class="newsletter__container">
        <div class="newsletter__content">
            <div class="newsletter__header">
            <span class="newsletter__subtitle">Stay Connected</span>
            <h2>Subscribe to Our Newsletter</h2>
            <p>Get the latest updates on new products and upcoming sales</p>
            </div>

            <form class="newsletter__form" action="#" method="POST">
            <div class="newsletter__input-group">
                <i class="bi bi-envelope"></i>
                <input type="email" placeholder="Enter your email address" required>
                <button type="submit" class="newsletter__button">Subscribe</button>
            </div>
            <div class="newsletter__checkbox">
                <input type="checkbox" id="privacy-policy">
                <label for="privacy-policy">I agree to the <a href="#">Privacy Policy</a> and consent to receive emails</label>
            </div>
            </form>

            <div class="newsletter__benefits">
            <div class="newsletter__benefit">
                <i class="bi bi-check-circle-fill"></i>
                <span>Early access to sales</span>
            </div>
            <div class="newsletter__benefit">
                <i class="bi bi-check-circle-fill"></i>
                <span>No spam, unsubscribe anytime</span>
            </div>
            </div>
        </div>
        </div>
    </section>

        <!-- ===== FOOTER SECTION ===== -->
    <footer class="footer">
        <div class="footer__container">
            <!-- Main Footer Content -->
            <div class="footer__main">
                <!-- Column 1: Company Info -->
                <div class="footer__col">
                    <div class="footer__logo">
                        <i class="bi bi-leaf-fill"></i>
                        <span>EcoMart</span>
                    </div>
                    <p class="footer__about">Your trusted store for quality products. Secure checkout, fast delivery across Nigeria.</p>
                    <div class="footer__social">
                        <a href="#" class="footer__social-link" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="footer__social-link" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="footer__social-link" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="footer__social-link" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                        <a href="#" class="footer__social-link" aria-label="TikTok"><i class="bi bi-tiktok"></i></a>
                    </div>
                </div>

                <!-- Column 2: Company -->
                <div class="footer__col">
                    <h3 class="footer__title">Company</h3>
                    <ul class="footer__links">
                        <li><a href="about">About Us</a></li>
                        <li><a href="contact">Contact Us</a></li>
                        <li><a href="help">Help Center</a></li>
                        <li><a href="faq">FAQ</a></li>
                    </ul>
                </div>

                <!-- Column 3: Categories -->
                <div class="footer__col">
                    <h3 class="footer__title">Categories</h3>
                    <ul class="footer__links">
                        <li><a href="category?slug=phones">Phones</a></li>
                        <li><a href="category?slug=laptops">Laptops</a></li>
                        <li><a href="category?slug=gaming">Gaming</a></li>
                        <li><a href="category?slug=electronics">Electronics</a></li>
                        <li><a href="category?slug=fashion">Fashion</a></li>
                        <li><a href="category?slug=home">Home & Living</a></li>
                    </ul>
                </div>

                <!-- Column 4: Customer Service -->
                <div class="footer__col">
                    <h3 class="footer__title">Customer Service</h3>
                    <ul class="footer__links">
                        <li><a href="shipping">Shipping Info</a></li>
                        <li><a href="returns">Returns Policy</a></li>
                        <li><a href="track-order">Track Order</a></li>
                        <li><a href="privacy">Privacy Policy</a></li>
                        <li><a href="terms">Terms of Service</a></li>
                    </ul>
                </div>

                <!-- Column 5: Contact Info -->
                <div class="footer__col">
                    <h3 class="footer__title">Contact Us</h3>
                    <ul class="footer__contact">
                        <li>
                            <i class="bi bi-geo-alt-fill"></i>
                            <span>123 Main Street, Lagos, Nigeria</span>
                        </li>
                        <li>
                            <i class="bi bi-telephone-fill"></i>
                            <a href="tel:+2347006000000">+234 700 600 0000</a>
                        </li>
                        <li>
                            <i class="bi bi-envelope-fill"></i>
                            <a href="mailto:support@ecomart.com">support@ecomart.com</a>
                        </li>
                        <li>
                            <i class="bi bi-clock-fill"></i>
                            <span>Mon - Sat: 8:00 AM - 8:00 PM</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="footer__bottom">
                <div class="footer__copyright">
                    <p>&copy; <?php echo date('Y'); ?> EcoMart. All rights reserved.</p>
                </div>
                <div class="footer__payment">
                    <span>We Accept:</span>
                    <i class="bi bi-stack" title="Paystack"></i>
                    <i class="bi bi-bank2" title="Flutterwave"></i>
                    <i class="bi bi-bank" title="Bank Transfer"></i>
                    <i class="bi bi-cash" title="Cash on Delivery"></i>
                </div>
                <div class="footer__legal">
                    <a href="sitemap">Sitemap</a>
                    <a href="accessibility">Accessibility</a>
                    <a href="cookies">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>
<script src="custom/js/main.js"></script>
</body>
</html>