<?php
require_once __DIR__ . "/partials/header.php";
?>
<link rel="stylesheet" href="<?= $css ?>contact.css?v=<?= filemtime($css.'contact.css') ?>">

<main class="contact-page">
  <div class="contact__container">
    <!-- Breadcrumb -->
    <div class="contact__breadcrumb">
      <a href="home">Home</a>
      <i class="bi bi-chevron-right"></i>
      <span>Contact Us</span>
    </div>

    <!-- Page Header -->
    <div class="contact__header">
      <h1 class="contact__title">Get in Touch</h1>
      <p class="contact__subtitle">We're here to help with any questions, concerns, or feedback</p>
    </div>

    <!-- Quick Contact Cards -->
    <div class="contact__quick-cards">
      <div class="contact__quick-card">
        <div class="contact__quick-icon">
          <i class="bi bi-telephone"></i>
        </div>
        <h3 class="contact__quick-title">Call Us</h3>
        <p class="contact__quick-text">Monday-Friday, 8am-8pm</p>
        <a href="tel:+2347006000000" class="contact__quick-link">+234 700 600 0000</a>
        <a href="tel:+2348023456789" class="contact__quick-link">+234 802 345 6789</a>
      </div>

      <div class="contact__quick-card">
        <div class="contact__quick-icon">
          <i class="bi bi-envelope"></i>
        </div>
        <h3 class="contact__quick-title">Email Us</h3>
        <p class="contact__quick-text">We reply within 24 hours</p>
        <a href="mailto:support@ecomart.com" class="contact__quick-link">support@ecomart.com</a>
        <a href="mailto:info@ecomart.com" class="contact__quick-link">info@ecomart.com</a>
      </div>

      <div class="contact__quick-card">
        <div class="contact__quick-icon">
          <i class="bi bi-chat-dots"></i>
        </div>
        <h3 class="contact__quick-title">Live Chat</h3>
        <p class="contact__quick-text">Online now. Get instant help.</p>
        <button class="contact__quick-link contact__quick-link--btn" onclick="startLiveChat()">Start Live Chat</button>
      </div>

      <div class="contact__quick-card">
        <div class="contact__quick-icon">
          <i class="bi bi-whatsapp"></i>
        </div>
        <h3 class="contact__quick-title">WhatsApp</h3>
        <p class="contact__quick-text">Message us on WhatsApp</p>
        <a href="https://wa.me/2347006000000" class="contact__quick-link" target="_blank">Chat on WhatsApp</a>
      </div>
    </div>

    <!-- Contact Form & Info Grid -->
    <div class="contact__grid">
      <!-- Contact Form -->
      <div class="contact__form-card">
        <h2 class="contact__form-title">Send Us a Message</h2>
        <p class="contact__form-text">Fill out the form below and we'll get back to you as soon as possible.</p>

        <form class="contact__form" id="contactForm" onsubmit="submitContactForm(event)">
          <div class="contact__form-row">
            <div class="contact__form-group">
              <label for="name">Your Name *</label>
              <input type="text" id="name" class="contact__input" placeholder="John Doe" required>
            </div>
            <div class="contact__form-group">
              <label for="email">Email Address *</label>
              <input type="email" id="email" class="contact__input" placeholder="john@example.com" required>
            </div>
          </div>

          <div class="contact__form-row">
            <div class="contact__form-group">
              <label for="phone">Phone Number</label>
              <input type="tel" id="phone" class="contact__input" placeholder="+234 700 600 0000">
            </div>
            <div class="contact__form-group">
              <label for="subject">Subject *</label>
              <select id="subject" class="contact__select" required>
                <option value="">Select a subject</option>
                <option value="order">Order Inquiry</option>
                <option value="return">Return Request</option>
                <option value="shipping">Shipping Question</option>
                <option value="product">Product Question</option>
                <option value="account">Account Issue</option>
                <option value="other">Other</option>
              </select>
            </div>
          </div>

          <div class="contact__form-group">
            <label for="order-number">Order Number (if applicable)</label>
            <input type="text" id="order-number" class="contact__input" placeholder="ORD-2024-XXXX">
          </div>

          <div class="contact__form-group">
            <label for="message">Message *</label>
            <textarea id="message" class="contact__textarea" rows="5" placeholder="How can we help you?" required></textarea>
          </div>

          <div class="contact__form-checkbox">
            <input type="checkbox" id="privacy" checked required>
            <span class="contact__checkmark"></span>
            <label for="privacy">I agree to the <a href="privacy.php">Privacy Policy</a> and consent to being contacted</label>
          </div>

          <button type="submit" class="contact__submit-btn">Send Message <i class="bi bi-send"></i></button>
        </form>
      </div>

      <!-- Contact Information -->
      <div class="contact__info-card">
        <h2 class="contact__info-title">Contact Information</h2>
        
        <div class="contact__info-section">
          <h3 class="contact__info-subtitle">📍 Our Location</h3>
          <p class="contact__info-text">
            EcoMart Headquarters<br>
            123 Main Street, Victoria Island<br>
            Lagos, Nigeria
          </p>
        </div>

        <div class="contact__info-section">
          <h3 class="contact__info-subtitle">🕒 Business Hours</h3>
          <div class="contact__hours">
            <div class="contact__hours-row">
              <span>Monday - Friday:</span>
              <span>8:00 AM - 8:00 PM</span>
            </div>
            <div class="contact__hours-row">
              <span>Saturday:</span>
              <span>9:00 AM - 5:00 PM</span>
            </div>
            <div class="contact__hours-row">
              <span>Sunday:</span>
              <span>Closed</span>
            </div>
            <div class="contact__hours-row">
              <span>Public Holidays:</span>
              <span>10:00 AM - 2:00 PM</span>
            </div>
          </div>
        </div>

        <div class="contact__info-section">
          <h3 class="contact__info-subtitle">📞 Phone Numbers</h3>
          <p class="contact__info-text">
            <strong>Customer Support:</strong><br>
            <a href="tel:+2347006000000">+234 700 600 0000</a><br>
            <a href="tel:+2348023456789">+234 802 345 6789</a>
          </p>
          <p class="contact__info-text">
            <strong>Returns Department:</strong><br>
            <a href="tel:+2348098765432">+234 809 876 5432</a>
          </p>
        </div>

        <div class="contact__info-section">
          <h3 class="contact__info-subtitle">✉️ Email Addresses</h3>
          <p class="contact__info-text">
            <strong>General Inquiries:</strong><br>
            <a href="mailto:info@ecomart.com">info@ecomart.com</a>
          </p>
          <p class="contact__info-text">
            <strong>Support:</strong><br>
            <a href="mailto:support@ecomart.com">support@ecomart.com</a>
          </p>
          <p class="contact__info-text">
            <strong>Returns:</strong><br>
            <a href="mailto:returns@ecomart.com">returns@ecomart.com</a>
          </p>
        </div>

        <div class="contact__social">
          <h3 class="contact__info-subtitle">🌐 Follow Us</h3>
          <div class="contact__social-links">
            <a href="#" class="contact__social-link"><i class="bi bi-facebook"></i></a>
            <a href="#" class="contact__social-link"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="contact__social-link"><i class="bi bi-instagram"></i></a>
            <a href="#" class="contact__social-link"><i class="bi bi-linkedin"></i></a>
            <a href="#" class="contact__social-link"><i class="bi bi-youtube"></i></a>
            <a href="#" class="contact__social-link"><i class="bi bi-tiktok"></i></a>
          </div>
        </div>
      </div>
    </div>

    <!-- Map Section -->
    <section class="contact__map">
      <div class="contact__map-container">
        <!-- Map Placeholder - Replace with actual Google Maps embed -->
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12691.984118351372!2d3.4211!3d6.4281!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf4c5a9b8a7c5%3A0x9d5b5e5b5e5b5e5b!2sVictoria%20Island%2C%20Lagos!5e0!3m2!1sen!2sng!4v1620000000000!5m2!1sen!2sng" 
          class="contact__map-iframe"
          allowfullscreen="" 
          loading="lazy">
        </iframe>
      </div>
    </section>

    <!-- FAQ Preview -->
    <section class="contact__faq-preview">
      <div class="contact__faq-content">
        <h2 class="contact__faq-title">Frequently Asked Questions</h2>
        <p class="contact__faq-text">Find quick answers to common questions in our FAQ section</p>
        <a href="faq" class="contact__faq-btn">Visit FAQ <i class="bi bi-arrow-right"></i></a>
      </div>
      <div class="contact__faq-grid">
        <div class="contact__faq-item">
          <i class="bi bi-truck"></i>
          <span>Shipping times?</span>
        </div>
        <div class="contact__faq-item">
          <i class="bi bi-arrow-repeat"></i>
          <span>Return policy?</span>
        </div>
        <div class="contact__faq-item">
          <i class="bi bi-credit-card"></i>
          <span>Payment methods?</span>
        </div>
        <div class="contact__faq-item">
          <i class="bi bi-box-seam"></i>
          <span>Track order?</span>
        </div>
      </div>
    </section>

    <!-- Response Time Promise -->
    <section class="contact__promise">
      <div class="contact__promise-content">
        <h2 class="contact__promise-title">Our Response Promise</h2>
        <div class="contact__promise-grid">
          <div class="contact__promise-item">
            <div class="contact__promise-icon">
              <i class="bi bi-envelope-check"></i>
            </div>
            <h3 class="contact__promise-item-title">Email</h3>
            <p class="contact__promise-text">Within 24 hours</p>
          </div>
          <div class="contact__promise-item">
            <div class="contact__promise-icon">
              <i class="bi bi-telephone"></i>
            </div>
            <h3 class="contact__promise-item-title">Phone</h3>
            <p class="contact__promise-text">Immediate during hours</p>
          </div>
          <div class="contact__promise-item">
            <div class="contact__promise-icon">
              <i class="bi bi-chat"></i>
            </div>
            <h3 class="contact__promise-item-title">Live Chat</h3>
            <p class="contact__promise-text">Under 2 minutes</p>
          </div>
          <div class="contact__promise-item">
            <div class="contact__promise-icon">
              <i class="bi bi-whatsapp"></i>
            </div>
            <h3 class="contact__promise-item-title">WhatsApp</h3>
            <p class="contact__promise-text">Within 1 hour</p>
          </div>
        </div>
      </div>
    </section>
  </div>
</main>

<script>
// Handle form submission
function submitContactForm(event) {
  event.preventDefault();
  
  // Get form data
  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  const subject = document.getElementById('subject').value;
  const message = document.getElementById('message').value;
  
  // Simulate form submission
  const submitBtn = document.querySelector('.contact__submit-btn');
  const originalText = submitBtn.innerHTML;
  
  submitBtn.innerHTML = 'Sending... <i class="bi bi-hourglass"></i>';
  submitBtn.disabled = true;
  
  setTimeout(() => {
    alert(`Thank you ${name}! Your message has been sent. We'll respond within 24 hours.`);
    document.getElementById('contactForm').reset();
    submitBtn.innerHTML = originalText;
    submitBtn.disabled = false;
  }, 1500);
}

// Live chat function
function startLiveChat() {
  alert('Live chat would open here. Our team is online and ready to help!');
}

// Pre-fill form based on URL parameters (for return requests)
document.addEventListener('DOMContentLoaded', function() {
  const urlParams = new URLSearchParams(window.location.search);
  const subject = urlParams.get('subject');
  const order = urlParams.get('order');
  
  if (subject) {
    const subjectSelect = document.getElementById('subject');
    for (let option of subjectSelect.options) {
      if (option.text.toLowerCase().includes(subject.toLowerCase()) || 
          option.value.toLowerCase().includes(subject.toLowerCase())) {
        option.selected = true;
        break;
      }
    }
  }
  
  if (order) {
    document.getElementById('order-number').value = order;
  }
});
</script>

<?php include __DIR__ . "/partials/footer.php"; ?>