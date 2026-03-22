<?php
require_once __DIR__ . "/partials/header.php";
?>
<link rel="stylesheet" href="<?= $css ?>faq.css?v=<?= filemtime($css.'faq.css') ?>">

<main class="faq-page">
  <div class="faq__container">
    <!-- Breadcrumb -->
    <div class="faq__breadcrumb">
      <a href="index.php">Home</a>
      <i class="bi bi-chevron-right"></i>
      <span>FAQ</span>
    </div>

    <!-- Page Header -->
    <div class="faq__header">
      <h1 class="faq__title">Frequently Asked Questions</h1>
      <p class="faq__subtitle">Find answers to common questions about our products, shipping, returns, and more.</p>
    </div>

    <!-- Search Bar -->
    <div class="faq__search">
      <div class="faq__search-group">
        <i class="bi bi-search"></i>
        <input type="text" class="faq__search-input" id="faqSearch" placeholder="Search for questions..." onkeyup="searchFAQ()">
      </div>
    </div>

    <!-- FAQ Categories -->
    <div class="faq__categories">
      <button class="faq__category-btn active" onclick="filterCategory('all')">All Questions</button>
      <button class="faq__category-btn" onclick="filterCategory('orders')">Orders</button>
      <button class="faq__category-btn" onclick="filterCategory('shipping')">Shipping</button>
      <button class="faq__category-btn" onclick="filterCategory('returns')">Returns & Refunds</button>
      <button class="faq__category-btn" onclick="filterCategory('payment')">Payment</button>
      <button class="faq__category-btn" onclick="filterCategory('products')">Products</button>
      <button class="faq__category-btn" onclick="filterCategory('account')">Account</button>
    </div>

    <!-- FAQ Grid -->
    <div class="faq__grid">
      <!-- Orders Category -->
      <div class="faq__category-section" data-category="orders">
        <h2 class="faq__category-title">Orders</h2>
        
        <div class="faq__accordion">
          <!-- FAQ Item 1 -->
          <div class="faq__item">
            <button class="faq__question" onclick="toggleFAQ(this)">
              <span class="faq__question-text">How do I place an order?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="faq__answer">
              <p>Placing an order is easy! Simply browse our products, add items to your cart, and proceed to checkout. You'll need to provide your shipping information and payment details. Once your order is confirmed, you'll receive an email with the order details.</p>
            </div>
          </div>

          <!-- FAQ Item 2 -->
          <div class="faq__item">
            <button class="faq__question" onclick="toggleFAQ(this)">
              <span class="faq__question-text">Can I modify or cancel my order after placing it?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="faq__answer">
              <p>You can modify or cancel your order within 1 hour of placing it. After that, the order enters our processing system and cannot be changed. Contact our customer support immediately if you need to make changes.</p>
            </div>
          </div>

          <!-- FAQ Item 3 -->
          <div class="faq__item">
            <button class="faq__question" onclick="toggleFAQ(this)">
              <span class="faq__question-text">How will I know when my order is confirmed?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="faq__answer">
              <p>You'll receive a confirmation email within minutes of placing your order. If you don't see it in your inbox, check your spam folder. You can also view your order status in your account dashboard.</p>
            </div>
          </div>

          <!-- FAQ Item 4 -->
          <div class="faq__item">
            <button class="faq__question" onclick="toggleFAQ(this)">
              <span class="faq__question-text">Do you offer bulk or wholesale orders?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="faq__answer">
              <p>Yes, we offer bulk discounts for business and wholesale customers. Please contact our sales team at sales@ecomart.com for custom pricing and quotes.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Shipping Category -->
      <div class="faq__category-section" data-category="shipping">
        <h2 class="faq__category-title">Shipping</h2>
        
        <div class="faq__accordion">
          <!-- FAQ Item 5 -->
          <div class="faq__item">
            <button class="faq__question" onclick="toggleFAQ(this)">
              <span class="faq__question-text">How much does shipping cost?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="faq__answer">
              <p>Shipping costs depend on your location and the size of your order. Standard shipping starts at ₦2,500. Orders over ₦50,000 qualify for free shipping within Lagos. You'll see the exact shipping cost at checkout before payment.</p>
            </div>
          </div>

          <!-- FAQ Item 6 -->
          <div class="faq__item">
            <button class="faq__question" onclick="toggleFAQ(this)">
              <span class="faq__question-text">How long does delivery take?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="faq__answer">
              <p>Delivery times vary by location:
                <br>- Lagos: 1-2 business days
                <br>- Other states: 3-5 business days
                <br>- Remote areas: 5-7 business days
                <br>You'll receive tracking information once your order ships.</p>
            </div>
          </div>

          <!-- FAQ Item 7 -->
          <div class="faq__item">
            <button class="faq__question" onclick="toggleFAQ(this)">
              <span class="faq__question-text">Do you ship internationally?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="faq__answer">
              <p>Currently, we only ship within Nigeria. We're working on expanding to other African countries soon. Sign up for our newsletter to be notified when international shipping becomes available.</p>
            </div>
          </div>

          <!-- FAQ Item 8 -->
          <div class="faq__item">
            <button class="faq__question" onclick="toggleFAQ(this)">
              <span class="faq__question-text">Can I track my order?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="faq__answer">
              <p>Yes! Once your order ships, you'll receive a tracking number via email and SMS. You can also track your order in real-time from your account dashboard or our track order page.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Returns & Refunds Category -->
      <div class="faq__category-section" data-category="returns">
        <h2 class="faq__category-title">Returns & Refunds</h2>
        
        <div class="faq__accordion">
          <!-- FAQ Item 9 -->
          <div class="faq__item">
            <button class="faq__question" onclick="toggleFAQ(this)">
              <span class="faq__question-text">What is your return policy?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="faq__answer">
              <p>We offer a 30-day return policy for most items. Products must be unused, in original packaging, and in resellable condition. Some items like personal care products cannot be returned for hygiene reasons.</p>
            </div>
          </div>

          <!-- FAQ Item 10 -->
          <div class="faq__item">
            <button class="faq__question" onclick="toggleFAQ(this)">
              <span class="faq__question-text">How do I initiate a return?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="faq__answer">
              <p>To start a return, log into your account, go to your orders, and select "Return Item". Follow the instructions to print a return label. You can also contact our customer support for assistance with returns.</p>
            </div>
          </div>

          <!-- FAQ Item 11 -->
          <div class="faq__item">
            <button class="faq__question" onclick="toggleFAQ(this)">
              <span class="faq__question-text">How long do refunds take?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="faq__answer">
              <p>Once we receive and inspect your return, refunds are processed within 3-5 business days. The money will be returned to your original payment method. Your bank may take additional time to reflect the refund.</p>
            </div>
          </div>

          <!-- FAQ Item 12 -->
          <div class="faq__item">
            <button class="faq__question" onclick="toggleFAQ(this)">
              <span class="faq__question-text">What if I receive a damaged or wrong item?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="faq__answer">
              <p>We're sorry to hear that! Please contact us within 48 hours of delivery with photos of the damaged item or packaging. We'll arrange a replacement or refund immediately.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Payment Category -->
      <div class="faq__category-section" data-category="payment">
        <h2 class="faq__category-title">Payment</h2>
        
        <div class="faq__accordion">
          <!-- FAQ Item 13 -->
          <div class="faq__item">
            <button class="faq__question" onclick="toggleFAQ(this)">
              <span class="faq__question-text">What payment methods do you accept?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="faq__answer">
              <p>We accept:
                <br>- Credit/Debit Cards (Visa, Mastercard, Verve)
                <br>- Bank Transfer
                <br>- USSD
                <br>- PayAttitude
                <br>- Cash on Delivery (selected areas)</p>
            </div>
          </div>

          <!-- FAQ Item 14 -->
          <div class="faq__item">
            <button class="faq__question" onclick="toggleFAQ(this)">
              <span class="faq__question-text">Is it safe to use my credit card on your site?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="faq__answer">
              <p>Absolutely! We use industry-standard SSL encryption to protect your data. We are PCI-DSS compliant and never store your full card details on our servers.</p>
            </div>
          </div>

          <!-- FAQ Item 15 -->
          <div class="faq__item">
            <button class="faq__question" onclick="toggleFAQ(this)">
              <span class="faq__question-text">Do you offer payment plans?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="faq__answer">
              <p>Yes, we partner with PayLater and Carbon to offer installment payments on eligible purchases. Select "Pay in installments" at checkout to see available options.</p>
            </div>
          </div>

          <!-- FAQ Item 16 -->
          <div class="faq__item">
            <button class="faq__question" onclick="toggleFAQ(this)">
              <span class="faq__question-text">Can I use multiple payment methods?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="faq__answer">
              <p>Currently, we only accept one payment method per order. However, you can combine gift cards with another payment method for your purchase.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Products Category -->
      <div class="faq__category-section" data-category="products">
        <h2 class="faq__category-title">Products</h2>
        
        <div class="faq__accordion">
          <!-- FAQ Item 17 -->
          <div class="faq__item">
            <button class="faq__question" onclick="toggleFAQ(this)">
              <span class="faq__question-text">Are your products authentic?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="faq__answer">
              <p>Yes! We source all products directly from manufacturers or authorized distributors. Every item comes with a manufacturer's warranty where applicable.</p>
            </div>
          </div>

          <!-- FAQ Item 18 -->
          <div class="faq__item">
            <button class="faq__question" onclick="toggleFAQ(this)">
              <span class="faq__question-text">Do you offer product warranties?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="faq__answer">
              <p>Most electronics and appliances come with a 1-year manufacturer's warranty. Check individual product pages for specific warranty information. Extended warranty options are available at checkout.</p>
            </div>
          </div>

          <!-- FAQ Item 19 -->
          <div class="faq__item">
            <button class="faq__question" onclick="toggleFAQ(this)">
              <span class="faq__question-text">How do I know which size to buy?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="faq__answer">
              <p>Each product page includes a detailed size chart. For clothing, we recommend measuring yourself and comparing with our size guide. Contact customer support if you need help with sizing.</p>
            </div>
          </div>

          <!-- FAQ Item 20 -->
          <div class="faq__item">
            <button class="faq__question" onclick="toggleFAQ(this)">
              <span class="faq__question-text">Can I request a product you don't have?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="faq__answer">
              <p>Absolutely! We love hearing from our customers. Use our "Request a Product" form or email us with your suggestions. We'll do our best to source it for you.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Account Category -->
      <div class="faq__category-section" data-category="account">
        <h2 class="faq__category-title">Account</h2>
        
        <div class="faq__accordion">
          <!-- FAQ Item 21 -->
          <div class="faq__item">
            <button class="faq__question" onclick="toggleFAQ(this)">
              <span class="faq__question-text">How do I create an account?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="faq__answer">
              <p>Click on "Account" at the top of the page and select "Sign Up". You can register using your email address or social media accounts. It takes less than a minute!</p>
            </div>
          </div>

          <!-- FAQ Item 22 -->
          <div class="faq__item">
            <button class="faq__question" onclick="toggleFAQ(this)">
              <span class="faq__question-text">I forgot my password. What should I do?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="faq__answer">
              <p>Click on "Forgot Password" on the login page. Enter your email address and we'll send you a link to reset your password. The link expires in 24 hours.</p>
            </div>
          </div>

          <!-- FAQ Item 23 -->
          <div class="faq__item">
            <button class="faq__question" onclick="toggleFAQ(this)">
              <span class="faq__question-text">How do I update my account information?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="faq__answer">
              <p>Log into your account and go to "Account Settings". From there, you can update your personal information, change your password, and manage your address book.</p>
            </div>
          </div>

          <!-- FAQ Item 24 -->
          <div class="faq__item">
            <button class="faq__question" onclick="toggleFAQ(this)">
              <span class="faq__question-text">Can I delete my account?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="faq__answer">
              <p>Yes, you can delete your account from your account settings. Note that this action is permanent and cannot be undone. You'll lose your order history and saved information.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Still Have Questions -->
    <section class="faq__contact">
      <div class="faq__contact-content">
        <h2 class="faq__contact-title">Still Have Questions?</h2>
        <p class="faq__contact-text">Can't find the answer you're looking for? Please contact our friendly team.</p>
        <div class="faq__contact-buttons">
          <a href="contact.php" class="faq__contact-btn faq__contact-btn--primary">
            <i class="bi bi-envelope"></i> Contact Us
          </a>
          <a href="tel:+2347006000000" class="faq__contact-btn faq__contact-btn--outline">
            <i class="bi bi-telephone"></i> Call Us
          </a>
        </div>
        <p class="faq__contact-hours">Monday - Friday: 8am - 8pm | Saturday: 9am - 5pm</p>
      </div>
    </section>
  </div>
</main>

<script>
// Toggle FAQ accordion
function toggleFAQ(element) {
  const faqItem = element.closest('.faq__item');
  const isActive = faqItem.classList.contains('active');
  
  // Close all other items
  document.querySelectorAll('.faq__item').forEach(item => {
    item.classList.remove('active');
  });
  
  // Open current item if it wasn't active
  if (!isActive) {
    faqItem.classList.add('active');
  }
}

// Filter by category
function filterCategory(category) {
  // Update active button
  document.querySelectorAll('.faq__category-btn').forEach(btn => {
    btn.classList.remove('active');
  });
  event.target.classList.add('active');
  
  // Show/hide sections
  if (category === 'all') {
    document.querySelectorAll('.faq__category-section').forEach(section => {
      section.style.display = 'block';
    });
  } else {
    document.querySelectorAll('.faq__category-section').forEach(section => {
      if (section.dataset.category === category) {
        section.style.display = 'block';
      } else {
        section.style.display = 'none';
      }
    });
  }
}

// Search functionality
function searchFAQ() {
  const searchTerm = document.getElementById('faqSearch').value.toLowerCase();
  const faqItems = document.querySelectorAll('.faq__item');
  let hasResults = false;
  
  faqItems.forEach(item => {
    const question = item.querySelector('.faq__question-text').textContent.toLowerCase();
    const answer = item.querySelector('.faq__answer p').textContent.toLowerCase();
    
    if (question.includes(searchTerm) || answer.includes(searchTerm)) {
      item.style.display = 'block';
      hasResults = true;
    } else {
      item.style.display = 'none';
    }
  });
  
  // Show/hide category sections based on visible items
  document.querySelectorAll('.faq__category-section').forEach(section => {
    const visibleItems = section.querySelectorAll('.faq__item[style="display: block;"]').length;
    if (visibleItems > 0) {
      section.style.display = 'block';
    } else {
      section.style.display = 'none';
    }
  });
  
  // Show "no results" message if needed
  let noResults = document.querySelector('.faq__no-results');
  if (!hasResults && searchTerm !== '') {
    if (!noResults) {
      noResults = document.createElement('div');
      noResults.className = 'faq__no-results';
      noResults.innerHTML = '<p>No questions found matching your search. Please try different keywords.</p>';
      document.querySelector('.faq__grid').appendChild(noResults);
    }
  } else if (noResults) {
    noResults.remove();
  }
}

// Clear search when clicking category buttons
document.querySelectorAll('.faq__category-btn').forEach(btn => {
  btn.addEventListener('click', function() {
    document.getElementById('faqSearch').value = '';
    const noResults = document.querySelector('.faq__no-results');
    if (noResults) noResults.remove();
  });
});
</script>

<?php include __DIR__ . "/partials/footer.php"; ?>