EcoMart — Modern Marketplace UI Kit

EcoMart is a fully responsive e-commerce frontend template built with PHP, HTML, CSS, and JavaScript. It is designed to help developers quickly build modern online stores and marketplace platforms.

---

##  Quick Start

1. Download and extract the template
2. Move the folder to your local server (e.g. `htdocs` or `www`)
3. Open in your browser:

http://localhost/ecomart

---

##  Features

- Fully responsive (desktop, tablet, mobile)
- Marketplace-style homepage layout
- 20+ ready-to-use pages
- Product, category, cart, and checkout pages
- Account, orders, wishlist system
- Clean and organized file structure
- Reusable PHP layout system (header & footer)
- Lightweight (no frameworks)

---

##  Pages Included

### Core Pages
- Home
- Shop
- Categories
- Category page
- Product page

### Shopping Flow
- Cart
- Checkout
- Order Confirmation
- Track Order
- Order Details

### User Pages
- Account
- Orders
- Wishlist

### Authentication
- Sign In
- Sign Up
- Forgot Password
- Reset Password

### Informational Pages
- About
- FAQ
- Shipping
- Returns
- Contact
- Help Center

### Legal Pages
- Privacy Policy
- Terms & Conditions
- Cookies Policy
- Accessibility

### Extras
- Search Results
- Deals Page
- 404 Page

---

##  How It Works

EcoMart uses simple PHP includes for layout structure:


<?php include 'partials/header.php'; ?>
<?php include 'partials/footer.php'; ?>

This allows you to reuse common UI across all pages.

---

##  Customization
• Change Text & Content
• Edit any .php file and replace placeholder content.
• Modify Styles
  Edit CSS files in:
  /custom/css/

---

##  Backend Integration
EcoMart is a frontend template. You can connect it to any backend by replacing static content with dynamic data.
Example:
<?= $product['name'] ?>
<?= $product['price'] ?>

You can integrate with:
• PHP (Laravel, plain PHP)
• Node.js
• Any API-based backend

---

##  Responsive Design
EcoMart is fully responsive and optimized for:
• Desktop
• Tablet
• Mobile

---

##  Requirements
• PHP 7 or higher
• Web browser
• Local server (XAMPP, WAMP, etc.)

---

##  Notes
This template does not include backend functionality (authentication, cart logic, payments)
All data is static and meant to be connected to your backend

---

##  Support
If you have any questions or need help, feel free to reach out.

---

##  © License
Please check the LICENSE.txt file for usage terms
