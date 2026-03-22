<?php
require_once __DIR__ . "/partials/header.php";
?>
<link rel="stylesheet" href="<?= $css ?>account.css?v=<?= filemtime($css.'account.css') ?>">

<main class="account-page">
  <div class="account__container">
    <!-- Page Header -->
    <div class="account__header">
      <h1>My Account</h1>
    </div>

    <div class="account__layout">
      <!-- Account Sidebar -->
      <aside class="account__sidebar">
        <div class="account__profile">
          <div class="account__avatar">
            <img src="https://ui-avatars.com/api/?name=John+Doe&background=c9ac09&color=fff&size=128" alt="John Doe">
          </div>
          <h2 class="account__name">John Doe</h2>
          <p class="account__email">john.doe@example.com</p>
          <p class="account__member-since">Member since March 2024</p>
        </div>

        <nav class="account__nav">
          <a href="#dashboard" class="account__nav-link active" data-tab="dashboard">
            <i class="bi bi-speedometer2"></i> Dashboard
          </a>
          <a href="#addresses" class="account__nav-link" data-tab="addresses">
            <i class="bi bi-geo-alt"></i> Addresses
          </a>
          <a href="#profile" class="account__nav-link" data-tab="profile">
            <i class="bi bi-person"></i> Profile
          </a>
          <a href="#settings" class="account__nav-link" data-tab="settings">
            <i class="bi bi-gear"></i> Settings
          </a>
          <a href="logout.php" class="account__nav-link account__nav-link--logout">
            <i class="bi bi-box-arrow-right"></i> Logout
          </a>
        </nav>
      </aside>

      <!-- Account Main Content -->
      <div class="account__content">
        <!-- Dashboard Tab -->
        <div class="account__tab active" id="dashboard">
          <h2 class="account__tab-title">Dashboard</h2>
          
          <!-- Stats Grid -->
          <div class="account__stats">
            <div class="account__stat-card">
              <div class="account__stat-icon">
                <i class="bi bi-box-seam"></i>
              </div>
              <div class="account__stat-info">
                <span class="account__stat-value">12</span>
                <span class="account__stat-label">Total Orders</span>
              </div>
            </div>

            <div class="account__stat-card">
              <div class="account__stat-icon">
                <i class="bi bi-truck"></i>
              </div>
              <div class="account__stat-info">
                <span class="account__stat-value">3</span>
                <span class="account__stat-label">Pending Orders</span>
              </div>
            </div>

            <div class="account__stat-card">
              <div class="account__stat-icon">
                <i class="bi bi-heart"></i>
              </div>
              <div class="account__stat-info">
                <span class="account__stat-value">8</span>
                <span class="account__stat-label">Wishlist Items</span>
              </div>
            </div>

            <div class="account__stat-card">
              <div class="account__stat-icon">
                <i class="bi bi-tag"></i>
              </div>
              <div class="account__stat-info">
                <span class="account__stat-value">$1,234</span>
                <span class="account__stat-label">Total Spent</span>
              </div>
            </div>
          </div>

          <!-- Recent Orders -->
          <div class="account__section">
            <div class="account__section-header">
              <h3>Recent Orders</h3>
              <a href="orders" class="account__view-all">View All <i class="bi bi-arrow-right"></i></a>
            </div>

            <div class="account__recent-orders">
              <table class="account__orders-table">
                <thead>
                  <tr>
                    <th>Order ID</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Total</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>#ORD-2024-001</td>
                    <td>Mar 5, 2024</td>
                    <td><span class="account__status-badge account__status-badge--delivered">Delivered</span></td>
                    <td>$209.97</td>
                    <td><a href="order-details?id=ORD-2024-001" class="account__table-link">View</a></td>
                  </tr>
                  <tr>
                    <td>#ORD-2024-002</td>
                    <td>Feb 28, 2024</td>
                    <td><span class="account__status-badge account__status-badge--shipped">Shipped</span></td>
                    <td>$44.99</td>
                    <td><a href="order-details?id=ORD-2024-002" class="account__table-link">View</a></td>
                  </tr>
                  <tr>
                    <td>#ORD-2024-003</td>
                    <td>Feb 15, 2024</td>
                    <td><span class="account__status-badge account__status-badge--processing">Processing</span></td>
                    <td>$449.98</td>
                    <td><a href="order-details?id=ORD-2024-003" class="account__table-link">View</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <!-- Saved Addresses Preview -->
          <div class="account__section">
            <div class="account__section-header">
              <h3>Saved Addresses</h3>
              <a href="#addresses" class="account__view-all" data-tab-link="addresses">Manage <i class="bi bi-arrow-right"></i></a>
            </div>

            <div class="account__addresses-preview">
              <div class="account__address-card">
                <div class="account__address-type">Home</div>
                <p class="account__address-details">
                  John Doe<br>
                  123 Main Street, Apartment 4B<br>
                  Lagos, LA 10001<br>
                  Nigeria
                </p>
                <p class="account__address-phone">+234 700 600 0000</p>
              </div>

              <div class="account__address-card">
                <div class="account__address-type">Office</div>
                <p class="account__address-details">
                  John Doe<br>
                  456 Business Avenue, Suite 200<br>
                  Lagos, LA 10002<br>
                  Nigeria
                </p>
                <p class="account__address-phone">+234 700 600 0001</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Addresses Tab -->
        <div class="account__tab" id="addresses">
          <div class="account__tab-header">
            <h2 class="account__tab-title">My Addresses</h2>
            <button class="account__add-btn" onclick="addNewAddress()">
              <i class="bi bi-plus"></i> Add New Address
            </button>
          </div>

          <div class="account__addresses-grid">
            <div class="account__address-card account__address-card--full">
              <div class="account__address-header">
                <span class="account__address-type">Home</span>
                <span class="account__address-default">Default</span>
              </div>
              <p class="account__address-details">
                John Doe<br>
                123 Main Street, Apartment 4B<br>
                Lagos, LA 10001<br>
                Nigeria
              </p>
              <p class="account__address-phone">Phone: +234 700 600 0000</p>
              <div class="account__address-actions">
                <button class="account__address-btn account__address-btn--edit" onclick="editAddress(1)">
                  <i class="bi bi-pencil"></i> Edit
                </button>
                <button class="account__address-btn account__address-btn--delete" onclick="deleteAddress(1)">
                  <i class="bi bi-trash"></i> Delete
                </button>
              </div>
            </div>

            <div class="account__address-card account__address-card--full">
              <div class="account__address-header">
                <span class="account__address-type">Office</span>
              </div>
              <p class="account__address-details">
                John Doe<br>
                456 Business Avenue, Suite 200<br>
                Lagos, LA 10002<br>
                Nigeria
              </p>
              <p class="account__address-phone">Phone: +234 700 600 0001</p>
              <div class="account__address-actions">
                <button class="account__address-btn account__address-btn--edit" onclick="editAddress(2)">
                  <i class="bi bi-pencil"></i> Edit
                </button>
                <button class="account__address-btn account__address-btn--delete" onclick="deleteAddress(2)">
                  <i class="bi bi-trash"></i> Delete
                </button>
                <button class="account__address-btn account__address-btn--default" onclick="setDefaultAddress(2)">
                  Set as Default
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Profile Tab -->
        <div class="account__tab" id="profile">
          <h2 class="account__tab-title">Profile Information</h2>

          <form class="account__form">
            <div class="account__form-row">
              <div class="account__form-group">
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" value="John" required>
              </div>
              <div class="account__form-group">
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" value="Doe" required>
              </div>
            </div>

            <div class="account__form-group">
              <label for="email">Email Address</label>
              <input type="email" id="email" value="john.doe@example.com" required>
            </div>

            <div class="account__form-group">
              <label for="phone">Phone Number</label>
              <input type="tel" id="phone" value="+234 700 600 0000">
            </div>

            <div class="account__form-group">
              <label for="dob">Date of Birth</label>
              <input type="date" id="dob" value="1990-01-01">
            </div>

            <div class="account__form-actions">
              <button type="submit" class="account__form-btn account__form-btn--primary">Save Changes</button>
              <button type="button" class="account__form-btn account__form-btn--secondary">Cancel</button>
            </div>
          </form>

          <div class="account__divider"></div>

          <h3 class="account__section-subtitle">Change Password</h3>

          <form class="account__form">
            <div class="account__form-group">
              <label for="current-password">Current Password</label>
              <input type="password" id="current-password" required>
            </div>

            <div class="account__form-group">
              <label for="new-password">New Password</label>
              <input type="password" id="new-password" required>
            </div>

            <div class="account__form-group">
              <label for="confirm-password">Confirm New Password</label>
              <input type="password" id="confirm-password" required>
            </div>

            <div class="account__form-actions">
              <button type="submit" class="account__form-btn account__form-btn--primary">Update Password</button>
            </div>
          </form>
        </div>

        <!-- Settings Tab -->
        <div class="account__tab" id="settings">
          <h2 class="account__tab-title">Account Settings</h2>

          <div class="account__settings">
            <div class="account__settings-group">
              <h3>Notifications</h3>
              <label class="account__toggle">
                <input type="checkbox" checked>
                <span class="account__toggle-slider"></span>
                <span class="account__toggle-label">Email me about order updates</span>
              </label>
              <label class="account__toggle">
                <input type="checkbox" checked>
                <span class="account__toggle-slider"></span>
                <span class="account__toggle-label">Email me about promotions and deals</span>
              </label>
              <label class="account__toggle">
                <input type="checkbox">
                <span class="account__toggle-slider"></span>
                <span class="account__toggle-label">SMS notifications for delivery updates</span>
              </label>
            </div>

            <div class="account__settings-group">
              <h3>Privacy</h3>
              <label class="account__toggle">
                <input type="checkbox" checked>
                <span class="account__toggle-slider"></span>
                <span class="account__toggle-label">Keep my wishlist public</span>
              </label>
              <label class="account__toggle">
                <input type="checkbox">
                <span class="account__toggle-slider"></span>
                <span class="account__toggle-label">Share my shopping activity with partners</span>
              </label>
            </div>

            <div class="account__settings-group">
              <h3>Preferences</h3>
              <label for="currency">Preferred Currency</label>
              <select id="currency" class="account__select">
                <option value="USD" selected>USD ($)</option>
                <option value="EUR">EUR (€)</option>
                <option value="GBP">GBP (£)</option>
                <option value="NGN">NGN (₦)</option>
              </select>

              <label for="language">Language</label>
              <select id="language" class="account__select">
                <option value="en" selected>English</option>
                <option value="fr">French</option>
                <option value="es">Spanish</option>
                <option value="ar">Arabic</option>
              </select>
            </div>

            <div class="account__settings-group">
              <h3>Account Actions</h3>
              <button class="account__danger-btn" onclick="downloadData()">
                <i class="bi bi-download"></i> Download My Data
              </button>
              <button class="account__danger-btn account__danger-btn--delete" onclick="deleteAccount()">
                <i class="bi bi-exclamation-triangle"></i> Delete Account
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<script>
// Tab switching functionality
document.addEventListener('DOMContentLoaded', function() {
  const navLinks = document.querySelectorAll('.account__nav-link[data-tab]');
  const tabs = document.querySelectorAll('.account__tab');
  const viewAllLinks = document.querySelectorAll('[data-tab-link]');

  function switchTab(tabId) {
    // Hide all tabs
    tabs.forEach(tab => {
      tab.classList.remove('active');
    });
    
    // Remove active class from all nav links
    navLinks.forEach(link => {
      link.classList.remove('active');
    });
    
    // Show selected tab
    const selectedTab = document.getElementById(tabId);
    if (selectedTab) {
      selectedTab.classList.add('active');
    }
    
    // Activate corresponding nav link
    const activeLink = document.querySelector(`.account__nav-link[data-tab="${tabId}"]`);
    if (activeLink) {
      activeLink.classList.add('active');
    }
    
    // Scroll to top of content
    document.querySelector('.account__content').scrollTop = 0;
  }

  // Add click handlers to nav links
  navLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      const tabId = link.dataset.tab;
      if (tabId) {
        switchTab(tabId);
        // Update URL hash without jumping
        history.pushState(null, null, `#${tabId}`);
      }
    });
  });

  // Add click handlers to "View All" links
  viewAllLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      const tabId = link.dataset.tabLink;
      if (tabId) {
        switchTab(tabId);
        history.pushState(null, null, `#${tabId}`);
      }
    });
  });

  // Check URL hash on page load
  const hash = window.location.hash.substring(1);
  if (hash && ['dashboard', 'orders', 'wishlist', 'addresses', 'profile', 'settings'].includes(hash)) {
    switchTab(hash);
  }

  // Handle browser back/forward
  window.addEventListener('popstate', () => {
    const hash = window.location.hash.substring(1);
    if (hash && ['dashboard', 'orders', 'wishlist', 'addresses', 'profile', 'settings'].includes(hash)) {
      switchTab(hash);
    } else {
      switchTab('dashboard');
    }
  });
});

// Account functions
function addNewAddress() {
  alert('Add new address form would open here');
}

function editAddress(addressId) {
  alert('Edit address ' + addressId);
}

function deleteAddress(addressId) {
  if (confirm('Are you sure you want to delete this address?')) {
    alert('Address ' + addressId + ' deleted');
  }
}

function setDefaultAddress(addressId) {
  alert('Address ' + addressId + ' set as default');
}

function removeFromWishlist(productId) {
  if (confirm('Remove this item from your wishlist?')) {
    alert('Item removed from wishlist');
  }
}

// Initiate return
function initiateReturn(orderId) {
  // In a real implementation, this would open a return form or redirect to returns page
  if (confirm(`Would you like to start a return for order ${orderId}?`)) {
    alert('Our customer support team will contact you shortly to process your return. You can also email us at returns@ecomart.com');
    // Optional: redirect to contact page with pre-filled subject
    // window.location.href = `contact.php?subject=Return Request for ${orderId}`;
  }
}

function reorder(orderId) {
  alert('All items from order ' + orderId + ' added to cart');
}

function downloadData() {
  alert('Your data download has been started. You will receive an email when ready.');
}

function deleteAccount() {
  if (confirm('Are you absolutely sure? This action cannot be undone.')) {
    if (confirm('All your data will be permanently deleted. Continue?')) {
      alert('Account deletion requested. You will receive a confirmation email.');
    }
  }
}
</script>

<?php include __DIR__ . "/partials/footer.php"; ?>