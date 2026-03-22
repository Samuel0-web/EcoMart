<?php
require_once __DIR__ . "/partials/header.php";
?>
<link rel="stylesheet" href="<?= $css ?>product.css?v=<?= filemtime($css.'product.css') ?>">

<main class="product-page">
  <div class="product__container">
    <!-- Breadcrumb -->
    <div class="product__breadcrumb">
      <a href="home">Home</a>
      <i class="bi bi-chevron-right"></i>
      <a href="category?slug=electronics">Electronics</a>
      <i class="bi bi-chevron-right"></i>
      <a href="category?slug=smart-watches">Smart Watches</a>
      <i class="bi bi-chevron-right"></i>
      <span>Smart Watch Pro</span>
    </div>

    <!-- Product Main Section -->
    <div class="product__main">
      <!-- Product Gallery -->
      <div class="product__gallery">
        <div class="product__gallery-main">
          <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?q=80&w=800&h=800&fit=crop" alt="Smart Watch Pro" id="mainProductImage">
          <button class="product__gallery-wishlist" onclick="toggleWishlist(1)">
            <i class="bi bi-heart"></i>
          </button>
        </div>
        <div class="product__gallery-thumbnails">
          <div class="product__thumbnail active" onclick="changeImage(this, 'https://images.unsplash.com/photo-1546868871-7041f2a55e12?q=80&w=800&h=800&fit=crop')">
            <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?q=80&w=200&h=200&fit=crop" alt="Thumbnail 1">
          </div>
          <div class="product__thumbnail" onclick="changeImage(this, 'https://images.unsplash.com/photo-1579586337278-3befd40fd17a?q=80&w=800&h=800&fit=crop')">
            <img src="https://images.unsplash.com/photo-1579586337278-3befd40fd17a?q=80&w=200&h=200&fit=crop" alt="Thumbnail 2">
          </div>
          <div class="product__thumbnail" onclick="changeImage(this, 'https://images.unsplash.com/photo-1508685096489-7aacd43bd3b1?q=80&w=800&h=800&fit=crop')">
            <img src="https://images.unsplash.com/photo-1508685096489-7aacd43bd3b1?q=80&w=200&h=200&fit=crop" alt="Thumbnail 3">
          </div>
          <div class="product__thumbnail" onclick="changeImage(this, 'https://images.unsplash.com/photo-1434493789847-aaa8f09b6b5d?q=80&w=800&h=800&fit=crop')">
            <img src="https://images.unsplash.com/photo-1434493789847-aaa8f09b6b5d?q=80&w=200&h=200&fit=crop" alt="Thumbnail 4">
          </div>
        </div>
      </div>

      <!-- Product Info -->
      <div class="product__info">
        <div class="product__header">
          <h1 class="product__title">Smart Watch Pro</h1>
          <div class="product__rating">
            <div class="product__stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
            </div>
            <a href="#reviews" class="product__reviews">(128 reviews)</a>
          </div>
        </div>

        <div class="product__pricing">
          <div class="product__price">
            <span class="product__current">$89.99</span>
            <span class="product__original">$129.99</span>
            <span class="product__discount">-30%</span>
          </div>
          <div class="product__stock product__stock--in">
            <i class="bi bi-check-circle-fill"></i> In Stock
          </div>
        </div>

        <div class="product__short-desc">
          <p>Premium smart watch with health tracking, GPS, and 7-day battery life. Compatible with iOS and Android.</p>
        </div>

        <!-- Product Options -->
        <div class="product__options">
          <div class="product__option-group">
            <label class="product__option-label">Color</label>
            <div class="product__color-options">
              <div class="product__color-btn active" data-color="black" style="background: #000;" onclick="selectColor(this)"></div>
              <div class="product__color-btn" data-color="silver" style="background: #c0c0c0;" onclick="selectColor(this)"></div>
              <div class="product__color-btn" data-color="gold" style="background: #ffd700;" onclick="selectColor(this)"></div>
              <div class="product__color-btn" data-color="blue" style="background: #0000ff;" onclick="selectColor(this)"></div>
            </div>
          </div>

          <div class="product__option-group">
            <label class="product__option-label">Size</label>
            <div class="product__size-options">
              <div class="product__size-btn active" onclick="selectSize(this)">40mm</div>
              <div class="product__size-btn" onclick="selectSize(this)">44mm</div>
            </div>
          </div>

          <div class="product__option-group">
            <label class="product__option-label">Quantity</label>
            <div class="product__quantity">
              <button class="product__quantity-btn" onclick="updateQuantity('decrease')">−</button>
              <input type="number" class="product__quantity-input" id="productQuantity" value="1" min="1" max="10" readonly>
              <button class="product__quantity-btn" onclick="updateQuantity('increase')">+</button>
            </div>
          </div>
        </div>

        <!-- Action Buttons -->
        <div class="product__actions">
          <button class="product__add-to-cart" onclick="addToCart(1)">
            <i class="bi bi-cart-plus"></i> Add to Cart
          </button>
          <button class="product__buy-now" onclick="buyNow(1)">
            <i class="bi bi-lightning"></i> Buy Now
          </button>
        </div>

        <!-- Delivery Info -->
        <div class="product__delivery">
          <div class="product__delivery-item">
            <i class="bi bi-truck"></i>
            <div>
              <strong>Free Delivery</strong>
              <span>On orders over $50</span>
            </div>
          </div>
          <div class="product__delivery-item">
            <i class="bi bi-arrow-repeat"></i>
            <div>
              <strong>30-Day Returns</strong>
              <span>Hassle-free returns</span>
            </div>
          </div>
          <div class="product__delivery-item">
            <i class="bi bi-shield-check"></i>
            <div>
              <strong>1 Year Warranty</strong>
              <span>Official warranty</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Product Details Tabs -->
    <div class="product__tabs">
      <div class="product__tabs-header">
        <button class="product__tab-btn active" onclick="switchTab('description')">Description</button>
        <button class="product__tab-btn" onclick="switchTab('specifications')">Specifications</button>
        <button class="product__tab-btn" onclick="switchTab('reviews')">Reviews (128)</button>
        <button class="product__tab-btn" onclick="switchTab('shipping')">Shipping & Returns</button>
      </div>

      <div class="product__tabs-content">
        <!-- Description Tab -->
        <div class="product__tab-pane active" id="description">
          <div class="product__description">
            <h3>Product Description</h3>
            <p>The Smart Watch Pro is designed for those who want to stay connected and track their fitness goals without compromising on style. With a sleek design and powerful features, it's the perfect companion for your daily activities.</p>
            
            <h4>Key Features:</h4>
            <ul>
              <li><strong>Health Monitoring:</strong> 24/7 heart rate tracking, blood oxygen monitoring, sleep analysis</li>
              <li><strong>Fitness Tracking:</strong> 20+ sport modes, GPS, step counter, calorie tracking</li>
              <li><strong>Smart Features:</strong> Call & message notifications, music control, weather updates</li>
              <li><strong>Long Battery Life:</strong> Up to 7 days on a single charge</li>
              <li><strong>Water Resistant:</strong> 5ATM waterproof, suitable for swimming</li>
              <li><strong>Display:</strong> 1.8" AMOLED display with always-on option</li>
              <li><strong>Compatibility:</strong> Works with iOS 12+ and Android 6+</li>
            </ul>

            <h4>What's in the Box:</h4>
            <ul>
              <li>Smart Watch Pro</li>
              <li>Magnetic charging cable</li>
              <li>User manual</li>
              <li>Warranty card</li>
            </ul>
          </div>
        </div>

        <!-- Specifications Tab -->
        <div class="product__tab-pane" id="specifications">
          <div class="product__specs">
            <h3>Technical Specifications</h3>
            <table class="product__specs-table">
              <tr>
                <td>Display</td>
                <td>1.8" AMOLED, 368 x 448 pixels</td>
              </tr>
              <tr>
                <td>Processor</td>
                <td>Dual-core 1.2GHz</td>
              </tr>
              <tr>
                <td>RAM</td>
                <td>512MB</td>
              </tr>
              <tr>
                <td>Storage</td>
                <td>4GB</td>
              </tr>
              <tr>
                <td>Battery</td>
                <td>300mAh, up to 7 days</td>
              </tr>
              <tr>
                <td>Charging</td>
                <td>Magnetic wireless charging, 2 hours full charge</td>
              </tr>
              <tr>
                <td>Sensors</td>
                <td>Heart rate, SpO2, accelerometer, gyroscope, compass</td>
              </tr>
              <tr>
                <td>Connectivity</td>
                <td>Bluetooth 5.0, GPS, GLONASS</td>
              </tr>
              <tr>
                <td>Water Resistance</td>
                <td>5ATM (up to 50m)</td>
              </tr>
              <tr>
                <td>Dimensions</td>
                <td>44 x 38 x 10.7 mm</td>
              </tr>
              <tr>
                <td>Weight</td>
                <td>36g (without strap)</td>
              </tr>
              <tr>
                <td>Compatibility</td>
                <td>iOS 12+, Android 6+</td>
              </tr>
            </table>
          </div>
        </div>

        <!-- Reviews Tab -->
        <div class="product__tab-pane" id="reviews">
          <div class="product__reviews-section">
            <!-- Review Summary -->
            <div class="product__review-summary">
              <div class="product__review-average">
                <span class="product__average-rating">4.5</span>
                <div class="product__average-stars">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-half"></i>
                </div>
                <span class="product__total-reviews">Based on 128 reviews</span>
              </div>
              <div class="product__review-bars">
                <div class="product__review-bar">
                  <span>5 stars</span>
                  <div class="product__bar-container">
                    <div class="product__bar-fill" style="width: 75%"></div>
                  </div>
                  <span>75%</span>
                </div>
                <div class="product__review-bar">
                  <span>4 stars</span>
                  <div class="product__bar-container">
                    <div class="product__bar-fill" style="width: 15%"></div>
                  </div>
                  <span>15%</span>
                </div>
                <div class="product__review-bar">
                  <span>3 stars</span>
                  <div class="product__bar-container">
                    <div class="product__bar-fill" style="width: 5%"></div>
                  </div>
                  <span>5%</span>
                </div>
                <div class="product__review-bar">
                  <span>2 stars</span>
                  <div class="product__bar-container">
                    <div class="product__bar-fill" style="width: 3%"></div>
                  </div>
                  <span>3%</span>
                </div>
                <div class="product__review-bar">
                  <span>1 star</span>
                  <div class="product__bar-container">
                    <div class="product__bar-fill" style="width: 2%"></div>
                  </div>
                  <span>2%</span>
                </div>
              </div>
            </div>

            <!-- Write Review Button -->
            <div class="product__write-review">
              <button class="product__write-review-btn" onclick="openReviewModal()">
                <i class="bi bi-pencil"></i> Write a Review
              </button>
            </div>

            <!-- Reviews List -->
            <div class="product__reviews-list">
              <!-- Review 1 -->
              <div class="product__review-item">
                <div class="product__reviewer">
                  <div class="product__reviewer-avatar">JD</div>
                  <div class="product__reviewer-info">
                    <span class="product__reviewer-name">John Doe</span>
                    <span class="product__review-date">March 12, 2024</span>
                  </div>
                </div>
                <div class="product__review-rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>
                <div class="product__review-title">Excellent smart watch!</div>
                <p class="product__review-text">Battery life is amazing, lasts over a week. The fitness tracking is accurate and the display is bright and clear. Highly recommend!</p>
                <div class="product__review-helpful">
                  <span>Was this helpful?</span>
                  <button class="product__helpful-btn" onclick="markHelpful(1)">
                    <i class="bi bi-hand-thumbs-up"></i> Yes (24)
                  </button>
                </div>
              </div>

              <!-- Review 2 -->
              <div class="product__review-item">
                <div class="product__reviewer">
                  <div class="product__reviewer-avatar">SA</div>
                  <div class="product__reviewer-info">
                    <span class="product__reviewer-name">Sarah Ahmed</span>
                    <span class="product__review-date">March 5, 2024</span>
                  </div>
                </div>
                <div class="product__review-rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star"></i>
                </div>
                <div class="product__review-title">Great features, comfortable to wear</div>
                <p class="product__review-text">Very comfortable for all-day wear. The sleep tracking is detailed and the notifications work perfectly with my iPhone.</p>
                <div class="product__review-helpful">
                  <span>Was this helpful?</span>
                  <button class="product__helpful-btn" onclick="markHelpful(2)">
                    <i class="bi bi-hand-thumbs-up"></i> Yes (18)
                  </button>
                </div>
              </div>

              <!-- Review 3 -->
              <div class="product__review-item">
                <div class="product__reviewer">
                  <div class="product__reviewer-avatar">MK</div>
                  <div class="product__reviewer-info">
                    <span class="product__reviewer-name">Michael Kim</span>
                    <span class="product__review-date">February 28, 2024</span>
                  </div>
                </div>
                <div class="product__review-rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-half"></i>
                </div>
                <div class="product__review-title">Good value for money</div>
                <p class="product__review-text">Solid build quality and the GPS works well for running. Would definitely recommend.</p>
                <div class="product__review-helpful">
                  <span>Was this helpful?</span>
                  <button class="product__helpful-btn" onclick="markHelpful(3)">
                    <i class="bi bi-hand-thumbs-up"></i> Yes (12)
                  </button>
                </div>
              </div>

              <!-- Load More Reviews -->
              <div class="product__load-more">
                <button class="product__load-more-btn" onclick="loadMoreReviews()">
                  Load More Reviews <i class="bi bi-arrow-down"></i>
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Shipping & Returns Tab -->
        <div class="product__tab-pane" id="shipping">
          <div class="product__shipping">
            <h3>Shipping Information</h3>
            <div class="product__shipping-item">
              <i class="bi bi-truck"></i>
              <div>
                <strong>Standard Shipping (3-5 business days)</strong>
                <span>$4.99 or FREE on orders over $50</span>
              </div>
            </div>
            <div class="product__shipping-item">
              <i class="bi bi-lightning"></i>
              <div>
                <strong>Express Shipping (1-2 business days)</strong>
                <span>$12.99</span>
              </div>
            </div>
            <div class="product__shipping-item">
              <i class="bi bi-calendar"></i>
              <div>
                <strong>Same-Day Delivery</strong>
                <span>Available in select areas - $19.99</span>
              </div>
            </div>

            <h3>Return Policy</h3>
            <p>We offer 30-day hassle-free returns. Items must be unused and in original packaging. Return shipping is free for defective items.</p>
            
            <h3>Warranty</h3>
            <p>This product comes with a 1-year manufacturer's warranty. Extended warranty options available at checkout.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Related Products Section -->
    <section class="scroll-section related-scroll">
      <div class="scroll-section__container">
        <div class="scroll-section__header">
          <div>
            <span class="related-scroll__subtitle">You might also like</span>
            <h2>Related Products</h2>
          </div>
          <a href="category?slug=smart-watches" class="scroll-section__view-all">View All <i class="bi bi-arrow-right"></i></a>
        </div>

        <!-- Navigation Arrows -->
        <div class="scroll-section__nav">
          <button class="scroll-section__arrow prev" id="relatedPrev" aria-label="Previous products">
            <i class="bi bi-chevron-left"></i>
          </button>
          <button class="scroll-section__arrow next" id="relatedNext" aria-label="Next products">
            <i class="bi bi-chevron-right"></i>
          </button>
        </div>

        <div class="scroll-section__viewport" id="relatedViewport">
          <div class="scroll-section__track" id="relatedTrack">
            <!-- Related Product 1 -->
            <div class="scroll-section__item related-scroll__item">
              <div class="product-card__image">
                <a href="product?id=101">
                  <img src="https://images.unsplash.com/photo-1579586337278-3befd40fd17a?q=80&w=300&h=300&fit=crop" alt="Fitness Tracker">
                </a>
                <button class="product-scroll__wishlist" onclick="addToWishlist(101)">
                  <i class="bi bi-heart"></i>
                </button>
              </div>
              <div class="related-scroll__info">
                <a href="product?id=101" class="related-scroll__name">Fitness Tracker X2</a>
                <div class="related-scroll__rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star"></i>
                  <span>(89)</span>
                </div>
                <div class="related-scroll__price">
                  <span class="current">$49.99</span>
                  <span class="original">$69.99</span>
                </div>
                <button class="btn-cart" onclick="addToCart(101)">
                  <i class="bi bi-cart-plus"></i> Add
                </button>
              </div>
            </div>

            <!-- Related Product 2 -->
            <div class="scroll-section__item related-scroll__item">
              <div class="product-card__image">
                <a href="product?id=102">
                  <img src="https://images.unsplash.com/photo-1508685096489-7aacd43bd3b1?q=80&w=300&h=300&fit=crop" alt="Smart Watch">
                </a>
                <button class="product-scroll__wishlist" onclick="addToWishlist(102)">
                  <i class="bi bi-heart"></i>
                </button>
              </div>
              <div class="related-scroll__info">
                <a href="product?id=102" class="related-scroll__name">Smart Watch Lite</a>
                <div class="related-scroll__rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-half"></i>
                  <span>(156)</span>
                </div>
                <div class="related-scroll__price">
                  <span class="current">$79.99</span>
                  <span class="original">$99.99</span>
                </div>
                <button class="btn-cart" onclick="addToCart(102)">
                  <i class="bi bi-cart-plus"></i> Add
                </button>
              </div>
            </div>

            <!-- Related Product 3 -->
            <div class="scroll-section__item related-scroll__item">
              <div class="product-card__image">
                <a href="product?id=103">
                  <img src="https://images.unsplash.com/photo-1434493789847-aaa8f09b6b5d?q=80&w=300&h=300&fit=crop" alt="Sports Watch">
                </a>
                <button class="product-scroll__wishlist" onclick="addToWishlist(103)">
                  <i class="bi bi-heart"></i>
                </button>
              </div>
              <div class="related-scroll__info">
                <a href="product?id=103" class="related-scroll__name">Sports Watch Pro</a>
                <div class="related-scroll__rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <span>(203)</span>
                </div>
                <div class="related-scroll__price">
                  <span class="current">$99.99</span>
                </div>
                <button class="btn-cart" onclick="addToCart(103)">
                  <i class="bi bi-cart-plus"></i> Add
                </button>
              </div>
            </div>

            <!-- Related Product 4 -->
            <div class="scroll-section__item related-scroll__item">
              <div class="product-card__image">
                <a href="product?id=104">
                  <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=300&h=300&fit=crop" alt="Kids Watch">
                </a>
                <button class="product-scroll__wishlist" onclick="addToWishlist(104)">
                  <i class="bi bi-heart"></i>
                </button>
              </div>
              <div class="related-scroll__info">
                <a href="product?id=104" class="related-scroll__name">Kids Smart Watch</a>
                <div class="related-scroll__rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star"></i>
                  <span>(67)</span>
                </div>
                <div class="related-scroll__price">
                  <span class="current">$39.99</span>
                </div>
                <button class="btn-cart" onclick="addToCart(104)">
                  <i class="bi bi-cart-plus"></i> Add
                </button>
              </div>
            </div>

            <!-- Related Product 5 -->
            <div class="scroll-section__item related-scroll__item">
              <div class="product-card__image">
                <a href="product?id=105">
                  <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?q=80&w=300&h=300&fit=crop" alt="Premium Watch">
                </a>
                <button class="product-scroll__wishlist" onclick="addToWishlist(105)">
                  <i class="bi bi-heart"></i>
                </button>
              </div>
              <div class="related-scroll__info">
                <a href="product?id=105" class="related-scroll__name">Premium Edition</a>
                <div class="related-scroll__rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <span>(312)</span>
                </div>
                <div class="related-scroll__price">
                  <span class="current">$199.99</span>
                </div>
                <button class="btn-cart" onclick="addToCart(105)">
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

<!-- Review Modal -->
<div class="review-modal" id="reviewModal">
  <div class="review-modal__content">
    <div class="review-modal__header">
      <h2>Write a Review</h2>
      <button class="review-modal__close" onclick="closeReviewModal()">&times;</button>
    </div>
    <div class="review-modal__body">
      <form id="reviewForm">
        <div class="review-modal__rating">
          <label>Your Rating *</label>
          <div class="review-modal__stars">
            <i class="bi bi-star" data-rating="1"></i>
            <i class="bi bi-star" data-rating="2"></i>
            <i class="bi bi-star" data-rating="3"></i>
            <i class="bi bi-star" data-rating="4"></i>
            <i class="bi bi-star" data-rating="5"></i>
          </div>
        </div>
        <div class="review-modal__field">
          <label for="reviewTitle">Review Title *</label>
          <input type="text" id="reviewTitle" placeholder="Summarize your experience" required>
        </div>
        <div class="review-modal__field">
          <label for="reviewContent">Your Review *</label>
          <textarea id="reviewContent" rows="5" placeholder="Tell us about your experience with this product" required></textarea>
        </div>
        <div class="review-modal__field">
          <label for="reviewName">Display Name *</label>
          <input type="text" id="reviewName" value="John D." required>
        </div>
        <div class="review-modal__field">
          <label for="reviewEmail">Email (not published)</label>
          <input type="email" id="reviewEmail" placeholder="your@email.com">
        </div>
      </form>
    </div>
    <div class="review-modal__footer">
      <button class="review-modal__btn review-modal__btn--secondary" onclick="closeReviewModal()">Cancel</button>
      <button class="review-modal__btn review-modal__btn--primary" onclick="submitReview()">Submit Review</button>
    </div>
  </div>
</div>

<script>
// Image Gallery
function changeImage(thumbnail, imageSrc) {
  document.getElementById('mainProductImage').src = imageSrc;
  
  // Update active thumbnail
  document.querySelectorAll('.product__thumbnail').forEach(thumb => {
    thumb.classList.remove('active');
  });
  thumbnail.classList.add('active');
}

// Color selection
function selectColor(element) {
  document.querySelectorAll('.product__color-btn').forEach(btn => {
    btn.classList.remove('active');
  });
  element.classList.add('active');
}

// Size selection
function selectSize(element) {
  document.querySelectorAll('.product__size-btn').forEach(btn => {
    btn.classList.remove('active');
  });
  element.classList.add('active');
}

// Quantity update
function updateQuantity(action) {
  const input = document.getElementById('productQuantity');
  let value = parseInt(input.value);
  
  if (action === 'increase' && value < 10) {
    value++;
  } else if (action === 'decrease' && value > 1) {
    value--;
  }
  
  input.value = value;
}

// Tab switching
function switchTab(tabId) {
  // Update tab buttons
  document.querySelectorAll('.product__tab-btn').forEach(btn => {
    btn.classList.remove('active');
  });
  event.target.classList.add('active');
  
  // Update tab panes
  document.querySelectorAll('.product__tab-pane').forEach(pane => {
    pane.classList.remove('active');
  });
  document.getElementById(tabId).classList.add('active');
}

// Wishlist toggle
function toggleWishlist(productId) {
  const btn = document.querySelector('.product__gallery-wishlist i');
  
  if (btn.classList.contains('bi-heart')) {
    btn.classList.remove('bi-heart');
    btn.classList.add('bi-heart-fill');
    btn.style.color = 'var(--primary)';
    showNotification('Added to wishlist!');
  } else {
    btn.classList.remove('bi-heart-fill');
    btn.classList.add('bi-heart');
    btn.style.color = '';
    showNotification('Removed from wishlist');
  }
}

// Add to cart
function addToCart(productId) {
  const quantity = document.getElementById('productQuantity').value;
  console.log(`Added product ${productId} quantity ${quantity} to cart`);
  showNotification('Product added to cart!');
}

// Buy now
function buyNow(productId) {
  const quantity = document.getElementById('productQuantity').value;
  console.log(`Buy now product ${productId} quantity ${quantity}`);
  window.location.href = 'checkout';
}

// Review modal
function openReviewModal() {
  document.getElementById('reviewModal').classList.add('active');
  document.body.style.overflow = 'hidden';
}

function closeReviewModal() {
  document.getElementById('reviewModal').classList.remove('active');
  document.body.style.overflow = '';
}

// Star rating in modal
document.querySelectorAll('.review-modal__stars i').forEach(star => {
  star.addEventListener('mouseenter', function() {
    const rating = this.dataset.rating;
    highlightStars(rating);
  });
  
  star.addEventListener('mouseleave', function() {
    const currentRating = document.querySelector('.review-modal__stars').dataset.selected || 0;
    highlightStars(currentRating);
  });
  
  star.addEventListener('click', function() {
    const rating = this.dataset.rating;
    document.querySelector('.review-modal__stars').dataset.selected = rating;
    highlightStars(rating);
  });
});

function highlightStars(rating) {
  document.querySelectorAll('.review-modal__stars i').forEach((star, index) => {
    if (index < rating) {
      star.classList.remove('bi-star');
      star.classList.add('bi-star-fill');
    } else {
      star.classList.remove('bi-star-fill');
      star.classList.add('bi-star');
    }
  });
}

function submitReview() {
  // Validate form
  const title = document.getElementById('reviewTitle').value;
  const content = document.getElementById('reviewContent').value;
  const selectedRating = document.querySelector('.review-modal__stars').dataset.selected;
  
  if (!selectedRating || selectedRating === '0') {
    alert('Please select a rating');
    return;
  }
  
  if (!title || !content) {
    alert('Please fill in all required fields');
    return;
  }
  
  // Submit review
  console.log('Review submitted:', { rating: selectedRating, title, content });
  showNotification('Thank you for your review!');
  closeReviewModal();
}

// Mark helpful
function markHelpful(reviewId) {
  const btn = event.currentTarget;
  const count = btn.innerHTML.match(/\d+/)[0];
  btn.innerHTML = `<i class="bi bi-hand-thumbs-up-fill"></i> Yes (${parseInt(count) + 1})`;
  btn.disabled = true;
  showNotification('Thanks for your feedback!');
}

// Load more reviews
function loadMoreReviews() {
  showNotification('Loading more reviews...');
}

// Notification function
function showNotification(message) {
  // Create notification element if it doesn't exist
  let notification = document.querySelector('.product__notification');
  
  if (!notification) {
    notification = document.createElement('div');
    notification.className = 'product__notification';
    document.body.appendChild(notification);
  }
  
  notification.textContent = message;
  notification.classList.add('show');
  
  setTimeout(() => {
    notification.classList.remove('show');
  }, 3000);
}

// Related products carousel
document.addEventListener('DOMContentLoaded', function() {
  const viewport = document.getElementById('relatedViewport');
  const track = document.getElementById('relatedTrack');
  const prevBtn = document.getElementById('relatedPrev');
  const nextBtn = document.getElementById('relatedNext');
  
  if (viewport && track && prevBtn && nextBtn) {
    const scrollAmount = 245; // Width of one item + gap
    
    prevBtn.addEventListener('click', () => {
      viewport.scrollBy({
        left: -scrollAmount,
        behavior: 'smooth'
      });
    });
    
    nextBtn.addEventListener('click', () => {
      viewport.scrollBy({
        left: scrollAmount,
        behavior: 'smooth'
      });
    });
    
    viewport.addEventListener('scroll', () => {
      const maxScroll = track.scrollWidth - viewport.clientWidth;
      prevBtn.disabled = viewport.scrollLeft <= 0;
      nextBtn.disabled = viewport.scrollLeft >= maxScroll - 5;
    });
  }
});
</script>

<?php include __DIR__ . "/partials/footer.php"; ?>