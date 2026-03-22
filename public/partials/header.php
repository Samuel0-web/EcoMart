<?php
// partials/header.php
$currentPage = basename($_SERVER['PHP_SELF'], '.php');
$css = 'custom/css/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle ?? 'EcoMart'; ?></title>
  <link rel="stylesheet" href="<?= $css ?>base.css?v=<?= filemtime($css.'base.css') ?>">
  <link rel="stylesheet" href="<?= $css ?>layout.css?v=<?= filemtime($css.'layout.css') ?>">
  <link rel="stylesheet" href="<?= $css ?>components.css?v=<?= filemtime($css.'components.css') ?>">
  <link rel="stylesheet" href="<?= $css ?>header.css?v=<?= filemtime($css.'header.css') ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

<!-- Promo Banner (scrolls away) -->
<div class="promo-banner">
  <a href="deals">
    <span class="promo-text">Free shipping on orders over $50</span>
    <span class="promo-code">Use code: <strong>ECO50</strong></span>
    <span class="promo-cta">Shop Now →</span>
  </a>
</div>

<!-- Sticky Header -->
<header class="header" id="header">
  <!-- Mobile Header -->
  <div class="header-mobile">
    <div class="header-mobile-left">
      <button class="menu-toggle" id="menuToggle">
        <i class="bi bi-list"></i>
      </button>
      
      <a href="home" class="logo">
        <i class="bi bi-leaf-fill"></i>
        <span>EcoMart</span>
      </a>
    </div>
    
    <div class="mobile-actions">
      <a href="account" class="icon-btn">
        <i class="bi bi-person"></i>
      </a>
      <a href="cart" class="icon-btn">
        <i class="bi bi-cart3"></i>
        <span class="badge">2</span>
      </a>
    </div>
  </div>

  <!-- Mobile Search -->
  <div class="mobile-search">
    <div class="search-input-wrap" id="mobileSearchTrigger">
      <i class="bi bi-search"></i>
      <input type="text" placeholder="Search products..." readonly>
    </div>
  </div>

  <!-- Desktop Header -->
  <div class="header-desktop">
    <div class="container">
      <a href="home" class="logo">
        <i class="bi bi-leaf-fill"></i>
        <span>EcoMart</span>
      </a>

      <form class="search-form" action="search.php" method="GET">
        <i class="bi bi-search search-icon"></i>
        <div class="search-input-container">
          <input type="text" name="q" id="desktopSearch" placeholder="Search products, brands and categories" autocomplete="off">
          <button type="button" class="clear-search" id="clearDesktopSearch" aria-label="Clear search">
            <i class="bi bi-x-circle-fill"></i>
          </button>
        </div>
        <button type="submit" class="search-btn">Search</button>
      </form>

      <div class="header-actions">
        <!-- Account Dropdown -->
        <div class="dropdown" id="accountDropdown">
          <button class="dropdown-toggle">
            <i class="bi bi-person"></i>
            <span>Account</span>
            <i class="bi bi-chevron-down"></i>
          </button>
          <div class="dropdown-menu">
            <a href="sign-in"><i class="bi bi-box-arrow-in-right"></i> Sign In</a>
            <a href="account"><i class="bi bi-person-circle"></i> My Account</a>
            <a href="orders"><i class="bi bi-box-seam"></i> My Orders</a>
            <a href="wishlist"><i class="bi bi-heart"></i> Wishlist</a>
          </div>
        </div>

        <!-- Help Dropdown -->
        <div class="dropdown" id="helpDropdown">
          <button class="dropdown-toggle">
            <i class="bi bi-question-circle"></i>
            <span>Help</span>
            <i class="bi bi-chevron-down"></i>
          </button>
          <div class="dropdown-menu">
            <a href="faq"><i class="bi bi-chat-dots"></i> FAQs</a>
            <a href="shipping"><i class="bi bi-truck"></i> Shipping Info</a>
            <a href="returns"><i class="bi bi-arrow-return-left"></i> Returns</a>
            <a href="contact"><i class="bi bi-envelope"></i> Contact Us</a>
          </div>
        </div>

        <!-- Cart -->
        <a href="cart" class="cart-btn">
          <i class="bi bi-cart3"></i>
          <span>Cart</span>
          <span class="badge">2</span>
        </a>
      </div>
    </div>
  </div>
</header>

<!-- Mobile Search Overlay -->
<div class="search-overlay" id="searchOverlay">
  <div class="search-overlay-header">
    <button class="back-btn" id="closeSearchOverlay">
      <i class="bi bi-arrow-left"></i>
    </button>
    <form action="search.php" method="GET">
      <input type="text" name="q" id="mobileSearchInput" placeholder="Search products..." autofocus autocomplete="off">
      <button type="button" class="clear-search-mobile" id="clearMobileSearch" aria-label="Clear search">
        <i class="bi bi-x-circle-fill"></i>
      </button>
    </form>
  </div>
  <div class="search-suggestions">
    <h3>Popular Searches</h3>
    <div class="suggestion-tags">
      <a href="search?q=organic">Organic Food</a>
      <a href="search?q=reusable">Reusable Bags</a>
      <a href="search?q=bamboo">Bamboo Products</a>
      <a href="search?q=skincare">Natural Skincare</a>
    </div>
  </div>
</div>

<!-- Mobile Menu -->
<nav class="mobile-menu" id="mobileMenu">
  <div class="mobile-menu-header">
    <span>Menu</span>
    <button class="close-btn" id="closeMenu">
      <i class="bi bi-x-lg"></i>
    </button>
  </div>
  
  <div class="mobile-menu-user">
    <p>Welcome to EcoMart</p>
    <a href="sign-in" class="btn-signin">Sign In / Register</a>
  </div>

  <div class="mobile-menu-links">
    <a href=""><i class="bi bi-house"></i> Home</a>
    <a href="shop"><i class="bi bi-shop"></i> Shop</a>
    <a href="categories"><i class="bi bi-grid"></i> Categories</a>
    <a href="deals"><i class="bi bi-tag"></i> Deals</a>
  </div>

  <div class="mobile-menu-links">
    <h4>My Account</h4>
    <a href="account"><i class="bi bi-person"></i> My Account</a>
    <a href="orders"><i class="bi bi-box-seam"></i> My Orders</a>
    <a href="wishlist"><i class="bi bi-heart"></i> Wishlist</a>
  </div>

  <div class="mobile-menu-links">
    <h4>Help & Support</h4>
    <a href="faq"><i class="bi bi-chat-dots"></i> FAQs</a>
    <a href="shipping"><i class="bi bi-truck"></i> Shipping Info</a>
    <a href="returns"><i class="bi bi-arrow-return-left"></i> Returns</a>
    <a href="contact"><i class="bi bi-envelope"></i> Contact Us</a>
  </div>
</nav>

<div class="overlay" id="overlay"></div>