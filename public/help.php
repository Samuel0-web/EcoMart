<?php
require_once __DIR__ . "/partials/header.php";
?>
<link rel="stylesheet" href="<?= $css ?>help.css?v=<?= filemtime($css.'help.css') ?>">

<main class="help-page">
  <div class="help__container">
    <!-- Breadcrumb -->
    <div class="help__breadcrumb">
      <a href="home">Home</a>
      <i class="bi bi-chevron-right"></i>
      <span>Help Center</span>
    </div>

    <!-- Hero Section -->
    <section class="help__hero">
      <h1 class="help__hero-title">How can we help you?</h1>
      <div class="help__search">
        <div class="help__search-group">
          <i class="bi bi-search"></i>
          <input type="text" class="help__search-input" placeholder="Search for answers..." id="helpSearch">
          <button class="help__search-btn">Search</button>
        </div>
      </div>
      <p class="help__hero-text">Browse common topics or search for specific questions</p>
    </section>

    <!-- Quick Help Categories -->
    <section class="help__categories">
      <h2 class="help__section-title">What do you need help with?</h2>
      <div class="help__categories-grid">
        <a href="#orders" class="help__category-card" data-category="orders">
          <div class="help__category-icon">
            <i class="bi bi-box-seam"></i>
          </div>
          <h3 class="help__category-title">Orders</h3>
          <p class="help__category-text">Track, modify, or cancel orders</p>
        </a>
        <a href="#shipping" class="help__category-card" data-category="shipping">
          <div class="help__category-icon">
            <i class="bi bi-truck"></i>
          </div>
          <h3 class="help__category-title">Shipping & Delivery</h3>
          <p class="help__category-text">Delivery times, costs, and tracking</p>
        </a>
        <a href="#returns" class="help__category-card" data-category="returns">
          <div class="help__category-icon">
            <i class="bi bi-arrow-repeat"></i>
          </div>
          <h3 class="help__category-title">Returns & Refunds</h3>
          <p class="help__category-text">Return policy and refund process</p>
        </a>
        <a href="#payment" class="help__category-card" data-category="payment">
          <div class="help__category-icon">
            <i class="bi bi-credit-card"></i>
          </div>
          <h3 class="help__category-title">Payments</h3>
          <p class="help__category-text">Payment methods and billing</p>
        </a>
        <a href="#account" class="help__category-card" data-category="account">
          <div class="help__category-icon">
            <i class="bi bi-person"></i>
          </div>
          <h3 class="help__category-title">Account</h3>
          <p class="help__category-text">Login, password, and settings</p>
        </a>
        <a href="#products" class="help__category-card" data-category="products">
          <div class="help__category-icon">
            <i class="bi bi-tag"></i>
          </div>
          <h3 class="help__category-title">Products</h3>
          <p class="help__category-text">Product info and warranties</p>
        </a>
        <a href="#technical" class="help__category-card" data-category="technical">
          <div class="help__category-icon">
            <i class="bi bi-gear"></i>
          </div>
          <h3 class="help__category-title">Technical Support</h3>
          <p class="help__category-text">Website and app issues</p>
        </a>
        <a href="#security" class="help__category-card" data-category="security">
          <div class="help__category-icon">
            <i class="bi bi-shield-check"></i>
          </div>
          <h3 class="help__category-title">Security</h3>
          <p class="help__category-text">Privacy and account security</p>
        </a>
      </div>
    </section>

    <!-- Popular Topics -->
    <section class="help__popular">
      <h2 class="help__section-title">Popular Topics</h2>
      <div class="help__popular-grid">
        <a href="faq#track-order" class="help__popular-card">
          <i class="bi bi-box-arrow-up-right"></i>
          <span>How to track my order?</span>
        </a>
        <a href="faq#return-policy" class="help__popular-card">
          <i class="bi bi-box-arrow-up-right"></i>
          <span>Return policy explained</span>
        </a>
        <a href="faq#shipping-times" class="help__popular-card">
          <i class="bi bi-box-arrow-up-right"></i>
          <span>Shipping times to my location</span>
        </a>
        <a href="faq#payment-methods" class="help__popular-card">
          <i class="bi bi-box-arrow-up-right"></i>
          <span>Accepted payment methods</span>
        </a>
        <a href="faq#reset-password" class="help__popular-card">
          <i class="bi bi-box-arrow-up-right"></i>
          <span>How to reset my password?</span>
        </a>
        <a href="faq#change-address" class="help__popular-card">
          <i class="bi bi-box-arrow-up-right"></i>
          <span>Change delivery address</span>
        </a>
      </div>
    </section>

    <!-- Help Topics by Category (Hidden by default, shown when category clicked) -->
    <section class="help__topics" id="helpTopics" style="display: none;">
      <div class="help__topics-header">
        <button class="help__back-btn" onclick="hideTopics()">
          <i class="bi bi-arrow-left"></i> Back to Categories
        </button>
        <h2 class="help__topics-title" id="topicsTitle">Help Topics</h2>
      </div>

      <!-- Orders Topics -->
      <div class="help__topic-category" id="topics-orders" style="display: none;">
        <div class="help__topic-list">
          <div class="help__topic-item">
            <button class="help__topic-question" onclick="toggleTopic(this)">
              <span>How do I track my order?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="help__topic-answer">
              <p>You can track your order in two ways:</p>
              <ul>
                <li>Log into your account and go to "My Orders" section</li>
                <li>Use the tracking number from your email on our <a href="track-order">Track Order</a> page</li>
              </ul>
              <p>You'll receive SMS updates at key delivery milestones.</p>
            </div>
          </div>
          <div class="help__topic-item">
            <button class="help__topic-question" onclick="toggleTopic(this)">
              <span>Can I modify or cancel my order?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="help__topic-answer">
              <p>You can modify or cancel your order within 1 hour of placing it. After that, the order enters processing and cannot be changed. Contact our support team immediately for assistance.</p>
            </div>
          </div>
          <div class="help__topic-item">
            <button class="help__topic-question" onclick="toggleTopic(this)">
              <span>What should I do if an item is missing from my order?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="help__topic-answer">
              <p>If an item is missing, please contact us within 48 hours of delivery. We'll investigate and arrange for the missing item to be shipped or issue a refund.</p>
            </div>
          </div>
          <div class="help__topic-item">
            <button class="help__topic-question" onclick="toggleTopic(this)">
              <span>How do I know if my order was successful?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="help__topic-answer">
              <p>You'll receive a confirmation email within minutes of placing your order. You can also check your order status in your account dashboard.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Shipping Topics -->
      <div class="help__topic-category" id="topics-shipping" style="display: none;">
        <div class="help__topic-list">
          <div class="help__topic-item">
            <button class="help__topic-question" onclick="toggleTopic(this)">
              <span>How much does shipping cost?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="help__topic-answer">
              <p>Shipping costs vary by location:</p>
              <ul>
                <li>Lagos: ₦2,500 standard, ₦5,000 express</li>
                <li>Other states: ₦3,500 standard, ₦6,500 express</li>
                <li>Free standard shipping on orders over ₦50,000</li>
              </ul>
            </div>
          </div>
          <div class="help__topic-item">
            <button class="help__topic-question" onclick="toggleTopic(this)">
              <span>How long will my order take to arrive?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="help__topic-answer">
              <p>Delivery times depend on your location:</p>
              <ul>
                <li>Lagos: 1-2 business days</li>
                <li>Major cities: 2-3 business days</li>
                <li>Other areas: 3-5 business days</li>
              </ul>
            </div>
          </div>
          <div class="help__topic-item">
            <button class="help__topic-question" onclick="toggleTopic(this)">
              <span>Do you ship to my location?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="help__topic-answer">
              <p>We ship to all 36 states in Nigeria! Enter your address at checkout to confirm delivery availability in your specific area.</p>
            </div>
          </div>
          <div class="help__topic-item">
            <button class="help__topic-question" onclick="toggleTopic(this)">
              <span>What happens if I'm not home for delivery?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="help__topic-answer">
              <p>Our delivery partner will attempt delivery twice. If both attempts fail, the package will be held at a nearby pickup center for 7 days. After that, it will be returned to us.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Returns Topics -->
      <div class="help__topic-category" id="topics-returns" style="display: none;">
        <div class="help__topic-list">
          <div class="help__topic-item">
            <button class="help__topic-question" onclick="toggleTopic(this)">
              <span>What is your return policy?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="help__topic-answer">
              <p>We offer a 30-day return policy for most items. Products must be unused, in original packaging, and in resellable condition. Some items like personal care products cannot be returned for hygiene reasons.</p>
            </div>
          </div>
          <div class="help__topic-item">
            <button class="help__topic-question" onclick="toggleTopic(this)">
              <span>How do I initiate a return?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="help__topic-answer">
              <p>To initiate a return, contact our support team at returns@ecomart.com or call +234 809 876 5432. Provide your order number and reason for return, and we'll guide you through the process.</p>
            </div>
          </div>
          <div class="help__topic-item">
            <button class="help__topic-question" onclick="toggleTopic(this)">
              <span>How long do refunds take?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="help__topic-answer">
              <p>Once we receive and inspect your return, refunds are processed within 3-5 business days. Your bank may take additional 2-5 business days to reflect the refund.</p>
            </div>
          </div>
          <div class="help__topic-item">
            <button class="help__topic-question" onclick="toggleTopic(this)">
              <span>What if I received a damaged item?</span>
              <i class="bi bi-chevron-down"></i>
            </button>
            <div class="help__topic-answer">
              <p>We're sorry to hear that! Please contact us within 48 hours of delivery with photos of the damage. We'll arrange a replacement or refund immediately.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- More categories would follow similar pattern -->
    </section>

    <!-- Featured Guides -->
    <section class="help__guides">
      <h2 class="help__section-title">Featured Guides</h2>
      <div class="help__guides-grid">
        <div class="help__guide-card">
          <div class="help__guide-icon">
            <i class="bi bi-file-text"></i>
          </div>
          <div class="help__guide-content">
            <h3 class="help__guide-title">Complete Guide to Returns</h3>
            <p class="help__guide-text">Everything you need to know about returning items</p>
            <a href="returns" class="help__guide-link">Read Guide <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <div class="help__guide-card">
          <div class="help__guide-icon">
            <i class="bi bi-truck"></i>
          </div>
          <div class="help__guide-content">
            <h3 class="help__guide-title">Shipping Explained</h3>
            <p class="help__guide-text">Delivery times, costs, and tracking</p>
            <a href="shipping" class="help__guide-link">Read Guide <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <div class="help__guide-card">
          <div class="help__guide-icon">
            <i class="bi bi-credit-card"></i>
          </div>
          <div class="help__guide-content">
            <h3 class="help__guide-title">Payment Methods</h3>
            <p class="help__guide-text">All payment options explained</p>
            <a href="faq#payment" class="help__guide-link">Read Guide <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Options -->
    <section class="help__contact">
      <h2 class="help__section-title">Still Need Help?</h2>
      <div class="help__contact-grid">
        <div class="help__contact-card">
          <div class="help__contact-icon">
            <i class="bi bi-envelope"></i>
          </div>
          <h3 class="help__contact-title">Email Us</h3>
          <p class="help__contact-text">Get a response within 24 hours</p>
          <a href="contact" class="help__contact-link">Send Email</a>
        </div>
        <div class="help__contact-card">
          <div class="help__contact-icon">
            <i class="bi bi-telephone"></i>
          </div>
          <h3 class="help__contact-title">Call Us</h3>
          <p class="help__contact-text">Mon-Fri, 8am-8pm</p>
          <a href="tel:+2347006000000" class="help__contact-link">+234 700 600 0000</a>
        </div>
        <div class="help__contact-card">
          <div class="help__contact-icon">
            <i class="bi bi-chat-dots"></i>
          </div>
          <h3 class="help__contact-title">Live Chat</h3>
          <p class="help__contact-text">Chat with us now</p>
          <button class="help__contact-link help__contact-link--btn" onclick="startLiveChat()">Start Chat</button>
        </div>
        <div class="help__contact-card">
          <div class="help__contact-icon">
            <i class="bi bi-whatsapp"></i>
          </div>
          <h3 class="help__contact-title">WhatsApp</h3>
          <p class="help__contact-text">Message us anytime</p>
          <a href="https://wa.me/2347006000000" class="help__contact-link" target="_blank">Chat on WhatsApp</a>
        </div>
      </div>
    </section>

    <!-- Help Footer -->
    <section class="help__footer">
      <div class="help__footer-content">
        <h2 class="help__footer-title">Visit Our FAQ</h2>
        <p class="help__footer-text">Find answers to frequently asked questions</p>
        <a href="faq" class="help__footer-btn">Browse FAQ <i class="bi bi-arrow-right"></i></a>
      </div>
    </section>
  </div>
</main>

<script>
// Toggle topic accordion
function toggleTopic(element) {
  const topicItem = element.closest('.help__topic-item');
  topicItem.classList.toggle('active');
}

// Show topics for selected category
function showTopics(category) {
  // Hide categories section
  document.querySelector('.help__categories').style.display = 'none';
  document.querySelector('.help__popular').style.display = 'none';
  document.querySelector('.help__guides').style.display = 'none';
  
  // Show topics section
  const topicsSection = document.getElementById('helpTopics');
  topicsSection.style.display = 'block';
  
  // Hide all topic categories
  document.querySelectorAll('.help__topic-category').forEach(cat => {
    cat.style.display = 'none';
  });
  
  // Show selected category
  const selectedCategory = document.getElementById(`topics-${category}`);
  if (selectedCategory) {
    selectedCategory.style.display = 'block';
  }
  
  // Update title
  const titles = {
    'orders': 'Orders Help',
    'shipping': 'Shipping & Delivery Help',
    'returns': 'Returns & Refunds Help',
    'payment': 'Payments Help',
    'account': 'Account Help',
    'products': 'Products Help',
    'technical': 'Technical Support Help',
    'security': 'Security Help'
  };
  document.getElementById('topicsTitle').textContent = titles[category] || 'Help Topics';
  
  // Scroll to topics
  topicsSection.scrollIntoView({ behavior: 'smooth' });
}

// Hide topics and show categories
function hideTopics() {
  document.querySelector('.help__categories').style.display = 'block';
  document.querySelector('.help__popular').style.display = 'block';
  document.querySelector('.help__guides').style.display = 'block';
  document.getElementById('helpTopics').style.display = 'none';
}

// Add click handlers to category cards
document.querySelectorAll('.help__category-card').forEach(card => {
  card.addEventListener('click', (e) => {
    e.preventDefault();
    const category = card.dataset.category;
    if (category) {
      showTopics(category);
    }
  });
});

// Search functionality
document.querySelector('.help__search-btn').addEventListener('click', function() {
  const searchTerm = document.getElementById('helpSearch').value.toLowerCase().trim();
  
  if (searchTerm === '') {
    alert('Please enter a search term');
    return;
  }
  
  // Simple search simulation
  const results = {
        'track': 'orders',
        'order': 'orders',
        'ship': 'shipping',
        'delivery': 'shipping',
        'return': 'returns',
        'refund': 'returns',
        'pay': 'payment',
        'card': 'payment',
        'account': 'account',
        'password': 'account',
        'product': 'products',
        'warranty': 'products',
        'technical': 'technical',
        'website': 'technical',
        'security': 'security',
        'privacy': 'security'
  };
  
  let found = false;
  for (let [key, value] of Object.entries(results)) {
    if (searchTerm.includes(key)) {
      showTopics(value);
      found = true;
      break;
    }
  }
  
  if (!found) {
    alert(`No results found for "${searchTerm}". Please try different keywords or contact support.`);
  }
});

// Allow enter key in search
document.getElementById('helpSearch').addEventListener('keypress', function(e) {
  if (e.key === 'Enter') {
    document.querySelector('.help__search-btn').click();
  }
});

// Live chat function
function startLiveChat() {
  alert('Live chat would open here. Our team is online and ready to help!');
}

// Handle URL parameters
document.addEventListener('DOMContentLoaded', function() {
  const urlParams = new URLSearchParams(window.location.search);
  const category = urlParams.get('category');
  
  if (category && ['orders', 'shipping', 'returns', 'payment', 'account', 'products', 'technical', 'security'].includes(category)) {
    showTopics(category);
  }
});
</script>

<?php include __DIR__ . "/partials/footer.php"; ?>