<?php
require_once __DIR__ . "/partials/header.php";
?>
<link rel="stylesheet" href="<?= $css ?>home.css?v=<?= filemtime($css.'home.css') ?>">

<main class="home">

  <!-- ===== HERO SECTION ===== -->
  <section class="hero-wrapper">
    <div class="container hero-grid">

      <!-- Categories Sidebar with Simple Dropdowns -->
      <aside class="category-panel">
        <h3><i class="bi bi-grid"></i> Categories</h3>
        <ul class="category-list">
          <li class="has-dropdown">
            <a href="category?slug=phones"><i class="bi bi-phone"></i> Phones</a>
            <ul class="simple-dropdown">
              <li><a href="category?subcategory?slug=smartphone"><i class="bi bi-arrow-right-short"></i> Smartphones</a></li>
              <li><a href="category?subcategory?slug=accessories"><i class="bi bi-arrow-right-short"></i> Accessories</a></li>
              <li><a href="category?subcategory?slug=tablets"><i class="bi bi-arrow-right-short"></i> Tablets</a></li>
              <li><a href="category?subcategory?slug=smartwatch"><i class="bi bi-arrow-right-short"></i> Smart Watches</a></li>
            </ul>
          </li>
          <li class="has-dropdown">
            <a href="category?slug=laptops"><i class="bi bi-laptop"></i> Laptops</a>
            <ul class="simple-dropdown">
              <li><a href="category?subcategory?slug=gaming-laptops"><i class="bi bi-arrow-right-short"></i> Gaming Laptops</a></li>
              <li><a href="category?subcategory?slug=ultrabooks"><i class="bi bi-arrow-right-short"></i> Ultrabooks</a></li>
              <li><a href="category?subcategory?slug=macbooks"><i class="bi bi-arrow-right-short"></i> MacBooks</a></li>
              <li><a href="category?subcategory?slug=accessories"><i class="bi bi-arrow-right-short"></i> Accessories</a></li>
            </ul>
          </li>
          <li class="has-dropdown">
            <a href="category?slug=gaming"><i class="bi bi-controller"></i> Gaming</a>
            <ul class="simple-dropdown">
              <li><a href="category?subcategory?slug=consoles"><i class="bi bi-arrow-right-short"></i> Consoles</a></li>
              <li><a href="category?subcategory?slug=games"><i class="bi bi-arrow-right-short"></i> Games</a></li>
              <li><a href="category?subcategory?slug=accessories"><i class="bi bi-arrow-right-short"></i> Accessories</a></li>
              <li><a href="category?subcategory?slug=vr-headsets"><i class="bi bi-arrow-right-short"></i> VR Headsets</a></li>
            </ul>
          </li>
          <li class="has-dropdown">
            <a href="category?slug=electronics"><i class="bi bi-tv"></i> Electronics</a>
            <ul class="simple-dropdown">
              <li><a href="category?subcategory?slug=tvs"><i class="bi bi-arrow-right-short"></i> TVs</a></li>
              <li><a href="category?subcategory?slug=audio"><i class="bi bi-arrow-right-short"></i> Audio</a></li>
              <li><a href="category?subcategory?slug=cameras"><i class="bi bi-arrow-right-short"></i> Cameras</a></li>
              <li><a href="category?subcategory?slug=home-theater"><i class="bi bi-arrow-right-short"></i> Home Theater</a></li>
            </ul>
          </li>
          <li class="has-dropdown">
            <a href="category?slug=fashion"><i class="bi bi-handbag"></i> Fashion</a>
            <ul class="simple-dropdown">
              <li><a href="category?subcategory?slug=mens-clothing"><i class="bi bi-arrow-right-short"></i> Men's Clothing</a></li>
              <li><a href="category?subcategory?slug=womens-clothing"><i class="bi bi-arrow-right-short"></i> Women's Clothing</a></li>
              <li><a href="category?subcategory?slug=shoes"><i class="bi bi-arrow-right-short"></i> Shoes</a></li>
              <li><a href="category?subcategory?slug=accessories"><i class="bi bi-arrow-right-short"></i> Accessories</a></li>
            </ul>
          </li>
          <li class="has-dropdown">
            <a href="category?slug=home"><i class="bi bi-house-door"></i> Home</a>
            <ul class="simple-dropdown">
              <li><a href="category?subcategory?slug=furniture"><i class="bi bi-arrow-right-short"></i> Furniture</a></li>
              <li><a href="category?subcategory?slug=decor"><i class="bi bi-arrow-right-short"></i> Decor</a></li>
              <li><a href="category?subcategory?slug=kitchen"><i class="bi bi-arrow-right-short"></i> Kitchen</a></li>
              <li><a href="category?subcategory?slug=bedding"><i class="bi bi-arrow-right-short"></i> Bedding</a></li>
            </ul>
          </li>
          <li class="has-dropdown">
            <a href="category?slug=supermarket"><i class="bi bi-cart"></i> Supermarket</a>
            <ul class="simple-dropdown">
              <li><a href="category?subcategory?slug=food-beverages"><i class="bi bi-arrow-right-short"></i> Food & Beverages</a></li>
              <li><a href="category?subcategory?slug=household-items"><i class="bi bi-arrow-right-short"></i> Household Items</a></li>
              <li><a href="category?subcategory?slug=personal-care"><i class="bi bi-arrow-right-short"></i> Personal Care</a></li>
              <li><a href="category?subcategory?slug=baby-products"><i class="bi bi-arrow-right-short"></i> Baby Products</a></li>
            </ul>
          </li>
          <li class="has-dropdown">
            <a href="category?slug=beauty"><i class="bi bi-droplet"></i> Beauty</a>
            <ul class="simple-dropdown">
              <li><a href="category?subcategory?slug=skincare"><i class="bi bi-arrow-right-short"></i> Skincare</a></li>
              <li><a href="category?subcategory?slug=makeup"><i class="bi bi-arrow-right-short"></i> Makeup</a></li>
              <li><a href="category?subcategory?slug=fragrance"><i class="bi bi-arrow-right-short"></i> Fragrance</a></li>
              <li><a href="category?subcategory?slug=hair-care"><i class="bi bi-arrow-right-short"></i> Hair Care</a></li>
            </ul>
          </li>
          <li>
            <a href="categories"><i class="bi bi-patch-plus"></i> More Categories</a>
          </li>
        </ul>
      </aside>

      <!-- Image Slider with Opacity Transition and Navigation -->
      <div class="hero-banner">
        <div class="slider-container" id="imageSlider">
          <a href="deals.php" class="slider-slide active">
            <img src="https://images.unsplash.com/photo-1607082350899-7e105aa886ae?q=80&w=1200" alt="Sale 1" loading="lazy" decoding="async">
          </a>
          <a href="deals.php" class="slider-slide">
            <img src="https://images.unsplash.com/photo-1607083206869-4c7672e72a8a?q=80&w=1200" alt="Sale 2"loading="lazy" decoding="async">
          </a>
          <a href="deals.php" class="slider-slide">
            <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?q=80&w=1200" alt="Sale 3" loading="lazy" decoding="async">
          </a>
          
          <!-- Navigation Arrows -->
          <button class="slider-nav prev" id="prevSlide" aria-label="Previous slide">
            <i class="bi bi-chevron-left"></i>
          </button>
          <button class="slider-nav next" id="nextSlide" aria-label="Next slide">
            <i class="bi bi-chevron-right"></i>
          </button>
          
          <!-- Slider Dots -->
          <div class="slider-dots" id="sliderDots">
            <span class="slider-dot active" data-index="0"></span>
            <span class="slider-dot" data-index="1"></span>
            <span class="slider-dot" data-index="2"></span>
          </div>
        </div>
      </div>

      <!-- Right Promo Cards -->
      <div class="promo-column">
        <a href="deals.php" class="promo-card">
          <img src="https://images.unsplash.com/photo-1510557880182-3d4d3cba35a5?q=80&w=800" alt="Flash Deals" loading="lazy" decoding="async">
        </a>

        <a href="deals.php" class="promo-card">
          <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?q=80&w=800" alt="Flash Deals" loading="lazy" decoding="async">
        </a>
      </div>

    </div>
  </section>

  <!-- ===== SHOP BY CATEGORY SECTION ===== -->
  <section class="scroll-section category-scroll">
    <div class="scroll-section__container">
      <div class="scroll-section__header">
        <h2>Shop by Category</h2>
        <a href="categories" class="scroll-section__view-all">View All <i class="bi bi-arrow-right"></i></a>
      </div>

      <div class="scroll-section__viewport">
        <div class="scroll-section__track">
          <a href="category?slug=phones" class="scroll-section__item">
            <img src="https://images.unsplash.com/photo-1512499617640-c2f999098c01?q=80&w=200&h=200&fit=crop" alt="Phones" loading="lazy" decoding="async">
            <span>Phones</span>
          </a>
          
          <a href="category?slug=laptop" class="scroll-section__item">
            <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?q=80&w=200&h=200&fit=crop" alt="Laptops" loading="lazy" decoding="async">
            <span>Laptops</span>
          </a>
          
          <a href="category?slug=gaming" class="scroll-section__item">
            <img src="https://images.unsplash.com/photo-1606813909353-6c7a8b8e8cfa?q=80&w=200&h=200&fit=crop" alt="Gaming" loading="lazy" decoding="async">
            <span>Gaming</span>
          </a>
          
          <a href="category?slug=watches" class="scroll-section__item">
            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=200&h=200&fit=crop" alt="Watches" loading="lazy" decoding="async">
            <span>Watches</span>
          </a>
          
          <a href="category?slug=cameras" class="scroll-section__item">
            <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?q=80&w=200&h=200&fit=crop" alt="Cameras" loading="lazy" decoding="async">
            <span>Cameras</span>
          </a>
          
          <a href="category?slug=audio" class="scroll-section__item">
            <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=200&h=200&fit=crop" alt="Audio" loading="lazy" decoding="async">
            <span>Audio</span>
          </a>
          
          <a href="category?slug=fashion" class="scroll-section__item">
            <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?q=80&w=200&h=200&fit=crop" alt="Fashion" loading="lazy" decoding="async">
            <span>Fashion</span>
          </a>
          
          <a href="category?slug=homes" class="scroll-section__item">
            <img src="https://images.unsplash.com/photo-1484101403633-562f891dc89a?q=80&w=200&h=200&fit=crop" alt="Home" loading="lazy" decoding="async">
            <span>Home</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== FEATURED PRODUCTS SECTION ===== -->
  <section class="scroll-section product-scroll">
    <div class="scroll-section__container">
      <div class="scroll-section__header">
        <div>
          <span class="product-scroll__subtitle">Curated for you</span>
          <h2>Featured Products</h2>
        </div>
        <a href="shop" class="scroll-section__view-all">View All <i class="bi bi-arrow-right"></i></a>
      </div>

      <!-- Navigation Arrows (Desktop only) -->
      <div class="scroll-section__nav">
        <button class="scroll-section__arrow prev" id="productPrev" aria-label="Previous products">
          <i class="bi bi-chevron-left"></i>
        </button>
        <button class="scroll-section__arrow next" id="productNext" aria-label="Next products">
          <i class="bi bi-chevron-right"></i>
        </button>
      </div>

      <div class="scroll-section__viewport" id="productViewport">
        <div class="scroll-section__track" id="productTrack">
          <!-- Product 1 -->
          <article class="scroll-section__item product-card">
            <div class="product-card__image">
              <a href="product?id=1">
                <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?q=80&w=300&h=300&fit=crop" alt="Smart Watch Pro" loading="lazy" decoding="async">
              </a>
              <span class="product-scroll__badge">-30%</span>
              <button class="product-scroll__wishlist" onclick="addToWishlist(1)" aria-label="Add to wishlist">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="product-scroll__info">
              <a href="product?id=1" class="product-scroll__name">Smart Watch Pro</a>
              <div class="product-scroll__rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-half"></i>
                <span>(128)</span>
              </div>
              <div class="product-scroll__price">
                <span class="current">&#8358;89.99</span>
                <span class="original">&#8358;129.99</span>
              </div>
              <button class="btn-cart" onclick="addToCart(1)">
                <i class="bi bi-cart-plus"></i> Add
              </button>
            </div>
          </article>
          
          <!-- Product 2 -->
          <article class="scroll-section__item product-card">
            <div class="product-card__image">
              <a href="product?id=2">
                <img src="https://images.unsplash.com/photo-1585386959984-a4155224a1ad?q=80&w=300&h=300&fit=crop" alt="Wireless Headphones" loading="lazy" decoding="async">
              </a>
              <span class="product-scroll__badge">-25%</span>
              <button class="product-scroll__wishlist" onclick="addToWishlist(2)" aria-label="Add to wishlist">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="product-scroll__info">
              <a href="product?id=2" class="product-scroll__name">Wireless Headphones</a>
              <div class="product-scroll__rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <span>(256)</span>
              </div>
              <div class="product-scroll__price">
                <span class="current">&#8358;59.99</span>
                <span class="original">&#8358;79.99</span>
              </div>
              <button class="btn-cart" onclick="addToCart(2)">
                <i class="bi bi-cart-plus"></i> Add
              </button>
            </div>
          </article>
          
          <!-- Product 3 -->
          <article class="scroll-section__item product-card">
            <div class="product-card__image">
              <a href="product?id=3">
                <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?q=80&w=300&h=300&fit=crop" alt="Instant Camera" loading="lazy" decoding="async">
              </a>
              <span class="product-scroll__badge">-40%</span>
              <button class="product-scroll__wishlist" onclick="addToWishlist(3)" aria-label="Add to wishlist">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="product-scroll__info">
              <a href="product?id=3" class="product-scroll__name">Instant Camera</a>
              <div class="product-scroll__rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
                <span>(89)</span>
              </div>
              <div class="product-scroll__price">
                <span class="current">&#8358;149.99</span>
                <span class="original">&#8358;249.99</span>
              </div>
              <button class="btn-cart" onclick="addToCart(3)">
                <i class="bi bi-cart-plus"></i> Add
              </button>
            </div>
          </article>
          
          <!-- Product 4 -->
          <article class="scroll-section__item product-card">
            <div class="product-card__image">
              <a href="product?id=4">
                <img src="https://images.unsplash.com/photo-1593642702821-c8da6771f0c6?q=80&w=300&h=300&fit=crop" alt="Android Tablet" loading="lazy" decoding="async">
              </a>
              <span class="product-scroll__badge">-20%</span>
              <button class="product-scroll__wishlist" onclick="addToWishlist(4)" aria-label="Add to wishlist">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="product-scroll__info">
              <a href="product?id=4" class="product-scroll__name">Android Tablet</a>
              <div class="product-scroll__rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <span>(167)</span>
              </div>
              <div class="product-scroll__price">
                <span class="current">&#8358;199.99</span>
                <span class="original">&#8358;249.99</span>
              </div>
              <button class="btn-cart" onclick="addToCart(4)">
                <i class="bi bi-cart-plus"></i> Add
              </button>
            </div>
          </article>
          
          <!-- Product 5 -->
          <article class="scroll-section__item product-card">
            <div class="product-card__image">
              <a href="product?id=5">
                <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=300&h=300&fit=crop" alt="Premium Headphones" loading="lazy" decoding="async">
              </a>
              <span class="product-scroll__badge">-15%</span>
              <button class="product-scroll__wishlist" onclick="addToWishlist(5)" aria-label="Add to wishlist">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="product-scroll__info">
              <a href="product?id=5" class="product-scroll__name">Premium Headphones</a>
              <div class="product-scroll__rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-half"></i>
                <span>(203)</span>
              </div>
              <div class="product-scroll__price">
                <span class="current">&#8358;84.99</span>
                <span class="original">&#8358;99.99</span>
              </div>
              <button class="btn-cart" onclick="addToCart(5)">
                <i class="bi bi-cart-plus"></i> Add
              </button>
            </div>
          </article>
          
          <!-- Product 6 -->
          <article class="scroll-section__item product-card">
            <div class="product-card__image">
              <a href="product?id=6">
                <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=300&h=300&fit=crop" alt="Smart Watch" loading="lazy" decoding="async">
              </a>
              <span class="product-scroll__badge">-10%</span>
              <button class="product-scroll__wishlist" onclick="addToWishlist(6)" aria-label="Add to wishlist">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="product-scroll__info">
              <a href="product?id=6" class="product-scroll__name">Fitness Tracker</a>
              <div class="product-scroll__rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
                <span>(76)</span>
              </div>
              <div class="product-scroll__price">
                <span class="current">&#8358;44.99</span>
                <span class="original">&#8358;49.99</span>
              </div>
              <button class="btn-cart" onclick="addToCart(6)">
                <i class="bi bi-cart-plus"></i> Add
              </button>
            </div>
          </article>
          
          <!-- Product 7 -->
          <article class="scroll-section__item product-card">
            <div class="product-card__image">
              <a href="product?id=7">
                <img src="https://images.unsplash.com/photo-1606813909353-6c7a8b8e8cfa?q=80&w=300&h=300&fit=crop" alt="Gaming Console" loading="lazy" decoding="async">
              </a>
              <span class="product-scroll__badge">-35%</span>
              <button class="product-scroll__wishlist" onclick="addToWishlist(7)" aria-label="Add to wishlist">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="product-scroll__info">
              <a href="product?id=7" class="product-scroll__name">Gaming Console</a>
              <div class="product-scroll__rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <span>(312)</span>
              </div>
              <div class="product-scroll__price">
                <span class="current">&#8358;299.99</span>
                <span class="original">&#8358;459.99</span>
              </div>
              <button class="btn-cart" onclick="addToCart(7)">
                <i class="bi bi-cart-plus"></i> Add
              </button>
            </div>
          </article>
          
          <!-- Product 8 -->
          <article class="scroll-section__item product-card">
            <div class="product-card__image">
              <a href="product?id=8">
                <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?q=80&w=300&h=300&fit=crop" alt="Drone" loading="lazy" decoding="async">
              </a>
              <span class="product-scroll__badge">-45%</span>
              <button class="product-scroll__wishlist" onclick="addToWishlist(8)" aria-label="Add to wishlist">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="product-scroll__info">
              <a href="product?id=8" class="product-scroll__name">Drone Pro</a>
              <div class="product-scroll__rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <span>(67)</span>
              </div>
              <div class="product-scroll__price">
                <span class="current">&#8358;549.99</span>
                <span class="original">&#8358;999.99</span>
              </div>
              <button class="btn-cart" onclick="addToCart(8)">
                <i class="bi bi-cart-plus"></i> Add
              </button>
            </div>
          </article>
          
          <!-- Product 9 -->
          <article class="scroll-section__item product-card">
            <div class="product-card__image">
              <a href="product?id=9">
                <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?q=80&w=300&h=300&fit=crop" alt="Fashion" loading="lazy" decoding="async">
              </a>
              <span class="product-scroll__badge">-50%</span>
              <button class="product-scroll__wishlist" onclick="addToWishlist(9)" aria-label="Add to wishlist">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="product-scroll__info">
              <a href="product?id=9" class="product-scroll__name">Designer Bag</a>
              <div class="product-scroll__rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
                <span>(45)</span>
              </div>
              <div class="product-scroll__price">
                <span class="current">&#8358;124.99</span>
                <span class="original">&#8358;249.99</span>
              </div>
              <button class="btn-cart" onclick="addToCart(9)">
                <i class="bi bi-cart-plus"></i> Add
              </button>
            </div>
          </article>
          
          <!-- Product 10 -->
          <article class="scroll-section__item product-card">
            <div class="product-card__image">
              <a href="product?id=10">
                <img src="https://images.unsplash.com/photo-1484101403633-562f891dc89a?q=80&w=300&h=300&fit=crop" alt="Home Decor" loading="lazy" decoding="async">
              </a>
              <span class="product-scroll__badge">-15%</span>
              <button class="product-scroll__wishlist" onclick="addToWishlist(10)" aria-label="Add to wishlist">
                <i class="bi bi-heart"></i>
              </button>
            </div>
            <div class="product-scroll__info">
              <a href="product?id=10" class="product-scroll__name">Table Lamp</a>
              <div class="product-scroll__rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <span>(67)</span>
              </div>
              <div class="product-scroll__price">
                <span class="current">&#8358;42.99</span>
                <span class="original">&#8358;49.99</span>
              </div>
              <button class="btn-cart" onclick="addToCart(10)">
                <i class="bi bi-cart-plus"></i> Add
              </button>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== PROMO BANNER ===== -->
  <section class="promo-banner-section">
    <div class="container">
      <div class="promo-banner__container">
        <!-- Dynamic Media Container -->
        <div class="promo-banner__media">
          <!-- Option 1: Video (MP4) - Best performance -->
          <!-- <video class="promo-banner__video" autoplay loop muted playsinline poster="fallback.jpg">
            <source src="promo-video.mp4" type="video/mp4">
          </video> -->
          
          <!-- Option 2: GIF - Simple but larger file size -->
          <!-- <img src="promo-animation.gif" class="promo-banner__gif" alt="Promo Animation"> -->
          
          <!-- Option 3: Image - Most compatible -->
          <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?q=80&w=1200" 
              class="promo-banner__image" 
              alt="Summer Sale"
              loading="eager">
          
          <!-- Option 4: Iframe (for external videos) - Uncomment if needed -->
          <!-- <iframe class="promo-banner__iframe" 
                  src="https://player.vimeo.com/video/824804225?background=1&autoplay=1&loop=1&muted=1" 
                  frameborder="0" 
                  allow="autoplay; fullscreen"
                  allowfullscreen
                  title="Promotional Video">
          </iframe> -->
        </div>
        
        <!-- Content Overlay (always same) -->
        <div class="promo-banner__content">
          <span class="promo-banner__subtitle">FLASH SALE</span>
          <h2 class="promo-banner__title">Up to 50% Off<br>Smartphones & Accessories</h2>
          
          <!-- Countdown Timer -->
          <div class="promo-banner__countdown" id="promoCountdown">
            Ends in: 04 : 32 : 10
          </div>
          
          <p class="promo-banner__description">Free delivery today on all orders</p>
          <a href="sale.php" class="promo-banner__btn">Grab This Deal <i class="bi bi-arrow-right"></i></a>
          
          <!-- Micro Trust Signal -->
          <small class="promo-banner__trust">
            <i class="bi bi-check-circle-fill"></i>
            500+ orders delivered today
          </small>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== DEALS OF THE DAY SECTION ===== -->
  <section class="scroll-section deals-scroll">
    <div class="scroll-section__container">
      <div class="scroll-section__header">
        <div>
          <span class="deals-scroll__subtitle">Flash Sales</span>
          <h2>Deals of the Day</h2>
        </div>
        <a href="deals.php" class="scroll-section__view-all">View All <i class="bi bi-arrow-right"></i></a>
      </div>

      <!-- Navigation Arrows -->
      <div class="scroll-section__nav">
        <button class="scroll-section__arrow prev" id="dealsPrev" aria-label="Previous deals">
          <i class="bi bi-chevron-left"></i>
        </button>
        <button class="scroll-section__arrow next" id="dealsNext" aria-label="Next deals">
          <i class="bi bi-chevron-right"></i>
        </button>
      </div>

      <div class="scroll-section__viewport" id="dealsViewport">
        <div class="scroll-section__track" id="dealsTrack">
          <!-- Deal 1 -->
          <article class="scroll-section__item product-card">
            <div class="product-card__image">
              <a href="product?id=11">
                <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=300&h=300&fit=crop"  loading="lazy" decoding="async" alt="Smart Watch">
              </a>
              <span class="deals-scroll__badge">-40%</span>
            </div>
            <div class="deals-scroll__info">
              <a href="product?id=11" class="deals-scroll__name">Fitness Smart Watch</a>
              <div class="deals-scroll__timer">
                <i class="bi bi-clock"></i>
                <span class="timer" data-hours="23">23:59:59</span>
              </div>
              <div class="deals-scroll__price">
                <span class="current">&#8358;59.99</span>
                <span class="original">&#8358;99.99</span>
              </div>
              <button class="btn-cart" onclick="addToCart(11)">
                <i class="bi bi-lightning"></i> Flash Deal
              </button>
            </div>
          </article>

          <!-- Deal 2 -->
          <article class="scroll-section__item product-card">
            <div class="product-card__image">
              <a href="product?id=12">
                <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=300&h=300&fit=crop"  loading="lazy" decoding="async" alt="Headphones">
              </a>
              <span class="deals-scroll__badge">-35%</span>
            </div>
            <div class="deals-scroll__info">
              <a href="product?id=12" class="deals-scroll__name">Premium Headphones</a>
              <div class="deals-scroll__timer">
                <i class="bi bi-clock"></i>
                <span class="timer" data-hours="12">12:30:00</span>
              </div>
              <div class="deals-scroll__price">
                <span class="current">&#8358;64.99</span>
                <span class="original">&#8358;99.99</span>
              </div>
              <button class="btn-cart" onclick="addToCart(12)">
                <i class="bi bi-lightning"></i> Flash Deal
              </button>
            </div>
          </article>

          <!-- Deal 3 -->
          <article class="scroll-section__item product-card">
            <div class="product-card__image">
              <a href="product?id=13">
                <img src="https://images.unsplash.com/photo-1593642702821-c8da6771f0c6?q=80&w=300&h=300&fit=crop" loading="lazy" decoding="async" alt="Tablet">
              </a>
              <span class="deals-scroll__badge">-45%</span>
            </div>
            <div class="deals-scroll__info">
              <a href="product?id=13" class="deals-scroll__name">Android Tablet 10"</a>
              <div class="deals-scroll__timer">
                <i class="bi bi-clock"></i>
                <span class="timer" data-hours="5">05:30:00</span>
              </div>
              <div class="deals-scroll__price">
                <span class="current">&#8358;149.99</span>
                <span class="original">&#8358;269.99</span>
              </div>
              <button class="btn-cart" onclick="addToCart(13)">
                <i class="bi bi-lightning"></i> Flash Deal
              </button>
            </div>
          </article>

          <!-- Deal 4 -->
          <article class="scroll-section__item product-card">
            <div class="product-card__image">
              <a href="product?id=14">
                <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?q=80&w=300&h=300&fit=crop" loading="lazy" decoding="async" alt="Camera">
              </a>
              <span class="deals-scroll__badge">-50%</span>
            </div>
            <div class="deals-scroll__info">
              <a href="product?id=14" class="deals-scroll__name">Instant Camera</a>
              <div class="deals-scroll__timer">
                <i class="bi bi-clock"></i>
                <span class="timer" data-hours="8">08:45:00</span>
              </div>
              <div class="deals-scroll__price">
                <span class="current">&#8358;89.99</span>
                <span class="original">&#8358;179.99</span>
              </div>
              <button class="btn-cart" onclick="addToCart(14)">
                <i class="bi bi-lightning"></i> Flash Deal
              </button>
            </div>
          </article>

          <!-- Deal 5 -->
          <article class="scroll-section__item product-card">
            <div class="product-card__image">
              <a href="product?id=15">
                <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?q=80&w=300&h=300&fit=crop" loading="lazy" decoding="async" alt="Smart Watch">
              </a>
              <span class="deals-scroll__badge">-30%</span>
            </div>
            <div class="deals-scroll__info">
              <a href="product?id=15" class="deals-scroll__name">Smart Watch Pro</a>
              <div class="deals-scroll__timer">
                <i class="bi bi-clock"></i>
                <span class="timer" data-hours="3">03:15:00</span>
              </div>
              <div class="deals-scroll__price">
                <span class="current">&#8358;89.99</span>
                <span class="original">&#8358;129.99</span>
              </div>
              <button class="btn-cart" onclick="addToCart(15)">
                <i class="bi bi-lightning"></i> Flash Deal
              </button>
            </div>
          </article>

          <!-- Deal 6 -->
          <article class="scroll-section__item product-card">
            <div class="product-card__image">
              <a href="product?id=16">
                <img src="https://images.unsplash.com/photo-1606813909353-6c7a8b8e8cfa?q=80&w=300&h=300&fit=crop" loading="lazy" decoding="async" alt="Gaming Console">
              </a>
              <span class="deals-scroll__badge">-25%</span>
            </div>
            <div class="deals-scroll__info">
              <a href="product?id=16" class="deals-scroll__name">Gaming Console</a>
              <div class="deals-scroll__timer">
                <i class="bi bi-clock"></i>
                <span class="timer" data-hours="18">18:20:00</span>
              </div>
              <div class="deals-scroll__price">
                <span class="current">&#8358;299.99</span>
                <span class="original">&#8358;399.99</span>
              </div>
              <button class="btn-cart" onclick="addToCart(16)">
                <i class="bi bi-lightning"></i> Flash Deal
              </button>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== CUSTOMER FAVORITES SECTION ===== -->
  <section class="scroll-section favorites-scroll">
    <div class="scroll-section__container">
      <div class="scroll-section__header">
        <div>
          <span class="favorites-scroll__subtitle">Top Rated</span>
          <h2>Customer Favorites</h2>
        </div>
        <a href="favorites.php" class="scroll-section__view-all">View All <i class="bi bi-arrow-right"></i></a>
      </div>

      <!-- Navigation Arrows -->
      <div class="scroll-section__nav">
        <button class="scroll-section__arrow prev" id="favoritesPrev" aria-label="Previous favorites">
          <i class="bi bi-chevron-left"></i>
        </button>
        <button class="scroll-section__arrow next" id="favoritesNext" aria-label="Next favorites">
          <i class="bi bi-chevron-right"></i>
        </button>
      </div>

      <div class="scroll-section__viewport" id="favoritesViewport">
        <div class="scroll-section__track" id="favoritesTrack">
          <!-- Favorite 1 -->
          <article class="scroll-section__item product-card">
            <div class="product-card__image">
              <a href="product?id=21">
                <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?q=80&w=300&h=300&fit=crop" loading="lazy" decoding="async" alt="Smart Watch">
              </a>
              <div class="favorites-scroll__rating-badge">
                <i class="bi bi-star-fill"></i>
                <span>4.9</span>
              </div>
            </div>
            <div class="favorites-scroll__info">
              <a href="product?id=21" class="favorites-scroll__name">Smart Watch Pro</a>
              <div class="favorites-scroll__rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <span class="favorites-scroll__reviews">(2.4k reviews)</span>
              </div>
              <div class="favorites-scroll__price">
                <span class="current">&#8358;89.99</span>
              </div>
              <button class="btn-cart" onclick="addToCart(21)">
                <i class="bi bi-cart-plus"></i> Add
              </button>
            </div>
          </article>

          <!-- Favorite 2 -->
          <article class="scroll-section__item product-card">
            <div class="product-card__image">
              <a href="product?id=22">
                <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=300&h=300&fit=crop" loading="lazy" decoding="async" alt="Headphones">
              </a>
              <div class="favorites-scroll__rating-badge">
                <i class="bi bi-star-fill"></i>
                <span>4.8</span>
              </div>
            </div>
            <div class="favorites-scroll__info">
              <a href="product?id=22" class="favorites-scroll__name">Premium Headphones</a>
              <div class="favorites-scroll__rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <span class="favorites-scroll__reviews">(3.1k reviews)</span>
              </div>
              <div class="favorites-scroll__price">
                <span class="current">&#8358;79.99</span>
              </div>
              <button class="btn-cart" onclick="addToCart(22)">
                <i class="bi bi-cart-plus"></i> Add
              </button>
            </div>
          </article>

          <!-- Favorite 3 -->
          <article class="scroll-section__item product-card">
            <div class="product-card__image">
              <a href="product?id=23">
                <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=300&h=300&fit=crop" loading="lazy" decoding="async" alt="Watch">
              </a>
              <div class="favorites-scroll__rating-badge">
                <i class="bi bi-star-fill"></i>
                <span>4.7</span>
              </div>
            </div>
            <div class="favorites-scroll__info">
              <a href="product?id=23" class="favorites-scroll__name">Fitness Tracker</a>
              <div class="favorites-scroll__rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-half"></i>
                <span class="favorites-scroll__reviews">(1.8k reviews)</span>
              </div>
              <div class="favorites-scroll__price">
                <span class="current">&#8358;49.99</span>
              </div>
              <button class="btn-cart" onclick="addToCart(23)">
                <i class="bi bi-cart-plus"></i> Add
              </button>
            </div>
          </article>

          <!-- Favorite 4 -->
          <article class="scroll-section__item product-card">
            <div class="product-card__image">
              <a href="product?id=24">
                <img src="https://images.unsplash.com/photo-1593642702821-c8da6771f0c6?q=80&w=300&h=300&fit=crop" loading="lazy" decoding="async" alt="Tablet">
              </a>
              <div class="favorites-scroll__rating-badge">
                <i class="bi bi-star-fill"></i>
                <span>4.8</span>
              </div>
            </div>
            <div class="favorites-scroll__info">
              <a href="product?id=24" class="favorites-scroll__name">Android Tablet</a>
              <div class="favorites-scroll__rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <span class="favorites-scroll__reviews">(4.2k reviews)</span>
              </div>
              <div class="favorites-scroll__price">
                <span class="current">&#8358;199.99</span>
              </div>
              <button class="btn-cart" onclick="addToCart(24)">
                <i class="bi bi-cart-plus"></i> Add
              </button>
            </div>
          </article>

          <!-- Favorite 5 -->
          <article class="scroll-section__item product-card">
            <div class="product-card__image">
              <a href="product?id=25">
                <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?q=80&w=300&h=300&fit=crop" loading="lazy" decoding="async" alt="Camera">
              </a>
              <div class="favorites-scroll__rating-badge">
                <i class="bi bi-star-fill"></i>
                <span>4.9</span>
              </div>
            </div>
            <div class="favorites-scroll__info">
              <a href="product?id=25" class="favorites-scroll__name">Instant Camera</a>
              <div class="favorites-scroll__rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <span class="favorites-scroll__reviews">(3.5k reviews)</span>
              </div>
              <div class="favorites-scroll__price">
                <span class="current">&#8358;129.99</span>
              </div>
              <button class="btn-cart" onclick="addToCart(25)">
                <i class="bi bi-cart-plus"></i> Add
              </button>
            </div>
          </article>

          <!-- Favorite 6 -->
          <article class="scroll-section__item product-card">
            <div class="product-card__image">
              <a href="product?id=26">
                <img src="https://images.unsplash.com/photo-1606813909353-6c7a8b8e8cfa?q=80&w=300&h=300&fit=crop" loading="lazy" decoding="async" alt="Gaming">
              </a>
              <div class="favorites-scroll__rating-badge">
                <i class="bi bi-star-fill"></i>
                <span>4.7</span>
              </div>
            </div>
            <div class="favorites-scroll__info">
              <a href="product?id=26" class="favorites-scroll__name">Gaming Console</a>
              <div class="favorites-scroll__rating">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-half"></i>
                <span class="favorites-scroll__reviews">(5.1k reviews)</span>
              </div>
              <div class="favorites-scroll__price">
                <span class="current">&#8358;349.99</span>
              </div>
              <button class="btn-cart" onclick="addToCart(26)">
                <i class="bi bi-cart-plus"></i> Add
              </button>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== NEW ARRIVALS SECTION ===== -->
  <section class="scroll-section arrivals-scroll">
    <div class="scroll-section__container">
      <div class="scroll-section__header">
        <div>
          <span class="arrivals-scroll__subtitle">Fresh Stock</span>
          <h2>New Arrivals</h2>
        </div>
        <a href="new-arrivals.php" class="scroll-section__view-all">View All <i class="bi bi-arrow-right"></i></a>
      </div>

      <!-- Navigation Arrows -->
      <div class="scroll-section__nav">
        <button class="scroll-section__arrow prev" id="arrivalsPrev" aria-label="Previous arrivals">
          <i class="bi bi-chevron-left"></i>
        </button>
        <button class="scroll-section__arrow next" id="arrivalsNext" aria-label="Next arrivals">
          <i class="bi bi-chevron-right"></i>
        </button>
      </div>

      <div class="scroll-section__viewport" id="arrivalsViewport">
        <div class="scroll-section__track" id="arrivalsTrack">
          <!-- New Arrival 1 -->
          <article class="scroll-section__item product-card">
            <div class="product-card__image">
              <a href="product?id=31">
                <img src="https://images.unsplash.com/photo-1610945415295-d9bbf067e59c?q=80&w=300&h=300&fit=crop" loading="lazy" decoding="async" alt="iPhone 15">
              </a>
              <span class="arrivals-scroll__badge">New</span>
            </div>
            <div class="arrivals-scroll__info">
              <a href="product?id=31" class="arrivals-scroll__name">iPhone 15 Pro</a>
              <div class="arrivals-scroll__meta">
                <span class="arrivals-scroll__date">Just released</span>
              </div>
              <div class="arrivals-scroll__price">
                <span class="current">&#8358;999.99</span>
              </div>
              <button class="btn-cart" onclick="addToCart(31)">
                <i class="bi bi-cart-plus"></i> Pre-order
              </button>
            </div>
          </article>

          <!-- New Arrival 2 -->
          <article class="scroll-section__item product-card">
            <div class="product-card__image">
              <a href="product?id=32">
                <img src="https://images.unsplash.com/photo-1587033411391-5d9e51cce126?q=80&w=300&h=300&fit=crop" loading="lazy" decoding="async" alt="MacBook">
              </a>
              <span class="arrivals-scroll__badge">New</span>
            </div>
            <div class="arrivals-scroll__info">
              <a href="product?id=32" class="arrivals-scroll__name">MacBook Air M3</a>
              <div class="arrivals-scroll__meta">
                <span class="arrivals-scroll__date">2024 model</span>
              </div>
              <div class="arrivals-scroll__price">
                <span class="current">&#8358;1,299.99</span>
              </div>
              <button class="btn-cart" onclick="addToCart(32)">
                <i class="bi bi-cart-plus"></i> Pre-order
              </button>
            </div>
          </article>

          <!-- New Arrival 3 -->
          <article class="scroll-section__item product-card">
            <div class="product-card__image">
              <a href="product?id=33">
                <img src="https://images.unsplash.com/photo-1572569511254-d8f925fe2cbb?q=80&w=300&h=300&fit=crop" loading="lazy" decoding="async" alt="Samsung">
              </a>
              <span class="arrivals-scroll__badge">New</span>
            </div>
            <div class="arrivals-scroll__info">
              <a href="product?id=33" class="arrivals-scroll__name">Samsung S24 Ultra</a>
              <div class="arrivals-scroll__meta">
                <span class="arrivals-scroll__date">Just arrived</span>
              </div>
              <div class="arrivals-scroll__price">
                <span class="current">&#8358;1,199.99</span>
              </div>
              <button class="btn-cart" onclick="addToCart(33)">
                <i class="bi bi-cart-plus"></i> Pre-order
              </button>
            </div>
          </article>

          <!-- New Arrival 4 -->
          <article class="scroll-section__item product-card">
            <div class="product-card__image">
              <a href="product?id=34">
                <img src="https://images.unsplash.com/photo-1585386959984-a4155224a1ad?q=80&w=300&h=300&fit=crop" loading="lazy" decoding="async" alt="Headphones">
              </a>
              <span class="arrivals-scroll__badge">New</span>
            </div>
            <div class="arrivals-scroll__info">
              <a href="product?id=34" class="arrivals-scroll__name">Sony WH-1000XM5</a>
              <div class="arrivals-scroll__meta">
                <span class="arrivals-scroll__date">Latest model</span>
              </div>
              <div class="arrivals-scroll__price">
                <span class="current">&#8358;349.99</span>
              </div>
              <button class="btn-cart" onclick="addToCart(34)">
                <i class="bi bi-cart-plus"></i> Add
              </button>
            </div>
          </article>

          <!-- New Arrival 5 -->
          <article class="scroll-section__item product-card">
            <div class="product-card__image">
              <a href="product?id=35">
                <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=300&h=300&fit=crop" loading="lazy" decoding="async" alt="Watch">
              </a>
              <span class="arrivals-scroll__badge">New</span>
            </div>
            <div class="arrivals-scroll__info">
              <a href="product?id=35" class="arrivals-scroll__name">Apple Watch Series 9</a>
              <div class="arrivals-scroll__meta">
                <span class="arrivals-scroll__date">2024 edition</span>
              </div>
              <div class="arrivals-scroll__price">
                <span class="current">&#8358;429.99</span>
              </div>
              <button class="btn-cart" onclick="addToCart(35)">
                <i class="bi bi-cart-plus"></i> Add
              </button>
            </div>
          </article>

          <!-- New Arrival 6 -->
          <article class="scroll-section__item product-card">
            <div class="product-card__image">
              <a href="product?id=36">
                <img src="https://images.unsplash.com/photo-1593642702821-c8da6771f0c6?q=80&w=300&h=300&fit=crop" loading="lazy" decoding="async" alt="iPad">
              </a>
              <span class="arrivals-scroll__badge">New</span>
            </div>
            <div class="arrivals-scroll__info">
              <a href="product?id=36" class="arrivals-scroll__name">iPad Pro M4</a>
              <div class="arrivals-scroll__meta">
                <span class="arrivals-scroll__date">Just dropped</span>
              </div>
              <div class="arrivals-scroll__price">
                <span class="current">&#8358;799.99</span>
              </div>
              <button class="btn-cart" onclick="addToCart(36)">
                <i class="bi bi-cart-plus"></i> Pre-order
              </button>
            </div>
          </article>

          <!-- New Arrival 7 -->
          <article class="scroll-section__item product-card">
            <div class="product-card__image">
              <a href="product?id=37">
                <img src="https://images.unsplash.com/photo-1606813909353-6c7a8b8e8cfa?q=80&w=300&h=300&fit=crop" loading="lazy" decoding="async" alt="Gaming">
              </a>
              <span class="arrivals-scroll__badge">New</span>
            </div>
            <div class="arrivals-scroll__info">
              <a href="product?id=37" class="arrivals-scroll__name">PlayStation Portal</a>
              <div class="arrivals-scroll__meta">
                <span class="arrivals-scroll__date">New release</span>
              </div>
              <div class="arrivals-scroll__price">
                <span class="current">&#8358;199.99</span>
              </div>
              <button class="btn-cart" onclick="addToCart(37)">
                <i class="bi bi-cart-plus"></i> Add
              </button>
            </div>
          </article>

          <!-- New Arrival 8 -->
          <article class="scroll-section__item product-card">
            <div class="product-card__image">
              <a href="product?id=38">
                <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?q=80&w=300&h=300&fit=crop" loading="lazy" decoding="async" alt="Drone">
              </a>
              <span class="arrivals-scroll__badge">New</span>
            </div>
            <div class="arrivals-scroll__info">
              <a href="product?id=38" class="arrivals-scroll__name">DJI Mini 4 Pro</a>
              <div class="arrivals-scroll__meta">
                <span class="arrivals-scroll__date">2024 model</span>
              </div>
              <div class="arrivals-scroll__price">
                <span class="current">&#8358;759.99</span>
              </div>
              <button class="btn-cart" onclick="addToCart(38)">
                <i class="bi bi-cart-plus"></i> Add
              </button>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== WHY SHOP WITH US SECTION ===== -->
  <section class="why-shop">
    <div class="why-shop__container">
      <div class="why-shop__header">
        <span class="why-shop__subtitle">Trust & Quality</span>
        <h2>Why Shop With Us</h2>
      </div>

      <div class="why-shop__grid">

        <!-- Feature 1 -->
        <div class="why-shop__card">
          <div class="why-shop__icon">
            <i class="bi bi-shield-check"></i>
          </div>
          <h3>Secure Payments</h3>
          <p>100% protected transactions with encryption.</p>
        </div>

        <!-- Feature 2 -->
        <div class="why-shop__card">
          <div class="why-shop__icon">
            <i class="bi bi-arrow-repeat"></i>
          </div>
          <h3>30-Day Returns</h3>
          <p>Easy returns and full refund if not satisfied.</p>
        </div>

        <!-- Feature 3 -->
        <div class="why-shop__card">
          <div class="why-shop__icon">
            <i class="bi bi-headset"></i>
          </div>
          <h3>24/7 Support</h3>
          <p>Live chat, email, and phone support always.</p>
        </div>

        <!-- Feature 4 -->
        <div class="why-shop__card">
          <div class="why-shop__icon">
            <i class="bi bi-award"></i>
          </div>
          <h3>Best Prices</h3>
          <p>Price match guarantee on all items.</p>
        </div>
      </div>
    </div>
  </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Image Slider with Opacity Transition
  const slides = document.querySelectorAll('.slider-slide');
  const dots = document.querySelectorAll('.slider-dot');
  const prevBtn = document.getElementById('prevSlide');
  const nextBtn = document.getElementById('nextSlide');
  let currentSlide = 0;
  let slideInterval;

  function showSlide(index) {
    // Ensure index is within bounds
    if (index < 0) index = slides.length - 1;
    if (index >= slides.length) index = 0;
    
    // Remove active class from all slides
    slides.forEach(slide => {
      slide.classList.remove('active');
    });
    
    // Add active class to current slide
    slides[index].classList.add('active');
    
    // Update dots
    dots.forEach((dot, i) => {
      if (i === index) {
        dot.classList.add('active');
      } else {
        dot.classList.remove('active');
      }
    });
    
    currentSlide = index;
  }

  function nextSlide() {
    let next = (currentSlide + 1) % slides.length;
    showSlide(next);
  }

  function prevSlide() {
    let prev = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(prev);
  }

  // Add click handlers to dots
  dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
      if (index === currentSlide) return;
      
      // Clear existing interval
      clearInterval(slideInterval);
      
      // Show the clicked slide
      showSlide(index);
      
      // Restart interval
      slideInterval = setInterval(nextSlide, 4000);
    });
  });

  // Add click handlers to navigation buttons
  if (prevBtn) {
    prevBtn.addEventListener('click', () => {
      clearInterval(slideInterval);
      prevSlide();
      slideInterval = setInterval(nextSlide, 4000);
    });
  }

  if (nextBtn) {
    nextBtn.addEventListener('click', () => {
      clearInterval(slideInterval);
      nextSlide();
      slideInterval = setInterval(nextSlide, 4000);
    });
  }

  // Auto advance slides every 4 seconds
  if (slides.length > 0) {
    showSlide(0); // Ensure first slide is active
    slideInterval = setInterval(nextSlide, 4000);
  }

  // Pause on hover
  const slider = document.getElementById('imageSlider');
  if (slider) {
    slider.addEventListener('mouseenter', () => {
      clearInterval(slideInterval);
    });
    
    slider.addEventListener('mouseleave', () => {
      slideInterval = setInterval(nextSlide, 4000);
    });
  }

  // Simple dropdown functionality for categories
  const dropdownItems = document.querySelectorAll('.has-dropdown');
  
  dropdownItems.forEach(item => {
    item.addEventListener('mouseenter', () => {
      // Close all other dropdowns first
      dropdownItems.forEach(otherItem => {
        if (otherItem !== item) {
          otherItem.classList.remove('active');
        }
      });
      item.classList.add('active');
    });
    
    item.addEventListener('mouseleave', () => {
      item.classList.remove('active');
    });
  });

  // Featured Products Carousel Navigation
  const productViewport = document.getElementById('productViewport');
  const productTrack = document.getElementById('productTrack');
  const prevProductBtn = document.getElementById('productPrev');
  const nextProductBtn = document.getElementById('productNext');

  if (productViewport && productTrack && prevProductBtn && nextProductBtn) {
    const scrollAmount = 245; // Width of one item + gap
    
    prevProductBtn.addEventListener('click', () => {
      productViewport.scrollBy({
        left: -scrollAmount,
        behavior: 'smooth'
      });
    });
    
    nextProductBtn.addEventListener('click', () => {
      productViewport.scrollBy({
        left: scrollAmount,
        behavior: 'smooth'
      });
    });
    
    // Update button states based on scroll position
    productViewport.addEventListener('scroll', () => {
      const maxScroll = productTrack.scrollWidth - productViewport.clientWidth;
      
      prevProductBtn.disabled = productViewport.scrollLeft <= 0;
      nextProductBtn.disabled = productViewport.scrollLeft >= maxScroll - 5;
    });
  }

  // Add to cart function
  window.addToCart = function(productId) {
    console.log('Added product ' + productId + ' to cart');
    // You can replace this with actual cart functionality
    alert('Product added to cart!');
  };

  // Add to wishlist function
  window.addToWishlist = function(productId) {
    console.log('Added product ' + productId + ' to wishlist');
    // Toggle heart icon
    const btn = event.currentTarget;
    const icon = btn.querySelector('i');
    
    if (icon.classList.contains('bi-heart')) {
      icon.classList.remove('bi-heart');
      icon.classList.add('bi-heart-fill');
      btn.style.color = '#c30000';
    } else {
      icon.classList.remove('bi-heart-fill');
      icon.classList.add('bi-heart');
      btn.style.color = '#666';
    }
    
    // You can replace this with actual wishlist functionality
    alert('Product ' + (icon.classList.contains('bi-heart-fill') ? 'added to' : 'removed from') + ' wishlist!');
  };

  // Deals carousel navigation
  const dealsViewport = document.getElementById('dealsViewport');
  const dealsTrack = document.getElementById('dealsTrack');
  const dealsPrev = document.getElementById('dealsPrev');
  const dealsNext = document.getElementById('dealsNext');

  if (dealsViewport && dealsTrack && dealsPrev && dealsNext) {
    const scrollAmount = 265; // Width of one deal item + gap
    
    dealsPrev.addEventListener('click', () => {
      dealsViewport.scrollBy({
        left: -scrollAmount,
        behavior: 'smooth'
      });
    });
    
    dealsNext.addEventListener('click', () => {
      dealsViewport.scrollBy({
        left: scrollAmount,
        behavior: 'smooth'
      });
    });
    
    dealsViewport.addEventListener('scroll', () => {
      const maxScroll = dealsTrack.scrollWidth - dealsViewport.clientWidth;
      
      dealsPrev.disabled = dealsViewport.scrollLeft <= 0;
      dealsNext.disabled = dealsViewport.scrollLeft >= maxScroll - 5;
    });
  }

  // Countdown timers
  function startCountdowns() {
    const timers = document.querySelectorAll('.timer');
    
    timers.forEach(timer => {
      const timeString = timer.textContent;
      const [hours, minutes, seconds] = timeString.split(':').map(Number);
      let totalSeconds = hours * 3600 + minutes * 60 + seconds;
      
      function updateTimer() {
        if (totalSeconds <= 0) {
          timer.textContent = '00:00:00';
          return;
        }
        
        const h = Math.floor(totalSeconds / 3600);
        const m = Math.floor((totalSeconds % 3600) / 60);
        const s = totalSeconds % 60;
        
        timer.textContent = `${h.toString().padStart(2, '0')}:${m.toString().padStart(2, '0')}:${s.toString().padStart(2, '0')}`;
        totalSeconds--;
      }
      
      setInterval(updateTimer, 1000);
    });
  }

  // Start countdowns
  startCountdowns();

  // Favorites carousel navigation
  const favoritesViewport = document.getElementById('favoritesViewport');
  const favoritesTrack = document.getElementById('favoritesTrack');
  const favoritesPrev = document.getElementById('favoritesPrev');
  const favoritesNext = document.getElementById('favoritesNext');

  if (favoritesViewport && favoritesTrack && favoritesPrev && favoritesNext) {
    const scrollAmount = 245; // Width of one item + gap
    
    favoritesPrev.addEventListener('click', () => {
      favoritesViewport.scrollBy({
        left: -scrollAmount,
        behavior: 'smooth'
      });
    });
    
    favoritesNext.addEventListener('click', () => {
      favoritesViewport.scrollBy({
        left: scrollAmount,
        behavior: 'smooth'
      });
    });
    
    favoritesViewport.addEventListener('scroll', () => {
      const maxScroll = favoritesTrack.scrollWidth - favoritesViewport.clientWidth;
      
      favoritesPrev.disabled = favoritesViewport.scrollLeft <= 0;
      favoritesNext.disabled = favoritesViewport.scrollLeft >= maxScroll - 5;
    });
  }

  // New Arrivals carousel navigation
  const arrivalsViewport = document.getElementById('arrivalsViewport');
  const arrivalsTrack = document.getElementById('arrivalsTrack');
  const arrivalsPrev = document.getElementById('arrivalsPrev');
  const arrivalsNext = document.getElementById('arrivalsNext');

  if (arrivalsViewport && arrivalsTrack && arrivalsPrev && arrivalsNext) {
    const scrollAmount = 245; // Width of one item + gap
    
    arrivalsPrev.addEventListener('click', () => {
      arrivalsViewport.scrollBy({
        left: -scrollAmount,
        behavior: 'smooth'
      });
    });
    
    arrivalsNext.addEventListener('click', () => {
      arrivalsViewport.scrollBy({
        left: scrollAmount,
        behavior: 'smooth'
      });
    });
    
    arrivalsViewport.addEventListener('scroll', () => {
      const maxScroll = arrivalsTrack.scrollWidth - arrivalsViewport.clientWidth;
      
      arrivalsPrev.disabled = arrivalsViewport.scrollLeft <= 0;
      arrivalsNext.disabled = arrivalsViewport.scrollLeft >= maxScroll - 5;
    });
  }
});
</script>

<?php include __DIR__ . "/partials/footer.php"; ?>