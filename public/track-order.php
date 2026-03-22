<?php
require_once __DIR__ . "/partials/header.php";
?>
<link rel="stylesheet" href="<?= $css ?>track-order.css?v=<?= filemtime($css.'track-order.css') ?>">

<main class="track-page">
  <div class="track__container">
    <!-- Breadcrumb -->
    <div class="track__breadcrumb">
      <a href="home">Home</a>
      <i class="bi bi-chevron-right"></i>
      <a href="account?tab=orders#orders">My Orders</a>
      <i class="bi bi-chevron-right"></i>
      <span>Track Order</span>
    </div>

    <!-- Page Header -->
    <div class="track__header">
      <h1 class="track__title">Track Your Order</h1>
      <p class="track__subtitle">Real-time updates for order #ORD-2024-0042</p>
    </div>

    <!-- Order Info Card -->
    <div class="track__info-card">
      <div class="track__info-grid">
        <div class="track__info-item">
          <span class="track__info-label">Order Number</span>
          <span class="track__info-value track__order-number">#ORD-2024-0042</span>
        </div>
        <div class="track__info-item">
          <span class="track__info-label">Order Date</span>
          <span class="track__info-value">March 17, 2024</span>
        </div>
        <div class="track__info-item">
          <span class="track__info-label">Estimated Delivery</span>
          <span class="track__info-value track__delivery-date">March 20-22, 2024</span>
        </div>
        <div class="track__info-item">
          <span class="track__info-label">Current Status</span>
          <span class="track__status-badge track__status-badge--shipped">Shipped</span>
        </div>
      </div>
    </div>

    <!-- Tracking Timeline -->
    <div class="track__timeline-card">
      <h2 class="track__timeline-title">Tracking Timeline</h2>
      
      <div class="track__timeline">
        <!-- Step 1: Order Placed -->
        <div class="track__step completed">
          <div class="track__step-icon">
            <i class="bi bi-check-circle-fill"></i>
          </div>
          <div class="track__step-content">
            <div class="track__step-header">
              <h3 class="track__step-title">Order Placed</h3>
              <span class="track__step-time">March 17, 2024 • 10:23 AM</span>
            </div>
            <p class="track__step-desc">Your order has been placed successfully and is being processed.</p>
          </div>
        </div>

        <!-- Step 2: Order Confirmed -->
        <div class="track__step completed">
          <div class="track__step-icon">
            <i class="bi bi-check-circle-fill"></i>
          </div>
          <div class="track__step-content">
            <div class="track__step-header">
              <h3 class="track__step-title">Order Confirmed</h3>
              <span class="track__step-time">March 17, 2024 • 11:45 AM</span>
            </div>
            <p class="track__step-desc">Your order has been confirmed and payment verified.</p>
          </div>
        </div>

        <!-- Step 3: Processing -->
        <div class="track__step completed">
          <div class="track__step-icon">
            <i class="bi bi-check-circle-fill"></i>
          </div>
          <div class="track__step-content">
            <div class="track__step-header">
              <h3 class="track__step-title">Processing</h3>
              <span class="track__step-time">March 18, 2024 • 09:30 AM</span>
            </div>
            <p class="track__step-desc">Your items are being prepared for shipment.</p>
          </div>
        </div>

        <!-- Step 4: Shipped (Current) -->
        <div class="track__step active">
          <div class="track__step-icon">
            <i class="bi bi-truck"></i>
          </div>
          <div class="track__step-content">
            <div class="track__step-header">
              <h3 class="track__step-title">Shipped</h3>
              <span class="track__step-time">March 19, 2024 • 02:15 PM</span>
            </div>
            <p class="track__step-desc">Your package has been shipped and is on its way.</p>
            
            <!-- Tracking Number -->
            <div class="track__tracking-number">
              <span>Tracking Number:</span>
              <strong>ECM-7890-1234-5678</strong>
              <button class="track__copy-btn" onclick="copyTrackingNumber()">
                <i class="bi bi-files"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Step 5: Out for Delivery -->
        <div class="track__step pending">
          <div class="track__step-icon">
            <i class="bi bi-box-seam"></i>
          </div>
          <div class="track__step-content">
            <div class="track__step-header">
              <h3 class="track__step-title">Out for Delivery</h3>
              <span class="track__step-time">Expected March 20</span>
            </div>
            <p class="track__step-desc">Your package will be out for delivery soon.</p>
          </div>
        </div>

        <!-- Step 6: Delivered -->
        <div class="track__step pending">
          <div class="track__step-icon">
            <i class="bi bi-check-circle"></i>
          </div>
          <div class="track__step-content">
            <div class="track__step-header">
              <h3 class="track__step-title">Delivered</h3>
              <span class="track__step-time">Expected March 20-22</span>
            </div>
            <p class="track__step-desc">Your package will be delivered to your address.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Live Tracking Map (Simulated) -->
    <div class="track__map-card">
      <div class="track__map-header">
        <h2 class="track__map-title">Live Package Location</h2>
        <span class="track__map-update">Last updated: 2 minutes ago</span>
      </div>
      <div class="track__map-container">
        <!-- Map Placeholder -->
        <div class="track__map-placeholder">
          <div class="track__map-marker">
            <i class="bi bi-geo-alt-fill"></i>
          </div>
          <div class="track__map-route">
            <div class="track__map-dot"></div>
            <div class="track__map-dot"></div>
            <div class="track__map-dot"></div>
            <div class="track__map-dot"></div>
          </div>
          <div class="track__map-locations">
            <span class="track__map-location">Lagos Hub</span>
            <span class="track__map-location">Ibadan</span>
            <span class="track__map-location">Your City</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Package Details -->
    <div class="track__details-grid">
      <!-- Shipping Address -->
      <div class="track__card">
        <div class="track__card-header">
          <i class="bi bi-truck"></i>
          <h3>Shipping Address</h3>
        </div>
        <div class="track__address">
          <p class="track__address-name">John Doe</p>
          <p class="track__address-details">
            123 Main Street, Apartment 4B<br>
            Lagos, LA 10001<br>
            Nigeria
          </p>
          <p class="track__address-phone">+234 700 600 0000</p>
        </div>
      </div>

      <!-- Carrier Info -->
      <div class="track__card">
        <div class="track__card-header">
          <i class="bi bi-building"></i>
          <h3>Carrier Information</h3>
        </div>
        <div class="track__carrier">
          <p class="track__carrier-name">EcoMart Logistics</p>
          <p class="track__carrier-service">Express Shipping - Priority</p>
          <div class="track__carrier-contact">
            <i class="bi bi-telephone"></i>
            <span>+234 700 600 0123</span>
          </div>
          <div class="track__carrier-contact">
            <i class="bi bi-envelope"></i>
            <span>support@ecomartlogistics.com</span>
          </div>
        </div>
      </div>

      <!-- Package Items -->
      <div class="track__card track__card--full">
        <div class="track__card-header">
          <i class="bi bi-box"></i>
          <h3>Items in This Shipment</h3>
          <span class="track__items-count">3 items</span>
        </div>
        <div class="track__items">
          <!-- Item 1 -->
          <div class="track__item">
            <div class="track__item-image">
              <a href="product?id=1">
                <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?q=80&w=100&h=100&fit=crop" alt="Smart Watch Pro">
              </a>
            </div>
            <div class="track__item-details">
              <a href="product?id=1" class="track__item-name">Smart Watch Pro</a>
              <div class="track__item-meta">
                <span>Color: Black</span>
                <span>Qty: 1</span>
              </div>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="track__item">
            <div class="track__item-image">
              <a href="product?id=2">
                <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=100&h=100&fit=crop" alt="Premium Headphones">
              </a>
            </div>
            <div class="track__item-details">
              <a href="product?id=2" class="track__item-name">Premium Headphones</a>
              <div class="track__item-meta">
                <span>Color: Silver</span>
                <span>Qty: 2</span>
              </div>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="track__item">
            <div class="track__item-image">
              <a href="product?id=3">
                <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=100&h=100&fit=crop" alt="Fitness Tracker">
              </a>
            </div>
            <div class="track__item-details">
              <a href="product?id=3" class="track__item-name">Fitness Tracker</a>
              <div class="track__item-meta">
                <span>Color: Blue</span>
                <span>Qty: 1</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Action Buttons -->
    <div class="track__actions">
      <a href="account?tab=orders#orders" class="track__btn track__btn--secondary">
        <i class="bi bi-arrow-left"></i> Back to Orders
      </a>
      <button class="track__btn track__btn--primary" onclick="refreshTracking()">
        <i class="bi bi-arrow-repeat"></i> Refresh Tracking
      </button>
      <button class="track__btn track__btn--outline" onclick="shareTracking()">
        <i class="bi bi-share"></i> Share
      </button>
    </div>

    <!-- Need Help? -->
    <div class="track__help">
      <div class="track__help-icon">
        <i class="bi bi-question-circle"></i>
      </div>
      <div class="track__help-content">
        <h4>Need Help With Your Order?</h4>
        <p>Contact our support team for assistance</p>
      </div>
      <a href="contact.php" class="track__help-btn">Contact Us</a>
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

// Refresh tracking (simulate update)
function refreshTracking() {
  const btn = event.currentTarget;
  const originalHtml = btn.innerHTML;
  btn.innerHTML = '<i class="bi bi-arrow-repeat"></i> Updating...';
  btn.disabled = true;
  
  // Simulate API call
  setTimeout(() => {
    btn.innerHTML = originalHtml;
    btn.disabled = false;
    showNotification('Tracking information updated!');
    
    // Update last updated time
    const updateSpan = document.querySelector('.track__map-update');
    if (updateSpan) {
      updateSpan.textContent = 'Last updated: just now';
    }
  }, 1500);
}

// Share tracking
function shareTracking() {
  if (navigator.share) {
    navigator.share({
      title: 'Track My Order',
      text: 'Track your order #ORD-2024-0042 with EcoMart',
      url: window.location.href,
    });
  } else {
    // Fallback
    navigator.clipboard.writeText(window.location.href).then(() => {
      showNotification('Tracking link copied to clipboard!');
    });
  }
}

// Notification function
function showNotification(message) {
  let notification = document.querySelector('.track__notification');
  
  if (!notification) {
    notification = document.createElement('div');
    notification.className = 'track__notification';
    document.body.appendChild(notification);
  }
  
  notification.textContent = message;
  notification.classList.add('show');
  
  setTimeout(() => {
    notification.classList.remove('show');
  }, 3000);
}

// Simulate real-time updates
document.addEventListener('DOMContentLoaded', function() {
  // Simulate package moving (just for demo)
  const dots = document.querySelectorAll('.track__map-dot');
  let currentDot = 1;
  
  setInterval(() => {
    // Update map marker position (visual effect only)
    if (dots.length > 0) {
      dots.forEach(dot => dot.classList.remove('active'));
      
      if (currentDot < dots.length) {
        dots[currentDot].classList.add('active');
        currentDot++;
      }
    }
  }, 5000);
});
</script>

<?php include __DIR__ . "/partials/footer.php"; ?>