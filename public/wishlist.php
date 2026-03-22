<?php
require_once __DIR__ . "/partials/header.php";
?>
<link rel="stylesheet" href="<?= $css ?>wishlist.css?v=<?= filemtime($css.'wishlist.css') ?>">

<main class="wishlist-page">
  <div class="wishlist__container">
    <!-- Page Header -->
    <div class="wishlist__header">
      <h1>My Wishlist</h1>
      <span class="wishlist__count">8 items</span>
    </div>

    <!-- Wishlist Grid -->
    <div class="wishlist__grid">
      <!-- Wishlist Item 1 -->
      <div class="wishlist__card">
        <div class="wishlist__image-wrapper">
          <a href="product?id=1">
            <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?q=80&w=300&h=300&fit=crop" alt="Smart Watch Pro">
          </a>
          <button class="wishlist__remove" onclick="removeFromWishlist(1)" aria-label="Remove from wishlist">
            <i class="bi bi-x"></i>
          </button>
        </div>
        <div class="wishlist__content">
          <a href="product?id=1" class="wishlist__title">Smart Watch Pro</a>
          <div class="wishlist__rating">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-half"></i>
            <span class="wishlist__reviews">(128)</span>
          </div>
          <div class="wishlist__price">
            <span class="wishlist__current">$89.99</span>
            <span class="wishlist__original">$129.99</span>
          </div>
          <div class="wishlist__stock wishlist__stock--in">In Stock</div>
          <button class="wishlist__add" onclick="addToCart(1)">
            <i class="bi bi-cart-plus"></i> Add to Cart
          </button>
        </div>
      </div>

      <!-- Wishlist Item 2 -->
      <div class="wishlist__card">
        <div class="wishlist__image-wrapper">
          <a href="product?id=2">
            <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=300&h=300&fit=crop" alt="Premium Headphones">
          </a>
          <button class="wishlist__remove" onclick="removeFromWishlist(2)" aria-label="Remove from wishlist">
            <i class="bi bi-x"></i>
          </button>
        </div>
        <div class="wishlist__content">
          <a href="product?id=2" class="wishlist__title">Premium Wireless Headphones</a>
          <div class="wishlist__rating">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <span class="wishlist__reviews">(256)</span>
          </div>
          <div class="wishlist__price">
            <span class="wishlist__current">$59.99</span>
            <span class="wishlist__original">$79.99</span>
          </div>
          <div class="wishlist__stock wishlist__stock--in">In Stock</div>
          <button class="wishlist__add" onclick="addToCart(2)">
            <i class="bi bi-cart-plus"></i> Add to Cart
          </button>
        </div>
      </div>

      <!-- Wishlist Item 3 -->
      <div class="wishlist__card">
        <div class="wishlist__image-wrapper">
          <a href="product?id=3">
            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=300&h=300&fit=crop" alt="Fitness Tracker">
          </a>
          <button class="wishlist__remove" onclick="removeFromWishlist(3)" aria-label="Remove from wishlist">
            <i class="bi bi-x"></i>
          </button>
        </div>
        <div class="wishlist__content">
          <a href="product?id=3" class="wishlist__title">Fitness Tracker Watch</a>
          <div class="wishlist__rating">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star"></i>
            <span class="wishlist__reviews">(76)</span>
          </div>
          <div class="wishlist__price">
            <span class="wishlist__current">$44.99</span>
            <span class="wishlist__original">$49.99</span>
          </div>
          <div class="wishlist__stock wishlist__stock--low">Only 3 left</div>
          <button class="wishlist__add" onclick="addToCart(3)">
            <i class="bi bi-cart-plus"></i> Add to Cart
          </button>
        </div>
      </div>

      <!-- Wishlist Item 4 -->
      <div class="wishlist__card">
        <div class="wishlist__image-wrapper">
          <a href="product?id=4">
            <img src="https://images.unsplash.com/photo-1593642702821-c8da6771f0c6?q=80&w=300&h=300&fit=crop" alt="Android Tablet">
          </a>
          <button class="wishlist__remove" onclick="removeFromWishlist(4)" aria-label="Remove from wishlist">
            <i class="bi bi-x"></i>
          </button>
        </div>
        <div class="wishlist__content">
          <a href="product?id=4" class="wishlist__title">Android Tablet</a>
          <div class="wishlist__rating">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <span class="wishlist__reviews">(167)</span>
          </div>
          <div class="wishlist__price">
            <span class="wishlist__current">$199.99</span>
            <span class="wishlist__original">$249.99</span>
          </div>
          <div class="wishlist__stock wishlist__stock--in">In Stock</div>
          <button class="wishlist__add" onclick="addToCart(4)">
            <i class="bi bi-cart-plus"></i> Add to Cart
          </button>
        </div>
      </div>

      <!-- Wishlist Item 5 -->
      <div class="wishlist__card">
        <div class="wishlist__image-wrapper">
          <a href="product?id=5">
            <img src="https://images.unsplash.com/photo-1606813909353-6c7a8b8e8cfa?q=80&w=300&h=300&fit=crop" alt="Gaming Console">
          </a>
          <button class="wishlist__remove" onclick="removeFromWishlist(5)" aria-label="Remove from wishlist">
            <i class="bi bi-x"></i>
          </button>
        </div>
        <div class="wishlist__content">
          <a href="product?id=5" class="wishlist__title">Gaming Console</a>
          <div class="wishlist__rating">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <span class="wishlist__reviews">(312)</span>
          </div>
          <div class="wishlist__price">
            <span class="wishlist__current">$299.99</span>
            <span class="wishlist__original">$399.99</span>
          </div>
          <div class="wishlist__stock wishlist__stock--out">Out of Stock</div>
          <button class="wishlist__add" onclick="addToCart(5)" disabled>
            <i class="bi bi-cart-plus"></i> Add to Cart
          </button>
        </div>
      </div>

      <!-- Wishlist Item 6 -->
      <div class="wishlist__card">
        <div class="wishlist__image-wrapper">
          <a href="product?id=6">
            <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?q=80&w=300&h=300&fit=crop" alt="Instant Camera">
          </a>
          <button class="wishlist__remove" onclick="removeFromWishlist(6)" aria-label="Remove from wishlist">
            <i class="bi bi-x"></i>
          </button>
        </div>
        <div class="wishlist__content">
          <a href="product?id=6" class="wishlist__title">Instant Camera</a>
          <div class="wishlist__rating">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-half"></i>
            <span class="wishlist__reviews">(89)</span>
          </div>
          <div class="wishlist__price">
            <span class="wishlist__current">$149.99</span>
            <span class="wishlist__original">$249.99</span>
          </div>
          <div class="wishlist__stock wishlist__stock--in">In Stock</div>
          <button class="wishlist__add" onclick="addToCart(6)">
            <i class="bi bi-cart-plus"></i> Add to Cart
          </button>
        </div>
      </div>

      <!-- Wishlist Item 7 -->
      <div class="wishlist__card">
        <div class="wishlist__image-wrapper">
          <a href="product?id=7">
            <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?q=80&w=300&h=300&fit=crop" alt="Designer Bag">
          </a>
          <button class="wishlist__remove" onclick="removeFromWishlist(7)" aria-label="Remove from wishlist">
            <i class="bi bi-x"></i>
          </button>
        </div>
        <div class="wishlist__content">
          <a href="product?id=7" class="wishlist__title">Designer Bag</a>
          <div class="wishlist__rating">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star"></i>
            <span class="wishlist__reviews">(45)</span>
          </div>
          <div class="wishlist__price">
            <span class="wishlist__current">$124.99</span>
            <span class="wishlist__original">$249.99</span>
          </div>
          <div class="wishlist__stock wishlist__stock--in">In Stock</div>
          <button class="wishlist__add" onclick="addToCart(7)">
            <i class="bi bi-cart-plus"></i> Add to Cart
          </button>
        </div>
      </div>

      <!-- Wishlist Item 8 -->
      <div class="wishlist__card">
        <div class="wishlist__image-wrapper">
          <a href="product?id=8">
            <img src="https://images.unsplash.com/photo-1484101403633-562f891dc89a?q=80&w=300&h=300&fit=crop" alt="Table Lamp">
          </a>
          <button class="wishlist__remove" onclick="removeFromWishlist(8)" aria-label="Remove from wishlist">
            <i class="bi bi-x"></i>
          </button>
        </div>
        <div class="wishlist__content">
          <a href="product?id=8" class="wishlist__title">Table Lamp</a>
          <div class="wishlist__rating">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <span class="wishlist__reviews">(67)</span>
          </div>
          <div class="wishlist__price">
            <span class="wishlist__current">$42.99</span>
            <span class="wishlist__original">$49.99</span>
          </div>
          <div class="wishlist__stock wishlist__stock--in">In Stock</div>
          <button class="wishlist__add" onclick="addToCart(8)">
            <i class="bi bi-cart-plus"></i> Add to Cart
          </button>
        </div>
      </div>
    </div>

    <!-- Share Wishlist -->
    <div class="wishlist__share">
      <p class="wishlist__share-text">Share your wishlist:</p>
      <div class="wishlist__share-buttons">
        <a href="#" class="wishlist__share-btn wishlist__share-btn--facebook" aria-label="Share on Facebook">
          <i class="bi bi-facebook"></i>
        </a>
        <a href="#" class="wishlist__share-btn wishlist__share-btn--twitter" aria-label="Share on Twitter">
          <i class="bi bi-twitter-x"></i>
        </a>
        <a href="#" class="wishlist__share-btn wishlist__share-btn--whatsapp" aria-label="Share on WhatsApp">
          <i class="bi bi-whatsapp"></i>
        </a>
        <a href="#" class="wishlist__share-btn wishlist__share-btn--email" aria-label="Share via Email">
          <i class="bi bi-envelope"></i>
        </a>
      </div>
    </div>
  </div>
</main>

<script>
function removeFromWishlist(productId) {
  console.log('Remove product ' + productId + ' from wishlist');
  // In real implementation, this would remove the item
  if (confirm('Remove this item from your wishlist?')) {
    alert('Item removed from wishlist');
  }
}

function addToCart(productId) {
  console.log('Add product ' + productId + ' to cart');
  // In real implementation, this would add to cart
  alert('Product added to cart!');
}
</script>

<?php include __DIR__ . "/partials/footer.php"; ?>