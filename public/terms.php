<?php
require_once __DIR__ . "/partials/header.php";
?>
<link rel="stylesheet" href="<?= $css ?>terms.css?v=<?= filemtime($css.'terms.css') ?>">

<main class="terms-page">
  <div class="terms__container">
    <!-- Breadcrumb -->
    <div class="terms__breadcrumb">
      <a href="home">Home</a>
      <i class="bi bi-chevron-right"></i>
      <span>Terms and Conditions</span>
    </div>

    <!-- Page Header -->
    <div class="terms__header">
      <h1 class="terms__title">Terms and Conditions</h1>
      <p class="terms__subtitle">Last Updated: March 19, 2024</p>
    </div>

    <!-- Introduction Card -->
    <div class="terms__intro">
      <div class="terms__intro-icon">
        <i class="bi bi-file-text"></i>
      </div>
      <div class="terms__intro-content">
        <h2 class="terms__intro-title">Welcome to EcoMart</h2>
        <p class="terms__intro-text">By accessing or using our website, mobile application, and services, you agree to be bound by these Terms and Conditions. Please read them carefully before using our services. If you do not agree with any part of these terms, you may not use our services.</p>
      </div>
    </div>

    <!-- Quick Navigation -->
    <div class="terms__nav">
      <h3 class="terms__nav-title">Jump to Section:</h3>
      <div class="terms__nav-links">
        <a href="#account" class="terms__nav-link">Account Terms</a>
        <a href="#orders" class="terms__nav-link">Orders & Payments</a>
        <a href="#shipping" class="terms__nav-link">Shipping & Delivery</a>
        <a href="#returns" class="terms__nav-link">Returns & Refunds</a>
        <a href="#pricing" class="terms__nav-link">Pricing</a>
        <a href="#conduct" class="terms__nav-link">User Conduct</a>
        <a href="#intellectual" class="terms__nav-link">Intellectual Property</a>
        <a href="#liability" class="terms__nav-link">Limitation of Liability</a>
        <a href="#disputes" class="terms__nav-link">Dispute Resolution</a>
        <a href="#changes" class="terms__nav-link">Changes to Terms</a>
        <a href="#contact" class="terms__nav-link">Contact Us</a>
      </div>
    </div>

    <!-- Terms Content -->
    <div class="terms__content">
      <!-- Section 1: Account Terms -->
      <section id="account" class="terms__section">
        <h2 class="terms__section-title">1. Account Terms</h2>
        
        <div class="terms__subsection">
          <h3 class="terms__subsection-title">1.1 Account Creation</h3>
          <p class="terms__text">To access certain features of our services, you must create an account. You agree to provide accurate, current, and complete information during the registration process and to update such information to keep it accurate, current, and complete.</p>
        </div>

        <div class="terms__subsection">
          <h3 class="terms__subsection-title">1.2 Account Security</h3>
          <p class="terms__text">You are responsible for maintaining the confidentiality of your account credentials and for all activities that occur under your account. You agree to notify us immediately of any unauthorized use of your account. We are not liable for any loss or damage arising from your failure to protect your account security.</p>
        </div>

        <div class="terms__subsection">
          <h3 class="terms__subsection-title">1.3 Account Termination</h3>
          <p class="terms__text">We reserve the right to suspend or terminate your account at our discretion, including for violation of these terms, fraudulent activity, or extended inactivity. You may terminate your account at any time by contacting customer support.</p>
        </div>
      </section>

      <!-- Section 2: Orders and Payments -->
      <section id="orders" class="terms__section">
        <h2 class="terms__section-title">2. Orders and Payments</h2>
        
        <div class="terms__subsection">
          <h3 class="terms__subsection-title">2.1 Order Acceptance</h3>
          <p class="terms__text">When you place an order, you make an offer to purchase products subject to these terms. We reserve the right to accept or decline your order for any reason, including product availability, errors in pricing or product information, or suspicion of fraudulent activity.</p>
        </div>

        <div class="terms__subsection">
          <h3 class="terms__subsection-title">2.2 Order Confirmation</h3>
          <p class="terms__text">A confirmation email acknowledging receipt of your order does not constitute acceptance of your order. A contract between us is formed when we send you a shipment confirmation email indicating that your order has been shipped.</p>
        </div>

        <div class="terms__subsection">
          <h3 class="terms__subsection-title">2.3 Payment Methods</h3>
          <p class="terms__text">We accept various payment methods as indicated on our website. By providing payment information, you represent that you are authorized to use the payment method and authorize us to charge the full amount of your order. All payments are processed securely through our payment partners.</p>
        </div>

        <div class="terms__subsection">
          <h3 class="terms__subsection-title">2.4 Order Modifications and Cancellation</h3>
          <p class="terms__text">You may modify or cancel your order within 1 hour of placement by contacting customer support. After this period, orders enter processing and cannot be modified or cancelled. We reserve the right to cancel orders at any time due to product unavailability, pricing errors, or suspected fraud.</p>
        </div>
      </section>

      <!-- Section 3: Shipping and Delivery -->
      <section id="shipping" class="terms__section">
        <h2 class="terms__section-title">3. Shipping and Delivery</h2>
        
        <div class="terms__subsection">
          <h3 class="terms__subsection-title">3.1 Shipping Policy</h3>
          <p class="terms__text">We ship to all 36 states in Nigeria. Shipping times and costs vary based on location and shipping method selected. Estimated delivery times are provided for reference only and are not guaranteed. For complete shipping information, please see our <a href="shipping">Shipping Policy</a>.</p>
        </div>

        <div class="terms__subsection">
          <h3 class="terms__subsection-title">3.2 Risk of Loss</h3>
          <p class="terms__text">All items purchased from us are made pursuant to a shipment contract. The risk of loss and title for such items pass to you upon our delivery to the carrier.</p>
        </div>

        <div class="terms__subsection">
          <h3 class="terms__subsection-title">3.3 Delivery Issues</h3>
          <p class="terms__text">If you experience issues with delivery, including lost or delayed packages, please contact our customer support within 48 hours of the expected delivery date. We will work with our shipping partners to resolve the issue.</p>
        </div>
      </section>

      <!-- Section 4: Returns and Refunds -->
      <section id="returns" class="terms__section">
        <h2 class="terms__section-title">4. Returns and Refunds</h2>
        
        <div class="terms__subsection">
          <h3 class="terms__subsection-title">4.1 Return Policy</h3>
          <p class="terms__text">We offer a 30-day return policy for most items in new, unused condition with original packaging. Some items are non-returnable for hygiene or safety reasons. For complete return information, please see our <a href="returns">Returns Policy</a>.</p>
        </div>

        <div class="terms__subsection">
          <h3 class="terms__subsection-title">4.2 Refund Processing</h3>
          <p class="terms__text">Refunds are processed within 3-5 business days after we receive and inspect your return. The refund will be issued to your original payment method. Your bank may take additional time to reflect the refund in your account.</p>
        </div>

        <div class="terms__subsection">
          <h3 class="terms__subsection-title">4.3 Damaged or Defective Items</h3>
          <p class="terms__text">If you receive a damaged or defective item, please contact us within 48 hours of delivery with photos of the damage. We will arrange for a replacement or full refund, including return shipping costs.</p>
        </div>
      </section>

      <!-- Section 5: Pricing -->
      <section id="pricing" class="terms__section">
        <h2 class="terms__section-title">5. Pricing and Availability</h2>
        
        <div class="terms__subsection">
          <h3 class="terms__subsection-title">5.1 Pricing</h3>
          <p class="terms__text">All prices are listed in Nigerian Naira (₦) and include applicable taxes unless otherwise stated. We strive to ensure accurate pricing but errors may occur. If we discover an error in the price of an item you've ordered, we will inform you and give you the option to confirm the order at the correct price or cancel it.</p>
        </div>

        <div class="terms__subsection">
          <h3 class="terms__subsection-title">5.2 Price Changes</h3>
          <p class="terms__text">Prices are subject to change without notice. However, changes will not affect orders that have already been accepted and confirmed.</p>
        </div>

        <div class="terms__subsection">
          <h3 class="terms__subsection-title">5.3 Product Availability</h3>
          <p class="terms__text">Product availability is subject to change. If an item becomes unavailable after you place an order, we will notify you and offer a replacement or full refund.</p>
        </div>
      </section>

      <!-- Section 6: User Conduct -->
      <section id="conduct" class="terms__section">
        <h2 class="terms__section-title">6. User Conduct</h2>
        
        <p class="terms__text">When using our services, you agree not to:</p>
        
        <ul class="terms__list">
          <li>Violate any applicable laws or regulations</li>
          <li>Infringe on the rights of others, including intellectual property rights</li>
          <li>Provide false or misleading information</li>
          <li>Attempt to gain unauthorized access to our systems or other users' accounts</li>
          <li>Use our services for fraudulent purposes</li>
          <li>Interfere with the proper functioning of our website or services</li>
          <li>Upload or transmit viruses, malware, or other harmful code</li>
          <li>Harass, abuse, or harm others</li>
          <li>Post inappropriate or offensive content</li>
          <li>Engage in any activity that could damage our reputation</li>
        </ul>
      </section>

      <!-- Section 7: Intellectual Property -->
      <section id="intellectual" class="terms__section">
        <h2 class="terms__section-title">7. Intellectual Property</h2>
        
        <div class="terms__subsection">
          <h3 class="terms__subsection-title">7.1 Our Content</h3>
          <p class="terms__text">All content on our website, including text, graphics, logos, images, software, and the overall design, is the property of EcoMart or our licensors and is protected by Nigerian and international copyright, trademark, and other intellectual property laws.</p>
        </div>

        <div class="terms__subsection">
          <h3 class="terms__subsection-title">7.2 Limited License</h3>
          <p class="terms__text">We grant you a limited, non-exclusive, non-transferable license to access and use our services for personal, non-commercial purposes. You may not reproduce, distribute, modify, or create derivative works of our content without our express written permission.</p>
        </div>

        <div class="terms__subsection">
          <h3 class="terms__subsection-title">7.3 User Content</h3>
          <p class="terms__text">By submitting reviews, comments, or other content to our site, you grant us a non-exclusive, royalty-free, perpetual, and worldwide license to use, reproduce, modify, and display such content in connection with our services.</p>
        </div>
      </section>

      <!-- Section 8: Limitation of Liability -->
      <section id="liability" class="terms__section">
        <h2 class="terms__section-title">8. Limitation of Liability</h2>
        
        <div class="terms__notice-box">
          <i class="bi bi-exclamation-triangle-fill"></i>
          <p>To the maximum extent permitted by law, EcoMart shall not be liable for any indirect, incidental, special, consequential, or punitive damages, including loss of profits, data, or goodwill, arising from your use of our services or products.</p>
        </div>

        <p class="terms__text">Our total liability for any claim arising from these terms or your use of our services shall not exceed the amount you paid to us for the products or services giving rise to the claim.</p>
        
        <p class="terms__text">Some jurisdictions do not allow the exclusion or limitation of certain warranties or liabilities, so some of the above limitations may not apply to you.</p>
      </section>

      <!-- Section 9: Indemnification -->
      <section id="indemnification" class="terms__section">
        <h2 class="terms__section-title">9. Indemnification</h2>
        
        <p class="terms__text">You agree to indemnify, defend, and hold harmless EcoMart, its officers, directors, employees, and agents from and against any claims, liabilities, damages, losses, and expenses arising out of or in any way connected with your access to or use of our services, your violation of these terms, or your violation of any rights of another.</p>
      </section>

      <!-- Section 10: Dispute Resolution -->
      <section id="disputes" class="terms__section">
        <h2 class="terms__section-title">10. Dispute Resolution</h2>
        
        <div class="terms__subsection">
          <h3 class="terms__subsection-title">10.1 Informal Resolution</h3>
          <p class="terms__text">Before filing any claim, you agree to attempt to resolve any dispute informally by contacting our customer support. We will work in good faith to resolve the issue within 30 days.</p>
        </div>

        <div class="terms__subsection">
          <h3 class="terms__subsection-title">10.2 Governing Law</h3>
          <p class="terms__text">These terms shall be governed by and construed in accordance with the laws of the Federal Republic of Nigeria, without regard to its conflict of law provisions.</p>
        </div>

        <div class="terms__subsection">
          <h3 class="terms__subsection-title">10.3 Jurisdiction</h3>
          <p class="terms__text">Any legal action arising out of or relating to these terms or our services shall be brought exclusively in the courts of Lagos, Nigeria, and you consent to the personal jurisdiction of such courts.</p>
        </div>
      </section>

      <!-- Section 11: Changes to Terms -->
      <section id="changes" class="terms__section">
        <h2 class="terms__section-title">11. Changes to Terms</h2>
        
        <p class="terms__text">We reserve the right to modify these terms at any time. Changes will be effective immediately upon posting on our website. Your continued use of our services after any changes constitutes acceptance of the modified terms.</p>
        
        <div class="terms__update-notice">
          <p>We encourage you to review these terms periodically. The "Last Updated" date at the top of this page indicates when these terms were last revised.</p>
        </div>
      </section>

      <!-- Section 12: Severability -->
      <section id="severability" class="terms__section">
        <h2 class="terms__section-title">12. Severability</h2>
        
        <p class="terms__text">If any provision of these terms is found to be unenforceable or invalid, that provision shall be limited or eliminated to the minimum extent necessary so that the remaining provisions remain in full force and effect.</p>
      </section>

      <!-- Section 13: Entire Agreement -->
      <section id="agreement" class="terms__section">
        <h2 class="terms__section-title">13. Entire Agreement</h2>
        
        <p class="terms__text">These terms, together with our <a href="privacy">Privacy Policy</a> and any other policies referenced herein, constitute the entire agreement between you and EcoMart regarding your use of our services and supersede any prior agreements.</p>
      </section>

      <!-- Section 14: Contact Us -->
      <section id="contact" class="terms__section">
        <h2 class="terms__section-title">14. Contact Us</h2>
        
        <p class="terms__text">If you have any questions about these Terms and Conditions, please contact us at:</p>
        
        <div class="terms__contact-grid">
          <div class="terms__contact-item">
            <i class="bi bi-envelope-fill"></i>
            <div>
              <strong>Email:</strong>
              <a href="mailto:legal@ecomart.com">legal@ecomart.com</a>
            </div>
          </div>
          <div class="terms__contact-item">
            <i class="bi bi-telephone-fill"></i>
            <div>
              <strong>Phone:</strong>
              <a href="tel:+2347006000000">+234 700 600 0000</a>
            </div>
          </div>
          <div class="terms__contact-item">
            <i class="bi bi-geo-alt-fill"></i>
            <div>
              <strong>Address:</strong>
              <p>123 Main Street, Victoria Island, Lagos, Nigeria</p>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Acceptance Box -->
    <div class="terms__acceptance">
      <h3 class="terms__acceptance-title">Acknowledgment and Acceptance</h3>
      <p class="terms__acceptance-text">By clicking "I Accept" or by using our services, you acknowledge that you have read, understood, and agree to be bound by these Terms and Conditions.</p>
      <div class="terms__acceptance-buttons">
        <button class="terms__acceptance-btn" onclick="acceptTerms()">I Accept</button>
        <a href="contact" class="terms__acceptance-link">Questions? Contact Us</a>
      </div>
    </div>

    <!-- Download Section -->
    <div class="terms__download">
      <p>Download a copy of these terms:</p>
      <div class="terms__download-buttons">
        <button class="terms__download-btn" onclick="downloadPDF()">
          <i class="bi bi-file-pdf"></i> PDF
        </button>
        <button class="terms__download-btn" onclick="downloadText()">
          <i class="bi bi-file-text"></i> Plain Text
        </button>
      </div>
    </div>
  </div>
</main>

<script>
// Smooth scroll for anchor links
document.querySelectorAll('.terms__nav-link').forEach(link => {
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

// Accept terms
function acceptTerms() {
  // In a real implementation, this would save acceptance to database/localStorage
  alert('Thank you for accepting our Terms and Conditions. Your acceptance has been recorded.');
}

// Download functions (simulated)
function downloadPDF() {
  alert('PDF download would start. In a real implementation, this would generate a PDF of the terms.');
}

function downloadText() {
  alert('Text file download would start. In a real implementation, this would generate a text file of the terms.');
}

// Track terms version
document.addEventListener('DOMContentLoaded', function() {
  console.log('Terms version: 1.0 - Last updated: March 19, 2024');
});
</script>

<?php include __DIR__ . "/partials/footer.php"; ?>