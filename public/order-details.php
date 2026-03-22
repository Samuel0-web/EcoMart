<?php
require_once __DIR__ . "/partials/header.php";
?>
<link rel="stylesheet" href="<?= $css ?>order-details.css?v=<?= filemtime($css.'order-details.css') ?>">

<main class="order-details-page">
  <div class="order-details__container">
    <!-- Breadcrumb -->
    <div class="order-details__breadcrumb">
      <a href="home">Home</a>
      <i class="bi bi-chevron-right"></i>
      <a href="account?tab=orders#orders">My Orders</a>
      <i class="bi bi-chevron-right"></i>
      <span>Order Details</span>
    </div>

    <!-- Page Header -->
    <div class="order-details__header">
      <div>
        <h1 class="order-details__title">Order Details</h1>
        <p class="order-details__subtitle">View and manage your order information</p>
      </div>
      <div class="order-details__header-actions">
        <span class="order-details__status-badge order-details__status-badge--delivered">Delivered</span>
        <button class="order-details__print-btn" onclick="window.print()">
          <i class="bi bi-printer"></i> Print
        </button>
      </div>
    </div>

    <!-- Order Summary Card -->
    <div class="order-details__card">
      <div class="order-details__card-header">
        <h2>Order Summary</h2>
        <a href="track-order?id=ORD-2024-0042" class="order-details__track-link">
          <i class="bi bi-truck"></i> Track Order
        </a>
      </div>

      <div class="order-details__summary-grid">
        <div class="order-details__summary-item">
          <span class="order-details__summary-label">Order Number</span>
          <span class="order-details__summary-value order-details__order-number">#ORD-2024-0042</span>
        </div>
        <div class="order-details__summary-item">
          <span class="order-details__summary-label">Order Date</span>
          <span class="order-details__summary-value">March 17, 2024 • 10:23 AM</span>
        </div>
        <div class="order-details__summary-item">
          <span class="order-details__summary-label">Payment Method</span>
          <span class="order-details__summary-value">
            <i class="bi bi-credit-card"></i> Credit Card (•••• 4242)
          </span>
        </div>
        <div class="order-details__summary-item">
          <span class="order-details__summary-label">Total Amount</span>
          <span class="order-details__summary-value order-details__total-amount">₦288,347</span>
        </div>
      </div>
    </div>

    <!-- Order Status Timeline -->
    <div class="order-details__card">
      <h2 class="order-details__card-header">Order Timeline</h2>
      
      <div class="order-details__timeline">
        <div class="order-details__timeline-step completed">
          <div class="order-details__timeline-icon">
            <i class="bi bi-check-circle-fill"></i>
          </div>
          <div class="order-details__timeline-content">
            <div class="order-details__timeline-header">
              <h3>Order Placed</h3>
              <span class="order-details__timeline-date">March 17, 2024 • 10:23 AM</span>
            </div>
            <p>Your order has been placed successfully.</p>
          </div>
        </div>

        <div class="order-details__timeline-step completed">
          <div class="order-details__timeline-icon">
            <i class="bi bi-check-circle-fill"></i>
          </div>
          <div class="order-details__timeline-content">
            <div class="order-details__timeline-header">
              <h3>Payment Confirmed</h3>
              <span class="order-details__timeline-date">March 17, 2024 • 11:45 AM</span>
            </div>
            <p>Payment has been verified and confirmed.</p>
          </div>
        </div>

        <div class="order-details__timeline-step completed">
          <div class="order-details__timeline-icon">
            <i class="bi bi-check-circle-fill"></i>
          </div>
          <div class="order-details__timeline-content">
            <div class="order-details__timeline-header">
              <h3>Order Processed</h3>
              <span class="order-details__timeline-date">March 18, 2024 • 09:30 AM</span>
            </div>
            <p>Your items have been processed and prepared for shipment.</p>
          </div>
        </div>

        <div class="order-details__timeline-step completed">
          <div class="order-details__timeline-icon">
            <i class="bi bi-check-circle-fill"></i>
          </div>
          <div class="order-details__timeline-content">
            <div class="order-details__timeline-header">
              <h3>Shipped</h3>
              <span class="order-details__timeline-date">March 19, 2024 • 02:15 PM</span>
            </div>
            <p>Your package has been shipped via EcoMart Logistics.</p>
            <div class="order-details__tracking-info">
              <span>Tracking Number:</span>
              <strong>ECM-7890-1234-5678</strong>
              <button class="order-details__copy-btn" onclick="copyTrackingNumber()">
                <i class="bi bi-files"></i>
              </button>
            </div>
          </div>
        </div>

        <div class="order-details__timeline-step active">
          <div class="order-details__timeline-icon">
            <i class="bi bi-truck"></i>
          </div>
          <div class="order-details__timeline-content">
            <div class="order-details__timeline-header">
              <h3>Out for Delivery</h3>
              <span class="order-details__timeline-date">March 20, 2024 • 08:30 AM</span>
            </div>
            <p>Your package is out for delivery and will arrive today.</p>
          </div>
        </div>

        <div class="order-details__timeline-step pending">
          <div class="order-details__timeline-icon">
            <i class="bi bi-check-circle"></i>
          </div>
          <div class="order-details__timeline-content">
            <div class="order-details__timeline-header">
              <h3>Delivered</h3>
              <span class="order-details__timeline-date">Expected today</span>
            </div>
            <p>Your package will be delivered to your address.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Order Items -->
    <div class="order-details__card">
      <h2 class="order-details__card-header">Order Items</h2>
      
      <div class="order-details__items">
        <!-- Item 1 -->
        <div class="order-details__item">
          <div class="order-details__item-image">
            <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?q=80&w=300&h=300&fit=crop" alt="Smart Watch Pro">
          </div>
          <div class="order-details__item-details">
            <a href="product?id=1" class="order-details__item-name">Smart Watch Pro</a>
            <div class="order-details__item-meta">
              <span>Color: Black</span>
              <span>Quantity: 1</span>
            </div>
            <div class="order-details__item-price">₦89,990</div>
          </div>
          <div class="order-details__item-actions">
            <button class="order-details__item-btn" onclick="buyAgain(1)">
              <i class="bi bi-cart-plus"></i> Buy Again
            </button>
            <a href="product?id=1" class="order-details__item-btn order-details__item-btn--outline">
              <i class="bi bi-eye"></i> View Product
            </a>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="order-details__item">
          <div class="order-details__item-image">
            <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=300&h=300&fit=crop" alt="Premium Headphones">
          </div>
          <div class="order-details__item-details">
            <a href="product?id=2" class="order-details__item-name">Premium Headphones</a>
            <div class="order-details__item-meta">
              <span>Color: Silver</span>
              <span>Quantity: 2</span>
            </div>
            <div class="order-details__item-price">₦119,980</div>
          </div>
          <div class="order-details__item-actions">
            <button class="order-details__item-btn" onclick="buyAgain(2)">
              <i class="bi bi-cart-plus"></i> Buy Again
            </button>
            <a href="product?id=2" class="order-details__item-btn order-details__item-btn--outline">
              <i class="bi bi-eye"></i> View Product
            </a>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="order-details__item">
          <div class="order-details__item-image">
            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=300&h=300&fit=crop" alt="Fitness Tracker">
          </div>
          <div class="order-details__item-details">
            <a href="product?id=3" class="order-details__item-name">Fitness Tracker</a>
            <div class="order-details__item-meta">
              <span>Color: Blue</span>
              <span>Quantity: 1</span>
            </div>
            <div class="order-details__item-price">₦44,990</div>
          </div>
          <div class="order-details__item-actions">
            <button class="order-details__item-btn" onclick="buyAgain(3)">
              <i class="bi bi-cart-plus"></i> Buy Again
            </button>
            <a href="product?id=3" class="order-details__item-btn order-details__item-btn--outline">
              <i class="bi bi-eye"></i> View Product
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Shipping & Payment Details -->
    <div class="order-details__grid">
      <!-- Shipping Address -->
      <div class="order-details__card">
        <h2 class="order-details__card-header">
          <i class="bi bi-truck"></i> Shipping Address
        </h2>
        <div class="order-details__address">
          <p class="order-details__address-name">John Doe</p>
          <p class="order-details__address-details">
            123 Main Street, Apartment 4B<br>
            Lagos, LA 10001<br>
            Nigeria
          </p>
          <p class="order-details__address-phone">
            <i class="bi bi-telephone"></i> +234 700 600 0000
          </p>
        </div>
      </div>

      <!-- Payment Information -->
      <div class="order-details__card">
        <h2 class="order-details__card-header">
          <i class="bi bi-credit-card"></i> Payment Information
        </h2>
        <div class="order-details__payment">
          <div class="order-details__payment-row">
            <span>Subtotal (3 items)</span>
            <span>₦254,960</span>
          </div>
          <div class="order-details__payment-row">
            <span>Shipping</span>
            <span>₦12,990</span>
          </div>
          <div class="order-details__payment-row">
            <span>Tax</span>
            <span>₦20,397</span>
          </div>
          <div class="order-details__payment-row order-details__payment-total">
            <span>Total</span>
            <span>₦288,347</span>
          </div>
          <div class="order-details__payment-method">
            <i class="bi bi-credit-card"></i>
            <span>Paid with Credit Card ending in 4242</span>
          </div>
        </div>
      </div>

      <!-- Delivery Instructions -->
      <div class="order-details__card">
        <h2 class="order-details__card-header">
          <i class="bi bi-chat-dots"></i> Delivery Instructions
        </h2>
        <div class="order-details__instructions">
          <p>Please leave the package with the security guard at the front desk if no one is home.</p>
          <p class="order-details__instructions-meta">Added on March 17, 2024</p>
        </div>
      </div>
    </div>

    <!-- Action Buttons -->
    <div class="order-details__actions">
      <a href="account?tab=orders#orders" class="order-details__btn order-details__btn--secondary">
        <i class="bi bi-arrow-left"></i> Back to Orders
      </a>
      <button class="order-details__btn order-details__btn--primary" onclick="reorderAll()">
        <i class="bi bi-cart-plus"></i> Reorder All Items
      </button>
      <a href="invoice.php?id=ORD-2024-0042" class="order-details__btn order-details__btn--outline">
        <i class="bi bi-file-text"></i> Download Invoice
      </a>
    </div>

    <!-- Need Help? -->
    <div class="order-details__help">
      <div class="order-details__help-icon">
        <i class="bi bi-headset"></i>
      </div>
      <div class="order-details__help-content">
        <h4>Need Help With This Order?</h4>
        <p>Contact our support team for assistance with returns, exchanges, or questions</p>
      </div>
      <div class="order-details__help-buttons">
        <a href="contact.php" class="order-details__help-btn order-details__help-btn--primary">Contact Support</a>
        <a href="returns.php" class="order-details__help-btn order-details__help-btn--outline">Return Policy</a>
      </div>
    </div>
  </div>
</main>

<script>
// Copy tracking number
function copyTrackingNumber() {
  const trackingNumber = "ECM-7890-1234-5678";
  navigator.clipboard.writeText(trackingNumber).then(() => {
    showNotification('Tracking number copied!');
  });
}

// Buy again single item
function buyAgain(productId) {
  showNotification('Product added to cart!');
}

// Reorder all items
function reorderAll() {
  showNotification('All items from this order added to cart!');
}

// Notification function
function showNotification(message) {
  let notification = document.querySelector('.order-details__notification');
  
  if (!notification) {
    notification = document.createElement('div');
    notification.className = 'order-details__notification';
    document.body.appendChild(notification);
  }
  
  notification.textContent = message;
  notification.classList.add('show');
  
  setTimeout(() => {
    notification.classList.remove('show');
  }, 3000);
}
</script>

<?php include __DIR__ . "/partials/footer.php"; ?>