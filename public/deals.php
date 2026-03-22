<?php
require_once __DIR__ . "/partials/header.php";
?>
<link rel="stylesheet" href="<?= $css ?>deals.css?v=<?= filemtime($css.'deals.css') ?>">

<main class="deals-page">
  <div class="deals__container">
    <!-- Breadcrumb -->
    <div class="deals__breadcrumb">
      <a href="home">Home</a>
      <i class="bi bi-chevron-right"></i>
      <span>Deals & Offers</span>
    </div>

    <!-- Page Header -->
    <div class="deals__header">
      <h1 class="deals__title">🔥 Hot Deals & Offers</h1>
      <p class="deals__subtitle">Limited time offers. Grab them before they're gone!</p>
    </div>

    <!-- Mega Banner - Flash Sale -->
    <div class="deals__mega-banner">
      <div class="deals__mega-content">
        <span class="deals__mega-subtitle">⚡ FLASH SALE</span>
        <h2 class="deals__mega-title">Up to 70% Off</h2>
        <p class="deals__mega-desc">On thousands of items. Today only.</p>
        <div class="deals__mega-countdown" id="megaCountdown">
          <div class="deals__countdown-item">
            <span class="deals__countdown-value" id="hours">12</span>
            <span class="deals__countdown-label">Hours</span>
          </div>
          <span class="deals__countdown-sep">:</span>
          <div class="deals__countdown-item">
            <span class="deals__countdown-value" id="minutes">45</span>
            <span class="deals__countdown-label">Minutes</span>
          </div>
          <span class="deals__countdown-sep">:</span>
          <div class="deals__countdown-item">
            <span class="deals__countdown-value" id="seconds">30</span>
            <span class="deals__countdown-label">Seconds</span>
          </div>
        </div>
        <a href="#flash-deals" class="deals__mega-btn">Shop Flash Deals <i class="bi bi-arrow-right"></i></a>
      </div>
      <div class="deals__mega-image">
        <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?q=80&w=800&h=500&fit=crop" alt="Flash Sale" loading="lazy">
      </div>
    </div>

    <!-- Category Deal Tabs -->
    <div class="deals__tabs">
      <button class="deals__tab-btn active" onclick="switchDealTab('flash')">⚡ Flash Deals</button>
      <button class="deals__tab-btn" onclick="switchDealTab('electronics')">📱 Electronics</button>
      <button class="deals__tab-btn" onclick="switchDealTab('fashion')">👕 Fashion</button>
      <button class="deals__tab-btn" onclick="switchDealTab('home')">🏠 Home</button>
      <button class="deals__tab-btn" onclick="switchDealTab('beauty')">💄 Beauty</button>
    </div>

    <!-- Flash Deals Section (Active by default) -->
    <section class="deals__section active" id="flash-deals">
      <div class="deals__section-header">
        <h2 class="deals__section-title">⚡ Flash Deals</h2>
        <a href="shop?deals=flash" class="deals__view-all">View All <i class="bi bi-arrow-right"></i></a>
      </div>

      <div class="deals__grid">
        <!-- Deal Card 1 -->
        <div class="deals__card">
          <div class="deals__card-badge deals__card-badge--flash">FLASH</div>
          <div class="deals__card-image">
            <a href="product?id=101">
              <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?q=80&w=300&h=300&fit=crop" alt="Smart Watch Pro" loading="lazy">
            </a>
            <button class="deals__card-wishlist" onclick="toggleWishlist(101)">
              <i class="bi bi-heart"></i>
            </button>
          </div>
          <div class="deals__card-info">
            <a href="product?id=101" class="deals__card-name">Smart Watch Pro</a>
            <div class="deals__card-rating">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <span>(128)</span>
            </div>
            <div class="deals__card-price">
              <span class="deals__card-current">₦62,990</span>
              <span class="deals__card-original">₦89,990</span>
              <span class="deals__card-discount">-30%</span>
            </div>
            <div class="deals__card-timer">
              <i class="bi bi-clock"></i>
              <span class="timer" data-hours="3">03 : 45 : 22</span>
            </div>
            <button class="deals__card-add" onclick="addToCart(101)">
              <i class="bi bi-cart-plus"></i> Grab Deal
            </button>
          </div>
        </div>

        <!-- Deal Card 2 -->
        <div class="deals__card">
          <div class="deals__card-badge deals__card-badge--flash">FLASH</div>
          <div class="deals__card-image">
            <a href="product?id=102">
              <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=300&h=300&fit=crop" alt="Premium Headphones" loading="lazy">
            </a>
            <button class="deals__card-wishlist" onclick="toggleWishlist(102)">
              <i class="bi bi-heart"></i>
            </button>
          </div>
          <div class="deals__card-info">
            <a href="product?id=102" class="deals__card-name">Premium Headphones</a>
            <div class="deals__card-rating">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <span>(256)</span>
            </div>
            <div class="deals__card-price">
              <span class="deals__card-current">₦44,990</span>
              <span class="deals__card-original">₦59,990</span>
              <span class="deals__card-discount">-25%</span>
            </div>
            <div class="deals__card-timer">
              <i class="bi bi-clock"></i>
              <span class="timer" data-hours="5">05 : 30 : 00</span>
            </div>
            <button class="deals__card-add" onclick="addToCart(102)">
              <i class="bi bi-cart-plus"></i> Grab Deal
            </button>
          </div>
        </div>

        <!-- Deal Card 3 -->
        <div class="deals__card">
          <div class="deals__card-badge deals__card-badge--flash">FLASH</div>
          <div class="deals__card-image">
            <a href="product?id=103">
              <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=300&h=300&fit=crop" alt="Fitness Tracker" loading="lazy">
            </a>
            <button class="deals__card-wishlist" onclick="toggleWishlist(103)">
              <i class="bi bi-heart"></i>
            </button>
          </div>
          <div class="deals__card-info">
            <a href="product?id=103" class="deals__card-name">Fitness Tracker</a>
            <div class="deals__card-rating">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star"></i>
              <span>(76)</span>
            </div>
            <div class="deals__card-price">
              <span class="deals__card-current">₦34,990</span>
              <span class="deals__card-original">₦44,990</span>
              <span class="deals__card-discount">-22%</span>
            </div>
            <div class="deals__card-timer">
              <i class="bi bi-clock"></i>
              <span class="timer" data-hours="2">02 : 15 : 40</span>
            </div>
            <button class="deals__card-add" onclick="addToCart(103)">
              <i class="bi bi-cart-plus"></i> Grab Deal
            </button>
          </div>
        </div>

        <!-- Deal Card 4 -->
        <div class="deals__card">
          <div class="deals__card-badge deals__card-badge--flash">FLASH</div>
          <div class="deals__card-image">
            <a href="product?id=104">
              <img src="https://images.unsplash.com/photo-1593642702821-c8da6771f0c6?q=80&w=300&h=300&fit=crop" alt="Tablet" loading="lazy">
            </a>
            <button class="deals__card-wishlist" onclick="toggleWishlist(104)">
              <i class="bi bi-heart"></i>
            </button>
          </div>
          <div class="deals__card-info">
            <a href="product?id=104" class="deals__card-name">Android Tablet</a>
            <div class="deals__card-rating">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <span>(167)</span>
            </div>
            <div class="deals__card-price">
              <span class="deals__card-current">₦159,990</span>
              <span class="deals__card-original">₦199,990</span>
              <span class="deals__card-discount">-20%</span>
            </div>
            <div class="deals__card-timer">
              <i class="bi bi-clock"></i>
              <span class="timer" data-hours="4">04 : 20 : 15</span>
            </div>
            <button class="deals__card-add" onclick="addToCart(104)">
              <i class="bi bi-cart-plus"></i> Grab Deal
            </button>
          </div>
        </div>

        <!-- Deal Card 5 -->
        <div class="deals__card">
          <div class="deals__card-badge deals__card-badge--flash">FLASH</div>
          <div class="deals__card-image">
            <a href="product?id=105">
              <img src="https://images.unsplash.com/photo-1606813909353-6c7a8b8e8cfa?q=80&w=300&h=300&fit=crop" alt="Gaming Console" loading="lazy">
            </a>
            <button class="deals__card-wishlist" onclick="toggleWishlist(105)">
              <i class="bi bi-heart"></i>
            </button>
          </div>
          <div class="deals__card-info">
            <a href="product?id=105" class="deals__card-name">Gaming Console</a>
            <div class="deals__card-rating">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <span>(312)</span>
            </div>
            <div class="deals__card-price">
              <span class="deals__card-current">₦239,990</span>
              <span class="deals__card-original">₦299,990</span>
              <span class="deals__card-discount">-20%</span>
            </div>
            <div class="deals__card-timer">
              <i class="bi bi-clock"></i>
              <span class="timer" data-hours="6">06 : 45 : 30</span>
            </div>
            <button class="deals__card-add" onclick="addToCart(105)">
              <i class="bi bi-cart-plus"></i> Grab Deal
            </button>
          </div>
        </div>

        <!-- Deal Card 6 -->
        <div class="deals__card">
          <div class="deals__card-badge deals__card-badge--flash">FLASH</div>
          <div class="deals__card-image">
            <a href="product?id=106">
              <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?q=80&w=300&h=300&fit=crop" alt="Camera" loading="lazy">
            </a>
            <button class="deals__card-wishlist" onclick="toggleWishlist(106)">
              <i class="bi bi-heart"></i>
            </button>
          </div>
          <div class="deals__card-info">
            <a href="product.php?id=106" class="deals__card-name">Instant Camera</a>
            <div class="deals__card-rating">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <span>(98)</span>
            </div>
            <div class="deals__card-price">
              <span class="deals__card-current">₦119,990</span>
              <span class="deals__card-original">₦149,990</span>
              <span class="deals__card-discount">-20%</span>
            </div>
            <div class="deals__card-timer">
              <i class="bi bi-clock"></i>
              <span class="timer" data-hours="3">03 : 30 : 00</span>
            </div>
            <button class="deals__card-add" onclick="addToCart(106)">
              <i class="bi bi-cart-plus"></i> Grab Deal
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- Electronics Deals Section -->
    <section class="deals__section" id="electronics-deals">
      <div class="deals__section-header">
        <h2 class="deals__section-title">📱 Electronics Deals</h2>
        <a href="shop?category=electronics&deals=1" class="deals__view-all">View All <i class="bi bi-arrow-right"></i></a>
      </div>

      <div class="deals__grid">
        <!-- Deal Card 7 -->
        <div class="deals__card">
          <div class="deals__card-badge deals__card-badge--sale">-35%</div>
          <div class="deals__card-image">
            <a href="product?id=107">
              <img src="https://images.unsplash.com/photo-1587033411391-5d9e51cce126?q=80&w=300&h=300&fit=crop" alt="MacBook Air" loading="lazy">
            </a>
            <button class="deals__card-wishlist" onclick="toggleWishlist(107)">
              <i class="bi bi-heart"></i>
            </button>
          </div>
          <div class="deals__card-info">
            <a href="product.php?id=107" class="deals__card-name">MacBook Air M2</a>
            <div class="deals__card-rating">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <span>(432)</span>
            </div>
            <div class="deals__card-price">
              <span class="deals__card-current">₦899,990</span>
              <span class="deals__card-original">₦1,299,990</span>
              <span class="deals__card-discount">-35%</span>
            </div>
            <button class="deals__card-add" onclick="addToCart(107)">
              <i class="bi bi-cart-plus"></i> Add to Cart
            </button>
          </div>
        </div>

        <!-- Deal Card 8 -->
        <div class="deals__card">
          <div class="deals__card-badge deals__card-badge--sale">-40%</div>
          <div class="deals__card-image">
            <a href="product?id=108">
              <img src="https://images.unsplash.com/photo-1593642702821-c8da6771f0c6?q=80&w=300&h=300&fit=crop" alt="iPad Pro" loading="lazy">
            </a>
            <button class="deals__card-wishlist" onclick="toggleWishlist(108)">
              <i class="bi bi-heart"></i>
            </button>
          </div>
          <div class="deals__card-info">
            <a href="product?id=108" class="deals__card-name">iPad Pro 12.9"</a>
            <div class="deals__card-rating">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <span>(287)</span>
            </div>
            <div class="deals__card-price">
              <span class="deals__card-current">₦549,990</span>
              <span class="deals__card-original">₦899,990</span>
              <span class="deals__card-discount">-40%</span>
            </div>
            <button class="deals__card-add" onclick="addToCart(108)">
              <i class="bi bi-cart-plus"></i> Add to Cart
            </button>
          </div>
        </div>

        <!-- Deal Card 9 -->
        <div class="deals__card">
          <div class="deals__card-badge deals__card-badge--sale">-30%</div>
          <div class="deals__card-image">
            <a href="product?id=109">
              <img src="https://images.unsplash.com/photo-1585386959984-a4155224a1ad?q=80&w=300&h=300&fit=crop" alt="Sony Headphones" loading="lazy">
            </a>
            <button class="deals__card-wishlist" onclick="toggleWishlist(109)">
              <i class="bi bi-heart"></i>
            </button>
          </div>
          <div class="deals__card-info">
            <a href="product?id=109" class="deals__card-name">Sony WH-1000XM5</a>
            <div class="deals__card-rating">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <span>(567)</span>
            </div>
            <div class="deals__card-price">
              <span class="deals__card-current">₦244,990</span>
              <span class="deals__card-original">₦349,990</span>
              <span class="deals__card-discount">-30%</span>
            </div>
            <button class="deals__card-add" onclick="addToCart(109)">
              <i class="bi bi-cart-plus"></i> Add to Cart
            </button>
          </div>
        </div>

        <!-- Deal Card 10 -->
        <div class="deals__card">
          <div class="deals__card-badge deals__card-badge--sale">-25%</div>
          <div class="deals__card-image">
            <a href="product?id=110">
              <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?q=80&w=300&h=300&fit=crop" alt="Drone" loading="lazy">
            </a>
            <button class="deals__card-wishlist" onclick="toggleWishlist(110)">
              <i class="bi bi-heart"></i>
            </button>
          </div>
          <div class="deals__card-info">
            <a href="product?id=110" class="deals__card-name">DJI Mini 3 Pro</a>
            <div class="deals__card-rating">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <span>(189)</span>
            </div>
            <div class="deals__card-price">
              <span class="deals__card-current">₦449,990</span>
              <span class="deals__card-original">₦599,990</span>
              <span class="deals__card-discount">-25%</span>
            </div>
            <button class="deals__card-add" onclick="addToCart(110)">
              <i class="bi bi-cart-plus"></i> Add to Cart
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- Fashion Deals Section -->
    <section class="deals__section" id="fashion-deals">
      <div class="deals__section-header">
        <h2 class="deals__section-title">👕 Fashion Deals</h2>
        <a href="shop.php?category=fashion&deals=1" class="deals__view-all">View All <i class="bi bi-arrow-right"></i></a>
      </div>

      <div class="deals__grid">
        <!-- Deal Card 11 -->
        <div class="deals__card">
          <div class="deals__card-badge deals__card-badge--sale">-50%</div>
          <div class="deals__card-image">
            <a href="product?id=111">
              <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?q=80&w=300&h=300&fit=crop" alt="Designer Bag" loading="lazy">
            </a>
            <button class="deals__card-wishlist" onclick="toggleWishlist(111)">
              <i class="bi bi-heart"></i>
            </button>
          </div>
          <div class="deals__card-info">
            <a href="product?id=111" class="deals__card-name">Designer Handbag</a>
            <div class="deals__card-rating">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star"></i>
              <span>(45)</span>
            </div>
            <div class="deals__card-price">
              <span class="deals__card-current">₦124,990</span>
              <span class="deals__card-original">₦249,990</span>
              <span class="deals__card-discount">-50%</span>
            </div>
            <button class="deals__card-add" onclick="addToCart(111)">
              <i class="bi bi-cart-plus"></i> Add to Cart
            </button>
          </div>
        </div>

        <!-- Deal Card 12 -->
        <div class="deals__card">
          <div class="deals__card-badge deals__card-badge--sale">-40%</div>
          <div class="deals__card-image">
            <a href="product?id=112">
              <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?q=80&w=300&h=300&fit=crop" alt="Sneakers" loading="lazy">
            </a>
            <button class="deals__card-wishlist" onclick="toggleWishlist(112)">
              <i class="bi bi-heart"></i>
            </button>
          </div>
          <div class="deals__card-info">
            <a href="product?id=112" class="deals__card-name">Premium Sneakers</a>
            <div class="deals__card-rating">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <span>(234)</span>
            </div>
            <div class="deals__card-price">
              <span class="deals__card-current">₦59,990</span>
              <span class="deals__card-original">₦99,990</span>
              <span class="deals__card-discount">-40%</span>
            </div>
            <button class="deals__card-add" onclick="addToCart(112)">
              <i class="bi bi-cart-plus"></i> Add to Cart
            </button>
          </div>
        </div>

        <!-- Deal Card 13 -->
        <div class="deals__card">
          <div class="deals__card-badge deals__card-badge--sale">-35%</div>
          <div class="deals__card-image">
            <a href="product?id=113">
              <img src="https://images.unsplash.com/photo-1523772721666-22ad3c5b6f90?q=80&w=300&h=300&fit=crop" alt="Watch" loading="lazy">
            </a>
            <button class="deals__card-wishlist" onclick="toggleWishlist(113)">
              <i class="bi bi-heart"></i>
            </button>
          </div>
          <div class="deals__card-info">
            <a href="product?id=113" class="deals__card-name">Luxury Watch</a>
            <div class="deals__card-rating">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star"></i>
              <span>(67)</span>
            </div>
            <div class="deals__card-price">
              <span class="deals__card-current">₦162,990</span>
              <span class="deals__card-original">₦249,990</span>
              <span class="deals__card-discount">-35%</span>
            </div>
            <button class="deals__card-add" onclick="addToCart(113)">
              <i class="bi bi-cart-plus"></i> Add to Cart
            </button>
          </div>
        </div>

        <!-- Deal Card 14 -->
        <div class="deals__card">
          <div class="deals__card-badge deals__card-badge--sale">-45%</div>
          <div class="deals__card-image">
            <a href="product?id=114">
              <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?q=80&w=300&h=300&fit=crop" alt="Jacket" loading="lazy">
            </a>
            <button class="deals__card-wishlist" onclick="toggleWishlist(114)">
              <i class="bi bi-heart"></i>
            </button>
          </div>
          <div class="deals__card-info">
            <a href="product?id=114" class="deals__card-name">Leather Jacket</a>
            <div class="deals__card-rating">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <span>(98)</span>
            </div>
            <div class="deals__card-price">
              <span class="deals__card-current">₦109,990</span>
              <span class="deals__card-original">₦199,990</span>
              <span class="deals__card-discount">-45%</span>
            </div>
            <button class="deals__card-add" onclick="addToCart(114)">
              <i class="bi bi-cart-plus"></i> Add to Cart
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- Home Deals Section -->
    <section class="deals__section" id="home-deals">
      <div class="deals__section-header">
        <h2 class="deals__section-title">🏠 Home & Living Deals</h2>
        <a href="shop?category=home&deals=1" class="deals__view-all">View All <i class="bi bi-arrow-right"></i></a>
      </div>

      <div class="deals__grid">
        <!-- Deal Card 15 -->
        <div class="deals__card">
          <div class="deals__card-badge deals__card-badge--sale">-55%</div>
          <div class="deals__card-image">
            <a href="product?id=115">
              <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?q=80&w=300&h=300&fit=crop" alt="Sofa" loading="lazy">
            </a>
            <button class="deals__card-wishlist" onclick="toggleWishlist(115)">
              <i class="bi bi-heart"></i>
            </button>
          </div>
          <div class="deals__card-info">
            <a href="product?id=115" class="deals__card-name">Modern Sofa</a>
            <div class="deals__card-rating">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star"></i>
              <span>(34)</span>
            </div>
            <div class="deals__card-price">
              <span class="deals__card-current">₦449,990</span>
              <span class="deals__card-original">₦999,990</span>
              <span class="deals__card-discount">-55%</span>
            </div>
            <button class="deals__card-add" onclick="addToCart(115)">
              <i class="bi bi-cart-plus"></i> Add to Cart
            </button>
          </div>
        </div>

        <!-- Deal Card 16 -->
        <div class="deals__card">
          <div class="deals__card-badge deals__card-badge--sale">-40%</div>
          <div class="deals__card-image">
            <a href="product?id=116">
              <img src="https://images.unsplash.com/photo-1484101403633-562f891dc89a?q=80&w=300&h=300&fit=crop" alt="Lamp" loading="lazy">
            </a>
            <button class="deals__card-wishlist" onclick="toggleWishlist(116)">
              <i class="bi bi-heart"></i>
            </button>
          </div>
          <div class="deals__card-info">
            <a href="product?id=116" class="deals__card-name">Table Lamp</a>
            <div class="deals__card-rating">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <span>(67)</span>
            </div>
            <div class="deals__card-price">
              <span class="deals__card-current">₦25,990</span>
              <span class="deals__card-original">₦42,990</span>
              <span class="deals__card-discount">-40%</span>
            </div>
            <button class="deals__card-add" onclick="addToCart(116)">
              <i class="bi bi-cart-plus"></i> Add to Cart
            </button>
          </div>
        </div>

        <!-- Deal Card 17 -->
        <div class="deals__card">
          <div class="deals__card-badge deals__card-badge--sale">-30%</div>
          <div class="deals__card-image">
            <a href="product?id=117">
              <img src="https://images.unsplash.com/photo-1556911220-bff31c812dba?q=80&w=300&h=300&fit=crop" alt="Cookware" loading="lazy">
            </a>
            <button class="deals__card-wishlist" onclick="toggleWishlist(117)">
              <i class="bi bi-heart"></i>
            </button>
          </div>
          <div class="deals__card-info">
            <a href="product?id=117" class="deals__card-name">Cookware Set</a>
            <div class="deals__card-rating">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star"></i>
              <span>(89)</span>
            </div>
            <div class="deals__card-price">
              <span class="deals__card-current">₦69,990</span>
              <span class="deals__card-original">₦99,990</span>
              <span class="deals__card-discount">-30%</span>
            </div>
            <button class="deals__card-add" onclick="addToCart(117)">
              <i class="bi bi-cart-plus"></i> Add to Cart
            </button>
          </div>
        </div>

        <!-- Deal Card 18 -->
        <div class="deals__card">
          <div class="deals__card-badge deals__card-badge--sale">-50%</div>
          <div class="deals__card-image">
            <a href="product?id=118">
              <img src="https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af?q=80&w=300&h=300&fit=crop" alt="Bedding" loading="lazy">
            </a>
            <button class="deals__card-wishlist" onclick="toggleWishlist(118)">
              <i class="bi bi-heart"></i>
            </button>
          </div>
          <div class="deals__card-info">
            <a href="product?id=118" class="deals__card-name">Luxury Bedding Set</a>
            <div class="deals__card-rating">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <span>(112)</span>
            </div>
            <div class="deals__card-price">
              <span class="deals__card-current">₦89,990</span>
              <span class="deals__card-original">₦179,990</span>
              <span class="deals__card-discount">-50%</span>
            </div>
            <button class="deals__card-add" onclick="addToCart(118)">
              <i class="bi bi-cart-plus"></i> Add to Cart
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- Load More Button -->
    <div class="deals__load-more">
      <button class="deals__load-more-btn" onclick="loadMoreDeals()">
        Load More Deals <i class="bi bi-arrow-down"></i>
      </button>
    </div>
  </div>
</main>

<script>
// Tab switching
function switchDealTab(tab) {
  // Update tab buttons
  document.querySelectorAll('.deals__tab-btn').forEach(btn => {
    btn.classList.remove('active');
  });
  event.target.classList.add('active');
  
  // Hide all sections
  document.querySelectorAll('.deals__section').forEach(section => {
    section.classList.remove('active');
  });
  
  // Show selected section
  let sectionId;
  switch(tab) {
    case 'flash':
      sectionId = 'flash-deals';
      break;
    case 'electronics':
      sectionId = 'electronics-deals';
      break;
    case 'fashion':
      sectionId = 'fashion-deals';
      break;
    case 'home':
      sectionId = 'home-deals';
      break;
    case 'beauty':
      sectionId = 'beauty-deals';
      break;
    default:
      sectionId = 'flash-deals';
  }
  
  document.getElementById(sectionId).classList.add('active');
}

// Mega countdown timer
function startMegaCountdown() {
  // Set end time to end of day (23:59:59)
  const now = new Date();
  const endOfDay = new Date(now);
  endOfDay.setHours(23, 59, 59, 999);
  
  function updateTimer() {
    const now = new Date();
    const diff = endOfDay - now;
    
    if (diff <= 0) {
      document.getElementById('hours').textContent = '00';
      document.getElementById('minutes').textContent = '00';
      document.getElementById('seconds').textContent = '00';
      return;
    }
    
    const hours = Math.floor(diff / (1000 * 60 * 60));
    const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((diff % (1000 * 60)) / 1000);
    
    document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
    document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
    document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');
  }
  
  updateTimer();
  setInterval(updateTimer, 1000);
}

// Product timers
function startProductTimers() {
  document.querySelectorAll('.timer').forEach(timer => {
    const timeString = timer.textContent;
    let [hours, minutes, seconds] = timeString.split(':').map(Number);
    let totalSeconds = hours * 3600 + minutes * 60 + seconds;
    
    function updateTimer() {
      if (totalSeconds <= 0) {
        timer.textContent = '00 : 00 : 00';
        return;
      }
      
      const h = Math.floor(totalSeconds / 3600);
      const m = Math.floor((totalSeconds % 3600) / 60);
      const s = totalSeconds % 60;
      
      timer.textContent = `${h.toString().padStart(2, '0')} : ${m.toString().padStart(2, '0')} : ${s.toString().padStart(2, '0')}`;
      totalSeconds--;
    }
    
    setInterval(updateTimer, 1000);
  });
}

// Load more deals
function loadMoreDeals() {
  const btn = event.currentTarget;
  btn.innerHTML = 'Loading... <i class="bi bi-arrow-repeat"></i>';
  btn.disabled = true;
  
  setTimeout(() => {
    btn.innerHTML = 'Load More Deals <i class="bi bi-arrow-down"></i>';
    btn.disabled = false;
    alert('More deals would load here in a real implementation');
  }, 1500);
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

// Notification
function showNotification(message) {
  let notification = document.querySelector('.deals__notification');
  
  if (!notification) {
    notification = document.createElement('div');
    notification.className = 'deals__notification';
    document.body.appendChild(notification);
  }
  
  notification.textContent = message;
  notification.classList.add('show');
  
  setTimeout(() => {
    notification.classList.remove('show');
  }, 3000);
}

// Initialize timers on page load
document.addEventListener('DOMContentLoaded', function() {
  startMegaCountdown();
  startProductTimers();
});
</script>

<?php include __DIR__ . "/partials/footer.php"; ?>