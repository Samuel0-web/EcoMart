<?php
require_once __DIR__ . "/partials/header.php";
?>
<link rel="stylesheet" href="<?= $css ?>order-confirmation.css?v=<?= filemtime($css.'order-confirmation.css') ?>">

<main class="confirmation-page">
  <div class="confirmation__container">
    <!-- Success Animation & Header -->
    <div class="confirmation__header">
      <div class="confirmation__success-icon">
        <i class="bi bi-check-circle-fill"></i>
      </div>
      <h1 class="confirmation__title">Thank You for Your Order!</h1>
      <p class="confirmation__subtitle">Your order has been placed successfully</p>
    </div>

    <!-- Order Info Card -->
    <div class="confirmation__card">
      <div class="confirmation__card-header">
        <h2>Order Information</h2>
        <span class="confirmation__order-status">Processing</span>
      </div>

      <div class="confirmation__order-details">
        <div class="confirmation__detail-item">
          <span class="confirmation__detail-label">Order Number:</span>
          <span class="confirmation__detail-value confirmation__order-number">#ORD-2024-0042</span>
        </div>
        <div class="confirmation__detail-item">
          <span class="confirmation__detail-label">Order Date:</span>
          <span class="confirmation__detail-value">March 17, 2024</span>
        </div>
        <div class="confirmation__detail-item">
          <span class="confirmation__detail-label">Payment Method:</span>
          <span class="confirmation__detail-value">
            <i class="bi bi-credit-card"></i> Credit Card (•••• 4242)
          </span>
        </div>
        <div class="confirmation__detail-item">
          <span class="confirmation__detail-label">Estimated Delivery:</span>
          <span class="confirmation__detail-value confirmation__delivery-date">March 20-22, 2024</span>
        </div>
      </div>
    </div>

    <!-- Order Summary Grid -->
    <div class="confirmation__grid">
      <!-- Shipping Address -->
      <div class="confirmation__card">
        <div class="confirmation__card-header">
          <h2><i class="bi bi-truck"></i> Shipping Address</h2>
        </div>
        <div class="confirmation__address">
          <p class="confirmation__address-name">John Doe</p>
          <p class="confirmation__address-details">
            123 Main Street, Apartment 4B<br>
            Lagos, LA 10001<br>
            Nigeria
          </p>
          <p class="confirmation__address-phone">+234 700 600 0000</p>
        </div>
      </div>

      <!-- Shipping Method -->
      <div class="confirmation__card">
        <div class="confirmation__card-header">
          <h2><i class="bi bi-box-seam"></i> Shipping Method</h2>
        </div>
        <div class="confirmation__shipping-info">
          <p class="confirmation__shipping-name">Express Shipping</p>
          <p class="confirmation__shipping-desc">1-2 business days</p>
          <p class="confirmation__shipping-price">₦12,990</p>
        </div>
      </div>

      <!-- Payment Summary -->
      <div class="confirmation__card">
        <div class="confirmation__card-header">
          <h2><i class="bi bi-credit-card"></i> Payment Summary</h2>
        </div>
        <div class="confirmation__payment-info">
          <div class="confirmation__payment-row">
            <span>Subtotal (3 items)</span>
            <span>₦254,960</span>
          </div>
          <div class="confirmation__payment-row">
            <span>Shipping</span>
            <span>₦12,990</span>
          </div>
          <div class="confirmation__payment-row">
            <span>Tax</span>
            <span>₦20,397</span>
          </div>
          <div class="confirmation__payment-row confirmation__payment-total">
            <span>Total</span>
            <span>₦288,347</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Order Items -->
    <div class="confirmation__card">
      <div class="confirmation__card-header">
        <h2>Order Items</h2>
        <a href="track-order?id=ORD-2024-0042" class="confirmation__track-link">
          Track Order <i class="bi bi-box-arrow-up-right"></i>
        </a>
      </div>

      <div class="confirmation__items">
        <!-- Item 1 -->
        <div class="confirmation__item">
          <div class="confirmation__item-image">
            <a href="product?id=1">
              <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?q=80&w=300&h=300&fit=crop" alt="Smart Watch Pro">
            </a>
          </div>
          <div class="confirmation__item-details">
            <a href="product?id=1" class="confirmation__item-name">Smart Watch Pro</a>
            <div class="confirmation__item-meta">
              <span>Color: Black</span>
              <span>Qty: 1</span>
            </div>
          </div>
          <div class="confirmation__item-price">₦89,990</div>
        </div>

        <!-- Item 2 -->
        <div class="confirmation__item">
          <div class="confirmation__item-image">
            <a href="product?id=2">
              <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=300&h=300&fit=crop" alt="Premium Headphones">
            </a>
          </div>
          <div class="confirmation__item-details">
            <a href="product?id=2" class="confirmation__item-name">Premium Headphones</a>
            <div class="confirmation__item-meta">
              <span>Color: Silver</span>
              <span>Qty: 2</span>
            </div>
          </div>
          <div class="confirmation__item-price">₦119,980</div>
        </div>

        <!-- Item 3 -->
        <div class="confirmation__item">
          <div class="confirmation__item-image">
            <a href="product?id=3">
              <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=300&h=300&fit=crop" alt="Fitness Tracker">
            </a>
          </div>
          <div class="confirmation__item-details">
            <a href="product?id=3" class="confirmation__item-name">Fitness Tracker</a>
            <div class="confirmation__item-meta">
              <span>Color: Blue</span>
              <span>Qty: 1</span>
            </div>
          </div>
          <div class="confirmation__item-price">₦44,990</div>
        </div>
      </div>
    </div>

    <!-- Action Buttons -->
    <div class="confirmation__actions">
      <a href="account?tab=orders#orders" class="confirmation__btn confirmation__btn--primary">
        <i class="bi bi-box-seam"></i> View My Orders
      </a>
      <a href="track-order?id=ORD-2024-0042" class="confirmation__btn confirmation__btn--secondary">
        <i class="bi bi-truck"></i> Track Order
      </a>
      <a href="shop" class="confirmation__btn confirmation__btn--outline">
        <i class="bi bi-shop"></i> Continue Shopping
      </a>
    </div>

    <!-- Email Confirmation Notice -->
    <div class="confirmation__email-notice">
      <i class="bi bi-envelope-check"></i>
      <p>We've sent a confirmation email to <strong>john.doe@example.com</strong></p>
    </div>

    <!-- Related Recommendations -->
    <section class="confirmation__recommendations">
      <h2 class="confirmation__recommendations-title">You Might Also Like</h2>
      <div class="confirmation__recommendations-grid">
        <!-- Recommendation 1 -->
        <div class="confirmation__rec-card">
          <div class="confirmation__rec-image">
            <a href="product?id=7">
              <img src="https://images.unsplash.com/photo-1606813909353-6c7a8b8e8cfa?q=80&w=300&h=300&fit=crop" alt="Gaming Console">
            </a>
          </div>
          <a href="product?id=7" class="confirmation__rec-name">Gaming Console</a>
          <div class="confirmation__rec-price">₦299,990</div>
          <button class="btn-cart" onclick="addToCart(7)">Add to Cart</button>
        </div>

        <!-- Recommendation 2 -->
        <div class="confirmation__rec-card">
          <div class="confirmation__rec-image">
            <a href="product?id=8">
              <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?q=80&w=300&h=300&fit=crop" alt="Instant Camera">
            </a>
          </div>
          <a href="product?id=8" class="confirmation__rec-name">Instant Camera</a>
          <div class="confirmation__rec-price">₦149,990</div>
          <button class="btn-cart" onclick="addToCart(8)">Add to Cart</button>
        </div>

        <!-- Recommendation 3 -->
        <div class="confirmation__rec-card">
          <div class="confirmation__rec-image">
            <a href="product?id=9">
              <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?q=80&w=300&h=300&fit=crop" alt="Designer Bag">
            </a>
          </div>
          <a href="product?id=9" class="confirmation__rec-name">Designer Bag</a>
          <div class="confirmation__rec-price">₦124,990</div>
          <button class="btn-cart" onclick="addToCart(9)">Add to Cart</button>
        </div>

        <!-- Recommendation 4 -->
        <div class="confirmation__rec-card">
          <div class="confirmation__rec-image">
            <a href="product?id=10">
              <img src="https://images.unsplash.com/photo-1484101403633-562f891dc89a?q=80&w=300&h=300&fit=crop" alt="Table Lamp">
            </a>
          </div>
          <a href="product?id=10" class="confirmation__rec-name">Table Lamp</a>
          <div class="confirmation__rec-price">₦42,990</div>
          <button class="btn-cart" onclick="addToCart(10)">Add to Cart</button>
        </div>
      </div>
    </section>
  </div>
</main>

<script>
// Add to cart function (reuse from other pages)
function addToCart(productId) {
  alert('Product added to cart!');
}

// Print confirmation
function printConfirmation() {
  window.print();
}

// Share order
function shareOrder() {
  if (navigator.share) {
    navigator.share({
      title: 'My Order from EcoMart',
      text: 'Order #ORD-2024-0042 has been placed successfully!',
      url: window.location.href,
    });
  } else {
    alert('Link copied to clipboard!');
  }
}

// Add animation on page load
document.addEventListener('DOMContentLoaded', function() {
  // Confetti effect (optional celebration)
  if (window.innerWidth > 768) {
    // Simple confetti simulation
    const icon = document.querySelector('.confirmation__success-icon');
    icon.style.transform = 'scale(1.2)';
    setTimeout(() => {
      icon.style.transform = 'scale(1)';
    }, 300);
  }
});
</script>

<?php include __DIR__ . "/partials/footer.php"; ?>