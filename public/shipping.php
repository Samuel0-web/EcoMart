<?php
require_once __DIR__ . "/partials/header.php";
?>
<link rel="stylesheet" href="<?= $css ?>shipping.css?v=<?= filemtime($css.'shipping.css') ?>">

<main class="shipping-page">
  <div class="shipping__container">
    <!-- Breadcrumb -->
    <div class="shipping__breadcrumb">
      <a href="home">Home</a>
      <i class="bi bi-chevron-right"></i>
      <span>Shipping Information</span>
    </div>

    <!-- Page Header -->
    <div class="shipping__header">
      <h1 class="shipping__title">Shipping Information</h1>
      <p class="shipping__subtitle">Fast, reliable delivery to every corner of Nigeria</p>
    </div>

    <!-- Shipping Hero -->
    <div class="shipping__hero">
      <div class="shipping__hero-content">
        <h2 class="shipping__hero-title">We Deliver to <span class="shipping__hero-highlight">All 36 States</span></h2>
        <p class="shipping__hero-text">No matter where you are in Nigeria, we'll get your order to you quickly and safely. Our nationwide delivery network covers every state.</p>
        <div class="shipping__hero-stats">
          <div class="shipping__hero-stat">
            <span class="shipping__hero-number">1-5</span>
            <span class="shipping__hero-label">Business Days</span>
          </div>
          <div class="shipping__hero-stat">
            <span class="shipping__hero-number">36</span>
            <span class="shipping__hero-label">States Covered</span>
          </div>
          <div class="shipping__hero-stat">
            <span class="shipping__hero-number">98%</span>
            <span class="shipping__hero-label">On-Time Delivery</span>
          </div>
        </div>
      </div>
      <div class="shipping__hero-image">
        <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=800&h=600&fit=crop" alt="Delivery Map" loading="lazy">
      </div>
    </div>

    <!-- Delivery Options -->
    <section class="shipping__options">
      <h2 class="shipping__section-title">Delivery Options</h2>
      <div class="shipping__options-grid">
        <!-- Standard Shipping -->
        <div class="shipping__option-card">
          <div class="shipping__option-icon">
            <i class="bi bi-truck"></i>
          </div>
          <h3 class="shipping__option-title">Standard Shipping</h3>
          <div class="shipping__option-price">₦2,500</div>
          <ul class="shipping__option-features">
            <li><i class="bi bi-check-circle-fill"></i> Delivery: 3-5 business days</li>
            <li><i class="bi bi-check-circle-fill"></i> Tracking included</li>
            <li><i class="bi bi-check-circle-fill"></i> Free for orders over ₦50,000</li>
            <li><i class="bi bi-check-circle-fill"></i> Doorstep delivery</li>
          </ul>
          <div class="shipping__option-note">Available nationwide</div>
        </div>

        <!-- Express Shipping -->
        <div class="shipping__option-card shipping__option-card--featured">
          <div class="shipping__option-badge">Most Popular</div>
          <div class="shipping__option-icon">
            <i class="bi bi-lightning"></i>
          </div>
          <h3 class="shipping__option-title">Express Shipping</h3>
          <div class="shipping__option-price">₦5,000</div>
          <ul class="shipping__option-features">
            <li><i class="bi bi-check-circle-fill"></i> Delivery: 1-2 business days</li>
            <li><i class="bi bi-check-circle-fill"></i> Real-time tracking</li>
            <li><i class="bi bi-check-circle-fill"></i> Priority handling</li>
            <li><i class="bi bi-check-circle-fill"></i> SMS updates</li>
          </ul>
          <div class="shipping__option-note">Major cities only</div>
        </div>

        <!-- Same-Day Delivery -->
        <div class="shipping__option-card">
          <div class="shipping__option-icon">
            <i class="bi bi-clock"></i>
          </div>
          <h3 class="shipping__option-title">Same-Day Delivery</h3>
          <div class="shipping__option-price">₦7,500</div>
          <ul class="shipping__option-features">
            <li><i class="bi bi-check-circle-fill"></i> Delivery: within 6 hours</li>
            <li><i class="bi bi-check-circle-fill"></i> Order before 12pm</li>
            <li><i class="bi bi-check-circle-fill"></i> Live driver tracking</li>
            <li><i class="bi bi-check-circle-fill"></i> Call before delivery</li>
          </ul>
          <div class="shipping__option-note">Lagos only</div>
        </div>
      </div>
    </section>

    <!-- Delivery Times by Region -->
    <section class="shipping__regions">
      <h2 class="shipping__section-title">Delivery Times by Region</h2>
      <div class="shipping__regions-grid">
        <div class="shipping__region-card">
          <h3 class="shipping__region-title">Lagos</h3>
          <div class="shipping__region-times">
            <div class="shipping__region-time">
              <span class="shipping__region-type">Standard</span>
              <span class="shipping__region-days">1-2 days</span>
            </div>
            <div class="shipping__region-time">
              <span class="shipping__region-type">Express</span>
              <span class="shipping__region-days">Same day*</span>
            </div>
          </div>
          <p class="shipping__region-note">*Same day for orders before 12pm</p>
        </div>

        <div class="shipping__region-card">
          <h3 class="shipping__region-title">Abuja, Port Harcourt, Kano</h3>
          <div class="shipping__region-times">
            <div class="shipping__region-time">
              <span class="shipping__region-type">Standard</span>
              <span class="shipping__region-days">2-3 days</span>
            </div>
            <div class="shipping__region-time">
              <span class="shipping__region-type">Express</span>
              <span class="shipping__region-days">1-2 days</span>
            </div>
          </div>
        </div>

        <div class="shipping__region-card">
          <h3 class="shipping__region-title">Other State Capitals</h3>
          <div class="shipping__region-times">
            <div class="shipping__region-time">
              <span class="shipping__region-type">Standard</span>
              <span class="shipping__region-days">3-4 days</span>
            </div>
            <div class="shipping__region-time">
              <span class="shipping__region-type">Express</span>
              <span class="shipping__region-days">2-3 days</span>
            </div>
          </div>
        </div>

        <div class="shipping__region-card">
          <h3 class="shipping__region-title">Remote/Rural Areas</h3>
          <div class="shipping__region-times">
            <div class="shipping__region-time">
              <span class="shipping__region-type">Standard</span>
              <span class="shipping__region-days">4-6 days</span>
            </div>
            <div class="shipping__region-time">
              <span class="shipping__region-type">Express</span>
              <span class="shipping__region-days">3-4 days</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- How Shipping Works -->
    <section class="shipping__process">
      <h2 class="shipping__section-title">How Shipping Works</h2>
      <div class="shipping__process-grid">
        <div class="shipping__process-step">
          <div class="shipping__process-number">1</div>
          <div class="shipping__process-content">
            <h3 class="shipping__process-title">Order Placed</h3>
            <p class="shipping__process-text">You place your order and receive confirmation via email and SMS.</p>
          </div>
        </div>
        <div class="shipping__process-step">
          <div class="shipping__process-number">2</div>
          <div class="shipping__process-content">
            <h3 class="shipping__process-title">Order Processed</h3>
            <p class="shipping__process-text">We pick, pack, and prepare your items for shipment.</p>
          </div>
        </div>
        <div class="shipping__process-step">
          <div class="shipping__process-number">3</div>
          <div class="shipping__process-content">
            <h3 class="shipping__process-title">Shipped</h3>
            <p class="shipping__process-text">Your order is handed to our delivery partner with tracking.</p>
          </div>
        </div>
        <div class="shipping__process-step">
          <div class="shipping__process-number">4</div>
          <div class="shipping__process-content">
            <h3 class="shipping__process-title">Out for Delivery</h3>
            <p class="shipping__process-text">Your package is on its way to your doorstep.</p>
          </div>
        </div>
        <div class="shipping__process-step">
          <div class="shipping__process-number">5</div>
          <div class="shipping__process-content">
            <h3 class="shipping__process-title">Delivered</h3>
            <p class="shipping__process-text">Package delivered and confirmed with your signature.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Tracking Information -->
    <section class="shipping__tracking">
      <div class="shipping__tracking-content">
        <h2 class="shipping__tracking-title">Track Your Package</h2>
        <p class="shipping__tracking-text">Once your order ships, you'll receive a tracking number via email and SMS. Use our tracking tool to follow your package in real-time.</p>
        <div class="shipping__tracking-form">
          <input type="text" class="shipping__tracking-input" placeholder="Enter tracking number">
          <button class="shipping__tracking-btn">Track Order</button>
        </div>
        <a href="track-order" class="shipping__tracking-link">Go to tracking page <i class="bi bi-arrow-right"></i></a>
      </div>
      <div class="shipping__tracking-image">
        <img src="https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?q=80&w=600&h=400&fit=crop" alt="Tracking" loading="lazy">
      </div>
    </section>

    <!-- Shipping FAQ -->
    <section class="shipping__faq">
      <h2 class="shipping__section-title">Frequently Asked Questions</h2>
      <div class="shipping__faq-grid">
        <!-- FAQ 1 -->
        <div class="shipping__faq-item">
          <button class="shipping__faq-question" onclick="toggleShippingFAQ(this)">
            <span>Do you ship to my location?</span>
            <i class="bi bi-chevron-down"></i>
          </button>
          <div class="shipping__faq-answer">
            <p>We ship to all 36 states in Nigeria! Enter your address at checkout to confirm delivery availability in your specific area.</p>
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="shipping__faq-item">
          <button class="shipping__faq-question" onclick="toggleShippingFAQ(this)">
            <span>How can I change my delivery address?</span>
            <i class="bi bi-chevron-down"></i>
          </button>
          <div class="shipping__faq-answer">
            <p>You can update your delivery address within 1 hour of placing your order. Contact our support team immediately for assistance with address changes.</p>
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="shipping__faq-item">
          <button class="shipping__faq-question" onclick="toggleShippingFAQ(this)">
            <span>What happens if I'm not home for delivery?</span>
            <i class="bi bi-chevron-down"></i>
          </button>
          <div class="shipping__faq-answer">
            <p>Our delivery partner will attempt delivery twice. If both attempts fail, the package will be held at a nearby pickup center for 7 days. After that, it will be returned to us.</p>
          </div>
        </div>

        <!-- FAQ 4 -->
        <div class="shipping__faq-item">
          <button class="shipping__faq-question" onclick="toggleShippingFAQ(this)">
            <span>Do you offer international shipping?</span>
            <i class="bi bi-chevron-down"></i>
          </button>
          <div class="shipping__faq-answer">
            <p>Currently, we only ship within Nigeria. We're working on expanding to other African countries. Sign up for our newsletter to be notified when international shipping launches.</p>
          </div>
        </div>

        <!-- FAQ 5 -->
        <div class="shipping__faq-item">
          <button class="shipping__faq-question" onclick="toggleShippingFAQ(this)">
            <span>How do I track my order?</span>
            <i class="bi bi-chevron-down"></i>
          </button>
          <div class="shipping__faq-answer">
            <p>Once your order ships, you'll receive a tracking number via email and SMS. You can track your package on our website using the tracking tool above or in your account dashboard.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Shipping Policy -->
    <section class="shipping__policy">
      <h2 class="shipping__policy-title">Shipping Policy</h2>
      <div class="shipping__policy-content">
        <h3>Processing Time</h3>
        <p>Orders are processed within 1-2 business days (excluding weekends and holidays). You'll receive a confirmation email once your order has been processed and shipped.</p>

        <h3>Shipping Carriers</h3>
        <p>We partner with multiple trusted couriers including GIG Logistics, DHL, FedEx, and local providers to ensure reliable delivery across Nigeria.</p>

        <h3>Shipping Rates</h3>
        <p>Shipping costs are calculated based on your location and order size. You'll see the exact cost at checkout before completing your purchase. Orders over ₦50,000 qualify for free standard shipping.</p>

        <h3>Delivery Issues</h3>
        <p>If you experience any issues with delivery, please contact our support team within 48 hours. We'll work with our partners to resolve the problem quickly.</p>
      </div>
    </section>

    <!-- Call to Action -->
    <section class="shipping__cta">
      <div class="shipping__cta-content">
        <h2 class="shipping__cta-title">Ready to Shop?</h2>
        <p class="shipping__cta-text">Browse our collection and get fast delivery to your doorstep.</p>
        <a href="shop" class="shipping__cta-btn">Start Shopping <i class="bi bi-arrow-right"></i></a>
      </div>
    </section>
  </div>
</main>

<script>
// Toggle FAQ accordion
function toggleShippingFAQ(element) {
  const faqItem = element.closest('.shipping__faq-item');
  faqItem.classList.toggle('active');
}

// Track order button
document.querySelector('.shipping__tracking-btn')?.addEventListener('click', function() {
  const trackingNumber = document.querySelector('.shipping__tracking-input').value;
  if (trackingNumber.trim() === '') {
    alert('Please enter a tracking number');
  } else {
    window.location.href = `track-order?number=${trackingNumber}`;
  }
});
</script>

<?php include __DIR__ . "/partials/footer.php"; ?>