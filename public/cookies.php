<?php
require_once __DIR__ . "/partials/header.php";
?>
<link rel="stylesheet" href="<?= $css ?>cookie-policy.css?v=<?= filemtime($css.'cookie-policy.css') ?>">

<main class="cookie-page">
  <div class="cookie__container">
    <!-- Breadcrumb -->
    <div class="cookie__breadcrumb">
      <a href="index.php">Home</a>
      <i class="bi bi-chevron-right"></i>
      <span>Cookie Policy</span>
    </div>

    <!-- Page Header -->
    <div class="cookie__header">
      <h1 class="cookie__title">Cookie Policy</h1>
      <p class="cookie__subtitle">Last Updated: March 19, 2024</p>
    </div>

    <!-- Introduction Card -->
    <div class="cookie__intro">
      <div class="cookie__intro-icon">
        <i class="bi bi-cookie"></i>
      </div>
      <div class="cookie__intro-content">
        <h2 class="cookie__intro-title">About Our Cookie Policy</h2>
        <p class="cookie__intro-text">This Cookie Policy explains how EcoMart uses cookies and similar technologies to recognize you when you visit our website. It explains what these technologies are, why we use them, and your rights to control our use of them.</p>
      </div>
    </div>

    <!-- Quick Navigation -->
    <div class="cookie__nav">
      <h3 class="cookie__nav-title">Jump to Section:</h3>
      <div class="cookie__nav-links">
        <a href="#what-are-cookies" class="cookie__nav-link">What Are Cookies?</a>
        <a href="#types" class="cookie__nav-link">Types of Cookies</a>
        <a href="#essential" class="cookie__nav-link">Essential Cookies</a>
        <a href="#functional" class="cookie__nav-link">Functional Cookies</a>
        <a href="#analytics" class="cookie__nav-link">Analytics Cookies</a>
        <a href="#advertising" class="cookie__nav-link">Advertising Cookies</a>
        <a href="#third-party" class="cookie__nav-link">Third-Party Cookies</a>
        <a href="#duration" class="cookie__nav-link">Cookie Duration</a>
        <a href="#control" class="cookie__nav-link">How to Control Cookies</a>
        <a href="#updates" class="cookie__nav-link">Policy Updates</a>
        <a href="#contact" class="cookie__nav-link">Contact Us</a>
      </div>
    </div>

    <!-- Cookie Consent Banner Preview -->
    <div class="cookie__preview">
      <h3 class="cookie__preview-title">Cookie Consent Banner Preview</h3>
      <div class="cookie__banner-preview">
        <div class="cookie__banner-content">
          <i class="bi bi-cookie"></i>
          <div>
            <p>We use cookies to enhance your experience. By continuing to visit this site, you agree to our use of cookies.</p>
          </div>
        </div>
        <div class="cookie__banner-buttons">
          <button class="cookie__banner-btn cookie__banner-btn--primary">Accept All</button>
          <button class="cookie__banner-btn cookie__banner-btn--outline">Preferences</button>
          <button class="cookie__banner-btn cookie__banner-btn--text">Decline</button>
        </div>
      </div>
    </div>

    <!-- Cookie Content -->
    <div class="cookie__content">
      <!-- Section 1: What Are Cookies -->
      <section id="what-are-cookies" class="cookie__section">
        <h2 class="cookie__section-title">1. What Are Cookies?</h2>
        
        <p class="cookie__text">Cookies are small text files that are placed on your computer or mobile device when you visit a website. They are widely used to make websites work more efficiently and provide information to the website owners. Cookies allow a website to recognize your device and remember information about your visit, such as your preferences and actions.</p>
        
        <div class="cookie__info-box">
          <i class="bi bi-info-circle-fill"></i>
          <p>Cookies do not typically contain any information that personally identifies a user, but personal information that we store about you may be linked to the information stored in and obtained from cookies.</p>
        </div>
      </section>

      <!-- Section 2: Types of Cookies -->
      <section id="types" class="cookie__section">
        <h2 class="cookie__section-title">2. Types of Cookies We Use</h2>
        
        <p class="cookie__text">We use different types of cookies on our website for various purposes:</p>
        
        <div class="cookie__types-grid">
          <div class="cookie__type-card">
            <div class="cookie__type-icon">
              <i class="bi bi-shield-check"></i>
            </div>
            <h3 class="cookie__type-title">Essential Cookies</h3>
            <p class="cookie__type-text">Required for basic site functionality, including shopping cart and account login.</p>
            <span class="cookie__type-tag">Always Active</span>
          </div>
          
          <div class="cookie__type-card">
            <div class="cookie__type-icon">
              <i class="bi bi-sliders2"></i>
            </div>
            <h3 class="cookie__type-title">Functional Cookies</h3>
            <p class="cookie__type-text">Remember your preferences and settings for improved experience.</p>
            <span class="cookie__type-tag cookie__type-tag--optional">Optional</span>
          </div>
          
          <div class="cookie__type-card">
            <div class="cookie__type-icon">
              <i class="bi bi-graph-up"></i>
            </div>
            <h3 class="cookie__type-title">Analytics Cookies</h3>
            <p class="cookie__type-text">Help us understand how visitors interact with our website.</p>
            <span class="cookie__type-tag cookie__type-tag--optional">Optional</span>
          </div>
          
          <div class="cookie__type-card">
            <div class="cookie__type-icon">
              <i class="bi bi-megaphone"></i>
            </div>
            <h3 class="cookie__type-title">Advertising Cookies</h3>
            <p class="cookie__type-text">Used to deliver relevant advertisements and track campaign performance.</p>
            <span class="cookie__type-tag cookie__type-tag--optional">Optional</span>
          </div>
        </div>
      </section>

      <!-- Section 3: Essential Cookies -->
      <section id="essential" class="cookie__section">
        <h2 class="cookie__section-title">3. Essential Cookies</h2>
        
        <p class="cookie__text">These cookies are necessary for the website to function and cannot be switched off in our systems. They are usually only set in response to actions made by you which amount to a request for services, such as setting your privacy preferences, logging in, or filling in forms.</p>
        
        <div class="cookie__table">
          <div class="cookie__table-row">
            <div class="cookie__table-cell cookie__table-header">Cookie Name</div>
            <div class="cookie__table-cell cookie__table-header">Provider</div>
            <div class="cookie__table-cell cookie__table-header">Purpose</div>
            <div class="cookie__table-cell cookie__table-header">Duration</div>
          </div>
          <div class="cookie__table-row">
            <div class="cookie__table-cell">PHPSESSID</div>
            <div class="cookie__table-cell">EcoMart</div>
            <div class="cookie__table-cell">Session management</div>
            <div class="cookie__table-cell">Session</div>
          </div>
          <div class="cookie__table-row">
            <div class="cookie__table-cell">csrf_token</div>
            <div class="cookie__table-cell">EcoMart</div>
            <div class="cookie__table-cell">Security against CSRF attacks</div>
            <div class="cookie__table-cell">Session</div>
          </div>
          <div class="cookie__table-row">
            <div class="cookie__table-cell">cart_id</div>
            <div class="cookie__table-cell">EcoMart</div>
            <div class="cookie__table-cell">Shopping cart management</div>
            <div class="cookie__table-cell">30 days</div>
          </div>
          <div class="cookie__table-row">
            <div class="cookie__table-cell">auth_token</div>
            <div class="cookie__table-cell">EcoMart</div>
            <div class="cookie__table-cell">Remember me functionality</div>
            <div class="cookie__table-cell">30 days</div>
          </div>
        </div>
      </section>

      <!-- Section 4: Functional Cookies -->
      <section id="functional" class="cookie__section">
        <h2 class="cookie__section-title">4. Functional Cookies</h2>
        
        <p class="cookie__text">These cookies enable the website to provide enhanced functionality and personalization. They may be set by us or by third-party providers whose services we have added to our pages.</p>
        
        <div class="cookie__table">
          <div class="cookie__table-row">
            <div class="cookie__table-cell cookie__table-header">Cookie Name</div>
            <div class="cookie__table-cell cookie__table-header">Provider</div>
            <div class="cookie__table-cell cookie__table-header">Purpose</div>
            <div class="cookie__table-cell cookie__table-header">Duration</div>
          </div>
          <div class="cookie__table-row">
            <div class="cookie__table-cell">language_pref</div>
            <div class="cookie__table-cell">EcoMart</div>
            <div class="cookie__table-cell">Language preference</div>
            <div class="cookie__table-cell">1 year</div>
          </div>
          <div class="cookie__table-row">
            <div class="cookie__table-cell">currency_pref</div>
            <div class="cookie__table-cell">EcoMart</div>
            <div class="cookie__table-cell">Currency preference</div>
            <div class="cookie__table-cell">1 year</div>
          </div>
          <div class="cookie__table-row">
            <div class="cookie__table-cell">recently_viewed</div>
            <div class="cookie__table-cell">EcoMart</div>
            <div class="cookie__table-cell">Recently viewed products</div>
            <div class="cookie__table-cell">30 days</div>
          </div>
        </div>
      </section>

      <!-- Section 5: Analytics Cookies -->
      <section id="analytics" class="cookie__section">
        <h2 class="cookie__section-title">5. Analytics Cookies</h2>
        
        <p class="cookie__text">These cookies allow us to count visits and traffic sources so we can measure and improve the performance of our site. They help us know which pages are the most and least popular and see how visitors move around the site.</p>
        
        <div class="cookie__table">
          <div class="cookie__table-row">
            <div class="cookie__table-cell cookie__table-header">Cookie Name</div>
            <div class="cookie__table-cell cookie__table-header">Provider</div>
            <div class="cookie__table-cell cookie__table-header">Purpose</div>
            <div class="cookie__table-cell cookie__table-header">Duration</div>
          </div>
          <div class="cookie__table-row">
            <div class="cookie__table-cell">_ga</div>
            <div class="cookie__table-cell">Google Analytics</div>
            <div class="cookie__table-cell">Distinct user identification</div>
            <div class="cookie__table-cell">2 years</div>
          </div>
          <div class="cookie__table-row">
            <div class="cookie__table-cell">_gid</div>
            <div class="cookie__table-cell">Google Analytics</div>
            <div class="cookie__table-cell">User behavior tracking</div>
            <div class="cookie__table-cell">24 hours</div>
          </div>
          <div class="cookie__table-row">
            <div class="cookie__table-cell">_gat</div>
            <div class="cookie__table-cell">Google Analytics</div>
            <div class="cookie__table-cell">Request rate limiting</div>
            <div class="cookie__table-cell">1 minute</div>
          </div>
        </div>
      </section>

      <!-- Section 6: Advertising Cookies -->
      <section id="advertising" class="cookie__section">
        <h2 class="cookie__section-title">6. Advertising Cookies</h2>
        
        <p class="cookie__text">These cookies may be set through our site by our advertising partners. They may be used by those companies to build a profile of your interests and show you relevant adverts on other sites.</p>
        
        <div class="cookie__table">
          <div class="cookie__table-row">
            <div class="cookie__table-cell cookie__table-header">Cookie Name</div>
            <div class="cookie__table-cell cookie__table-header">Provider</div>
            <div class="cookie__table-cell cookie__table-header">Purpose</div>
            <div class="cookie__table-cell cookie__table-header">Duration</div>
          </div>
          <div class="cookie__table-row">
            <div class="cookie__table-cell">_fbp</div>
            <div class="cookie__table-cell">Meta</div>
            <div class="cookie__table-cell">Facebook advertising</div>
            <div class="cookie__table-cell">3 months</div>
          </div>
          <div class="cookie__table-row">
            <div class="cookie__table-cell">_pin_unauth</div>
            <div class="cookie__table-cell">Pinterest</div>
            <div class="cookie__table-cell">Pinterest advertising</div>
            <div class="cookie__table-cell">1 year</div>
          </div>
          <div class="cookie__table-row">
            <div class="cookie__table-cell">IDE</div>
            <div class="cookie__table-cell">Google DoubleClick</div>
            <div class="cookie__table-cell">Ad personalization</div>
            <div class="cookie__table-cell">1 year</div>
          </div>
        </div>
      </section>

      <!-- Section 7: Third-Party Cookies -->
      <section id="third-party" class="cookie__section">
        <h2 class="cookie__section-title">7. Third-Party Cookies</h2>
        
        <p class="cookie__text">In addition to our own cookies, we may also use various third-party cookies to report usage statistics of the service, deliver advertisements on and through the service, and so on.</p>
        
        <div class="cookie__third-party-grid">
          <div class="cookie__third-party-card">
            <i class="bi bi-google"></i>
            <h4>Google Analytics</h4>
            <p>Website analytics and performance measurement</p>
            <a href="https://policies.google.com/technologies/cookies" target="_blank" class="cookie__third-party-link">Learn More</a>
          </div>
          <div class="cookie__third-party-card">
            <i class="bi bi-facebook"></i>
            <h4>Facebook Pixel</h4>
            <p>Ad targeting and conversion tracking</p>
            <a href="https://www.facebook.com/policies/cookies/" target="_blank" class="cookie__third-party-link">Learn More</a>
          </div>
          <div class="cookie__third-party-card">
            <i class="bi bi-paypal"></i>
            <h4>PayPal</h4>
            <p>Payment processing</p>
            <a href="https://www.paypal.com/privacy" target="_blank" class="cookie__third-party-link">Learn More</a>
          </div>
          <div class="cookie__third-party-card">
            <i class="bi bi-cloud"></i>
            <h4>Cloudflare</h4>
            <p>Security and performance</p>
            <a href="https://www.cloudflare.com/cookie-policy/" target="_blank" class="cookie__third-party-link">Learn More</a>
          </div>
        </div>
      </section>

      <!-- Section 8: Cookie Duration -->
      <section id="duration" class="cookie__section">
        <h2 class="cookie__section-title">8. Cookie Duration</h2>
        
        <p class="cookie__text">Cookies can be categorized by how long they remain on your device:</p>
        
        <div class="cookie__duration-grid">
          <div class="cookie__duration-card">
            <h4>Session Cookies</h4>
            <p>These are temporary cookies that expire when you close your browser. They enable websites to link your actions during a browser session.</p>
          </div>
          <div class="cookie__duration-card">
            <h4>Persistent Cookies</h4>
            <p>These remain on your device for a set period or until you delete them. They help websites remember your preferences and actions across multiple sessions.</p>
          </div>
        </div>
      </section>

      <!-- Section 9: How to Control Cookies -->
      <section id="control" class="cookie__section">
        <h2 class="cookie__section-title">9. How to Control Cookies</h2>
        
        <p class="cookie__text">You have the right to decide whether to accept or reject cookies. You can exercise your cookie preferences by clicking the appropriate opt-out links provided in our cookie consent banner.</p>
        
        <h3 class="cookie__subsection-title">Browser Controls</h3>
        <p class="cookie__text">Most web browsers allow you to control cookies through their settings. You can set your browser to refuse cookies, delete cookies, or alert you when cookies are being sent. The methods for doing so vary from browser to browser.</p>
        
        <div class="cookie__browser-links">
          <a href="https://support.google.com/chrome/answer/95647" target="_blank" class="cookie__browser-link">
            <i class="bi bi-chrome"></i> Google Chrome
          </a>
          <a href="https://support.mozilla.org/en-US/kb/enhanced-tracking-protection-firefox-desktop" target="_blank" class="cookie__browser-link">
            <i class="bi bi-firefox"></i> Mozilla Firefox
          </a>
          <a href="https://support.apple.com/guide/safari/manage-cookies-and-website-data-sfri11471/mac" target="_blank" class="cookie__browser-link">
            <i class="bi bi-safari"></i> Safari
          </a>
          <a href="https://support.microsoft.com/en-us/microsoft-edge/delete-cookies-in-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09" target="_blank" class="cookie__browser-link">
            <i class="bi bi-edge"></i> Microsoft Edge
          </a>
        </div>
        
        <h3 class="cookie__subsection-title">Opt-Out Tools</h3>
        <p class="cookie__text">You can opt out of targeted advertising from many ad networks through the following tools:</p>
        
        <ul class="cookie__opt-out-list">
          <li><a href="https://youradchoices.com/control" target="_blank">YourAdChoices (NAI)</a></li>
          <li><a href="https://www.youronlinechoices.com/" target="_blank">Your Online Choices (EDAA)</a></li>
          <li><a href="https://optout.networkadvertising.org/" target="_blank">Network Advertising Initiative</a></li>
        </ul>
      </section>

      <!-- Section 10: Cookie Preference Center -->
      <section id="preferences" class="cookie__section">
        <h2 class="cookie__section-title">10. Cookie Preference Center</h2>
        
        <p class="cookie__text">You can customize your cookie preferences using our interactive preference center. Click the button below to open the preference center and adjust your settings.</p>
        
        <div class="cookie__preference-center">
          <button class="cookie__preference-btn" onclick="openPreferenceCenter()">
            <i class="bi bi-sliders2"></i>
            Open Cookie Preferences
          </button>
        </div>
      </section>

      <!-- Section 11: Policy Updates -->
      <section id="updates" class="cookie__section">
        <h2 class="cookie__section-title">11. Updates to This Cookie Policy</h2>
        
        <p class="cookie__text">We may update this Cookie Policy from time to time to reflect changes in technology, regulation, or our business practices. When we make changes, we will update the "Last Updated" date at the top of this page.</p>
        
        <div class="cookie__update-notice">
          <i class="bi bi-bell"></i>
          <p>If we make material changes to this policy, we will notify you by email or through a prominent notice on our website.</p>
        </div>
      </section>

      <!-- Section 12: Contact Us -->
      <section id="contact" class="cookie__section">
        <h2 class="cookie__section-title">12. Contact Us</h2>
        
        <p class="cookie__text">If you have any questions about our use of cookies or this Cookie Policy, please contact us at:</p>
        
        <div class="cookie__contact-grid">
          <div class="cookie__contact-item">
            <i class="bi bi-envelope-fill"></i>
            <div>
              <strong>Email:</strong>
              <a href="mailto:privacy@ecomart.com">privacy@ecomart.com</a>
            </div>
          </div>
          <div class="cookie__contact-item">
            <i class="bi bi-telephone-fill"></i>
            <div>
              <strong>Phone:</strong>
              <a href="tel:+2347006000000">+234 700 600 0000</a>
            </div>
          </div>
          <div class="cookie__contact-item">
            <i class="bi bi-geo-alt-fill"></i>
            <div>
              <strong>Address:</strong>
              <p>123 Main Street, Victoria Island, Lagos, Nigeria</p>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Cookie Settings Bar (Floating) -->
    <div class="cookie__settings-bar">
      <div class="cookie__settings-content">
        <i class="bi bi-cookie"></i>
        <span>Your cookie preferences can be changed anytime.</span>
      </div>
      <button class="cookie__settings-btn" onclick="openPreferenceCenter()">
        Cookie Settings
      </button>
    </div>
  </div>
</main>

<script>
// Smooth scroll for anchor links
document.querySelectorAll('.cookie__nav-link').forEach(link => {
  link.addEventListener('click', (e) => {
    e.preventDefault();
    const targetId = link.getAttribute('href');
    const targetElement = document.querySelector(targetId);
    
    if (targetElement) {
      targetElement.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    }
  });
});

// Open preference center
function openPreferenceCenter() {
  alert('Cookie preference center would open here. You can customize which cookies you allow.');
}

// Cookie banner simulation
document.querySelectorAll('.cookie__banner-btn').forEach(btn => {
  btn.addEventListener('click', function() {
    if (this.classList.contains('cookie__banner-btn--primary')) {
      alert('All cookies accepted. This preference would be saved.');
    } else if (this.classList.contains('cookie__banner-btn--outline')) {
      openPreferenceCenter();
    } else if (this.classList.contains('cookie__banner-btn--text')) {
      alert('Essential cookies only. Your preference has been saved.');
    }
  });
});

// Track policy version
document.addEventListener('DOMContentLoaded', function() {
  console.log('Cookie policy version: 1.0 - Last updated: March 19, 2024');
});
</script>

<?php include __DIR__ . "/partials/footer.php"; ?>