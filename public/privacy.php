<?php
require_once __DIR__ . "/partials/header.php";
?>
<link rel="stylesheet" href="<?= $css ?>privacy.css?v=<?= filemtime($css.'privacy.css') ?>">

<main class="privacy-page">
  <div class="privacy__container">
    <!-- Breadcrumb -->
    <div class="privacy__breadcrumb">
      <a href="home">Home</a>
      <i class="bi bi-chevron-right"></i>
      <span>Privacy Policy</span>
    </div>

    <!-- Page Header -->
    <div class="privacy__header">
      <h1 class="privacy__title">Privacy Policy</h1>
      <p class="privacy__subtitle">Last Updated: March 19, 2024</p>
    </div>

    <!-- Introduction Card -->
    <div class="privacy__intro">
      <div class="privacy__intro-icon">
        <i class="bi bi-shield-check"></i>
      </div>
      <div class="privacy__intro-content">
        <h2 class="privacy__intro-title">Your Privacy Matters to Us</h2>
        <p class="privacy__intro-text">At EcoMart, we take your privacy seriously. This policy describes how we collect, use, and protect your personal information when you use our website, mobile app, and services. By using EcoMart, you agree to the practices described in this policy.</p>
      </div>
    </div>

    <!-- Quick Navigation -->
    <div class="privacy__nav">
      <h3 class="privacy__nav-title">Jump to Section:</h3>
      <div class="privacy__nav-links">
        <a href="#information" class="privacy__nav-link">Information We Collect</a>
        <a href="#use" class="privacy__nav-link">How We Use Information</a>
        <a href="#sharing" class="privacy__nav-link">Information Sharing</a>
        <a href="#cookies" class="privacy__nav-link">Cookies & Tracking</a>
        <a href="#security" class="privacy__nav-link">Data Security</a>
        <a href="#rights" class="privacy__nav-link">Your Rights</a>
        <a href="#children" class="privacy__nav-link">Children's Privacy</a>
        <a href="#changes" class="privacy__nav-link">Policy Changes</a>
        <a href="#contact" class="privacy__nav-link">Contact Us</a>
      </div>
    </div>

    <!-- Privacy Content -->
    <div class="privacy__content">
      <!-- Section 1: Information We Collect -->
      <section id="information" class="privacy__section">
        <h2 class="privacy__section-title">1. Information We Collect</h2>
        
        <div class="privacy__subsection">
          <h3 class="privacy__subsection-title">1.1 Information You Provide to Us</h3>
          <p class="privacy__text">When you use our services, we collect information that you voluntarily provide, including:</p>
          <ul class="privacy__list">
            <li><strong>Account Information:</strong> Name, email address, phone number, password, and profile information when you create an account.</li>
            <li><strong>Payment Information:</strong> Credit/debit card details, billing address, and other payment information (processed securely through our payment partners).</li>
            <li><strong>Shipping Information:</strong> Delivery address, recipient name, and contact details for order fulfillment.</li>
            <li><strong>Communications:</strong> Information you provide when contacting our customer support, including emails, chat transcripts, and call recordings for quality assurance.</li>
            <li><strong>Reviews and Feedback:</strong> Product reviews, ratings, and survey responses you submit.</li>
          </ul>
        </div>

        <div class="privacy__subsection">
          <h3 class="privacy__subsection-title">1.2 Information Collected Automatically</h3>
          <p class="privacy__text">When you visit our website or use our app, we automatically collect certain information, including:</p>
          <ul class="privacy__list">
            <li><strong>Device Information:</strong> IP address, browser type, operating system, device identifiers, and mobile network information.</li>
            <li><strong>Usage Information:</strong> Pages visited, products viewed, search queries, referring website, and time spent on our site.</li>
            <li><strong>Location Information:</strong> General location based on IP address for delivery estimation and fraud prevention.</li>
            <li><strong>Cookies and Similar Technologies:</strong> Information collected through cookies, pixel tags, and local storage (see our Cookie Policy for details).</li>
          </ul>
        </div>

        <div class="privacy__subsection">
          <h3 class="privacy__subsection-title">1.3 Information from Third Parties</h3>
          <p class="privacy__text">We may receive information about you from third parties, including:</p>
          <ul class="privacy__list">
            <li><strong>Payment Processors:</strong> Transaction confirmation and fraud prevention data.</li>
            <li><strong>Delivery Partners:</strong> Delivery confirmation and tracking updates.</li>
            <li><strong>Social Media:</strong> If you connect your social media account, we may receive basic profile information.</li>
          </ul>
        </div>
      </section>

      <!-- Section 2: How We Use Information -->
      <section id="use" class="privacy__section">
        <h2 class="privacy__section-title">2. How We Use Your Information</h2>
        
        <p class="privacy__text">We use your information for the following purposes:</p>
        
        <div class="privacy__grid">
          <div class="privacy__card">
            <i class="bi bi-cart"></i>
            <h4>Order Processing</h4>
            <p>To process and fulfill your orders, including payment processing, shipping, and delivery updates.</p>
          </div>
          <div class="privacy__card">
            <i class="bi bi-person"></i>
            <h4>Account Management</h4>
            <p>To create and manage your account, verify your identity, and provide customer support.</p>
          </div>
          <div class="privacy__card">
            <i class="bi bi-envelope"></i>
            <h4>Communications</h4>
            <p>To send order confirmations, shipping updates, and respond to your inquiries.</p>
          </div>
          <div class="privacy__card">
            <i class="bi bi-graph-up"></i>
            <h4>Improvement</h4>
            <p>To analyze usage patterns and improve our website, products, and services.</p>
          </div>
          <div class="privacy__card">
            <i class="bi bi-shield"></i>
            <h4>Security</h4>
            <p>To protect against fraud, unauthorized transactions, and other liabilities.</p>
          </div>
          <div class="privacy__card">
            <i class="bi bi-megaphone"></i>
            <h4>Marketing</h4>
            <p>To send promotional offers (with your consent) and personalize your shopping experience.</p>
          </div>
        </div>
      </section>

      <!-- Section 3: Information Sharing -->
      <section id="sharing" class="privacy__section">
        <h2 class="privacy__section-title">3. Information Sharing and Disclosure</h2>
        
        <p class="privacy__text">We do not sell your personal information. We may share your information in the following circumstances:</p>
        
        <div class="privacy__table">
          <div class="privacy__table-row">
            <div class="privacy__table-cell privacy__table-header">Recipient</div>
            <div class="privacy__table-cell privacy__table-header">Purpose</div>
            <div class="privacy__table-cell privacy__table-header">Data Shared</div>
          </div>
          <div class="privacy__table-row">
            <div class="privacy__table-cell">Delivery Partners</div>
            <div class="privacy__table-cell">Shipping and delivery</div>
            <div class="privacy__table-cell">Name, address, phone number</div>
          </div>
          <div class="privacy__table-row">
            <div class="privacy__table-cell">Payment Processors</div>
            <div class="privacy__table-cell">Payment processing</div>
            <div class="privacy__table-cell">Payment details, billing info</div>
          </div>
          <div class="privacy__table-row">
            <div class="privacy__table-cell">Service Providers</div>
            <div class="privacy__table-cell">Analytics, customer support</div>
            <div class="privacy__table-cell">As needed for services</div>
          </div>
          <div class="privacy__table-row">
            <div class="privacy__table-cell">Legal Authorities</div>
            <div class="privacy__table-cell">Compliance with law</div>
            <div class="privacy__table-cell">As required by law</div>
          </div>
        </div>
      </section>

      <!-- Section 4: Cookies & Tracking -->
      <section id="cookies" class="privacy__section">
        <h2 class="privacy__section-title">4. Cookies and Tracking Technologies</h2>
        
        <p class="privacy__text">We use cookies and similar technologies to enhance your browsing experience, analyze site traffic, and personalize content.</p>
        
        <h3 class="privacy__subsection-title">Types of Cookies We Use:</h3>
        
        <div class="privacy__cookies-grid">
          <div class="privacy__cookie-card">
            <h4>Essential Cookies</h4>
            <p>Required for basic site functionality, including shopping cart and account login.</p>
            <span class="privacy__cookie-tag">Always Active</span>
          </div>
          <div class="privacy__cookie-card">
            <h4>Functional Cookies</h4>
            <p>Remember your preferences and settings for improved experience.</p>
            <span class="privacy__cookie-tag">Optional</span>
          </div>
          <div class="privacy__cookie-card">
            <h4>Analytics Cookies</h4>
            <p>Help us understand how visitors interact with our website.</p>
            <span class="privacy__cookie-tag">Optional</span>
          </div>
          <div class="privacy__cookie-card">
            <h4>Marketing Cookies</h4>
            <p>Used to deliver relevant advertisements and track campaign performance.</p>
            <span class="privacy__cookie-tag">Optional</span>
          </div>
        </div>

        <div class="privacy__cookie-control">
          <h4>Manage Cookie Preferences</h4>
          <button class="privacy__cookie-btn" onclick="manageCookies()">Cookie Settings</button>
        </div>
      </section>

      <!-- Section 5: Data Security -->
      <section id="security" class="privacy__section">
        <h2 class="privacy__section-title">5. Data Security</h2>
        
        <div class="privacy__security-grid">
          <div class="privacy__security-item">
            <i class="bi bi-lock-fill"></i>
            <h4>Encryption</h4>
            <p>All data transmitted between your browser and our servers is encrypted using SSL/TLS technology.</p>
          </div>
          <div class="privacy__security-item">
            <i class="bi bi-shield-fill"></i>
            <h4>PCI Compliance</h4>
            <p>We are PCI-DSS compliant, ensuring your payment information is handled securely.</p>
          </div>
          <div class="privacy__security-item">
            <i class="bi bi-key-fill"></i>
            <h4>Access Controls</h4>
            <p>Strict internal controls limit access to personal information to authorized personnel only.</p>
          </div>
          <div class="privacy__security-item">
            <i class="bi bi-clock-history"></i>
            <h4>Data Retention</h4>
            <p>We retain your information only as long as necessary for the purposes outlined in this policy.</p>
          </div>
        </div>
      </section>

      <!-- Section 6: Your Rights -->
      <section id="rights" class="privacy__section">
        <h2 class="privacy__section-title">6. Your Privacy Rights</h2>
        
        <p class="privacy__text">Depending on your location, you may have the following rights regarding your personal information:</p>
        
        <ul class="privacy__list privacy__list--columns">
          <li><i class="bi bi-check-lg"></i> Right to access your data</li>
          <li><i class="bi bi-check-lg"></i> Right to rectification</li>
          <li><i class="bi bi-check-lg"></i> Right to erasure (deletion)</li>
          <li><i class="bi bi-check-lg"></i> Right to restrict processing</li>
          <li><i class="bi bi-check-lg"></i> Right to data portability</li>
          <li><i class="bi bi-check-lg"></i> Right to object to processing</li>
          <li><i class="bi bi-check-lg"></i> Right to withdraw consent</li>
          <li><i class="bi bi-check-lg"></i> Right to lodge a complaint</li>
        </ul>

        <div class="privacy__action-box">
          <p>To exercise your rights, please contact us using the information below.</p>
          <a href="contact" class="privacy__action-btn">Submit a Request</a>
        </div>
      </section>

      <!-- Section 7: Children's Privacy -->
      <section id="children" class="privacy__section">
        <h2 class="privacy__section-title">7. Children's Privacy</h2>
        
        <p class="privacy__text">Our services are not directed to children under 13. We do not knowingly collect personal information from children under 13. If you believe a child has provided us with personal information, please contact us immediately.</p>
        
        <div class="privacy__notice">
          <i class="bi bi-exclamation-triangle-fill"></i>
          <p>If you are a parent or guardian and discover that your child has provided us with personal information, please contact us to have it removed.</p>
        </div>
      </section>

      <!-- Section 8: International Data Transfers -->
      <section id="international" class="privacy__section">
        <h2 class="privacy__section-title">8. International Data Transfers</h2>
        
        <p class="privacy__text">Your information may be transferred to and processed in countries other than your own. We take appropriate safeguards to ensure your information remains protected in accordance with this policy.</p>
      </section>

      <!-- Section 9: Policy Changes -->
      <section id="changes" class="privacy__section">
        <h2 class="privacy__section-title">9. Changes to This Policy</h2>
        
        <p class="privacy__text">We may update this privacy policy from time to time. We will notify you of any changes by posting the new policy on this page and updating the "Last Updated" date.</p>
        
        <div class="privacy__update-notice">
          <p>We encourage you to review this policy periodically for any changes.</p>
        </div>
      </section>

      <!-- Section 10: Contact Us -->
      <section id="contact" class="privacy__section">
        <h2 class="privacy__section-title">10. Contact Us</h2>
        
        <p class="privacy__text">If you have questions or concerns about this privacy policy or our data practices, please contact us at:</p>
        
        <div class="privacy__contact-grid">
          <div class="privacy__contact-item">
            <i class="bi bi-envelope-fill"></i>
            <div>
              <strong>Email:</strong>
              <a href="mailto:privacy@ecomart.com">privacy@ecomart.com</a>
            </div>
          </div>
          <div class="privacy__contact-item">
            <i class="bi bi-telephone-fill"></i>
            <div>
              <strong>Phone:</strong>
              <a href="tel:+2347006000000">+234 700 600 0000</a>
            </div>
          </div>
          <div class="privacy__contact-item">
            <i class="bi bi-geo-alt-fill"></i>
            <div>
              <strong>Address:</strong>
              <p>123 Main Street, Victoria Island, Lagos, Nigeria</p>
            </div>
          </div>
          <div class="privacy__contact-item">
            <i class="bi bi-clock-fill"></i>
            <div>
              <strong>Response Time:</strong>
              <p>Within 24 hours, Monday-Friday</p>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Data Protection Officer -->
    <div class="privacy__dpo">
      <div class="privacy__dpo-icon">
        <i class="bi bi-person-badge"></i>
      </div>
      <div class="privacy__dpo-content">
        <h3 class="privacy__dpo-title">Data Protection Officer</h3>
        <p class="privacy__dpo-text">Our Data Protection Officer oversees compliance with this privacy policy. You can reach our DPO at:</p>
        <p class="privacy__dpo-contact"><strong>Email:</strong> dpo@ecomart.com</p>
      </div>
    </div>

    <!-- Consent Acknowledgement -->
    <div class="privacy__consent">
      <p>By using our services, you acknowledge that you have read and understood this privacy policy.</p>
      <div class="privacy__consent-buttons">
        <button class="privacy__consent-btn" onclick="acceptPrivacy()">I Agree</button>
        <a href="contact" class="privacy__consent-link">Questions? Contact Us</a>
      </div>
    </div>
  </div>
</main>

<script>
// Smooth scroll for anchor links
document.querySelectorAll('.privacy__nav-link').forEach(link => {
  link.addEventListener('click', (e) => {
    e.preventDefault();
    const targetId = link.getAttribute('href');
    const targetElement = document.querySelector(targetId);
    
    if (targetElement) {
      targetElement.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    }
  });
});

// Cookie preferences
function manageCookies() {
  alert('Cookie preference center would open here. You can customize which cookies you allow.');
}

// Accept privacy policy
function acceptPrivacy() {
  // In a real implementation, this would save consent to localStorage
  alert('Thank you for accepting our privacy policy. Your consent has been recorded.');
}

// Track policy version (simulated)
document.addEventListener('DOMContentLoaded', function() {
  console.log('Privacy policy version: 1.0 - Last updated: March 19, 2024');
});
</script>

<?php include __DIR__ . "/partials/footer.php"; ?>