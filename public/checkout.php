<?php
require_once __DIR__ . "/partials/header.php";
?>
<link rel="stylesheet" href="<?= $css ?>checkout.css?v=<?= filemtime($css.'checkout.css') ?>">

<main class="checkout-page">
  <div class="checkout__container">
    <!-- Breadcrumb -->
    <div class="checkout__breadcrumb">
      <a href="cart">Cart</a>
      <i class="bi bi-chevron-right"></i>
      <span>Checkout</span>
    </div>

    <!-- Page Header -->
    <div class="checkout__header">
      <h1 class="checkout__title">Checkout</h1>
      <div class="checkout__steps">
        <div class="checkout__step active">
          <span class="checkout__step-number">1</span>
          <span class="checkout__step-label">Information</span>
        </div>
        <div class="checkout__step-line"></div>
        <div class="checkout__step">
          <span class="checkout__step-number">2</span>
          <span class="checkout__step-label">Shipping</span>
        </div>
        <div class="checkout__step-line"></div>
        <div class="checkout__step">
          <span class="checkout__step-number">3</span>
          <span class="checkout__step-label">Payment</span>
        </div>
      </div>
    </div>

    <!-- Checkout Layout -->
    <div class="checkout__layout">
      <!-- Checkout Forms -->
      <div class="checkout__forms">
        <!-- Step 1: Information -->
        <div class="checkout__step-content active" id="step1">
          <h2 class="checkout__step-title">Contact Information</h2>
          
          <form class="checkout__form">
            <div class="checkout__form-group">
              <label for="email">Email Address</label>
              <input type="email" id="email" class="checkout__input" value="john.doe@example.com" placeholder="your@email.com">
            </div>

            <div class="checkout__form-row">
              <div class="checkout__form-group">
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" class="checkout__input" value="John" placeholder="First name">
              </div>
              <div class="checkout__form-group">
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" class="checkout__input" value="Doe" placeholder="Last name">
              </div>
            </div>

            <div class="checkout__form-group">
              <label for="phone">Phone Number</label>
              <input type="tel" id="phone" class="checkout__input" value="+234 700 600 0000" placeholder="Phone number">
            </div>

            <h2 class="checkout__step-title checkout__step-title--mt">Shipping Address</h2>

            <div class="checkout__form-group">
              <label for="address">Street Address</label>
              <input type="text" id="address" class="checkout__input" value="123 Main Street" placeholder="Street address">
            </div>

            <div class="checkout__form-group">
              <input type="text" id="address2" class="checkout__input" value="Apartment 4B" placeholder="Apartment, suite, etc. (optional)">
            </div>

            <div class="checkout__form-row">
              <div class="checkout__form-group">
                <label for="city">City</label>
                <input type="text" id="city" class="checkout__input" value="Lagos" placeholder="City">
              </div>
              <div class="checkout__form-group">
                <label for="state">State</label>
                <select id="state" class="checkout__select">
                  <option value="lagos" selected>Lagos</option>
                  <option value="abuja">Abuja</option>
                  <option value="rivers">Rivers</option>
                  <option value="kano">Kano</option>
                  <option value="ogun">Ogun</option>
                </select>
              </div>
            </div>

            <div class="checkout__form-row">
              <div class="checkout__form-group">
                <label for="postalCode">Postal Code</label>
                <input type="text" id="postalCode" class="checkout__input" value="100001" placeholder="Postal code">
              </div>
              <div class="checkout__form-group">
                <label for="country">Country</label>
                <select id="country" class="checkout__select">
                  <option value="nigeria" selected>Nigeria</option>
                  <option value="ghana">Ghana</option>
                  <option value="kenya">Kenya</option>
                  <option value="south-africa">South Africa</option>
                </select>
              </div>
            </div>

            <div class="checkout__checkbox">
              <input type="checkbox" id="saveInfo" checked>
              <span class="checkout__checkmark"></span>
              <label for="saveInfo">Save this information for next time</label>
            </div>

            <div class="checkout__form-actions">
              <a href="cart" class="checkout__back-link">
                <i class="bi bi-arrow-left"></i> Return to Cart
              </a>
              <button type="button" class="checkout__next-btn" onclick="nextStep(2)">
                Continue to Shipping <i class="bi bi-arrow-right"></i>
              </button>
            </div>
          </form>
        </div>

        <!-- Step 2: Shipping -->
        <div class="checkout__step-content" id="step2">
          <h2 class="checkout__step-title">Shipping Method</h2>
          
          <div class="checkout__shipping-options">
            <label class="checkout__shipping-option">
              <input type="radio" name="shipping" value="standard" checked>
              <span class="checkout__shipping-radio"></span>
              <div class="checkout__shipping-info">
                <span class="checkout__shipping-name">Standard Shipping</span>
                <span class="checkout__shipping-desc">3-5 business days</span>
              </div>
              <span class="checkout__shipping-price">₦5,990</span>
            </label>

            <label class="checkout__shipping-option">
              <input type="radio" name="shipping" value="express">
              <span class="checkout__shipping-radio"></span>
              <div class="checkout__shipping-info">
                <span class="checkout__shipping-name">Express Shipping</span>
                <span class="checkout__shipping-desc">1-2 business days</span>
              </div>
              <span class="checkout__shipping-price">₦12,990</span>
            </label>

            <label class="checkout__shipping-option">
              <input type="radio" name="shipping" value="same-day">
              <span class="checkout__shipping-radio"></span>
              <div class="checkout__shipping-info">
                <span class="checkout__shipping-name">Same-Day Delivery</span>
                <span class="checkout__shipping-desc">Within Lagos (order before 12pm)</span>
              </div>
              <span class="checkout__shipping-price">₦19,990</span>
            </label>
          </div>

          <h2 class="checkout__step-title checkout__step-title--mt">Delivery Instructions (Optional)</h2>
          
          <div class="checkout__form-group">
            <textarea class="checkout__textarea" rows="3" placeholder="Add delivery instructions, gate code, etc."></textarea>
          </div>

          <div class="checkout__form-actions">
            <button type="button" class="checkout__back-btn" onclick="prevStep(1)">
              <i class="bi bi-arrow-left"></i> Back
            </button>
            <button type="button" class="checkout__next-btn" onclick="nextStep(3)">
              Continue to Payment <i class="bi bi-arrow-right"></i>
            </button>
          </div>
        </div>

        <!-- Step 3: Payment -->
        <div class="checkout__step-content" id="step3">
          <h2 class="checkout__step-title">Payment Method</h2>
          
          <div class="checkout__payment-methods">
            <!-- Paystack -->
            <label class="checkout__payment-option">
              <input type="radio" name="payment" value="paystack" checked>
              <span class="checkout__payment-radio"></span>
              <div class="checkout__payment-info">
                <i class="bi bi-stack"></i>
                <span>Paystack</span>
                <small class="checkout__payment-badge">Card, Bank, USSD, QR</small>
              </div>
            </label>

            <!-- Flutterwave -->
            <label class="checkout__payment-option">
              <input type="radio" name="payment" value="flutterwave">
              <span class="checkout__payment-radio"></span>
              <div class="checkout__payment-info">
                <i class="bi bi-bank2"></i>
                <span>Flutterwave</span>
                <small class="checkout__payment-badge">Card, Transfer, Mobile Money</small>
              </div>
            </label>

            <!-- Bank Transfer -->
            <label class="checkout__payment-option">
              <input type="radio" name="payment" value="bank">
              <span class="checkout__payment-radio"></span>
              <div class="checkout__payment-info">
                <i class="bi bi-bank"></i>
                <span>Bank Transfer</span>
                <small class="checkout__payment-badge">Manual payment</small>
              </div>
            </label>

            <!-- Cash on Delivery -->
            <label class="checkout__payment-option">
              <input type="radio" name="payment" value="cash">
              <span class="checkout__payment-radio"></span>
              <div class="checkout__payment-info">
                <i class="bi bi-cash"></i>
                <span>Cash on Delivery</span>
                <small class="checkout__payment-badge">Pay when you receive</small>
              </div>
            </label>
          </div>

          <!-- Payment Details (for Bank Transfer) -->
          <div class="checkout__bank-details" id="bankDetails" style="display: none;">
            <div class="checkout__bank-info">
              <h4>Bank Transfer Details</h4>
              <div class="checkout__bank-row">
                <span>Bank Name:</span>
                <strong>Zenith Bank</strong>
              </div>
              <div class="checkout__bank-row">
                <span>Account Name:</span>
                <strong>EcoMart Limited</strong>
              </div>
              <div class="checkout__bank-row">
                <span>Account Number:</span>
                <strong>1234567890</strong>
                <button class="checkout__copy-btn" onclick="copyToClipboard('1234567890')">
                  <i class="bi bi-files"></i>
                </button>
              </div>
              <div class="checkout__bank-note">
                <i class="bi bi-info-circle"></i>
                <p>Please use your order number as reference when making the transfer. Orders will be processed after payment confirmation.</p>
              </div>
            </div>
          </div>

          <!-- Paystack/Flutterwave Info -->
          <div class="checkout__payment-info-box" id="paymentInfo">
            <div class="checkout__payment-note">
              <i class="bi bi-shield-check"></i>
              <p>You will be redirected to our secure payment gateway to complete your transaction.</p>
            </div>
          </div>

          <div class="checkout__checkbox">
            <input type="checkbox" id="termsAgree" checked>
            <span class="checkout__checkmark"></span>
            <label for="termsAgree">I agree to the <a href="terms">Terms of Service</a> and <a href="privacy">Privacy Policy</a></label>
          </div>

          <div class="checkout__form-actions">
            <button type="button" class="checkout__back-btn" onclick="prevStep(2)">
              <i class="bi bi-arrow-left"></i> Back
            </button>
            <button type="button" class="checkout__place-order" onclick="placeOrder()">
              Place Order <i class="bi bi-check-circle"></i>
            </button>
          </div>

          <p class="checkout__secure">
            <i class="bi bi-shield-check"></i>
            Your payment is secured by Paystack & Flutterwave. PCI-DSS compliant.
          </p>
        </div>
      </div>

      <!-- Order Summary -->
      <div class="checkout__summary">
        <h2 class="checkout__summary-title">Order Summary</h2>
        
        <!-- Products in Cart -->
        <div class="checkout__summary-products">
          <div class="checkout__summary-product">
            <div class="checkout__summary-product-image">
              <a href="product?id=1">
                <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?q=80&w=100&h=100&fit=crop" alt="Smart Watch Pro">
              </a>
            </div>
            <div class="checkout__summary-product-info">
              <a href="product?id=1" class="checkout__summary-product-name">Smart Watch Pro</a>
              <span class="checkout__summary-product-meta">Black | Qty: 1</span>
            </div>
            <span class="checkout__summary-product-price">₦89,990</span>
          </div>

          <div class="checkout__summary-product">
            <div class="checkout__summary-product-image">
              <a href="product?id=2">
                <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=100&h=100&fit=crop" alt="Premium Headphones">
              </a>
            </div>
            <div class="checkout__summary-product-info">
              <a href="product?id=2" class="checkout__summary-product-name">Premium Headphones</a>
              <span class="checkout__summary-product-meta">Silver | Qty: 2</span>
            </div>
            <span class="checkout__summary-product-price">₦119,980</span>
          </div>

          <div class="checkout__summary-product">
            <div class="checkout__summary-product-image">
              <a href="product?id=3">
                <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=100&h=100&fit=crop" alt="Fitness Tracker">
              </a>
            </div>
            <div class="checkout__summary-product-info">
              <a href="product?id=3" class="checkout__summary-product-name">Fitness Tracker</a>
              <span class="checkout__summary-product-meta">Blue | Qty: 1</span>
            </div>
            <span class="checkout__summary-product-price">₦44,990</span>
          </div>
        </div>

        <!-- Promo Code -->
        <div class="checkout__promo">
          <div class="checkout__promo-input-group">
            <input type="text" class="checkout__promo-input" placeholder="Promo code">
            <button class="checkout__promo-btn">Apply</button>
          </div>
        </div>

        <!-- Price Breakdown -->
        <div class="checkout__summary-row">
          <span>Subtotal (3 items)</span>
          <span>₦254,960</span>
        </div>
        <div class="checkout__summary-row">
          <span>Shipping</span>
          <span class="checkout__summary-shipping">₦5,990</span>
        </div>
        <div class="checkout__summary-row">
          <span>Tax</span>
          <span>₦20,397</span>
        </div>
        <div class="checkout__summary-row checkout__summary-total">
          <span>Total</span>
          <span>₦281,347</span>
        </div>

        <!-- Payment Icons -->
        <div class="checkout__payment-icons">
          <i class="bi bi-stack" title="Paystack"></i>
          <i class="bi bi-bank2" title="Flutterwave"></i>
          <i class="bi bi-bank" title="Bank Transfer"></i>
          <i class="bi bi-cash" title="Cash on Delivery"></i>
        </div>
      </div>
    </div>
  </div>
</main>

<script>
// Step navigation
function nextStep(step) {
  // Hide all step contents
  document.querySelectorAll('.checkout__step-content').forEach(content => {
    content.classList.remove('active');
  });
  
  // Show selected step
  document.getElementById(`step${step}`).classList.add('active');
  
  // Update step indicators
  document.querySelectorAll('.checkout__step').forEach((stepEl, index) => {
    if (index + 1 < step) {
      stepEl.classList.add('active');
      stepEl.classList.remove('completed');
    } else if (index + 1 === step) {
      stepEl.classList.add('active');
      stepEl.classList.remove('completed');
    } else {
      stepEl.classList.remove('active', 'completed');
    }
  });
  
  // Scroll to top of form
  document.querySelector('.checkout__forms').scrollTop = 0;
}

function prevStep(step) {
  nextStep(step);
}

// Toggle payment details based on payment method
document.querySelectorAll('input[name="payment"]').forEach(radio => {
  radio.addEventListener('change', function() {
    const bankDetails = document.getElementById('bankDetails');
    const paymentInfo = document.getElementById('paymentInfo');
    
    if (this.value === 'bank') {
      bankDetails.style.display = 'block';
      paymentInfo.style.display = 'none';
    } else {
      bankDetails.style.display = 'none';
      paymentInfo.style.display = 'block';
    }
  });
});

// Copy to clipboard
function copyToClipboard(text) {
  navigator.clipboard.writeText(text).then(() => {
    showNotification('Account number copied to clipboard!');
  });
}

// Place order with selected payment method
function placeOrder() {
  const paymentMethod = document.querySelector('input[name="payment"]:checked').value;
  const termsAgree = document.getElementById('termsAgree').checked;
  
  if (!termsAgree) {
    alert('Please agree to the Terms of Service and Privacy Policy');
    return;
  }
  
  const orderData = {
    email: document.getElementById('email').value,
    firstName: document.getElementById('firstName').value,
    lastName: document.getElementById('lastName').value,
    phone: document.getElementById('phone').value,
    address: document.getElementById('address').value,
    city: document.getElementById('city').value,
    state: document.getElementById('state').value,
    postalCode: document.getElementById('postalCode').value,
    country: document.getElementById('country').value,
    shippingMethod: document.querySelector('input[name="shipping"]:checked').value,
    paymentMethod: paymentMethod,
    total: 281347
  };
  
  // In a real implementation, this would redirect to the payment gateway
  if (paymentMethod === 'paystack') {
    showNotification('Redirecting to Paystack...');
    setTimeout(() => {
      window.location.href = 'order-confirmation';
    }, 1500);
  } else if (paymentMethod === 'flutterwave') {
    showNotification('Redirecting to Flutterwave...');
    setTimeout(() => {
      window.location.href = 'order-confirmation';
    }, 1500);
  } else if (paymentMethod === 'bank') {
    showNotification('Bank transfer details displayed above. Complete your payment to confirm order.');
  } else if (paymentMethod === 'cash') {
    alert('Order placed! You will pay when your package arrives.');
    window.location.href = 'order-confirmation';
  }
}

// Apply promo code
document.querySelector('.checkout__promo-btn').addEventListener('click', function() {
  const promoInput = document.querySelector('.checkout__promo-input');
  if (promoInput.value) {
    alert(`Promo code "${promoInput.value}" applied!`);
  } else {
    alert('Please enter a promo code');
  }
});

// Notification function
function showNotification(message) {
  let notification = document.querySelector('.checkout__notification');
  
  if (!notification) {
    notification = document.createElement('div');
    notification.className = 'checkout__notification';
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