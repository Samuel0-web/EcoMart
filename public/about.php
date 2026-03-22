<?php
require_once __DIR__ . "/partials/header.php";
?>
<link rel="stylesheet" href="<?= $css ?>about.css?v=<?= filemtime($css.'about.css') ?>">

<main class="about-page">
  <div class="about__container">
    <!-- Breadcrumb -->
    <div class="about__breadcrumb">
      <a href="home">Home</a>
      <i class="bi bi-chevron-right"></i>
      <span>About Us</span>
    </div>

    <!-- Hero Section -->
    <section class="about__hero">
      <div class="about__hero-content">
        <h1 class="about__hero-title">Crafting Quality Products for <span class="about__hero-highlight">Every Nigerian Home</span></h1>
        <p class="about__hero-subtitle">Since 2020, EcoMart has been designing, sourcing, and delivering premium products directly to your doorstep. We're not a marketplace — we're your trusted store.</p>
        <div class="about__hero-stats">
          <div class="about__hero-stat">
            <span class="about__hero-number">500k+</span>
            <span class="about__hero-label">Happy Customers</span>
          </div>
          <div class="about__hero-stat">
            <span class="about__hero-number">50k+</span>
            <span class="about__hero-label">Products Delivered</span>
          </div>
          <div class="about__hero-stat">
            <span class="about__hero-number">4.8</span>
            <span class="about__hero-label">Customer Rating</span>
          </div>
          <div class="about__hero-stat">
            <span class="about__hero-number">36</span>
            <span class="about__hero-label">States Covered</span>
          </div>
        </div>
      </div>
      <div class="about__hero-image">
        <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?q=80&w=800&h=600&fit=crop" alt="EcoMart Store" loading="lazy">
      </div>
    </section>

    <!-- Story Section -->
    <section class="about__story">
      <div class="about__story-grid">
        <div class="about__story-content">
          <span class="about__section-tag">Our Story</span>
          <h2 class="about__section-title">From a Small Workshop to a <span class="about__highlight">Nationwide Brand</span></h2>
          <p class="about__story-text">EcoMart began in 2020 as a small workshop in Lagos with just five employees and a simple mission: create well-designed, durable products that Nigerians could trust. We started by making our own line of eco-friendly bags and kitchenware, selling them directly to customers who appreciated the quality.</p>
          <p class="about__story-text">Today, we've grown into a full-fledged lifestyle brand with our own design team, quality control specialists, and nationwide delivery network. Every product you see on our site has been carefully selected or designed by us, tested by us, and shipped with care from our warehouses. When you buy from EcoMart, you're buying directly from the source.</p>
          <div class="about__story-quote">
            <i class="bi bi-quote"></i>
            <p>"We don't just sell products — we stand behind every single one. If it has our name on it, we've touched it, tested it, and believe in it."</p>
            <span class="about__quote-author">— Chidi Okonkwo, Founder</span>
          </div>
        </div>
        <div class="about__story-image">
          <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?q=80&w=800&h=1000&fit=crop" alt="Our Workshop" loading="lazy">
        </div>
      </div>
    </section>

    <!-- Our Promise Section -->
    <section class="about__promise">
      <div class="about__promise-header">
        <span class="about__section-tag">Our Promise</span>
        <h2 class="about__section-title">The <span class="about__highlight">EcoMart</span> Difference</h2>
        <p class="about__promise-description">When you shop with us, you're getting more than just a product — you're getting our commitment to quality, service, and value.</p>
      </div>
      <div class="about__promise-grid">
        <div class="about__promise-card">
          <div class="about__promise-icon">
            <i class="bi bi-droplet"></i>
          </div>
          <h3 class="about__promise-title">Designed In-House</h3>
          <p class="about__promise-text">Our products are conceived and designed by our team, ensuring unique, functional designs you won't find elsewhere.</p>
        </div>
        <div class="about__promise-card">
          <div class="about__promise-icon">
            <i class="bi bi-check-circle"></i>
          </div>
          <h3 class="about__promise-title">Quality Tested</h3>
          <p class="about__promise-text">Every product passes through our quality control process before it reaches your hands. We don't compromise.</p>
        </div>
        <div class="about__promise-card">
          <div class="about__promise-icon">
            <i class="bi bi-tree"></i>
          </div>
          <h3 class="about__promise-title">Eco-Conscious</h3>
          <p class="about__promise-text">Sustainability isn't just a buzzword — we use recycled materials and minimize waste across our operations.</p>
        </div>
        <div class="about__promise-card">
          <div class="about__promise-icon">
            <i class="bi bi-gift"></i>
          </div>
          <h3 class="about__promise-title">Fair Pricing</h3>
          <p class="about__promise-text">By selling directly, we cut out the middleman and pass the savings to you — without sacrificing quality.</p>
        </div>
      </div>
    </section>

    <!-- Stats Banner -->
    <section class="about__stats-banner">
      <div class="about__stats-grid">
        <div class="about__stat-item">
          <span class="about__stat-number">4.8</span>
          <span class="about__stat-label">Average Rating</span>
          <div class="about__stat-stars">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-half"></i>
          </div>
        </div>
        <div class="about__stat-item">
          <span class="about__stat-number">98%</span>
          <span class="about__stat-label">On-Time Delivery</span>
        </div>
        <div class="about__stat-item">
          <span class="about__stat-number">24/7</span>
          <span class="about__stat-label">Customer Support</span>
        </div>
        <div class="about__stat-item">
          <span class="about__stat-number">30-Day</span>
          <span class="about__stat-label">Returns Policy</span>
        </div>
      </div>
    </section>

    <!-- How We Work -->
    <section class="about__process">
      <div class="about__process-header">
        <span class="about__section-tag">How We Work</span>
        <h2 class="about__section-title">From Our Hands to <span class="about__highlight">Your Home</span></h2>
      </div>
      <div class="about__process-grid">
        <div class="about__process-step">
          <div class="about__process-number">01</div>
          <div class="about__process-content">
            <h3 class="about__process-title">Design & Source</h3>
            <p class="about__process-text">Our team designs products or carefully selects materials that meet our standards for quality and sustainability.</p>
          </div>
        </div>
        <div class="about__process-step">
          <div class="about__process-number">02</div>
          <div class="about__process-content">
            <h3 class="about__process-title">Quality Check</h3>
            <p class="about__process-text">Every item undergoes rigorous testing to ensure it meets our durability and safety requirements.</p>
          </div>
        </div>
        <div class="about__process-step">
          <div class="about__process-number">03</div>
          <div class="about__process-content">
            <h3 class="about__process-title">Warehouse & Pack</h3>
            <p class="about__process-text">Products are stored in our own warehouses and packed with care using eco-friendly materials.</p>
          </div>
        </div>
        <div class="about__process-step">
          <div class="about__process-number">04</div>
          <div class="about__process-content">
            <h3 class="about__process-title">Deliver to You</h3>
            <p class="about__process-text">Our delivery network ensures your order reaches you quickly, no matter where you are in Nigeria.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Team Section (Smaller, focused on leadership) -->
    <section class="about__team">
      <div class="about__team-header">
        <span class="about__section-tag">Leadership</span>
        <h2 class="about__section-title">The People <span class="about__highlight">Behind</span> the Brand</h2>
        <p class="about__team-description">A dedicated team committed to bringing you the best products and service</p>
      </div>
      <div class="about__team-grid">
        <div class="about__team-card">
          <div class="about__team-image">
            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=400&h=400&fit=crop" alt="Chidi Okonkwo">
          </div>
          <div class="about__team-info">
            <h3 class="about__team-name">Chidi Okonkwo</h3>
            <p class="about__team-role">Founder</p>
            <p class="about__team-bio">Started EcoMart in his Lagos workshop with a vision for quality products made locally.</p>
          </div>
        </div>
        <div class="about__team-card">
          <div class="about__team-image">
            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=400&h=400&fit=crop" alt="Amina Bello">
          </div>
          <div class="about__team-info">
            <h3 class="about__team-name">Amina Bello</h3>
            <p class="about__team-role">Head of Operations</p>
            <p class="about__team-bio">Ensures every order reaches customers on time, from warehouse to doorstep.</p>
          </div>
        </div>
        <div class="about__team-card">
          <div class="about__team-image">
            <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=400&h=400&fit=crop" alt="Michael Obi">
          </div>
          <div class="about__team-info">
            <h3 class="about__team-name">Michael Obi</h3>
            <p class="about__team-role">Product Designer</p>
            <p class="about__team-bio">Leads the creative team designing products that are both functional and beautiful.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Products Showcase -->
    <section class="about__showcase">
      <div class="about__showcase-content">
        <span class="about__section-tag">Our Products</span>
        <h2 class="about__section-title">Quality You Can <span class="about__highlight">See and Feel</span></h2>
        <p class="about__showcase-text">Every product in our catalog has been selected with intention. From kitchen essentials to lifestyle accessories, we stand behind every item we sell.</p>
        <a href="shop" class="about__showcase-btn">Browse Our Collection <i class="bi bi-arrow-right"></i></a>
      </div>
      <div class="about__showcase-grid">
        <div class="about__showcase-item">
          <img src="https://images.unsplash.com/photo-1556911220-bff31c812dba?q=80&w=300&h=300&fit=crop" alt="Kitware">
        </div>
        <div class="about__showcase-item">
          <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=300&h=300&fit=crop" alt="Accessories">
        </div>
        <div class="about__showcase-item">
          <img src="https://images.unsplash.com/photo-1484101403633-562f891dc89a?q=80&w=300&h=300&fit=crop" alt="Home Decor">
        </div>
        <div class="about__showcase-item">
          <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=300&h=300&fit=crop" alt="Audio">
        </div>
      </div>
    </section>

    <!-- FAQ Teaser -->
    <section class="about__faq">
      <div class="about__faq-content">
        <h2 class="about__faq-title">Questions? We've Got Answers</h2>
        <p class="about__faq-text">Learn more about our products, shipping, and returns.</p>
        <a href="faq.php" class="about__faq-btn">Visit FAQ <i class="bi bi-arrow-right"></i></a>
      </div>
      <div class="about__faq-image">
        <img src="https://images.unsplash.com/photo-1587560699334-cc4ff634909a?q=80&w=600&h=400&fit=crop" alt="Customer Service">
      </div>
    </section>

    <!-- Call to Action -->
    <section class="about__cta">
      <div class="about__cta-content">
        <h2 class="about__cta-title">Experience the EcoMart Difference</h2>
        <p class="about__cta-text">Join hundreds of thousands of customers who trust us for quality products and reliable service.</p>
        <div class="about__cta-buttons">
          <a href="shop" class="about__cta-btn about__cta-btn--primary">Start Shopping</a>
          <a href="contact.php" class="about__cta-btn about__cta-btn--outline">Contact Us</a>
        </div>
      </div>
    </section>
  </div>
</main>

<?php include __DIR__ . "/partials/footer.php"; ?>