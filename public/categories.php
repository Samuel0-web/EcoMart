<?php
require_once __DIR__ . "/partials/header.php";
?>
<link rel="stylesheet" href="<?= $css ?>categories.css?v=<?= filemtime($css.'categories.css') ?>">

<main class="categories-page">
  <div class="categories__container">
    <!-- Breadcrumb -->
    <div class="categories__breadcrumb">
      <a href="home">Home</a>
      <i class="bi bi-chevron-right"></i>
      <span>All Categories</span>
    </div>

    <!-- Page Header -->
    <div class="categories__header">
      <h1 class="categories__title">Shop by Category</h1>
      <p class="categories__subtitle">Browse our wide range of products across all categories</p>
    </div>

    <!-- Category Grid -->
    <div class="categories__grid">
      <!-- Electronics & Tech -->
      <div class="categories__section">
        <h2 class="categories__section-title">Electronics & Technology</h2>
        <div class="categories__row">
          <!-- Category Card 1 -->
          <a href="category?slug=phones" class="categories__card categories__card--lg">
            <div class="categories__card-image">
              <img src="https://images.unsplash.com/photo-1512499617640-c2f999098c01?q=80&w=500&h=500&fit=crop" alt="Phones & Tablets" loading="lazy">
            </div>
            <div class="categories__card-content">
              <h3 class="categories__card-title">Phones & Tablets</h3>
              <p class="categories__card-desc">Latest smartphones, tablets and accessories</p>
              <span class="categories__card-count">2,542 products</span>
            </div>
          </a>

          <!-- Category Card 2 -->
          <a href="category?slug=laptops" class="categories__card">
            <div class="categories__card-image">
              <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?q=80&w=500&h=500&fit=crop" alt="Laptops" loading="lazy">
            </div>
            <div class="categories__card-content">
              <h3 class="categories__card-title">Laptops</h3>
              <p class="categories__card-desc">Gaming, ultrabooks, and workstations</p>
              <span class="categories__card-count">1,893 products</span>
            </div>
          </a>

          <!-- Category Card 3 -->
          <a href="category?slug=gaming" class="categories__card">
            <div class="categories__card-image">
              <img src="https://images.unsplash.com/photo-1606813909353-6c7a8b8e8cfa?q=80&w=500&h=500&fit=crop" alt="Gaming" loading="lazy">
            </div>
            <div class="categories__card-content">
              <h3 class="categories__card-title">Gaming</h3>
              <p class="categories__card-desc">Consoles, games, and accessories</p>
              <span class="categories__card-count">954 products</span>
            </div>
          </a>

          <!-- Category Card 4 -->
          <a href="category?slug=electronics" class="categories__card">
            <div class="categories__card-image">
              <img src="https://images.unsplash.com/photo-1525547719571-a2d4ac8945e2?q=80&w=500&h=500&fit=crop" alt="Electronics" loading="lazy">
            </div>
            <div class="categories__card-content">
              <h3 class="categories__card-title">Electronics</h3>
              <p class="categories__card-desc">TVs, audio, cameras, and more</p>
              <span class="categories__card-count">3,201 products</span>
            </div>
          </a>

          <!-- Category Card 5 -->
          <a href="category?slug=smart-watches" class="categories__card">
            <div class="categories__card-image">
              <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=500&h=500&fit=crop" alt="Smart Watches" loading="lazy">
            </div>
            <div class="categories__card-content">
              <h3 class="categories__card-title">Smart Watches</h3>
              <p class="categories__card-desc">Fitness trackers and smart timepieces</p>
              <span class="categories__card-count">421 products</span>
            </div>
          </a>

          <!-- Category Card 6 -->
          <a href="category?slug=headphones" class="categories__card">
            <div class="categories__card-image">
              <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=500&h=500&fit=crop" alt="Audio" loading="lazy">
            </div>
            <div class="categories__card-content">
              <h3 class="categories__card-title">Audio</h3>
              <p class="categories__card-desc">Headphones, speakers, and earbuds</p>
              <span class="categories__card-count">1,287 products</span>
            </div>
          </a>

          <!-- Category Card 7 -->
          <a href="category?slug=cameras" class="categories__card">
            <div class="categories__card-image">
              <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?q=80&w=500&h=500&fit=crop" alt="Cameras" loading="lazy">
            </div>
            <div class="categories__card-content">
              <h3 class="categories__card-title">Cameras</h3>
              <p class="categories__card-desc">DSLR, mirrorless, and instant cameras</p>
              <span class="categories__card-count">689 products</span>
            </div>
          </a>
        </div>
      </div>

      <!-- Fashion & Apparel -->
      <div class="categories__section">
        <h2 class="categories__section-title">Fashion & Apparel</h2>
        <div class="categories__row">
          <!-- Category Card 8 -->
          <a href="category?slug=mens-fashion" class="categories__card categories__card--lg">
            <div class="categories__card-image">
              <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?q=80&w=500&h=500&fit=crop" alt="Men's Fashion" loading="lazy">
            </div>
            <div class="categories__card-content">
              <h3 class="categories__card-title">Men's Fashion</h3>
              <p class="categories__card-desc">Clothing, shoes, and accessories for men</p>
              <span class="categories__card-count">3,124 products</span>
            </div>
          </a>

          <!-- Category Card 9 -->
          <a href="category?slug=womens-fashion" class="categories__card categories__card--lg">
            <div class="categories__card-image">
              <img src="https://images.unsplash.com/photo-1485230895905-ec40ba36b9bc?q=80&w=500&h=500&fit=crop" alt="Women's Fashion" loading="lazy">
            </div>
            <div class="categories__card-content">
              <h3 class="categories__card-title">Women's Fashion</h3>
              <p class="categories__card-desc">Clothing, shoes, and accessories for women</p>
              <span class="categories__card-count">4,567 products</span>
            </div>
          </a>

          <!-- Category Card 10 -->
          <a href="category?slug=shoes" class="categories__card">
            <div class="categories__card-image">
              <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?q=80&w=500&h=500&fit=crop" alt="Shoes" loading="lazy">
            </div>
            <div class="categories__card-content">
              <h3 class="categories__card-title">Shoes</h3>
              <p class="categories__card-desc">Sneakers, boots, formal, and casual</p>
              <span class="categories__card-count">2,156 products</span>
            </div>
          </a>

          <!-- Category Card 11 -->
          <a href="category?slug=accessories" class="categories__card">
            <div class="categories__card-image">
              <img src="https://images.unsplash.com/photo-1523772721666-22ad3c5b6f90?q=80&w=500&h=500&fit=crop" alt="Accessories" loading="lazy">
            </div>
            <div class="categories__card-content">
              <h3 class="categories__card-title">Accessories</h3>
              <p class="categories__card-desc">Bags, watches, jewelry, and more</p>
              <span class="categories__card-count">1,892 products</span>
            </div>
          </a>

          <!-- Category Card 12 -->
          <a href="category?slug=kids-fashion" class="categories__card">
            <div class="categories__card-image">
              <img src="https://images.unsplash.com/photo-1519457431-44ccd64a579b?q=80&w=500&h=500&fit=crop" alt="Kids' Fashion" loading="lazy">
            </div>
            <div class="categories__card-content">
              <h3 class="categories__card-title">Kids' Fashion</h3>
              <p class="categories__card-desc">Clothing and accessories for children</p>
              <span class="categories__card-count">987 products</span>
            </div>
          </a>
        </div>
      </div>

      <!-- Home & Living -->
      <div class="categories__section">
        <h2 class="categories__section-title">Home & Living</h2>
        <div class="categories__row">
          <!-- Category Card 13 -->
          <a href="category?slug=furniture" class="categories__card categories__card--lg">
            <div class="categories__card-image">
              <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?q=80&w=500&h=500&fit=crop" alt="Furniture" loading="lazy">
            </div>
            <div class="categories__card-content">
              <h3 class="categories__card-title">Furniture</h3>
              <p class="categories__card-desc">Living room, bedroom, and office furniture</p>
              <span class="categories__card-count">1,234 products</span>
            </div>
          </a>

          <!-- Category Card 14 -->
          <a href="category?slug=home-decor" class="categories__card">
            <div class="categories__card-image">
              <img src="https://images.unsplash.com/photo-1484101403633-562f891dc89a?q=80&w=500&h=500&fit=crop" alt="Home Decor" loading="lazy">
            </div>
            <div class="categories__card-content">
              <h3 class="categories__card-title">Home Decor</h3>
              <p class="categories__card-desc">Lighting, wall art, and decorative items</p>
              <span class="categories__card-count">876 products</span>
            </div>
          </a>

          <!-- Category Card 15 -->
          <a href="category?slug=kitchen" class="categories__card">
            <div class="categories__card-image">
              <img src="https://images.unsplash.com/photo-1556911220-bff31c812dba?q=80&w=500&h=500&fit=crop" alt="Kitchen" loading="lazy">
            </div>
            <div class="categories__card-content">
              <h3 class="categories__card-title">Kitchen</h3>
              <p class="categories__card-desc">Cookware, appliances, and dining</p>
              <span class="categories__card-count">1,543 products</span>
            </div>
          </a>

          <!-- Category Card 16 -->
          <a href="category?slug=bedding" class="categories__card">
            <div class="categories__card-image">
              <img src="https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af?q=80&w=500&h=500&fit=crop" alt="Bedding" loading="lazy">
            </div>
            <div class="categories__card-content">
              <h3 class="categories__card-title">Bedding</h3>
              <p class="categories__card-desc">Sheets, comforters, and pillows</p>
              <span class="categories__card-count">654 products</span>
            </div>
          </a>

          <!-- Category Card 17 -->
          <a href="category?slug=bath" class="categories__card">
            <div class="categories__card-image">
              <img src="https://images.unsplash.com/photo-1620626011761-996317b8d101?q=80&w=500&h=500&fit=crop" alt="Bath" loading="lazy">
            </div>
            <div class="categories__card-content">
              <h3 class="categories__card-title">Bath</h3>
              <p class="categories__card-desc">Towels, accessories, and organizers</p>
              <span class="categories__card-count">432 products</span>
            </div>
          </a>

          <!-- Category Card 18 -->
          <a href="category?slug=garden" class="categories__card">
            <div class="categories__card-image">
              <img src="https://images.unsplash.com/photo-1416879595882-3373a0480b5b?q=80&w=500&h=500&fit=crop" alt="Garden" loading="lazy">
            </div>
            <div class="categories__card-content">
              <h3 class="categories__card-title">Garden</h3>
              <p class="categories__card-desc">Outdoor, plants, and gardening tools</p>
              <span class="categories__card-count">321 products</span>
            </div>
          </a>
        </div>
      </div>

      <!-- Health & Beauty -->
      <div class="categories__section">
        <h2 class="categories__section-title">Health & Beauty</h2>
        <div class="categories__row">
          <!-- Category Card 19 -->
          <a href="category?slug=skincare" class="categories__card categories__card--lg">
            <div class="categories__card-image">
              <img src="https://images.unsplash.com/photo-1556228720-195a672e8a03?q=80&w=500&h=500&fit=crop" alt="Skincare" loading="lazy">
            </div>
            <div class="categories__card-content">
              <h3 class="categories__card-title">Skincare</h3>
              <p class="categories__card-desc">Moisturizers, cleansers, and treatments</p>
              <span class="categories__card-count">1,876 products</span>
            </div>
          </a>

          <!-- Category Card 20 -->
          <a href="category?slug=makeup" class="categories__card">
            <div class="categories__card-image">
              <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?q=80&w=500&h=500&fit=crop" alt="Makeup" loading="lazy">
            </div>
            <div class="categories__card-content">
              <h3 class="categories__card-title">Makeup</h3>
              <p class="categories__card-desc">Foundation, lipstick, eyeshadow, and more</p>
              <span class="categories__card-count">2,345 products</span>
            </div>
          </a>

          <!-- Category Card 21 -->
          <a href="category?slug=fragrance" class="categories__card">
            <div class="categories__card-image">
              <img src="https://images.unsplash.com/photo-1541643600914-78b084683601?q=80&w=500&h=500&fit=crop" alt="Fragrance" loading="lazy">
            </div>
            <div class="categories__card-content">
              <h3 class="categories__card-title">Fragrance</h3>
              <p class="categories__card-desc">Perfumes, colognes, and body sprays</p>
              <span class="categories__card-count">654 products</span>
            </div>
          </a>

          <!-- Category Card 22 -->
          <a href="category?slug=hair-care" class="categories__card">
            <div class="categories__card-image">
              <img src="https://images.unsplash.com/photo-1562322140-8baeececf3df?q=80&w=500&h=500&fit=crop" alt="Hair Care" loading="lazy">
            </div>
            <div class="categories__card-content">
              <h3 class="categories__card-title">Hair Care</h3>
              <p class="categories__card-desc">Shampoo, conditioner, and styling</p>
              <span class="categories__card-count">987 products</span>
            </div>
          </a>

          <!-- Category Card 23 -->
          <a href="category?slug=wellness" class="categories__card">
            <div class="categories__card-image">
              <img src="https://images.unsplash.com/photo-1507652313519-d4e9174996dd?q=80&w=500&h=500&fit=crop" alt="Wellness" loading="lazy">
            </div>
            <div class="categories__card-content">
              <h3 class="categories__card-title">Wellness</h3>
              <p class="categories__card-desc">Vitamins, supplements, and personal care</p>
              <span class="categories__card-count">1,234 products</span>
            </div>
          </a>
        </div>
      </div>

      <!-- Sports & Outdoors -->
      <div class="categories__section">
        <h2 class="categories__section-title">Sports & Outdoors</h2>
        <div class="categories__row">
          <!-- Category Card 24 -->
          <a href="category?slug=fitness" class="categories__card categories__card--lg">
            <div class="categories__card-image">
              <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?q=80&w=500&h=500&fit=crop" alt="Fitness" loading="lazy">
            </div>
            <div class="categories__card-content">
              <h3 class="categories__card-title">Fitness</h3>
              <p class="categories__card-desc">Gym equipment, yoga, and accessories</p>
              <span class="categories__card-count">1,432 products</span>
            </div>
          </a>

          <!-- Category Card 25 -->
          <a href="category?slug=outdoor" class="categories__card">
            <div class="categories__card-image">
              <img src="https://images.unsplash.com/photo-1551632811-561732d1e306?q=80&w=500&h=500&fit=crop" alt="Outdoor" loading="lazy">
            </div>
            <div class="categories__card-content">
              <h3 class="categories__card-title">Outdoor</h3>
              <p class="categories__card-desc">Camping, hiking, and adventure gear</p>
              <span class="categories__card-count">876 products</span>
            </div>
          </a>

          <!-- Category Card 26 -->
          <a href="category?slug=sports-equipment" class="categories__card">
            <div class="categories__card-image">
              <img src="https://images.unsplash.com/photo-1461896836934-ffe607ba8211?q=80&w=500&h=500&fit=crop" alt="Sports Equipment" loading="lazy">
            </div>
            <div class="categories__card-content">
              <h3 class="categories__card-title">Sports Equipment</h3>
              <p class="categories__card-desc">Balls, rackets, and team gear</p>
              <span class="categories__card-count">1,098 products</span>
            </div>
          </a>

          <!-- Category Card 27 -->
          <a href="category?slug=cycling" class="categories__card">
            <div class="categories__card-image">
              <img src="https://images.unsplash.com/photo-1485965120184-e220f721d03e?q=80&w=500&h=500&fit=crop" alt="Cycling" loading="lazy">
            </div>
            <div class="categories__card-content">
              <h3 class="categories__card-title">Cycling</h3>
              <p class="categories__card-desc">Bikes, accessories, and apparel</p>
              <span class="categories__card-count">543 products</span>
            </div>
          </a>
        </div>
      </div>
    </div>

    <!-- Featured Categories Banner -->
    <div class="categories__banner">
      <div class="categories__banner-content">
        <span class="categories__banner-subtitle">Season's Special</span>
        <h2 class="categories__banner-title">Summer Collection 2024</h2>
        <p class="categories__banner-desc">Discover the latest trends in fashion, electronics, and more</p>
        <a href="shop" class="categories__banner-btn">Shop Now <i class="bi bi-arrow-right"></i></a>
      </div>
      <div class="categories__banner-image">
        <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?q=80&w=600&h=400&fit=crop" alt="Summer Collection" loading="lazy">
      </div>
    </div>

    <!-- Browse by Popular Tags -->
    <div class="categories__tags">
      <h2 class="categories__tags-title">Popular Categories</h2>
      <div class="categories__tags-cloud">
        <a href="category?slug=smartphones" class="categories__tag">Smartphones</a>
        <a href="category?slug=gaming-laptops" class="categories__tag">Gaming Laptops</a>
        <a href="category?slug=wireless-earbuds" class="categories__tag">Wireless Earbuds</a>
        <a href="category?slug=smart-watches" class="categories__tag">Smart Watches</a>
        <a href="category?slug=4k-tvs" class="categories__tag">4K TVs</a>
        <a href="category?slug=men-sneakers" class="categories__tag">Men's Sneakers</a>
        <a href="category?slug=women-handbags" class="categories__tag">Women's Handbags</a>
        <a href="category?slug=coffee-makers" class="categories__tag">Coffee Makers</a>
        <a href="category?slug=air-fryers" class="categories__tag">Air Fryers</a>
        <a href="category?slug=yoga-mats" class="categories__tag">Yoga Mats</a>
        <a href="category?slug=protein-powder" class="categories__tag">Protein Powder</a>
        <a href="category?slug=skincare-set" class="categories__tag">Skincare Sets</a>
      </div>
    </div>
  </div>
</main>

<?php include __DIR__ . "/partials/footer.php"; ?>