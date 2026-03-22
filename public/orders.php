<?php
require_once __DIR__ . "/partials/header.php";
?>
<link rel="stylesheet" href="<?= $css ?>orders.css?v=<?= filemtime($css.'orders.css') ?>">

<main class="orders-page">
  <div class="orders__container">
    <!-- Page Header -->
    <div class="orders__header">
      <h1>My Orders</h1>
      <div class="orders__header-actions">
        <select class="orders__filter">
          <option value="all">All Orders</option>
          <option value="processing">Processing</option>
          <option value="shipped">Shipped</option>
          <option value="delivered">Delivered</option>
          <option value="cancelled">Cancelled</option>
        </select>
      </div>
    </div>

    <!-- Orders List -->
    <div class="orders__list">
      <!-- Order 1 (Delivered - eligible for return) -->
      <div class="orders__card">
        <div class="orders__card-header">
          <div class="orders__order-info">
            <span class="orders__order-id">Order #ORD-2024-001</span>
            <span class="orders__order-date">Placed on March 5, 2024</span>
          </div>
          <div class="orders__status orders__status--delivered">Delivered</div>
        </div>

        <div class="orders__items">
          <!-- Order Item 1 -->
          <div class="orders__item">
            <a class="orders__item-image" href="product?id=1">
              <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?q=80&w=300&h=300&fit=crop" alt="Smart Watch Pro">
            </a>
            <div class="orders__item-details">
              <a href="product?id=1" class="orders__item-title">Smart Watch Pro</a>
              <div class="orders__item-meta">
                <span>Quantity: 1</span>
                <span>Color: Black</span>
              </div>
              <div class="orders__item-price">$89.99</div>
            </div>
          </div>

          <!-- Order Item 2 -->
          <div class="orders__item">
            <a class="orders__item-image" href="product?id=2">
              <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=300&h=300&fit=crop" alt="Premium Headphones">
            </a>
            <div class="orders__item-details">
              <a href="product?id=2" class="orders__item-title">Premium Wireless Headphones</a>
              <div class="orders__item-meta">
                <span>Quantity: 2</span>
                <span>Color: Silver</span>
              </div>
              <div class="orders__item-price">$119.98</div>
            </div>
          </div>
        </div>

        <div class="orders__card-footer">
          <div class="orders__total">
            <span>Total:</span>
            <strong>$209.97</strong>
          </div>
          <div class="orders__actions">
            <a href="track-order?id=ORD-2024-001" class="orders__btn orders__btn--primary">Track Order</a>
            <a href="order-details?id=ORD-2024-001" class="orders__btn orders__btn--secondary">View Details</a>
            <button class="orders__btn orders__btn--outline" onclick="reorder('ORD-2024-001')">Buy Again</button>
            <button class="orders__btn orders__btn--return" onclick="initiateReturn('ORD-2024-001')">Return</button>
          </div>
        </div>
      </div>

      <!-- Order 2 (Shipped - not eligible for return yet) -->
      <div class="orders__card">
        <div class="orders__card-header">
          <div class="orders__order-info">
            <span class="orders__order-id">Order #ORD-2024-002</span>
            <span class="orders__order-date">Placed on February 28, 2024</span>
          </div>
          <div class="orders__status orders__status--shipped">Shipped</div>
        </div>

        <div class="orders__items">
          <!-- Order Item 1 -->
          <div class="orders__item">
            <a class="orders__item-image" href="product?id=3">
              <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=300&h=300&fit=crop" alt="Fitness Tracker">
            </a>
            <div class="orders__item-details">
              <a href="product?id=3" class="orders__item-title">Fitness Tracker Watch</a>
              <div class="orders__item-meta">
                <span>Quantity: 1</span>
                <span>Color: Blue</span>
              </div>
              <div class="orders__item-price">$44.99</div>
            </div>
          </div>
        </div>

        <div class="orders__card-footer">
          <div class="orders__total">
            <span>Total:</span>
            <strong>$44.99</strong>
          </div>
          <div class="orders__actions">
            <a href="track-order?id=ORD-2024-002" class="orders__btn orders__btn--primary">Track Order</a>
            <a href="order-details?id=ORD-2024-002" class="orders__btn orders__btn--secondary">View Details</a>
            <button class="orders__btn orders__btn--outline" onclick="reorder('ORD-2024-002')">Buy Again</button>
            <!-- No return button for shipped orders -->
          </div>
        </div>
      </div>

      <!-- Order 3 (Processing - not eligible for return) -->
      <div class="orders__card">
        <div class="orders__card-header">
          <div class="orders__order-info">
            <span class="orders__order-id">Order #ORD-2024-003</span>
            <span class="orders__order-date">Placed on February 15, 2024</span>
          </div>
          <div class="orders__status orders__status--processing">Processing</div>
        </div>

        <div class="orders__items">
          <!-- Order Item 1 -->
          <div class="orders__item">
            <a class="orders__item-image" href="product?id=7">
              <img src="https://images.unsplash.com/photo-1606813909353-6c7a8b8e8cfa?q=80&w=300&h=300&fit=crop" alt="Gaming Console">
            </a>
            <div class="orders__item-details">
              <a href="product?id=7" class="orders__item-title">Gaming Console</a>
              <div class="orders__item-meta">
                <span>Quantity: 1</span>
                <span>Color: Black</span>
              </div>
              <div class="orders__item-price">$299.99</div>
            </div>
          </div>

          <!-- Order Item 2 -->
          <div class="orders__item">
            <a class="orders__item-image" href="product?id=8">
              <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?q=80&w=300&h=300&fit=crop" alt="Camera">
            </a>
            <div class="orders__item-details">
              <a href="product?id=8" class="orders__item-title">Instant Camera</a>
              <div class="orders__item-meta">
                <span>Quantity: 1</span>
                <span>Color: White</span>
              </div>
              <div class="orders__item-price">$149.99</div>
            </div>
          </div>
        </div>

        <div class="orders__card-footer">
          <div class="orders__total">
            <span>Total:</span>
            <strong>$449.98</strong>
          </div>
          <div class="orders__actions">
            <a href="track-order?id=ORD-2024-003" class="orders__btn orders__btn--primary">Track Order</a>
            <a href="order-details?id=ORD-2024-003" class="orders__btn orders__btn--secondary">View Details</a>
            <button class="orders__btn orders__btn--outline" onclick="reorder('ORD-2024-003')">Buy Again</button>
            <!-- No return button for processing orders -->
          </div>
        </div>
      </div>
    </div>

    <!-- Pagination -->
    <div class="orders__pagination">
      <button class="orders__pagination-btn" disabled>
        <i class="bi bi-chevron-left"></i>
      </button>
      <span class="orders__pagination-current">Page 1 of 3</span>
      <button class="orders__pagination-btn">
        <i class="bi bi-chevron-right"></i>
      </button>
    </div>
  </div>
</main>

<script>
function reorder(orderId) {
  console.log('Reorder:', orderId);
  alert('All items from order ' + orderId + ' have been added to your cart!');
}

function initiateReturn(orderId) {
  if (confirm(`Would you like to start a return for order ${orderId}?`)) {
    // In a real implementation, this could:
    // Option 1: Redirect to returns page with pre-filled information
    // window.location.href = `returns?order=${orderId}`;
    
    // Option 2: Open a return form modal
    
    // Option 3: Direct to contact page (simplest for now)
    window.location.href = 'contact?subject=Return Request for ' + orderId;
  }
}
</script>

<?php include __DIR__ . "/partials/footer.php"; ?>