<?php
require_once __DIR__ . "/partials/header.php";
?>
<link rel="stylesheet" href="<?= $css ?>returns.css?v=<?= filemtime($css.'returns.css') ?>">

<main class="returns-page">
  <div class="returns__container">
    <!-- Breadcrumb -->
    <div class="returns__breadcrumb">
      <a href="home">Home</a>
      <i class="bi bi-chevron-right"></i>
      <span>Returns & Refunds</span>
    </div>

    <!-- Page Header -->
    <div class="returns__header">
      <h1 class="returns__title">Returns & Refunds</h1>
      <p class="returns__subtitle">Hassle-free returns within 30 days of delivery</p>
    </div>

    <!-- Returns Promise -->
    <div class="returns__promise">
      <div class="returns__promise-icon">
        <i class="bi bi-arrow-repeat"></i>
      </div>
      <div class="returns__promise-content">
        <h2 class="returns__promise-title">30-Day Satisfaction Guarantee</h2>
        <p class="returns__promise-text">Not completely satisfied with your purchase? You can return most items within 30 days for a full refund or exchange. We're here to make it right.</p>
      </div>
    </div>

    <!-- Quick Actions -->
    <div class="returns__actions">
      <a href="contact" class="returns__action-card">
        <div class="returns__action-icon">
          <i class="bi bi-envelope"></i>
        </div>
        <h3 class="returns__action-title">Contact Support</h3>
        <p class="returns__action-text">Get help from our customer service team to initiate a return</p>
        <span class="returns__action-link">Contact Us <i class="bi bi-arrow-right"></i></span>
      </a>
      <a href="faq" class="returns__action-card">
        <div class="returns__action-icon">
          <i class="bi bi-question-circle"></i>
        </div>
        <h3 class="returns__action-title">Visit FAQ</h3>
        <p class="returns__action-text">Find answers to common questions about returns</p>
        <span class="returns__action-link">View FAQs <i class="bi bi-arrow-right"></i></span>
      </a>
      <a href="shipping" class="returns__action-card">
        <div class="returns__action-icon">
          <i class="bi bi-truck"></i>
        </div>
        <h3 class="returns__action-title">Shipping Info</h3>
        <p class="returns__action-text">Learn about our shipping and return shipping policies</p>
        <span class="returns__action-link">Learn More <i class="bi bi-arrow-right"></i></span>
      </a>
    </div>

    <!-- Return Policy Grid -->
    <div class="returns__policy-grid">
      <!-- Eligible Items -->
      <div class="returns__policy-card">
        <h2 class="returns__policy-title">
          <i class="bi bi-check-circle-fill"></i>
          Eligible for Return
        </h2>
        <ul class="returns__policy-list">
          <li><i class="bi bi-check-lg"></i> Items within 30 days of delivery</li>
          <li><i class="bi bi-check-lg"></i> Unused and in original packaging</li>
          <li><i class="bi bi-check-lg"></i> Electronics with all accessories</li>
          <li><i class="bi bi-check-lg"></i> Clothing with tags attached</li>
          <li><i class="bi bi-check-lg"></i> Damaged or defective items</li>
          <li><i class="bi bi-check-lg"></i> Wrong item received</li>
        </ul>
      </div>

      <!-- Non-Eligible Items -->
      <div class="returns__policy-card returns__policy-card--warning">
        <h2 class="returns__policy-title">
          <i class="bi bi-exclamation-circle-fill"></i>
          Not Eligible for Return
        </h2>
        <ul class="returns__policy-list">
          <li><i class="bi bi-x-lg"></i> Items after 30 days</li>
          <li><i class="bi bi-x-lg"></i> Used or installed products</li>
          <li><i class="bi bi-x-lg"></i> Personal care items (opened)</li>
          <li><i class="bi bi-x-lg"></i> Underwear and swimwear</li>
          <li><i class="bi bi-x-lg"></i> Food and perishable goods</li>
          <li><i class="bi bi-x-lg"></i> Gift cards</li>
        </ul>
      </div>
    </div>

    <!-- Return Process -->
    <section class="returns__process">
      <h2 class="returns__section-title">How to Return an Item</h2>
      <div class="returns__process-steps">
        <div class="returns__process-step">
          <div class="returns__step-number">1</div>
          <div class="returns__step-content">
            <h3 class="returns__step-title">Contact Customer Support</h3>
            <p class="returns__step-text">Reach out to our support team via email or phone to initiate your return. Provide your order number and reason for return.</p>
          </div>
        </div>
        <div class="returns__process-step">
          <div class="returns__step-number">2</div>
          <div class="returns__step-content">
            <h3 class="returns__step-title">Receive Return Authorization</h3>
            <p class="returns__step-text">Our team will review your request and provide a return authorization number and shipping label if applicable.</p>
          </div>
        </div>
        <div class="returns__process-step">
          <div class="returns__step-number">3</div>
          <div class="returns__step-content">
            <h3 class="returns__step-title">Pack Your Item</h3>
            <p class="returns__step-text">Securely pack the item in its original packaging with all accessories. Include the return form inside the box.</p>
          </div>
        </div>
        <div class="returns__process-step">
          <div class="returns__step-number">4</div>
          <div class="returns__step-content">
            <h3 class="returns__step-title">Ship the Item</h3>
            <p class="returns__step-text">Drop off at any partner location using the provided shipping label, or ship via your preferred courier.</p>
          </div>
        </div>
        <div class="returns__process-step">
          <div class="returns__step-number">5</div>
          <div class="returns__step-content">
            <h3 class="returns__step-title">Refund Processed</h3>
            <p class="returns__step-text">Once we receive and inspect your return, we'll process your refund within 3-5 business days.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Refund Timeline -->
    <section class="returns__timeline">
      <h2 class="returns__section-title">Refund Timeline</h2>
      <div class="returns__timeline-grid">
        <div class="returns__timeline-card">
          <div class="returns__timeline-icon">
            <i class="bi bi-clock"></i>
          </div>
          <h3 class="returns__timeline-title">Return Arrives</h3>
          <p class="returns__timeline-text">1-3 business days after shipping</p>
        </div>
        <div class="returns__timeline-card">
          <div class="returns__timeline-icon">
            <i class="bi bi-search"></i>
          </div>
          <h3 class="returns__timeline-title">Inspection</h3>
          <p class="returns__timeline-text">1-2 business days</p>
        </div>
        <div class="returns__timeline-card">
          <div class="returns__timeline-icon">
            <i class="bi bi-arrow-repeat"></i>
          </div>
          <h3 class="returns__timeline-title">Refund Processing</h3>
          <p class="returns__timeline-text">3-5 business days</p>
        </div>
        <div class="returns__timeline-card">
          <div class="returns__timeline-icon">
            <i class="bi bi-bank"></i>
          </div>
          <h3 class="returns__timeline-title">Bank Processing</h3>
          <p class="returns__timeline-text">2-5 business days (varies by bank)</p>
        </div>
      </div>
      <p class="returns__timeline-note">Total time: 7-15 business days from when you ship the return</p>
    </section>

    <!-- Return Methods -->
    <section class="returns__methods">
      <h2 class="returns__section-title">Return Methods</h2>
      <div class="returns__methods-grid">
        <div class="returns__method-card">
          <div class="returns__method-icon">
            <i class="bi bi-shop"></i>
          </div>
          <h3 class="returns__method-title">Drop-Off at Partner Store</h3>
          <p class="returns__method-text">Return to any partner location near you. Find a drop-off point in your area.</p>
          <a href="#" class="returns__method-link">Find Locations <i class="bi bi-arrow-right"></i></a>
        </div>
        <div class="returns__method-card">
          <div class="returns__method-icon">
            <i class="bi bi-truck"></i>
          </div>
          <h3 class="returns__method-title">Schedule Pickup</h3>
          <p class="returns__method-text">Schedule a pickup from your home or office. Available in major cities.</p>
          <a href="#" class="returns__method-link">Schedule Pickup <i class="bi bi-arrow-right"></i></a>
        </div>
        <div class="returns__method-card">
          <div class="returns__method-icon">
            <i class="bi bi-postcard"></i>
          </div>
          <h3 class="returns__method-title">Mail-In Return</h3>
          <p class="returns__method-text">Ship via your preferred courier. Remember to get proof of postage.</p>
          <a href="contact" class="returns__method-link">Get Instructions <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </section>

    <!-- Return FAQ -->
    <section class="returns__faq">
      <h2 class="returns__section-title">Frequently Asked Questions</h2>
      <div class="returns__faq-grid">
        <!-- FAQ 1 -->
        <div class="returns__faq-item">
          <button class="returns__faq-question" onclick="toggleReturnFAQ(this)">
            <span>How long do I have to return an item?</span>
            <i class="bi bi-chevron-down"></i>
          </button>
          <div class="returns__faq-answer">
            <p>You have 30 days from the date of delivery to initiate a return. Items returned after 30 days may not be eligible for a full refund.</p>
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="returns__faq-item">
          <button class="returns__faq-question" onclick="toggleReturnFAQ(this)">
            <span>Who pays for return shipping?</span>
            <i class="bi bi-chevron-down"></i>
          </button>
          <div class="returns__faq-answer">
            <p>If the return is due to our error (wrong item, defective, damaged), we'll cover the shipping cost. For other returns, the cost will be deducted from your refund.</p>
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="returns__faq-item">
          <button class="returns__faq-question" onclick="toggleReturnFAQ(this)">
            <span>How will I receive my refund?</span>
            <i class="bi bi-chevron-down"></i>
          </button>
          <div class="returns__faq-answer">
            <p>Refunds are issued to your original payment method. For cash on delivery orders, we'll need your bank details to process the refund.</p>
          </div>
        </div>

        <!-- FAQ 4 -->
        <div class="returns__faq-item">
          <button class="returns__faq-question" onclick="toggleReturnFAQ(this)">
            <span>Can I exchange an item instead of returning it?</span>
            <i class="bi bi-chevron-down"></i>
          </button>
          <div class="returns__faq-answer">
            <p>Yes, we offer exchanges for size, color, or similar items. Contact our support team to arrange an exchange. We'll ship the new item once the return is processed.</p>
          </div>
        </div>

        <!-- FAQ 5 -->
        <div class="returns__faq-item">
          <button class="returns__faq-question" onclick="toggleReturnFAQ(this)">
            <span>What if I received a damaged item?</span>
            <i class="bi bi-chevron-down"></i>
          </button>
          <div class="returns__faq-answer">
            <p>We're sorry to hear that! Please contact us within 48 hours of delivery with photos of the damage. We'll arrange a replacement or refund immediately.</p>
          </div>
        </div>

        <!-- FAQ 6 -->
        <div class="returns__faq-item">
          <button class="returns__faq-question" onclick="toggleReturnFAQ(this)">
            <span>How do I track my return status?</span>
            <i class="bi bi-chevron-down"></i>
          </button>
          <div class="returns__faq-answer">
            <p>Contact our support team with your order number and return authorization number to check the status of your return.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Support -->
    <section class="returns__support">
      <div class="returns__support-content">
        <h2 class="returns__support-title">Need Help With Your Return?</h2>
        <p class="returns__support-text">Our customer service team is here to assist you with any questions or issues.</p>
        <div class="returns__support-buttons">
          <a href="contact" class="returns__support-btn returns__support-btn--primary">
            <i class="bi bi-envelope"></i> Email Us
          </a>
          <a href="tel:+2347006000000" class="returns__support-btn returns__support-btn--outline">
            <i class="bi bi-telephone"></i> Call Us
          </a>
        </div>
        <p class="returns__support-hours">Available Monday-Friday, 8am-8pm</p>
      </div>
    </section>
  </div>
</main>

<script>
function toggleReturnFAQ(element) {
  const faqItem = element.closest('.returns__faq-item');
  faqItem.classList.toggle('active');
}
</script>

<?php include __DIR__ . "/partials/footer.php"; ?>