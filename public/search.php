<?php
require_once __DIR__ . "/partials/header.php";
?>
<link rel="stylesheet" href="<?= $css ?>search.css?v=<?= filemtime($css.'search.css') ?>">

<main class="search-page">
  <div class="search__container">
    <!-- Breadcrumb -->
    <div class="search__breadcrumb">
      <a href="home">Home</a>
      <i class="bi bi-chevron-right"></i>
      <span>Search Results</span>
    </div>

    <!-- Search Header -->
    <div class="search__header">
      <h1 class="search__title">Search Results</h1>
      
      <!-- Search Form -->
      <form class="search__form" action="search" method="GET">
        <div class="search__form-group">
          <i class="bi bi-search"></i>
          <input 
            type="text" 
            name="q" 
            class="search__input" 
            placeholder="Search for products, brands, categories..." 
            value="wireless headphones"
            autocomplete="off"
          >
          <button type="submit" class="search__submit">Search</button>
        </div>
      </form>

      <!-- Search Stats -->
      <div class="search__stats">
        <span class="search__results-count">About <strong>247 results</strong> for "wireless headphones"</span>
        <span class="search__results-time">(0.42 seconds)</span>
      </div>
    </div>

    <!-- Search Layout -->
    <div class="search__layout">
      <!-- Sidebar Filters -->
      <aside class="search__filters">
        <div class="search__filters-header">
          <h3>Filter Results</h3>
          <button class="search__filters-clear" onclick="clearAllFilters()">Clear All</button>
        </div>

        <!-- Category Filter -->
        <div class="search__filter-group active">
          <div class="search__filter-title" onclick="toggleFilter(this)">
            <span>Category</span>
            <i class="bi bi-chevron-up"></i>
          </div>
          <div class="search__filter-content">
            <div class="search__filter-options">
              <label class="search__checkbox">
                <input type="checkbox" name="category" value="headphones" checked>
                <span class="search__checkmark"></span>
                <span class="search__option-text">Headphones</span>
                <span class="search__option-count">(124)</span>
              </label>
              <label class="search__checkbox">
                <input type="checkbox" name="category" value="earbuds">
                <span class="search__checkmark"></span>
                <span class="search__option-text">Earbuds</span>
                <span class="search__option-count">(89)</span>
              </label>
              <label class="search__checkbox">
                <input type="checkbox" name="category" value="speakers">
                <span class="search__checkmark"></span>
                <span class="search__option-text">Speakers</span>
                <span class="search__option-count">(34)</span>
              </label>
            </div>
          </div>
        </div>

        <!-- Price Range Filter -->
        <div class="search__filter-group active">
          <div class="search__filter-title" onclick="toggleFilter(this)">
            <span>Price Range</span>
            <i class="bi bi-chevron-up"></i>
          </div>
          <div class="search__filter-content">
            <div class="search__price-range">
              <div class="search__price-inputs">
                <div class="search__price-input">
                  <label>Min (₦)</label>
                  <input type="number" id="minPrice" value="0" min="0" step="1000">
                </div>
                <span>—</span>
                <div class="search__price-input">
                  <label>Max (₦)</label>
                  <input type="number" id="maxPrice" value="500000" min="0" step="1000">
                </div>
              </div>
              <div class="search__price-presets">
                <button class="search__price-preset" onclick="setPricePreset(0, 10000)">Under ₦10k</button>
                <button class="search__price-preset" onclick="setPricePreset(10000, 30000)">₦10k - ₦30k</button>
                <button class="search__price-preset" onclick="setPricePreset(30000, 50000)">₦30k - ₦50k</button>
                <button class="search__price-preset" onclick="setPricePreset(50000, 100000)">₦50k+</button>
              </div>
              <button class="search__price-apply" onclick="applyPriceFilter()">Apply</button>
            </div>
          </div>
        </div>

        <!-- Brand Filter -->
        <div class="search__filter-group">
          <div class="search__filter-title" onclick="toggleFilter(this)">
            <span>Brand</span>
            <i class="bi bi-chevron-down"></i>
          </div>
          <div class="search__filter-content">
            <div class="search__filter-search">
              <i class="bi bi-search"></i>
              <input type="text" placeholder="Search brands" onkeyup="filterBrands(this)">
            </div>
            <div class="search__filter-options">
              <label class="search__checkbox">
                <input type="checkbox" name="brand" value="sony">
                <span class="search__checkmark"></span>
                <span class="search__option-text">Sony</span>
                <span class="search__option-count">(45)</span>
              </label>
              <label class="search__checkbox">
                <input type="checkbox" name="brand" value="bose">
                <span class="search__checkmark"></span>
                <span class="search__option-text">Bose</span>
                <span class="search__option-count">(38)</span>
              </label>
              <label class="search__checkbox">
                <input type="checkbox" name="brand" value="jbl">
                <span class="search__checkmark"></span>
                <span class="search__option-text">JBL</span>
                <span class="search__option-count">(32)</span>
              </label>
              <label class="search__checkbox">
                <input type="checkbox" name="brand" value="sennheiser">
                <span class="search__checkmark"></span>
                <span class="search__option-text">Sennheiser</span>
                <span class="search__option-count">(28)</span>
              </label>
              <label class="search__checkbox">
                <input type="checkbox" name="brand" value="apple">
                <span class="search__checkmark"></span>
                <span class="search__option-text">Apple</span>
                <span class="search__option-count">(24)</span>
              </label>
              <label class="search__checkbox">
                <input type="checkbox" name="brand" value="samsung">
                <span class="search__checkmark"></span>
                <span class="search__option-text">Samsung</span>
                <span class="search__option-count">(21)</span>
              </label>
            </div>
            <button class="search__filter-more" onclick="showMoreBrands()">Show More +</button>
          </div>
        </div>

        <!-- Rating Filter -->
        <div class="search__filter-group">
          <div class="search__filter-title" onclick="toggleFilter(this)">
            <span>Customer Rating</span>
            <i class="bi bi-chevron-down"></i>
          </div>
          <div class="search__filter-content">
            <div class="search__filter-options">
              <label class="search__checkbox">
                <input type="checkbox" name="rating" value="5">
                <span class="search__checkmark"></span>
                <span class="search__rating-stars">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </span>
              </label>
              <label class="search__checkbox">
                <input type="checkbox" name="rating" value="4">
                <span class="search__checkmark"></span>
                <span class="search__rating-stars">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star"></i>
                </span>
              </label>
              <label class="search__checkbox">
                <input type="checkbox" name="rating" value="3">
                <span class="search__checkmark"></span>
                <span class="search__rating-stars">
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

        <!-- Discount Filter -->
        <div class="search__filter-group">
          <div class="search__filter-title" onclick="toggleFilter(this)">
            <span>Discount</span>
            <i class="bi bi-chevron-down"></i>
          </div>
          <div class="search__filter-content">
            <div class="search__filter-options">
              <label class="search__checkbox">
                <input type="checkbox" name="discount" value="50">
                <span class="search__checkmark"></span>
                <span class="search__option-text">50% or more</span>
              </label>
              <label class="search__checkbox">
                <input type="checkbox" name="discount" value="40">
                <span class="search__checkmark"></span>
                <span class="search__option-text">40% or more</span>
              </label>
              <label class="search__checkbox">
                <input type="checkbox" name="discount" value="30">
                <span class="search__checkmark"></span>
                <span class="search__option-text">30% or more</span>
              </label>
              <label class="search__checkbox">
                <input type="checkbox" name="discount" value="20">
                <span class="search__checkmark"></span>
                <span class="search__option-text">20% or more</span>
              </label>
            </div>
          </div>
        </div>

        <!-- Availability Filter -->
        <div class="search__filter-group">
          <div class="search__filter-title" onclick="toggleFilter(this)">
            <span>Availability</span>
            <i class="bi bi-chevron-down"></i>
          </div>
          <div class="search__filter-content">
            <div class="search__filter-options">
              <label class="search__checkbox">
                <input type="checkbox" name="availability" value="in-stock" checked>
                <span class="search__checkmark"></span>
                <span class="search__option-text">In Stock</span>
              </label>
              <label class="search__checkbox">
                <input type="checkbox" name="availability" value="out-of-stock">
                <span class="search__checkmark"></span>
                <span class="search__option-text">Out of Stock</span>
              </label>
            </div>
          </div>
        </div>

        <!-- Apply Filters Button (Mobile) -->
        <button class="search__filters-apply" onclick="applyFilters()">Apply Filters</button>
      </aside>

      <!-- Results Section -->
      <div class="search__results">
        <!-- Toolbar -->
        <div class="search__toolbar">
          <div class="search__toolbar-left">
            <span class="search__results-summary">1-24 of 247 results</span>
          </div>
          <div class="search__toolbar-right">
            <div class="search__sort">
              <label for="sortBy">Sort by:</label>
              <select id="sortBy" class="search__sort-select" onchange="sortResults(this)">
                <option value="relevance">Relevance</option>
                <option value="newest">Newest Arrivals</option>
                <option value="price-low">Price: Low to High</option>
                <option value="price-high">Price: High to Low</option>
                <option value="rating">Customer Rating</option>
                <option value="discount">Biggest Discount</option>
              </select>
            </div>
            <div class="search__view">
              <button class="search__view-btn active" onclick="changeView('grid')" title="Grid View">
                <i class="bi bi-grid-3x3-gap-fill"></i>
              </button>
              <button class="search__view-btn" onclick="changeView('list')" title="List View">
                <i class="bi bi-list-ul"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Results Grid -->
        <div class="search__grid" id="resultsGrid">
          <!-- Result 1 -->
          <article class="search__result-card">
            <div class="search__result-image">
              <a href="product?id=101">
                <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=300&h=300&fit=crop" alt="Wireless Headphones" loading="lazy">
              </a>
              <span class="search__result-badge search__result-badge--sale">-25%</span>
              <button class="search__result-wishlist" onclick="toggleWishlist(101)">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="search__result-info">
              <a href="product?id=101" class="search__result-name">Sony WH-1000XM4 Wireless Headphones</a>
              <div class="search__result-rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <span class="search__result-reviews">(4,892)</span>
              </div>
              <div class="search__result-price">
                <span class="search__result-current">₦44,990</span>
                <span class="search__result-original">₦59,990</span>
              </div>
              <div class="search__result-meta">
                <span class="search__result-shipping">Free Shipping</span>
                <span class="search__result-stock">In Stock</span>
              </div>
              <button class="search__result-add" onclick="addToCart(101)">
                <i class="bi bi-cart-plus"></i> Add to Cart
              </button>
            </div>
          </article>

          <!-- Result 2 -->
          <article class="search__result-card">
            <div class="search__result-image">
              <a href="product?id=102">
                <img src="https://images.unsplash.com/photo-1585386959984-a4155224a1ad?q=80&w=300&h=300&fit=crop" alt="Bose Headphones" loading="lazy">
              </a>
              <span class="search__result-badge search__result-badge--sale">-20%</span>
              <button class="search__result-wishlist" onclick="toggleWishlist(102)">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="search__result-info">
              <a href="product?id=102" class="search__result-name">Bose QuietComfort 45 Wireless Headphones</a>
              <div class="search__result-rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-half"></i>
                <span class="search__result-reviews">(3,245)</span>
              </div>
              <div class="search__result-price">
                <span class="search__result-current">₦54,990</span>
                <span class="search__result-original">₦68,990</span>
              </div>
              <div class="search__result-meta">
                <span class="search__result-shipping">Free Shipping</span>
                <span class="search__result-stock">In Stock</span>
              </div>
              <button class="search__result-add" onclick="addToCart(102)">
                <i class="bi bi-cart-plus"></i> Add to Cart
              </button>
            </div>
          </article>

          <!-- Result 3 -->
          <article class="search__result-card">
            <div class="search__result-image">
              <a href="product?id=103">
                <img src="https://images.unsplash.com/photo-1484704849700-f032a568e944?q=80&w=300&h=300&fit=crop" alt="JBL Headphones" loading="lazy">
              </a>
              <span class="search__result-badge search__result-badge--sale">-30%</span>
              <button class="search__result-wishlist" onclick="toggleWishlist(103)">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="search__result-info">
              <a href="product?id=103" class="search__result-name">JBL Tune 760NC Wireless Headphones</a>
              <div class="search__result-rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
                <span class="search__result-reviews">(1,876)</span>
              </div>
              <div class="search__result-price">
                <span class="search__result-current">₦24,990</span>
                <span class="search__result-original">₦35,990</span>
              </div>
              <div class="search__result-meta">
                <span class="search__result-shipping">Free Shipping</span>
                <span class="search__result-stock">In Stock</span>
              </div>
              <button class="search__result-add" onclick="addToCart(103)">
                <i class="bi bi-cart-plus"></i> Add to Cart
              </button>
            </div>
          </article>

          <!-- Result 4 -->
          <article class="search__result-card">
            <div class="search__result-image">
              <a href="product?id=104">
                <img src="https://images.unsplash.com/photo-1590658006821-04f4008d5717?q=80&w=300&h=300&fit=crop" alt="Sennheiser Headphones" loading="lazy">
              </a>
              <span class="search__result-badge search__result-badge--new">New</span>
              <button class="search__result-wishlist" onclick="toggleWishlist(104)">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="search__result-info">
              <a href="product?id=104" class="search__result-name">Sennheiser Momentum 4 Wireless</a>
              <div class="search__result-rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-half"></i>
                <span class="search__result-reviews">(432)</span>
              </div>
              <div class="search__result-price">
                <span class="search__result-current">₦79,990</span>
              </div>
              <div class="search__result-meta">
                <span class="search__result-shipping">Free Shipping</span>
                <span class="search__result-stock">In Stock</span>
              </div>
              <button class="search__result-add" onclick="addToCart(104)">
                <i class="bi bi-cart-plus"></i> Add to Cart
              </button>
            </div>
          </article>

          <!-- Result 5 -->
          <article class="search__result-card">
            <div class="search__result-image">
              <a href="product?id=105">
                <img src="https://images.unsplash.com/photo-1606741965391-8b8031e7c6b2?q=80&w=300&h=300&fit=crop" alt="Apple AirPods" loading="lazy">
              </a>
              <span class="search__result-badge search__result-badge--sale">-15%</span>
              <button class="search__result-wishlist" onclick="toggleWishlist(105)">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="search__result-info">
              <a href="product?id=105" class="search__result-name">Apple AirPods Pro (2nd Generation)</a>
              <div class="search__result-rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <span class="search__result-reviews">(5,678)</span>
              </div>
              <div class="search__result-price">
                <span class="search__result-current">₦89,990</span>
                <span class="search__result-original">₦105,990</span>
              </div>
              <div class="search__result-meta">
                <span class="search__result-shipping">Free Shipping</span>
                <span class="search__result-stock">In Stock</span>
              </div>
              <button class="search__result-add" onclick="addToCart(105)">
                <i class="bi bi-cart-plus"></i> Add to Cart
              </button>
            </div>
          </article>

          <!-- Result 6 -->
          <article class="search__result-card">
            <div class="search__result-image">
              <a href="product?id=106">
                <img src="https://images.unsplash.com/photo-1546435770-a3e426bf4a6f?q=80&w=300&h=300&fit=crop" alt="Samsung Buds" loading="lazy">
              </a>
              <span class="search__result-badge search__result-badge--sale">-20%</span>
              <button class="search__result-wishlist" onclick="toggleWishlist(106)">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="search__result-info">
              <a href="product?id=106" class="search__result-name">Samsung Galaxy Buds2 Pro</a>
              <div class="search__result-rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-half"></i>
                <span class="search__result-reviews">(2,134)</span>
              </div>
              <div class="search__result-price">
                <span class="search__result-current">₦34,990</span>
                <span class="search__result-original">₦43,990</span>
              </div>
              <div class="search__result-meta">
                <span class="search__result-shipping">Free Shipping</span>
                <span class="search__result-stock">In Stock</span>
              </div>
              <button class="search__result-add" onclick="addToCart(106)">
                <i class="bi bi-cart-plus"></i> Add to Cart
              </button>
            </div>
          </article>

          <!-- Result 7 -->
          <article class="search__result-card">
            <div class="search__result-image">
              <a href="product?id=107">
                <img src="https://images.unsplash.com/photo-1613040809024-b4ef7ba99bc3?q=80&w=300&h=300&fit=crop" alt="Beats Headphones" loading="lazy">
              </a>
              <span class="search__result-badge search__result-badge--sale">-25%</span>
              <button class="search__result-wishlist" onclick="toggleWishlist(107)">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="search__result-info">
              <a href="product?id=107" class="search__result-name">Beats Studio Pro Wireless</a>
              <div class="search__result-rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
                <span class="search__result-reviews">(876)</span>
              </div>
              <div class="search__result-price">
                <span class="search__result-current">₦64,990</span>
                <span class="search__result-original">₦86,990</span>
              </div>
              <div class="search__result-meta">
                <span class="search__result-shipping">Free Shipping</span>
                <span class="search__result-stock">In Stock</span>
              </div>
              <button class="search__result-add" onclick="addToCart(107)">
                <i class="bi bi-cart-plus"></i> Add to Cart
              </button>
            </div>
          </article>

          <!-- Result 8 -->
          <article class="search__result-card">
            <div class="search__result-image">
              <a href="product?id=108">
                <img src="https://images.unsplash.com/photo-1558756520-22cfe5d382ca?q=80&w=300&h=300&fit=crop" alt="Audio-Technica" loading="lazy">
              </a>
              <span class="search__result-badge search__result-badge--sale">-15%</span>
              <button class="search__result-wishlist" onclick="toggleWishlist(108)">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="search__result-info">
              <a href="product?id=108" class="search__result-name">Audio-Technica ATH-M50xBT</a>
              <div class="search__result-rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <span class="search__result-reviews">(1,456)</span>
              </div>
              <div class="search__result-price">
                <span class="search__result-current">₦49,990</span>
                <span class="search__result-original">₦58,990</span>
              </div>
              <div class="search__result-meta">
                <span class="search__result-shipping">Free Shipping</span>
                <span class="search__result-stock">In Stock</span>
              </div>
              <button class="search__result-add" onclick="addToCart(108)">
                <i class="bi bi-cart-plus"></i> Add to Cart
              </button>
            </div>
          </article>
        </div>

        <!-- Pagination -->
        <div class="search__pagination">
          <button class="search__pagination-btn" disabled>
            <i class="bi bi-chevron-left"></i>
          </button>
          <div class="search__pagination-numbers">
            <button class="search__pagination-number active">1</button>
            <button class="search__pagination-number">2</button>
            <button class="search__pagination-number">3</button>
            <button class="search__pagination-number">4</button>
            <button class="search__pagination-number">5</button>
            <span class="search__pagination-dots">...</span>
            <button class="search__pagination-number">11</button>
          </div>
          <button class="search__pagination-btn">
            <i class="bi bi-chevron-right"></i>
          </button>
        </div>

        <!-- Did You Mean? -->
        <div class="search__suggestions">
          <p class="search__did-you-mean">
            Did you mean: 
            <a href="search?q=wireless+earbuds">wireless earbuds</a>, 
            <a href="search?q=bluetooth+headphones">bluetooth headphones</a>, 
            <a href="search?q=noise+cancelling">noise cancelling</a>
          </p>
        </div>

        <!-- Related Searches -->
        <div class="search__related">
          <h3 class="search__related-title">Related Searches</h3>
          <div class="search__related-tags">
            <a href="search?q=sony+headphones" class="search__related-tag">sony headphones</a>
            <a href="search?q=bose+headphones" class="search__related-tag">bose headphones</a>
            <a href="search?q=jbl+headphones" class="search__related-tag">jbl headphones</a>
            <a href="search?q=gaming+headset" class="search__related-tag">gaming headset</a>
            <a href="search?q=wireless+earbuds" class="search__related-tag">wireless earbuds</a>
            <a href="search?q=bluetooth+speaker" class="search__related-tag">bluetooth speaker</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<script>
// Toggle filter accordion
function toggleFilter(element) {
  const filterGroup = element.closest('.search__filter-group');
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
  document.querySelectorAll('.search__checkbox input').forEach(checkbox => {
    checkbox.checked = false;
  });
  document.getElementById('minPrice').value = 0;
  document.getElementById('maxPrice').value = 500000;
  showNotification('All filters cleared');
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
  const brands = document.querySelectorAll('.search__checkbox');
}

// Show more brands
function showMoreBrands() {
  showNotification('Loading more brands...');
}

// Sort results
function sortResults(select) {
  const value = select.value;
  showNotification(`Sorted by: ${value}`);
}

// Change view (grid/list)
function changeView(view) {
  const gridBtn = document.querySelectorAll('.search__view-btn')[0];
  const listBtn = document.querySelectorAll('.search__view-btn')[1];
  const resultsGrid = document.getElementById('resultsGrid');
  
  if (view === 'grid') {
    gridBtn.classList.add('active');
    listBtn.classList.remove('active');
    resultsGrid.classList.remove('search__grid--list');
  } else {
    listBtn.classList.add('active');
    gridBtn.classList.remove('active');
    resultsGrid.classList.add('search__grid--list');
  }
}

// Apply filters (mobile)
function applyFilters() {
  document.querySelector('.search__filters').classList.remove('active');
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

// Notification function
function showNotification(message) {
  let notification = document.querySelector('.search__notification');
  
  if (!notification) {
    notification = document.createElement('div');
    notification.className = 'search__notification';
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
    filterBtn.className = 'search__mobile-filter-btn';
    filterBtn.innerHTML = '<i class="bi bi-sliders2"></i> Filters';
    filterBtn.onclick = function() {
      document.querySelector('.search__filters').classList.toggle('active');
    };
    
    const toolbar = document.querySelector('.search__toolbar-left');
    if (toolbar) {
      toolbar.appendChild(filterBtn);
    }
  }
});
</script>

<?php include __DIR__ . "/partials/footer.php"; ?>