<?php
require_once __DIR__ . "/partials/header.php";
?>
<link rel="stylesheet" href="<?= $css ?>shop.css?v=<?= filemtime($css.'shop.css') ?>">

<main class="shop-page">
  <div class="shop__container">
    <!-- Breadcrumb -->
    <div class="shop__breadcrumb">
      <a href="home">Home</a>
      <i class="bi bi-chevron-right"></i>
      <span>All Products</span>
    </div>

    <!-- Page Header -->
    <div class="shop__header">
      <h1 class="shop__title">All Products</h1>
      <p class="shop__subtitle">Discover our collection of quality products</p>
    </div>

    <!-- Shop Layout -->
    <div class="shop__layout">
      <!-- Sidebar Filters -->
      <aside class="shop__filters">
        <div class="shop__filters-header">
          <h3>Filters</h3>
          <button class="shop__filters-clear" onclick="clearAllFilters()">Clear All</button>
        </div>

        <!-- Search Filter -->
        <div class="shop__filter-group">
          <div class="shop__filter-title" onclick="toggleFilter(this)">
            <span>Search</span>
            <i class="bi bi-chevron-down"></i>
          </div>
          <div class="shop__filter-content">
            <div class="shop__filter-search">
              <i class="bi bi-search"></i>
              <input type="text" id="searchProducts" placeholder="Search products..." onkeyup="filterSearch()">
            </div>
          </div>
        </div>

        <!-- Categories Filter -->
        <div class="shop__filter-group active">
          <div class="shop__filter-title" onclick="toggleFilter(this)">
            <span>Categories</span>
            <i class="bi bi-chevron-up"></i>
          </div>
          <div class="shop__filter-content">
            <div class="shop__filter-options">
              <label class="shop__checkbox">
                <input type="checkbox" name="category" value="phones" checked>
                <span class="shop__checkmark"></span>
                <span class="shop__option-text">Phones</span>
                <span class="shop__option-count">(124)</span>
              </label>
              <label class="shop__checkbox">
                <input type="checkbox" name="category" value="laptops">
                <span class="shop__checkmark"></span>
                <span class="shop__option-text">Laptops</span>
                <span class="shop__option-count">(98)</span>
              </label>
              <label class="shop__checkbox">
                <input type="checkbox" name="category" value="gaming">
                <span class="shop__checkmark"></span>
                <span class="shop__option-text">Gaming</span>
                <span class="shop__option-count">(76)</span>
              </label>
              <label class="shop__checkbox">
                <input type="checkbox" name="category" value="electronics">
                <span class="shop__checkmark"></span>
                <span class="shop__option-text">Electronics</span>
                <span class="shop__option-count">(156)</span>
              </label>
              <label class="shop__checkbox">
                <input type="checkbox" name="category" value="fashion">
                <span class="shop__checkmark"></span>
                <span class="shop__option-text">Fashion</span>
                <span class="shop__option-count">(203)</span>
              </label>
              <label class="shop__checkbox">
                <input type="checkbox" name="category" value="home">
                <span class="shop__checkmark"></span>
                <span class="shop__option-text">Home & Living</span>
                <span class="shop__option-count">(167)</span>
              </label>
              <label class="shop__checkbox">
                <input type="checkbox" name="category" value="beauty">
                <span class="shop__checkmark"></span>
                <span class="shop__option-text">Beauty</span>
                <span class="shop__option-count">(89)</span>
              </label>
            </div>
            <button class="shop__filter-more" onclick="showMoreCategories()">Show More +</button>
          </div>
        </div>

        <!-- Price Range Filter -->
        <div class="shop__filter-group active">
          <div class="shop__filter-title" onclick="toggleFilter(this)">
            <span>Price Range</span>
            <i class="bi bi-chevron-up"></i>
          </div>
          <div class="shop__filter-content">
            <div class="shop__price-range">
              <div class="shop__price-inputs">
                <div class="shop__price-input">
                  <label>Min (₦)</label>
                  <input type="number" id="minPrice" value="0" min="0" step="1000">
                </div>
                <span>—</span>
                <div class="shop__price-input">
                  <label>Max (₦)</label>
                  <input type="number" id="maxPrice" value="500000" min="0" step="1000">
                </div>
              </div>
              <div class="shop__price-presets">
                <button class="shop__price-preset" onclick="setPricePreset(0, 50000)">Under ₦50k</button>
                <button class="shop__price-preset" onclick="setPricePreset(50000, 100000)">₦50k - ₦100k</button>
                <button class="shop__price-preset" onclick="setPricePreset(100000, 200000)">₦100k - ₦200k</button>
                <button class="shop__price-preset" onclick="setPricePreset(200000, 500000)">₦200k+</button>
              </div>
              <button class="shop__price-apply" onclick="applyPriceFilter()">Apply</button>
            </div>
          </div>
        </div>

        <!-- Brand Filter -->
        <div class="shop__filter-group">
          <div class="shop__filter-title" onclick="toggleFilter(this)">
            <span>Brand</span>
            <i class="bi bi-chevron-down"></i>
          </div>
          <div class="shop__filter-content">
            <div class="shop__filter-search">
              <i class="bi bi-search"></i>
              <input type="text" placeholder="Search brands" onkeyup="filterBrands(this)">
            </div>
            <div class="shop__filter-options">
              <label class="shop__checkbox">
                <input type="checkbox" name="brand" value="apple">
                <span class="shop__checkmark"></span>
                <span class="shop__option-text">Apple</span>
                <span class="shop__option-count">(45)</span>
              </label>
              <label class="shop__checkbox">
                <input type="checkbox" name="brand" value="samsung">
                <span class="shop__checkmark"></span>
                <span class="shop__option-text">Samsung</span>
                <span class="shop__option-count">(38)</span>
              </label>
              <label class="shop__checkbox">
                <input type="checkbox" name="brand" value="sony">
                <span class="shop__checkmark"></span>
                <span class="shop__option-text">Sony</span>
                <span class="shop__option-count">(32)</span>
              </label>
              <label class="shop__checkbox">
                <input type="checkbox" name="brand" value="lg">
                <span class="shop__checkmark"></span>
                <span class="shop__option-text">LG</span>
                <span class="shop__option-count">(28)</span>
              </label>
              <label class="shop__checkbox">
                <input type="checkbox" name="brand" value="dell">
                <span class="shop__checkmark"></span>
                <span class="shop__option-text">Dell</span>
                <span class="shop__option-count">(24)</span>
              </label>
            </div>
          </div>
        </div>

        <!-- Rating Filter -->
        <div class="shop__filter-group">
          <div class="shop__filter-title" onclick="toggleFilter(this)">
            <span>Customer Rating</span>
            <i class="bi bi-chevron-down"></i>
          </div>
          <div class="shop__filter-content">
            <div class="shop__filter-options">
              <label class="shop__checkbox">
                <input type="checkbox" name="rating" value="5">
                <span class="shop__checkmark"></span>
                <span class="shop__rating-stars">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </span>
              </label>
              <label class="shop__checkbox">
                <input type="checkbox" name="rating" value="4">
                <span class="shop__checkmark"></span>
                <span class="shop__rating-stars">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star"></i>
                </span>
              </label>
              <label class="shop__checkbox">
                <input type="checkbox" name="rating" value="3">
                <span class="shop__checkmark"></span>
                <span class="shop__rating-stars">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star"></i>
                  <i class="bi bi-star"></i>
                </span>
              </label>
            </div>
          </div>
        </div>

        <!-- Availability Filter -->
        <div class="shop__filter-group">
          <div class="shop__filter-title" onclick="toggleFilter(this)">
            <span>Availability</span>
            <i class="bi bi-chevron-down"></i>
          </div>
          <div class="shop__filter-content">
            <div class="shop__filter-options">
              <label class="shop__checkbox">
                <input type="checkbox" name="availability" value="in-stock" checked>
                <span class="shop__checkmark"></span>
                <span class="shop__option-text">In Stock</span>
              </label>
              <label class="shop__checkbox">
                <input type="checkbox" name="availability" value="out-of-stock">
                <span class="shop__checkmark"></span>
                <span class="shop__option-text">Out of Stock</span>
              </label>
            </div>
          </div>
        </div>

        <!-- Apply Filters Button (Mobile) -->
        <button class="shop__filters-apply" onclick="applyFilters()">Apply Filters</button>
      </aside>

      <!-- Products Section -->
      <div class="shop__products">
        <!-- Toolbar -->
        <div class="shop__toolbar">
          <div class="shop__toolbar-left">
            <span class="shop__results">Showing 1-12 of 847 results</span>
          </div>
          <div class="shop__toolbar-right">
            <div class="shop__sort">
              <label for="sortBy">Sort by:</label>
              <select id="sortBy" class="shop__sort-select" onchange="sortProducts(this)">
                <option value="featured">Featured</option>
                <option value="newest">Newest Arrivals</option>
                <option value="price-low">Price: Low to High</option>
                <option value="price-high">Price: High to Low</option>
                <option value="rating">Top Rated</option>
                <option value="discount">Biggest Discount</option>
              </select>
            </div>
            <div class="shop__view">
              <button class="shop__view-btn active" onclick="changeView('grid')" title="Grid View">
                <i class="bi bi-grid-3x3-gap-fill"></i>
              </button>
              <button class="shop__view-btn" onclick="changeView('list')" title="List View">
                <i class="bi bi-list-ul"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Products Grid -->
        <div class="shop__grid" id="productsGrid">
          <!-- Product 1 -->
          <article class="shop__product-card">
            <div class="shop__product-image">
              <a href="product?id=1">
                <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?q=80&w=300&h=300&fit=crop" alt="Smart Watch Pro" loading="lazy">
              </a>
              <span class="shop__product-badge shop__product-badge--sale">-30%</span>
              <button class="shop__product-wishlist" onclick="toggleWishlist(1)" aria-label="Add to wishlist">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="shop__product-info">
              <a href="product?id=1" class="shop__product-name">Smart Watch Pro</a>
              <div class="shop__product-rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-half"></i>
                <span class="shop__product-reviews">(128)</span>
              </div>
              <div class="shop__product-price">
                <span class="shop__product-current">₦89,990</span>
                <span class="shop__product-original">₦129,990</span>
              </div>
              <button class="shop__product-add" onclick="addToCart(1)">
                <i class="bi bi-cart-plus"></i> Add to Cart
              </button>
            </div>
          </article>

          <!-- Product 2 -->
          <article class="shop__product-card">
            <div class="shop__product-image">
              <a href="product?id=2">
                <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=300&h=300&fit=crop" alt="Wireless Headphones" loading="lazy">
              </a>
              <span class="shop__product-badge shop__product-badge--sale">-25%</span>
              <button class="shop__product-wishlist" onclick="toggleWishlist(2)" aria-label="Add to wishlist">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="shop__product-info">
              <a href="product?id=2" class="shop__product-name">Wireless Headphones</a>
              <div class="shop__product-rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <span class="shop__product-reviews">(256)</span>
              </div>
              <div class="shop__product-price">
                <span class="shop__product-current">₦59,990</span>
                <span class="shop__product-original">₦79,990</span>
              </div>
              <button class="shop__product-add" onclick="addToCart(2)">
                <i class="bi bi-cart-plus"></i> Add to Cart
              </button>
            </div>
          </article>

          <!-- Product 3 -->
          <article class="shop__product-card">
            <div class="shop__product-image">
              <a href="product?id=3">
                <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=300&h=300&fit=crop" alt="Fitness Tracker" loading="lazy">
              </a>
              <span class="shop__product-badge shop__product-badge--sale">-10%</span>
              <button class="shop__product-wishlist" onclick="toggleWishlist(3)" aria-label="Add to wishlist">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="shop__product-info">
              <a href="product?id=3" class="shop__product-name">Fitness Tracker</a>
              <div class="shop__product-rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
                <span class="shop__product-reviews">(76)</span>
              </div>
              <div class="shop__product-price">
                <span class="shop__product-current">₦44,990</span>
                <span class="shop__product-original">₦49,990</span>
              </div>
              <button class="shop__product-add" onclick="addToCart(3)">
                <i class="bi bi-cart-plus"></i> Add to Cart
              </button>
            </div>
          </article>

          <!-- Product 4 -->
          <article class="shop__product-card">
            <div class="shop__product-image">
              <a href="product?id=4">
                <img src="https://images.unsplash.com/photo-1593642702821-c8da6771f0c6?q=80&w=300&h=300&fit=crop" alt="Android Tablet" loading="lazy">
              </a>
              <span class="shop__product-badge shop__product-badge--sale">-20%</span>
              <button class="shop__product-wishlist" onclick="toggleWishlist(4)" aria-label="Add to wishlist">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="shop__product-info">
              <a href="product?id=4" class="shop__product-name">Android Tablet</a>
              <div class="shop__product-rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <span class="shop__product-reviews">(167)</span>
              </div>
              <div class="shop__product-price">
                <span class="shop__product-current">₦199,990</span>
                <span class="shop__product-original">₦249,990</span>
              </div>
              <button class="shop__product-add" onclick="addToCart(4)">
                <i class="bi bi-cart-plus"></i> Add to Cart
              </button>
            </div>
          </article>

          <!-- Product 5 -->
          <article class="shop__product-card">
            <div class="shop__product-image">
              <a href="product?id=5">
                <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=300&h=300&fit=crop" alt="Premium Headphones" loading="lazy">
              </a>
              <span class="shop__product-badge shop__product-badge--sale">-15%</span>
              <button class="shop__product-wishlist" onclick="toggleWishlist(5)" aria-label="Add to wishlist">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="shop__product-info">
              <a href="product?id=5" class="shop__product-name">Premium Headphones</a>
              <div class="shop__product-rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-half"></i>
                <span class="shop__product-reviews">(203)</span>
              </div>
              <div class="shop__product-price">
                <span class="shop__product-current">₦84,990</span>
                <span class="shop__product-original">₦99,990</span>
              </div>
              <button class="shop__product-add" onclick="addToCart(5)">
                <i class="bi bi-cart-plus"></i> Add to Cart
              </button>
            </div>
          </article>

          <!-- Product 6 -->
          <article class="shop__product-card">
            <div class="shop__product-image">
              <a href="product?id=6">
                <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?q=80&w=300&h=300&fit=crop" alt="Instant Camera" loading="lazy">
              </a>
              <span class="shop__product-badge shop__product-badge--sale">-40%</span>
              <button class="shop__product-wishlist" onclick="toggleWishlist(6)" aria-label="Add to wishlist">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="shop__product-info">
              <a href="product?id=6" class="shop__product-name">Instant Camera</a>
              <div class="shop__product-rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-half"></i>
                <span class="shop__product-reviews">(98)</span>
              </div>
              <div class="shop__product-price">
                <span class="shop__product-current">₦149,990</span>
                <span class="shop__product-original">₦249,990</span>
              </div>
              <button class="shop__product-add" onclick="addToCart(6)">
                <i class="bi bi-cart-plus"></i> Add to Cart
              </button>
            </div>
          </article>

          <!-- Product 7 -->
          <article class="shop__product-card">
            <div class="shop__product-image">
              <a href="product?id=7">
                <img src="https://images.unsplash.com/photo-1606813909353-6c7a8b8e8cfa?q=80&w=300&h=300&fit=crop" alt="Gaming Console" loading="lazy">
              </a>
              <span class="shop__product-badge shop__product-badge--sale">-35%</span>
              <button class="shop__product-wishlist" onclick="toggleWishlist(7)" aria-label="Add to wishlist">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="shop__product-info">
              <a href="product?id=7" class="shop__product-name">Gaming Console</a>
              <div class="shop__product-rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <span class="shop__product-reviews">(312)</span>
              </div>
              <div class="shop__product-price">
                <span class="shop__product-current">₦299,990</span>
                <span class="shop__product-original">₦459,990</span>
              </div>
              <button class="shop__product-add" onclick="addToCart(7)">
                <i class="bi bi-cart-plus"></i> Add to Cart
              </button>
            </div>
          </article>

          <!-- Product 8 -->
          <article class="shop__product-card">
            <div class="shop__product-image">
              <a href="product?id=8">
                <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?q=80&w=300&h=300&fit=crop" alt="Drone" loading="lazy">
              </a>
              <span class="shop__product-badge shop__product-badge--sale">-45%</span>
              <button class="shop__product-wishlist" onclick="toggleWishlist(8)" aria-label="Add to wishlist">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="shop__product-info">
              <a href="product?id=8" class="shop__product-name">Drone Pro</a>
              <div class="shop__product-rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <span class="shop__product-reviews">(67)</span>
              </div>
              <div class="shop__product-price">
                <span class="shop__product-current">₦549,990</span>
                <span class="shop__product-original">₦999,990</span>
              </div>
              <button class="shop__product-add" onclick="addToCart(8)">
                <i class="bi bi-cart-plus"></i> Add to Cart
              </button>
            </div>
          </article>

          <!-- Product 9 -->
          <article class="shop__product-card">
            <div class="shop__product-image">
              <a href="product?id=9">
                <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?q=80&w=300&h=300&fit=crop" alt="Designer Bag" loading="lazy">
              </a>
              <span class="shop__product-badge shop__product-badge--sale">-50%</span>
              <button class="shop__product-wishlist" onclick="toggleWishlist(9)" aria-label="Add to wishlist">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="shop__product-info">
              <a href="product?id=9" class="shop__product-name">Designer Bag</a>
              <div class="shop__product-rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
                <span class="shop__product-reviews">(45)</span>
              </div>
              <div class="shop__product-price">
                <span class="shop__product-current">₦124,990</span>
                <span class="shop__product-original">₦249,990</span>
              </div>
              <button class="shop__product-add" onclick="addToCart(9)">
                <i class="bi bi-cart-plus"></i> Add to Cart
              </button>
            </div>
          </article>

          <!-- Product 10 -->
          <article class="shop__product-card">
            <div class="shop__product-image">
              <a href="product?id=10">
                <img src="https://images.unsplash.com/photo-1484101403633-562f891dc89a?q=80&w=300&h=300&fit=crop" alt="Table Lamp" loading="lazy">
              </a>
              <span class="shop__product-badge shop__product-badge--new">New</span>
              <button class="shop__product-wishlist" onclick="toggleWishlist(10)" aria-label="Add to wishlist">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="shop__product-info">
              <a href="product?id=10" class="shop__product-name">Table Lamp</a>
              <div class="shop__product-rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <span class="shop__product-reviews">(67)</span>
              </div>
              <div class="shop__product-price">
                <span class="shop__product-current">₦42,990</span>
                <span class="shop__product-original">₦49,990</span>
              </div>
              <button class="shop__product-add" onclick="addToCart(10)">
                <i class="bi bi-cart-plus"></i> Add to Cart
              </button>
            </div>
          </article>
        </div>

        <!-- Load More -->
        <div class="shop__load-more">
          <button class="shop__load-more-btn" onclick="loadMoreProducts()">
            Load More Products <i class="bi bi-arrow-down"></i>
          </button>
        </div>

        <!-- Pagination -->
        <div class="shop__pagination">
          <button class="shop__pagination-btn" disabled>
            <i class="bi bi-chevron-left"></i>
          </button>
          <div class="shop__pagination-numbers">
            <button class="shop__pagination-number active">1</button>
            <button class="shop__pagination-number">2</button>
            <button class="shop__pagination-number">3</button>
            <button class="shop__pagination-number">4</button>
            <button class="shop__pagination-number">5</button>
            <span class="shop__pagination-dots">...</span>
            <button class="shop__pagination-number">24</button>
          </div>
          <button class="shop__pagination-btn">
            <i class="bi bi-chevron-right"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</main>

<script>
// Toggle filter accordion
function toggleFilter(element) {
  const filterGroup = element.closest('.shop__filter-group');
  filterGroup.classList.toggle('active');
  
  const icon = element.querySelector('i');
  if (filterGroup.classList.contains('active')) {
    icon.classList.remove('bi-chevron-down');
    icon.classList.add('bi-chevron-up');
  } else {
    icon.classList.remove('bi-chevron-up');
    icon.classList.add('bi-chevron-down');
  }
}

// Clear all filters
function clearAllFilters() {
  document.querySelectorAll('.shop__checkbox input').forEach(checkbox => {
    checkbox.checked = false;
  });
  document.getElementById('minPrice').value = 0;
  document.getElementById('maxPrice').value = 500000;
  document.getElementById('searchProducts').value = '';
  showNotification('All filters cleared');
}

// Search filter
function filterSearch() {
  const searchTerm = document.getElementById('searchProducts').value;
  showNotification(`Searching: ${searchTerm}`);
}

// Price preset
function setPricePreset(min, max) {
  document.getElementById('minPrice').value = min;
  document.getElementById('maxPrice').value = max;
}

// Apply price filter
function applyPriceFilter() {
  const min = document.getElementById('minPrice').value;
  const max = document.getElementById('maxPrice').value;
  showNotification(`Price filter: ₦${min} - ₦${max}`);
}

// Filter brands by search
function filterBrands(input) {
  const searchTerm = input.value.toLowerCase();
  const brands = document.querySelectorAll('.shop__checkbox');
  
  // This would filter brand checkboxes in a real implementation
}

// Sort products
function sortProducts(select) {
  const value = select.value;
  showNotification(`Sorted by: ${value}`);
}

// Change view (grid/list)
function changeView(view) {
  const gridBtn = document.querySelectorAll('.shop__view-btn')[0];
  const listBtn = document.querySelectorAll('.shop__view-btn')[1];
  const productsGrid = document.getElementById('productsGrid');
  
  if (view === 'grid') {
    gridBtn.classList.add('active');
    listBtn.classList.remove('active');
    productsGrid.classList.remove('shop__grid--list');
  } else {
    listBtn.classList.add('active');
    gridBtn.classList.remove('active');
    productsGrid.classList.add('shop__grid--list');
  }
}

// Show more categories
function showMoreCategories() {
  showNotification('Loading more categories...');
}

// Apply filters (mobile)
function applyFilters() {
  document.querySelector('.shop__filters').classList.remove('active');
  showNotification('Filters applied');
}

// Wishlist toggle
function toggleWishlist(productId) {
  const btn = event.currentTarget;
  const icon = btn.querySelector('i');
  
  if (icon.classList.contains('bi-heart')) {
    icon.classList.remove('bi-heart');
    icon.classList.add('bi-heart-fill');
    icon.style.color = 'var(--primary)';
    showNotification('Added to wishlist!');
  } else {
    icon.classList.remove('bi-heart-fill');
    icon.classList.add('bi-heart');
    icon.style.color = '';
    showNotification('Removed from wishlist');
  }
}

// Add to cart
function addToCart(productId) {
  showNotification('Product added to cart!');
}

// Load more products
function loadMoreProducts() {
  showNotification('Loading more products...');
}

// Notification function
function showNotification(message) {
  let notification = document.querySelector('.shop__notification');
  
  if (!notification) {
    notification = document.createElement('div');
    notification.className = 'shop__notification';
    document.body.appendChild(notification);
  }
  
  notification.textContent = message;
  notification.classList.add('show');
  
  setTimeout(() => {
    notification.classList.remove('show');
  }, 3000);
}

// Mobile filters toggle
document.addEventListener('DOMContentLoaded', function() {
  if (window.innerWidth <= 768) {
    const filterBtn = document.createElement('button');
    filterBtn.className = 'shop__mobile-filter-btn';
    filterBtn.innerHTML = '<i class="bi bi-sliders2"></i> Filters';
    filterBtn.onclick = function() {
      document.querySelector('.shop__filters').classList.toggle('active');
    };
    
    const toolbar = document.querySelector('.shop__toolbar-left');
    if (toolbar) {
      toolbar.appendChild(filterBtn);
    }
  }
});
</script>

<?php include __DIR__ . "/partials/footer.php"; ?>