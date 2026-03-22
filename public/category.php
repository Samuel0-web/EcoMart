<?php
require_once __DIR__ . "/partials/header.php";
?>
<link rel="stylesheet" href="<?= $css ?>category.css?v=<?= filemtime($css.'category.css') ?>">

<main class="category-page">
  <div class="category__container">
    <!-- Breadcrumb -->
    <div class="category__breadcrumb">
      <a href="home">Home</a>
      <i class="bi bi-chevron-right"></i>
      <span>Electronics</span>
    </div>

    <!-- Category Header -->
    <div class="category__header">
      <div class="category__title-wrapper">
        <h1 class="category__title">Electronics</h1>
        <span class="category__count">1,248 products</span>
      </div>
      <div class="category__subcategories">
        <a href="category?slug=smartphones" class="category__subcategory">Smartphones</a>
        <a href="category?slug=laptops" class="category__subcategory">Laptops</a>
        <a href="category?slug=tablets" class="category__subcategory">Tablets</a>
        <a href="category?slug=headphones" class="category__subcategory">Headphones</a>
        <a href="category?slug=smart-watches" class="category__subcategory">Smart Watches</a>
        <a href="category?slug=cameras" class="category__subcategory">Cameras</a>
        <a href="category?slug=gaming" class="category__subcategory">Gaming</a>
        <a href="category?slug=tvs" class="category__subcategory">TVs</a>
        <a href="category?slug=audio" class="category__subcategory">Audio</a>
        <a href="category?slug=accessories" class="category__subcategory">Accessories</a>
      </div>
    </div>

    <!-- Main Content -->
    <div class="category__layout">
      <!-- Sidebar Filters -->
      <aside class="category__filters">
        <div class="category__filters-header">
          <h3>Filters</h3>
          <button class="category__filters-clear" onclick="clearFilters()">Clear All</button>
        </div>

        <!-- Price Range Filter -->
        <div class="category__filter-group">
          <div class="category__filter-title" onclick="toggleFilter(this)">
            <span>Price Range</span>
            <i class="bi bi-chevron-down"></i>
          </div>
          <div class="category__filter-content">
            <div class="category__price-range">
              <div class="category__price-inputs">
                <div class="category__price-input">
                  <label>Min</label>
                  <input type="number" id="minPrice" value="0" min="0" step="10">
                </div>
                <span>—</span>
                <div class="category__price-input">
                  <label>Max</label>
                  <input type="number" id="maxPrice" value="1000" min="0" step="10">
                </div>
              </div>
              <button class="category__price-apply" onclick="applyPriceFilter()">Apply</button>
            </div>
          </div>
        </div>

        <!-- Brand Filter -->
        <div class="category__filter-group">
          <div class="category__filter-title" onclick="toggleFilter(this)">
            <span>Brand</span>
            <i class="bi bi-chevron-down"></i>
          </div>
          <div class="category__filter-content">
            <div class="category__filter-search">
              <i class="bi bi-search"></i>
              <input type="text" placeholder="Search brands" onkeyup="filterBrands(this)">
            </div>
            <div class="category__filter-options">
              <label class="category__checkbox">
                <input type="checkbox" name="brand" value="apple">
                <span class="category__checkmark"></span>
                <span class="category__option-text">Apple</span>
                <span class="category__option-count">(124)</span>
              </label>
              <label class="category__checkbox">
                <input type="checkbox" name="brand" value="samsung">
                <span class="category__checkmark"></span>
                <span class="category__option-text">Samsung</span>
                <span class="category__option-count">(98)</span>
              </label>
              <label class="category__checkbox">
                <input type="checkbox" name="brand" value="sony">
                <span class="category__checkmark"></span>
                <span class="category__option-text">Sony</span>
                <span class="category__option-count">(76)</span>
              </label>
              <label class="category__checkbox">
                <input type="checkbox" name="brand" value="lg">
                <span class="category__checkmark"></span>
                <span class="category__option-text">LG</span>
                <span class="category__option-count">(54)</span>
              </label>
              <label class="category__checkbox">
                <input type="checkbox" name="brand" value="dell">
                <span class="category__checkmark"></span>
                <span class="category__option-text">Dell</span>
                <span class="category__option-count">(43)</span>
              </label>
              <label class="category__checkbox">
                <input type="checkbox" name="brand" value="hp">
                <span class="category__checkmark"></span>
                <span class="category__option-text">HP</span>
                <span class="category__option-count">(38)</span>
              </label>
              <label class="category__checkbox">
                <input type="checkbox" name="brand" value="lenovo">
                <span class="category__checkmark"></span>
                <span class="category__option-text">Lenovo</span>
                <span class="category__option-count">(32)</span>
              </label>
              <label class="category__checkbox">
                <input type="checkbox" name="brand" value="google">
                <span class="category__checkmark"></span>
                <span class="category__option-text">Google</span>
                <span class="category__option-count">(28)</span>
              </label>
            </div>
            <button class="category__filter-more">Show More +</button>
          </div>
        </div>

        <!-- Rating Filter -->
        <div class="category__filter-group">
          <div class="category__filter-title" onclick="toggleFilter(this)">
            <span>Customer Rating</span>
            <i class="bi bi-chevron-down"></i>
          </div>
          <div class="category__filter-content">
            <div class="category__filter-options">
              <label class="category__checkbox">
                <input type="checkbox" name="rating" value="5">
                <span class="category__checkmark"></span>
                <span class="category__rating-stars">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </span>
                <span class="category__option-count">(342)</span>
              </label>
              <label class="category__checkbox">
                <input type="checkbox" name="rating" value="4">
                <span class="category__checkmark"></span>
                <span class="category__rating-stars">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star"></i>
                </span>
                <span class="category__option-count">(456)</span>
              </label>
              <label class="category__checkbox">
                <input type="checkbox" name="rating" value="3">
                <span class="category__checkmark"></span>
                <span class="category__rating-stars">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star"></i>
                  <i class="bi bi-star"></i>
                </span>
                <span class="category__option-count">(189)</span>
              </label>
              <label class="category__checkbox">
                <input type="checkbox" name="rating" value="2">
                <span class="category__checkmark"></span>
                <span class="category__rating-stars">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star"></i>
                  <i class="bi bi-star"></i>
                  <i class="bi bi-star"></i>
                </span>
                <span class="category__option-count">(67)</span>
              </label>
              <label class="category__checkbox">
                <input type="checkbox" name="rating" value="1">
                <span class="category__checkmark"></span>
                <span class="category__rating-stars">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star"></i>
                  <i class="bi bi-star"></i>
                  <i class="bi bi-star"></i>
                  <i class="bi bi-star"></i>
                </span>
                <span class="category__option-count">(23)</span>
              </label>
            </div>
          </div>
        </div>

        <!-- Discount Filter -->
        <div class="category__filter-group">
          <div class="category__filter-title" onclick="toggleFilter(this)">
            <span>Discount</span>
            <i class="bi bi-chevron-down"></i>
          </div>
          <div class="category__filter-content">
            <div class="category__filter-options">
              <label class="category__checkbox">
                <input type="checkbox" name="discount" value="50">
                <span class="category__checkmark"></span>
                <span class="category__option-text">50% or more</span>
              </label>
              <label class="category__checkbox">
                <input type="checkbox" name="discount" value="40">
                <span class="category__checkmark"></span>
                <span class="category__option-text">40% or more</span>
              </label>
              <label class="category__checkbox">
                <input type="checkbox" name="discount" value="30">
                <span class="category__checkmark"></span>
                <span class="category__option-text">30% or more</span>
              </label>
              <label class="category__checkbox">
                <input type="checkbox" name="discount" value="20">
                <span class="category__checkmark"></span>
                <span class="category__option-text">20% or more</span>
              </label>
              <label class="category__checkbox">
                <input type="checkbox" name="discount" value="10">
                <span class="category__checkmark"></span>
                <span class="category__option-text">10% or more</span>
              </label>
            </div>
          </div>
        </div>

        <!-- Availability Filter -->
        <div class="category__filter-group">
          <div class="category__filter-title" onclick="toggleFilter(this)">
            <span>Availability</span>
            <i class="bi bi-chevron-down"></i>
          </div>
          <div class="category__filter-content">
            <div class="category__filter-options">
              <label class="category__checkbox">
                <input type="checkbox" name="availability" value="in-stock" checked>
                <span class="category__checkmark"></span>
                <span class="category__option-text">In Stock</span>
                <span class="category__option-count">(1,024)</span>
              </label>
              <label class="category__checkbox">
                <input type="checkbox" name="availability" value="out-of-stock">
                <span class="category__checkmark"></span>
                <span class="category__option-text">Out of Stock</span>
                <span class="category__option-count">(224)</span>
              </label>
            </div>
          </div>
        </div>

        <!-- Apply Filters Button (Mobile) -->
        <button class="category__filters-apply">Apply Filters</button>
      </aside>

      <!-- Products Grid -->
      <div class="category__products">
        <!-- Toolbar -->
        <div class="category__toolbar">
          <div class="category__toolbar-left">
            <span class="category__results">Showing 1-24 of 1,248 results</span>
          </div>
          <div class="category__toolbar-right">
            <div class="category__sort">
              <label for="sort">Sort by:</label>
              <select id="sort" class="category__sort-select" onchange="sortProducts(this)">
                <option value="featured">Featured</option>
                <option value="newest">Newest Arrivals</option>
                <option value="price-low">Price: Low to High</option>
                <option value="price-high">Price: High to Low</option>
                <option value="rating">Top Rated</option>
                <option value="discount">Biggest Discount</option>
              </select>
            </div>
            <div class="category__view">
              <button class="category__view-btn active" onclick="changeView('grid')" title="Grid View">
                <i class="bi bi-grid-3x3-gap-fill"></i>
              </button>
              <button class="category__view-btn" onclick="changeView('list')" title="List View">
                <i class="bi bi-list-ul"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Products Grid -->
        <div class="category__grid" id="productsGrid">
          <!-- Product Card 1 -->
          <div class="category__product-card">
            <div class="category__product-image">
              <a href="product?id=1">
                <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?q=80&w=300&h=300&fit=crop" alt="Smart Watch Pro">
              </a>
              <span class="category__product-badge category__product-badge--sale">-30%</span>
              <button class="category__product-wishlist" onclick="toggleWishlist(1)">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="category__product-info">
              <a href="product?id=1" class="category__product-name">Smart Watch Pro</a>
              <div class="category__product-rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-half"></i>
                <span class="category__product-reviews">(128)</span>
              </div>
              <div class="category__product-price">
                <span class="category__product-current">$89.99</span>
                <span class="category__product-original">$129.99</span>
              </div>
              <button class="category__product-add" onclick="addToCart(1)">
                <i class="bi bi-cart-plus"></i> Add to Cart
              </button>
            </div>
          </div>

          <!-- Product Card 2 -->
          <div class="category__product-card">
            <div class="category__product-image">
              <a href="product?id=2">
                <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=300&h=300&fit=crop" alt="Premium Headphones">
              </a>
              <span class="category__product-badge category__product-badge--sale">-25%</span>
              <button class="category__product-wishlist" onclick="toggleWishlist(2)">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="category__product-info">
              <a href="product?id=2" class="category__product-name">Premium Headphones</a>
              <div class="category__product-rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <span class="category__product-reviews">(256)</span>
              </div>
              <div class="category__product-price">
                <span class="category__product-current">$59.99</span>
                <span class="category__product-original">$79.99</span>
              </div>
              <button class="category__product-add" onclick="addToCart(2)">
                <i class="bi bi-cart-plus"></i> Add to Cart
              </button>
            </div>
          </div>

          <!-- Product Card 3 -->
          <div class="category__product-card">
            <div class="category__product-image">
              <a href="product?id=3">
                <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=300&h=300&fit=crop" alt="Fitness Tracker">
              </a>
              <span class="category__product-badge category__product-badge--sale">-10%</span>
              <button class="category__product-wishlist" onclick="toggleWishlist(3)">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="category__product-info">
              <a href="product?id=3" class="category__product-name">Fitness Tracker</a>
              <div class="category__product-rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
                <span class="category__product-reviews">(76)</span>
              </div>
              <div class="category__product-price">
                <span class="category__product-current">$44.99</span>
                <span class="category__product-original">$49.99</span>
              </div>
              <button class="category__product-add" onclick="addToCart(3)">
                <i class="bi bi-cart-plus"></i> Add to Cart
              </button>
            </div>
          </div>

          <!-- Product Card 4 -->
          <div class="category__product-card">
            <div class="category__product-image">
              <a href="product?id=4">
                <img src="https://images.unsplash.com/photo-1593642702821-c8da6771f0c6?q=80&w=300&h=300&fit=crop" alt="Android Tablet">
              </a>
              <span class="category__product-badge category__product-badge--sale">-20%</span>
              <button class="category__product-wishlist" onclick="toggleWishlist(4)">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="category__product-info">
              <a href="product?id=4" class="category__product-name">Android Tablet</a>
              <div class="category__product-rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <span class="category__product-reviews">(167)</span>
              </div>
              <div class="category__product-price">
                <span class="category__product-current">$199.99</span>
                <span class="category__product-original">$249.99</span>
              </div>
              <button class="category__product-add" onclick="addToCart(4)">
                <i class="bi bi-cart-plus"></i> Add to Cart
              </button>
            </div>
          </div>

          <!-- Product Card 5 -->
          <div class="category__product-card">
            <div class="category__product-image">
              <a href="product?id=5">
                <img src="https://images.unsplash.com/photo-1606813909353-6c7a8b8e8cfa?q=80&w=300&h=300&fit=crop" alt="Gaming Console">
              </a>
              <span class="category__product-badge category__product-badge--sale">-35%</span>
              <button class="category__product-wishlist" onclick="toggleWishlist(5)">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="category__product-info">
              <a href="product?id=5" class="category__product-name">Gaming Console</a>
              <div class="category__product-rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <span class="category__product-reviews">(312)</span>
              </div>
              <div class="category__product-price">
                <span class="category__product-current">$299.99</span>
                <span class="category__product-original">$459.99</span>
              </div>
              <button class="category__product-add" onclick="addToCart(5)">
                <i class="bi bi-cart-plus"></i> Add to Cart
              </button>
            </div>
          </div>

          <!-- Product Card 6 -->
          <div class="category__product-card">
            <div class="category__product-image">
              <a href="product?id=6">
                <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?q=80&w=300&h=300&fit=crop" alt="Instant Camera">
              </a>
              <span class="category__product-badge category__product-badge--sale">-40%</span>
              <button class="category__product-wishlist" onclick="toggleWishlist(6)">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="category__product-info">
              <a href="product?id=6" class="category__product-name">Instant Camera</a>
              <div class="category__product-rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-half"></i>
                <span class="category__product-reviews">(98)</span>
              </div>
              <div class="category__product-price">
                <span class="category__product-current">$149.99</span>
                <span class="category__product-original">$249.99</span>
              </div>
              <button class="category__product-add" onclick="addToCart(6)">
                <i class="bi bi-cart-plus"></i> Add to Cart
              </button>
            </div>
          </div>

          <!-- Product Card 7 -->
          <div class="category__product-card">
            <div class="category__product-image">
              <a href="product?id=7">
                <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?q=80&w=300&h=300&fit=crop" alt="Designer Bag">
              </a>
              <span class="category__product-badge category__product-badge--sale">-50%</span>
              <button class="category__product-wishlist" onclick="toggleWishlist(7)">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="category__product-info">
              <a href="product?id=7" class="category__product-name">Designer Bag</a>
              <div class="category__product-rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
                <span class="category__product-reviews">(45)</span>
              </div>
              <div class="category__product-price">
                <span class="category__product-current">$124.99</span>
                <span class="category__product-original">$249.99</span>
              </div>
              <button class="category__product-add" onclick="addToCart(7)">
                <i class="bi bi-cart-plus"></i> Add to Cart
              </button>
            </div>
          </div>

          <!-- Product Card 8 -->
          <div class="category__product-card">
            <div class="category__product-image">
              <a href="product?id=8">
                <img src="https://images.unsplash.com/photo-1484101403633-562f891dc89a?q=80&w=300&h=300&fit=crop" alt="Table Lamp">
              </a>
              <span class="category__product-badge category__product-badge--new">New</span>
              <button class="category__product-wishlist" onclick="toggleWishlist(8)">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="category__product-info">
              <a href="product?id=8" class="category__product-name">Table Lamp</a>
              <div class="category__product-rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <span class="category__product-reviews">(67)</span>
              </div>
              <div class="category__product-price">
                <span class="category__product-current">$42.99</span>
                <span class="category__product-original">$49.99</span>
              </div>
              <button class="category__product-add" onclick="addToCart(8)">
                <i class="bi bi-cart-plus"></i> Add to Cart
              </button>
            </div>
          </div>
        </div>

        <!-- Pagination -->
        <div class="category__pagination">
          <button class="category__pagination-btn" disabled>
            <i class="bi bi-chevron-left"></i>
          </button>
          <span class="category__pagination-current">Page 1 of 52</span>
          <div class="category__pagination-numbers">
            <button class="category__pagination-number active">1</button>
            <button class="category__pagination-number">2</button>
            <button class="category__pagination-number">3</button>
            <button class="category__pagination-number">4</button>
            <button class="category__pagination-number">5</button>
            <span class="category__pagination-dots">...</span>
            <button class="category__pagination-number">52</button>
          </div>
          <button class="category__pagination-btn">
            <i class="bi bi-chevron-right"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Recently Viewed Section -->
    <section class="scroll-section viewed-scroll">
      <div class="scroll-section__container">
        <div class="scroll-section__header">
          <div>
            <span class="viewed-scroll__subtitle">Recently Viewed</span>
            <h2>Your Recent Products</h2>
          </div>
          <a href="history.php" class="scroll-section__view-all">View All <i class="bi bi-arrow-right"></i></a>
        </div>

        <div class="scroll-section__viewport" id="recentlyViewed">
          <div class="scroll-section__track">
            <!-- Recently Viewed 1 -->
            <div class="scroll-section__item viewed-scroll__item">
              <div class="product-card__image">
                <a href="product?id=1">
                  <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?q=80&w=300&h=300&fit=crop" alt="Smart Watch">
                </a>
              </div>
              <div class="viewed-scroll__info">
                <a href="product?id=1" class="viewed-scroll__name">Smart Watch Pro</a>
                <div class="viewed-scroll__price">$89.99</div>
              </div>
            </div>

            <!-- Recently Viewed 2 -->
            <div class="scroll-section__item viewed-scroll__item">
              <div class="product-card__image">
                <a href="product?id=2">
                  <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=300&h=300&fit=crop" alt="Headphones">
                </a>
              </div>
              <div class="viewed-scroll__info">
                <a href="product?id=2" class="viewed-scroll__name">Premium Headphones</a>
                <div class="viewed-scroll__price">$59.99</div>
              </div>
            </div>

            <!-- Recently Viewed 3 -->
            <div class="scroll-section__item viewed-scroll__item">
              <div class="product-card__image">
                <a href="product?id=3">
                  <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=300&h=300&fit=crop" alt="Fitness Tracker">
                </a>
              </div>
              <div class="viewed-scroll__info">
                <a href="product?id=3" class="viewed-scroll__name">Fitness Tracker</a>
                <div class="viewed-scroll__price">$44.99</div>
              </div>
            </div>

            <!-- Recently Viewed 4 -->
            <div class="scroll-section__item viewed-scroll__item">
              <div class="product-card__image">
                <a href="product?id=4">
                  <img src="https://images.unsplash.com/photo-1593642702821-c8da6771f0c6?q=80&w=300&h=300&fit=crop" alt="Tablet">
                </a>
              </div>
              <div class="viewed-scroll__info">
                <a href="product?id=4" class="viewed-scroll__name">Android Tablet</a>
                <div class="viewed-scroll__price">$199.99</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</main>

<script>
// Toggle filter accordion
function toggleFilter(element) {
  const filterGroup = element.closest('.category__filter-group');
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
function clearFilters() {
  document.querySelectorAll('.category__checkbox input').forEach(checkbox => {
    checkbox.checked = false;
  });
  document.getElementById('minPrice').value = 0;
  document.getElementById('maxPrice').value = 1000;
  showNotification('Filters cleared');
}

// Apply price filter
function applyPriceFilter() {
  const min = document.getElementById('minPrice').value;
  const max = document.getElementById('maxPrice').value;
  showNotification(`Price filter applied: $${min} - $${max}`);
}

// Filter brands by search
function filterBrands(input) {
  const searchTerm = input.value.toLowerCase();
  const brands = document.querySelectorAll('.category__checkbox[data-brand]');
  
  brands.forEach(brand => {
    const brandName = brand.querySelector('.category__option-text').textContent.toLowerCase();
    if (brandName.includes(searchTerm)) {
      brand.style.display = 'flex';
    } else {
      brand.style.display = 'none';
    }
  });
}

// Sort products
function sortProducts(select) {
  const value = select.value;
  showNotification(`Sorted by: ${value}`);
}

// Change view (grid/list)
function changeView(view) {
  const gridBtn = document.querySelectorAll('.category__view-btn')[0];
  const listBtn = document.querySelectorAll('.category__view-btn')[1];
  const productsGrid = document.getElementById('productsGrid');
  
  if (view === 'grid') {
    gridBtn.classList.add('active');
    listBtn.classList.remove('active');
    productsGrid.classList.remove('category__grid--list');
  } else {
    listBtn.classList.add('active');
    gridBtn.classList.remove('active');
    productsGrid.classList.add('category__grid--list');
  }
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

// Notification function
function showNotification(message) {
  let notification = document.querySelector('.category__notification');
  
  if (!notification) {
    notification = document.createElement('div');
    notification.className = 'category__notification';
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
  // For mobile: add filter toggle button
  if (window.innerWidth <= 768) {
    const filterBtn = document.createElement('button');
    filterBtn.className = 'category__mobile-filter-btn';
    filterBtn.innerHTML = '<i class="bi bi-sliders2"></i> Filters';
    filterBtn.onclick = function() {
      document.querySelector('.category__filters').classList.toggle('active');
    };
    
    const toolbar = document.querySelector('.category__toolbar-left');
    if (toolbar) {
      toolbar.appendChild(filterBtn);
    }
  }
});
</script>

<?php include __DIR__ . "/partials/footer.php"; ?>