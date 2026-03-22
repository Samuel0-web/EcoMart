<?php
require_once __DIR__ . "/partials/header.php";
?>
<link rel="stylesheet" href="<?= $css ?>cart.css?v=<?= filemtime($css.'cart.css') ?>">

<main class="cart-page">
  <div class="cart__container">
    <!-- Page Header -->
    <div class="cart__header">
      <h1>Shopping Cart</h1>
      <p class="cart__item-count">3 items</p>
    </div>

    <div class="cart__layout">
      <!-- Cart Items Section -->
      <div class="cart__items">
        <!-- Cart Item 1 -->
        <div class="cart__item">
          <a class="cart__item-image" href="product?id=1">
            <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?q=80&w=300&h=300&fit=crop" alt="Smart Watch Pro">
          </a>
          <div class="cart__item-details">
            <div class="cart__item-header">
              <a href="product?id=1" class="cart__item-title">Smart Watch Pro</a>
              <button class="cart__item-remove" onclick="removeFromCart(1)" aria-label="Remove item">
                <i class="bi bi-x"></i>
              </button>
            </div>
            <div class="cart__item-meta">
              <span class="cart__item-color">Color: Black</span>
              <span class="cart__item-seller">Seller: TechStore</span>
            </div>
            <div class="cart__item-price-mobile">
              <span class="cart__item-current">$89.99</span>
              <span class="cart__item-original">$129.99</span>
              <span class="cart__item-save">Save $40</span>
            </div>
            <div class="cart__item-actions">
              <div class="cart__quantity">
                <button class="cart__quantity-btn" onclick="updateQuantity(1, 'decrease')">−</button>
                <input type="number" class="cart__quantity-input" value="1" min="1" max="99" readonly>
                <button class="cart__quantity-btn" onclick="updateQuantity(1, 'increase')">+</button>
              </div>
              <button class="cart__item-wishlist" onclick="moveToWishlist(1)">
                <i class="bi bi-heart"></i> Save for later
              </button>
            </div>
          </div>
          <div class="cart__item-pricing">
            <div class="cart__item-price">
              <span class="cart__item-current">$89.99</span>
              <span class="cart__item-original">$129.99</span>
            </div>
            <span class="cart__item-save">You save $40</span>
          </div>
        </div>

        <!-- Cart Item 2 -->
        <div class="cart__item">
          <a class="cart__item-image" href="product?id=2">
            <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=300&h=300&fit=crop" alt="Premium Headphones">
          </a>
          <div class="cart__item-details">
            <div class="cart__item-header">
              <a href="product?id=2" class="cart__item-title">Premium Wireless Headphones</a>
              <button class="cart__item-remove" onclick="removeFromCart(2)" aria-label="Remove item">
                <i class="bi bi-x"></i>
              </button>
            </div>
            <div class="cart__item-meta">
              <span class="cart__item-color">Color: Silver</span>
              <span class="cart__item-seller">Seller: AudioHub</span>
            </div>
            <div class="cart__item-price-mobile">
              <span class="cart__item-current">$59.99</span>
              <span class="cart__item-original">$79.99</span>
              <span class="cart__item-save">Save $20</span>
            </div>
            <div class="cart__item-actions">
              <div class="cart__quantity">
                <button class="cart__quantity-btn" onclick="updateQuantity(2, 'decrease')">−</button>
                <input type="number" class="cart__quantity-input" value="2" min="1" max="99" readonly>
                <button class="cart__quantity-btn" onclick="updateQuantity(2, 'increase')">+</button>
              </div>
              <button class="cart__item-wishlist" onclick="moveToWishlist(2)">
                <i class="bi bi-heart"></i> Save for later
              </button>
            </div>
          </div>
          <div class="cart__item-pricing">
            <div class="cart__item-price">
              <span class="cart__item-current">$59.99</span>
              <span class="cart__item-original">$79.99</span>
            </div>
            <span class="cart__item-save">You save $20</span>
          </div>
        </div>

        <!-- Cart Item 3 -->
        <div class="cart__item">
          <a class="cart__item-image" href="product?id=3">
            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=300&h=300&fit=crop" alt="Fitness Tracker">
          </a>
          <div class="cart__item-details">
            <div class="cart__item-header">
              <a href="product?id=3" class="cart__item-title">Fitness Tracker Watch</a>
              <button class="cart__item-remove" onclick="removeFromCart(3)" aria-label="Remove item">
                <i class="bi bi-x"></i>
              </button>
            </div>
            <div class="cart__item-meta">
              <span class="cart__item-color">Color: Blue</span>
              <span class="cart__item-seller">Seller: FitGear</span>
            </div>
            <div class="cart__item-price-mobile">
              <span class="cart__item-current">$44.99</span>
              <span class="cart__item-original">$49.99</span>
              <span class="cart__item-save">Save $5</span>
            </div>
            <div class="cart__item-actions">
              <div class="cart__quantity">
                <button class="cart__quantity-btn" onclick="updateQuantity(3, 'decrease')">−</button>
                <input type="number" class="cart__quantity-input" value="1" min="1" max="99" readonly>
                <button class="cart__quantity-btn" onclick="updateQuantity(3, 'increase')">+</button>
              </div>
              <button class="cart__item-wishlist" onclick="moveToWishlist(3)">
                <i class="bi bi-heart"></i> Save for later
              </button>
            </div>
          </div>
          <div class="cart__item-pricing">
            <div class="cart__item-price">
              <span class="cart__item-current">$44.99</span>
              <span class="cart__item-original">$49.99</span>
            </div>
            <span class="cart__item-save">You save $5</span>
          </div>
        </div>

        <!-- Continue Shopping Link -->
        <div class="cart__continue">
          <a href="shop" class="cart__continue-link">
            <i class="bi bi-arrow-left"></i> Continue Shopping
          </a>
        </div>
      </div>

      <!-- Order Summary Section -->
      <div class="cart__summary">
        <h2 class="cart__summary-title">Order Summary</h2>
        
        <div class="cart__summary-row">
          <span>Subtotal (3 items)</span>
          <span>$194.97</span>
        </div>
        
        <div class="cart__summary-row">
          <span>Shipping</span>
          <span class="cart__summary-shipping">$5.99</span>
        </div>
        
        <div class="cart__summary-row">
          <span>Tax</span>
          <span>$15.60</span>
        </div>
        
        <div class="cart__summary-row cart__summary-total">
          <span>Total</span>
          <span>$216.56</span>
        </div>
        
        <div class="cart__promo">
          <div class="cart__promo-input-group">
            <input type="text" placeholder="Promo code" class="cart__promo-input">
            <button class="cart__promo-btn">Apply</button>
          </div>
        </div>
        
        <button class="cart__checkout-btn">Proceed to Checkout</button>
        
        <div class="cart__payment-icons">
          <i class="bi bi-credit-card"></i>
          <i class="bi bi-paypal"></i>
          <i class="bi bi-bank"></i>
          <i class="bi bi-cash"></i>
        </div>
        
        <p class="cart__secure">
          <i class="bi bi-shield-check"></i>
          Secure checkout. Your info is protected.
        </p>
      </div>
    </div>

    <!-- You Might Also Like Section -->
        <!-- You Might Also Like Section - Scrollable -->
    <section class="scroll-section recommendations-scroll">
      <div class="scroll-section__container">
        <div class="scroll-section__header">
          <div>
            <h2>Recommended For You</h2>
          </div>
        </div>

        <!-- Navigation Arrows -->
        <div class="scroll-section__nav">
          <button class="scroll-section__arrow prev" id="recommendationsPrev" aria-label="Previous recommendations">
            <i class="bi bi-chevron-left"></i>
          </button>
          <button class="scroll-section__arrow next" id="recommendationsNext" aria-label="Next recommendations">
            <i class="bi bi-chevron-right"></i>
          </button>
        </div>

        <div class="scroll-section__viewport" id="recommendationsViewport">
          <div class="scroll-section__track" id="recommendationsTrack">
            <!-- Recommendation 1 -->
            <div class="scroll-section__item recommendations-scroll__item">
              <div class="product-card__image">
                <a href="product?id=7"></a>
                  <img src="https://images.unsplash.com/photo-1606813909353-6c7a8b8e8cfa?q=80&w=300&h=300&fit=crop" alt="Gaming Console">
                </a>
              </div>
              <div class="recommendations-scroll__info">
                <a href="product?id=7" class="recommendations-scroll__name">Gaming Console</a>
                <div class="recommendations-scroll__price">$299.99</div>
                <button class="btn-cart" onclick="addToCart(7)">
                  <i class="bi bi-cart-plus"></i> Add
                </button>
              </div>
            </div>

            <!-- Recommendation 2 -->
            <div class="scroll-section__item recommendations-scroll__item">
              <div class="product-card__image">
                <a href="product?id=8">
                  <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?q=80&w=300&h=300&fit=crop" alt="Instant Camera">
                </a>
              </div>
              <div class="recommendations-scroll__info">
                <a href="product?id=8" class="recommendations-scroll__name">Instant Camera</a>
                <div class="recommendations-scroll__price">$149.99</div>
                <button class="btn-cart" onclick="addToCart(8)">
                  <i class="bi bi-cart-plus"></i> Add
                </button>
              </div>
            </div>

            <!-- Recommendation 3 -->
            <div class="scroll-section__item recommendations-scroll__item">
              <div class="product-card__image">
                <a href="product?id=9">
                  <img src="https://images.unsplash.com/photo-1593642702821-c8da6771f0c6?q=80&w=300&h=300&fit=crop" alt="Android Tablet">
                </a>
              </div>
              <div class="recommendations-scroll__info">
                <a href="product?id=9" class="recommendations-scroll__name">Android Tablet</a>
                <div class="recommendations-scroll__price">$199.99</div>
                <button class="btn-cart" onclick="addToCart(9)">
                  <i class="bi bi-cart-plus"></i> Add
                </button>
              </div>
            </div>

            <!-- Recommendation 4 -->
            <div class="scroll-section__item recommendations-scroll__item">
              <div class="product-card__image">
                <a href="product?id=10">
                  <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?q=80&w=300&h=300&fit=crop" alt="Designer Bag">
                </a>
              </div>
              <div class="recommendations-scroll__info">
                <a href="product?id=10" class="recommendations-scroll__name">Designer Bag</a>
                <div class="recommendations-scroll__price">$124.99</div>
                <button class="btn-cart" onclick="addToCart(10)">
                  <i class="bi bi-cart-plus"></i> Add
                </button>
              </div>
            </div>

            <!-- Recommendation 5 -->
            <div class="scroll-section__item recommendations-scroll__item">
              <div class="product-card__image">
                <a href="product?id=5">
                  <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=300&h=300&fit=crop" alt="Headphones">
                </a>
              </div>
              <div class="recommendations-scroll__info">
                <a href="product?id=5" class="recommendations-scroll__name">Premium Headphones</a>
                <div class="recommendations-scroll__price">$84.99</div>
                <button class="btn-cart" onclick="addToCart(5)">
                  <i class="bi bi-cart-plus"></i> Add
                </button>
              </div>
            </div>

            <!-- Recommendation 6 -->
            <div class="scroll-section__item recommendations-scroll__item">
              <div class="product-card__image">
                <a href="product?id=1">
                  <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?q=80&w=300&h=300&fit=crop" alt="Smart Watch">
                </a>
              </div>
              <div class="recommendations-scroll__info">
                <a href="product?id=1" class="recommendations-scroll__name">Smart Watch Pro</a>
                <div class="recommendations-scroll__price">$89.99</div>
                <button class="btn-cart" onclick="addToCart(1)">
                  <i class="bi bi-cart-plus"></i> Add
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</main>

<script>
// Cart Functions
function updateQuantity(productId, action) {
  console.log(`Update quantity for product ${productId}: ${action}`);
  // In real implementation, this would update the cart
}

function removeFromCart(productId) {
  console.log(`Remove product ${productId} from cart`);
  // In real implementation, this would remove the item
  alert('Item removed from cart');
}

function moveToWishlist(productId) {
  console.log(`Move product ${productId} to wishlist`);
  // In real implementation, this would move to wishlist
  alert('Item saved for later');
}

function addToCart(productId) {
  console.log(`Add product ${productId} to cart`);
  // In real implementation, this would add to cart
  alert('Product added to cart');
}

// Recommendations carousel navigation
const recommendationsViewport = document.getElementById('recommendationsViewport');
const recommendationsTrack = document.getElementById('recommendationsTrack');
const recommendationsPrev = document.getElementById('recommendationsPrev');
const recommendationsNext = document.getElementById('recommendationsNext');

if (recommendationsViewport && recommendationsTrack && recommendationsPrev && recommendationsNext) {
  const scrollAmount = 225; // Width of one item + gap (200px + 25px gap)
  
  recommendationsPrev.addEventListener('click', () => {
    recommendationsViewport.scrollBy({
      left: -scrollAmount,
      behavior: 'smooth'
    });
  });
  
  recommendationsNext.addEventListener('click', () => {
    recommendationsViewport.scrollBy({
      left: scrollAmount,
      behavior: 'smooth'
    });
  });
  
  recommendationsViewport.addEventListener('scroll', () => {
    const maxScroll = recommendationsTrack.scrollWidth - recommendationsViewport.clientWidth;
    
    recommendationsPrev.disabled = recommendationsViewport.scrollLeft <= 0;
    recommendationsNext.disabled = recommendationsViewport.scrollLeft >= maxScroll - 5;
  });
}
</script>

<?php include __DIR__ . "/partials/footer.php"; ?>