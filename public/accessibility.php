<?php
require_once __DIR__ . "/partials/header.php";
?>
<link rel="stylesheet" href="<?= $css ?>accessibility.css?v=<?= filemtime($css.'accessibility.css') ?>">

<main class="accessibility-page">
  <div class="accessibility__container">
    <!-- Breadcrumb -->
    <div class="accessibility__breadcrumb">
      <a href="index.php">Home</a>
      <i class="bi bi-chevron-right"></i>
      <span>Accessibility</span>
    </div>

    <!-- Page Header -->
    <div class="accessibility__header">
      <h1 class="accessibility__title">Accessibility at EcoMart</h1>
      <p class="accessibility__subtitle">Making online shopping accessible for everyone</p>
    </div>

    <!-- Introduction Card -->
    <div class="accessibility__intro">
      <div class="accessibility__intro-icon">
        <i class="bi bi-universal-access"></i>
      </div>
      <div class="accessibility__intro-content">
        <h2 class="accessibility__intro-title">Our Commitment to Accessibility</h2>
        <p class="accessibility__intro-text">EcoMart is committed to providing a website that is accessible to the widest possible audience, regardless of technology or ability. We are actively working to increase the accessibility and usability of our website for everyone.</p>
      </div>
    </div>

    <!-- Quick Navigation -->
    <div class="accessibility__nav">
      <h3 class="accessibility__nav-title">Jump to Section:</h3>
      <div class="accessibility__nav-links">
        <a href="#standards" class="accessibility__nav-link">Accessibility Standards</a>
        <a href="#features" class="accessibility__nav-link">Accessibility Features</a>
        <a href="#tools" class="accessibility__nav-link">Assistive Tools</a>
        <a href="#keyboard" class="accessibility__nav-link">Keyboard Navigation</a>
        <a href="#screen-reader" class="accessibility__nav-link">Screen Reader Support</a>
        <a href="#contrast" class="accessibility__nav-link">Contrast & Display</a>
        <a href="#feedback" class="accessibility__nav-link">Feedback</a>
        <a href="#resources" class="accessibility__nav-link">Resources</a>
        <a href="#contact" class="accessibility__nav-link">Contact Us</a>
      </div>
    </div>

    <!-- Accessibility Widget Preview -->
    <div class="accessibility__widget-preview">
      <div class="accessibility__widget-header">
        <i class="bi bi-universal-access-circle"></i>
        <span>Accessibility Tools</span>
        <span class="accessibility__widget-badge">New</span>
      </div>
      <div class="accessibility__widget-grid">
        <button class="accessibility__widget-btn" onclick="adjustFontSize('increase')">
          <i class="bi bi-textarea-t"></i>
          <span>Increase Text</span>
        </button>
        <button class="accessibility__widget-btn" onclick="adjustFontSize('decrease')">
          <i class="bi bi-textarea-t"></i>
          <span>Decrease Text</span>
        </button>
        <button class="accessibility__widget-btn" onclick="toggleContrast()">
          <i class="bi bi-eye"></i>
          <span>High Contrast</span>
        </button>
        <button class="accessibility__widget-btn" onclick="toggleGraymode()">
          <i class="bi bi-circle"></i>
          <span>Grayscale</span>
        </button>
        <button class="accessibility__widget-btn" onclick="underlineLinks()">
          <i class="bi bi-link"></i>
          <span>Underline Links</span>
        </button>
        <button class="accessibility__widget-btn" onclick="resetAccessibility()">
          <i class="bi bi-arrow-repeat"></i>
          <span>Reset</span>
        </button>
      </div>
    </div>

    <!-- Content Sections -->
    <div class="accessibility__content">
      <!-- Section 1: Standards -->
      <section id="standards" class="accessibility__section">
        <h2 class="accessibility__section-title">1. Accessibility Standards</h2>
        
        <p class="accessibility__text">EcoMart strives to conform to the Web Content Accessibility Guidelines (WCAG) 2.1 Level AA, which explains how to make web content more accessible for people with disabilities. We aim to meet these standards by:</p>
        
        <ul class="accessibility__list">
          <li>Providing text alternatives for non-text content</li>
          <li>Ensuring content is adaptable and distinguishable</li>
          <li>Making all functionality available from a keyboard</li>
          <li>Providing users enough time to read and use content</li>
          <li>Helping users navigate and find content</li>
          <li>Making text readable and understandable</li>
          <li>Ensuring content appears and operates in predictable ways</li>
        </ul>
        
        <div class="accessibility__badge-grid">
          <div class="accessibility__badge">
            <i class="bi bi-check-circle-fill"></i>
            <span>WCAG 2.1 Level AA</span>
          </div>
          <div class="accessibility__badge">
            <i class="bi bi-check-circle-fill"></i>
            <span>Section 508 Compliant</span>
          </div>
          <div class="accessibility__badge">
            <i class="bi bi-check-circle-fill"></i>
            <span>ADA Compliant</span>
          </div>
        </div>
      </section>

      <!-- Section 2: Accessibility Features -->
      <section id="features" class="accessibility__section">
        <h2 class="accessibility__section-title">2. Accessibility Features</h2>
        
        <div class="accessibility__features-grid">
          <div class="accessibility__feature-card">
            <i class="bi bi-keyboard"></i>
            <h3>Keyboard Navigation</h3>
            <p>Full keyboard accessibility with clear focus indicators.</p>
          </div>
          <div class="accessibility__feature-card">
            <i class="bi bi-eye"></i>
            <h3>High Contrast Mode</h3>
            <p>Enhanced contrast for better readability.</p>
          </div>
          <div class="accessibility__feature-card">
            <i class="bi bi-textarea-t"></i>
            <h3>Text Resizing</h3>
            <p>Adjust text size without breaking layout.</p>
          </div>
          <div class="accessibility__feature-card">
            <i class="bi bi-soundwave"></i>
            <h3>Screen Reader Compatible</h3>
            <p>ARIA labels and semantic HTML structure.</p>
          </div>
          <div class="accessibility__feature-card">
            <i class="bi bi-images"></i>
            <h3>Alt Text</h3>
            <p>Descriptive alternative text for all images.</p>
          </div>
          <div class="accessibility__feature-card">
            <i class="bi bi-link"></i>
            <h3>Descriptive Links</h3>
            <p>Meaningful link text for context.</p>
          </div>
        </div>
      </section>

      <!-- Section 3: Assistive Tools -->
      <section id="tools" class="accessibility__section">
        <h2 class="accessibility__section-title">3. Assistive Tools</h2>
        
        <p class="accessibility__text">Our website is compatible with various assistive technologies. Here are some recommended tools:</p>
        
        <div class="accessibility__tools-grid">
          <div class="accessibility__tool-card">
            <i class="bi bi-microsoft"></i>
            <h4>Windows Narrator</h4>
            <p>Built-in screen reader for Windows</p>
            <a href="https://support.microsoft.com/en-us/windows/complete-guide-to-narrator-e4397a0d-ef4f-b386-d8ae-c172f109bdb1" target="_blank" class="accessibility__tool-link">Learn More</a>
          </div>
          <div class="accessibility__tool-card">
            <i class="bi bi-apple"></i>
            <h4>VoiceOver</h4>
            <p>Built-in screen reader for Mac/iOS</p>
            <a href="https://www.apple.com/accessibility/vision/" target="_blank" class="accessibility__tool-link">Learn More</a>
          </div>
          <div class="accessibility__tool-card">
            <i class="bi bi-google"></i>
            <h4>TalkBack</h4>
            <p>Screen reader for Android devices</p>
            <a href="https://support.google.com/accessibility/android/answer/6283677" target="_blank" class="accessibility__tool-link">Learn More</a>
          </div>
          <div class="accessibility__tool-card">
            <i class="bi bi-eye"></i>
            <h4>JAWS</h4>
            <p>Professional screen reader for Windows</p>
            <a href="https://www.freedomscientific.com/products/software/jaws/" target="_blank" class="accessibility__tool-link">Learn More</a>
          </div>
          <div class="accessibility__tool-card">
            <i class="bi bi-zoom-in"></i>
            <h4>ZoomText</h4>
            <p>Screen magnifier for low vision</p>
            <a href="https://www.freedomscientific.com/products/software/zoomtext/" target="_blank" class="accessibility__tool-link">Learn More</a>
          </div>
          <div class="accessibility__tool-card">
            <i class="bi bi-chat"></i>
            <h4>Dragon NaturallySpeaking</h4>
            <p>Speech recognition software</p>
            <a href="https://www.nuance.com/dragon.html" target="_blank" class="accessibility__tool-link">Learn More</a>
          </div>
        </div>
      </section>

      <!-- Section 4: Keyboard Navigation -->
      <section id="keyboard" class="accessibility__section">
        <h2 class="accessibility__section-title">4. Keyboard Navigation</h2>
        
        <p class="accessibility__text">Our website can be navigated using a keyboard. Here are the key shortcuts:</p>
        
        <div class="accessibility__keyboard-grid">
          <div class="accessibility__keyboard-item">
            <kbd>Tab</kbd>
            <span>Move forward through interactive elements</span>
          </div>
          <div class="accessibility__keyboard-item">
            <kbd>Shift + Tab</kbd>
            <span>Move backward through interactive elements</span>
          </div>
          <div class="accessibility__keyboard-item">
            <kbd>Enter</kbd>
            <span>Activate links or buttons</span>
          </div>
          <div class="accessibility__keyboard-item">
            <kbd>Space</kbd>
            <span>Toggle checkboxes or expand menus</span>
          </div>
          <div class="accessibility__keyboard-item">
            <kbd>Esc</kbd>
            <span>Close modals or dropdown menus</span>
          </div>
          <div class="accessibility__keyboard-item">
            <kbd>Arrow Keys</kbd>
            <span>Navigate within menus or carousels</span>
          </div>
        </div>
        
        <div class="accessibility__note">
          <i class="bi bi-info-circle-fill"></i>
          <p>When navigating with a keyboard, a visible focus indicator (usually a blue outline) will appear around focused elements to help you track your position on the page.</p>
        </div>
      </section>

      <!-- Section 5: Screen Reader Support -->
      <section id="screen-reader" class="accessibility__section">
        <h2 class="accessibility__section-title">5. Screen Reader Support</h2>
        
        <p class="accessibility__text">We have implemented various features to enhance screen reader compatibility:</p>
        
        <ul class="accessibility__list">
          <li><strong>ARIA Landmarks:</strong> Clear page structure with main, navigation, and content landmarks</li>
          <li><strong>Skip Links:</strong> "Skip to main content" link for bypassing navigation</li>
          <li><strong>Semantic HTML:</strong> Proper use of headings, lists, and other semantic elements</li>
          <li><strong>ARIA Labels:</strong> Descriptive labels for interactive elements</li>
          <li><strong>Live Regions:</strong> Announcements for dynamic content updates</li>
        </ul>
        
        <div class="accessibility__demo">
          <h4>Try It Yourself</h4>
          <p>Press <kbd>Ctrl + Enter</kbd> to hear this message read aloud (demo).</p>
        </div>
      </section>

      <!-- Section 6: Contrast & Display -->
      <section id="contrast" class="accessibility__section">
        <h2 class="accessibility__section-title">6. Contrast & Display Settings</h2>
        
        <p class="accessibility__text">We offer several display options to improve readability:</p>
        
        <div class="accessibility__contrast-grid">
          <div class="accessibility__contrast-card" onclick="setContrast('normal')">
            <div class="accessibility__contrast-preview accessibility__contrast-preview--normal">
              <span>Normal Mode</span>
            </div>
            <p>Default color scheme with balanced contrast</p>
          </div>
          <div class="accessibility__contrast-card" onclick="setContrast('high')">
            <div class="accessibility__contrast-preview accessibility__contrast-preview--high">
              <span>High Contrast</span>
            </div>
            <p>Enhanced contrast for better readability</p>
          </div>
          <div class="accessibility__contrast-card" onclick="setContrast('grayscale')">
            <div class="accessibility__contrast-preview accessibility__contrast-preview--grayscale">
              <span>Grayscale</span>
            </div>
            <p>Removes color for reduced visual strain</p>
          </div>
        </div>
        
        <div class="accessibility__zoom-controls">
          <h4>Font Size Adjustment</h4>
          <div class="accessibility__zoom-buttons">
            <button class="accessibility__zoom-btn" onclick="adjustFontSize('decrease')">A-</button>
            <button class="accessibility__zoom-btn" onclick="resetFontSize()">A</button>
            <button class="accessibility__zoom-btn" onclick="adjustFontSize('increase')">A+</button>
          </div>
          <p class="accessibility__zoom-note">You can also use browser zoom (<kbd>Ctrl +</kbd> / <kbd>Ctrl -</kbd>) to adjust the overall page size.</p>
        </div>
      </section>

      <!-- Section 7: Feedback -->
      <section id="feedback" class="accessibility__section">
        <h2 class="accessibility__section-title">7. We Value Your Feedback</h2>
        
        <p class="accessibility__text">We are continuously working to improve the accessibility of our website. If you encounter any accessibility barriers or have suggestions for improvement, please let us know.</p>
        
        <div class="accessibility__feedback-form">
          <form id="accessibilityFeedback">
            <div class="accessibility__form-row">
              <div class="accessibility__form-group">
                <label for="feedback-name">Your Name</label>
                <input type="text" id="feedback-name" class="accessibility__input" placeholder="John Doe">
              </div>
              <div class="accessibility__form-group">
                <label for="feedback-email">Email Address</label>
                <input type="email" id="feedback-email" class="accessibility__input" placeholder="john@example.com">
              </div>
            </div>
            
            <div class="accessibility__form-group">
              <label for="feedback-issue">Describe the Accessibility Issue</label>
              <textarea id="feedback-issue" class="accessibility__textarea" rows="4" placeholder="Please describe the issue you encountered, including the page URL and any assistive technology you were using..."></textarea>
            </div>
            
            <div class="accessibility__form-group">
              <label for="feedback-suggestion">Your Suggestion (Optional)</label>
              <textarea id="feedback-suggestion" class="accessibility__textarea" rows="3" placeholder="How can we improve?"></textarea>
            </div>
            
            <button type="submit" class="accessibility__submit-btn">Submit Feedback</button>
          </form>
        </div>
      </section>

      <!-- Section 8: Resources -->
      <section id="resources" class="accessibility__section">
        <h2 class="accessibility__section-title">8. Accessibility Resources</h2>
        
        <p class="accessibility__text">Explore these resources to learn more about web accessibility:</p>
        
        <div class="accessibility__resources-grid">
          <a href="https://www.w3.org/WAI/" target="_blank" class="accessibility__resource-card">
            <i class="bi bi-globe"></i>
            <h4>W3C Web Accessibility Initiative</h4>
            <p>International standards for web accessibility</p>
          </a>
          <a href="https://www.section508.gov/" target="_blank" class="accessibility__resource-card">
            <i class="bi bi-building"></i>
            <h4>Section 508</h4>
            <p>U.S. federal accessibility requirements</p>
          </a>
          <a href="https://www.ada.gov/" target="_blank" class="accessibility__resource-card">
            <i class="bi bi-file-text"></i>
            <h4>Americans with Disabilities Act</h4>
            <p>Legal requirements for accessibility</p>
          </a>
          <a href="https://webaim.org/" target="_blank" class="accessibility__resource-card">
            <i class="bi bi-eye"></i>
            <h4>WebAIM</h4>
            <p>Web accessibility training and resources</p>
          </a>
        </div>
      </section>

      <!-- Section 9: Contact Us -->
      <section id="contact" class="accessibility__section">
        <h2 class="accessibility__section-title">9. Contact Accessibility Support</h2>
        
        <p class="accessibility__text">If you need assistance with any accessibility issues, please reach out to our dedicated accessibility support team:</p>
        
        <div class="accessibility__contact-grid">
          <div class="accessibility__contact-item">
            <i class="bi bi-envelope-fill"></i>
            <div>
              <strong>Email:</strong>
              <a href="mailto:accessibility@ecomart.com">accessibility@ecomart.com</a>
            </div>
          </div>
          <div class="accessibility__contact-item">
            <i class="bi bi-telephone-fill"></i>
            <div>
              <strong>Phone:</strong>
              <a href="tel:+2347006000000">+234 700 600 0000</a>
              <span class="accessibility__contact-note">(TTY: 711 for relay service)</span>
            </div>
          </div>
          <div class="accessibility__contact-item">
            <i class="bi bi-chat-dots-fill"></i>
            <div>
              <strong>Live Chat:</strong>
              <button class="accessibility__chat-btn" onclick="startLiveChat()">Start Accessibility Chat</button>
            </div>
          </div>
        </div>
        
        <div class="accessibility__hours">
          <i class="bi bi-clock"></i>
          <div>
            <strong>Support Hours:</strong>
            <span>Monday-Friday: 8:00 AM - 8:00 PM</span>
            <span>Saturday: 9:00 AM - 5:00 PM</span>
            <span>Sunday: Closed</span>
          </div>
        </div>
      </section>
    </div>

    <!-- Commitment Statement -->
    <div class="accessibility__commitment">
      <div class="accessibility__commitment-icon">
        <i class="bi bi-heart-fill"></i>
      </div>
      <div class="accessibility__commitment-content">
        <h3 class="accessibility__commitment-title">Our Ongoing Commitment</h3>
        <p class="accessibility__commitment-text">EcoMart is dedicated to making online shopping accessible for everyone. We regularly review and update our website to ensure we meet the highest accessibility standards. Your feedback helps us improve, and we appreciate your support.</p>
      </div>
    </div>
  </div>
</main>

<script>
// Accessibility Widget Functions
function adjustFontSize(action) {
  const html = document.documentElement;
  const currentSize = parseFloat(getComputedStyle(html).fontSize);
  
  if (action === 'increase') {
    html.style.fontSize = (currentSize + 2) + 'px';
  } else if (action === 'decrease') {
    html.style.fontSize = (currentSize - 2) + 'px';
  }
  
  localStorage.setItem('fontSize', html.style.fontSize);
}

function resetFontSize() {
  document.documentElement.style.fontSize = '';
  localStorage.removeItem('fontSize');
}

function toggleContrast() {
  const body = document.body;
  body.classList.toggle('high-contrast');
  localStorage.setItem('highContrast', body.classList.contains('high-contrast'));
}

function toggleGraymode() {
  const body = document.body;
  body.classList.toggle('grayscale');
  localStorage.setItem('grayscale', body.classList.contains('grayscale'));
}

function underlineLinks() {
  const links = document.querySelectorAll('a');
  links.forEach(link => {
    link.style.textDecoration = link.style.textDecoration === 'underline' ? '' : 'underline';
  });
  localStorage.setItem('underlineLinks', links[0]?.style.textDecoration === 'underline');
}

function resetAccessibility() {
  document.documentElement.style.fontSize = '';
  document.body.classList.remove('high-contrast', 'grayscale');
  document.querySelectorAll('a').forEach(link => {
    link.style.textDecoration = '';
  });
  localStorage.clear();
  showNotification('Accessibility settings reset');
}

function setContrast(mode) {
  const body = document.body;
  body.classList.remove('high-contrast', 'grayscale');
  if (mode === 'high') {
    body.classList.add('high-contrast');
  } else if (mode === 'grayscale') {
    body.classList.add('grayscale');
  }
  localStorage.setItem('highContrast', body.classList.contains('high-contrast'));
  localStorage.setItem('grayscale', body.classList.contains('grayscale'));
}

function startLiveChat() {
  alert('Live chat would open here. Our accessibility support team is ready to help!');
}

// Load saved preferences
document.addEventListener('DOMContentLoaded', function() {
  const savedFontSize = localStorage.getItem('fontSize');
  if (savedFontSize) {
    document.documentElement.style.fontSize = savedFontSize;
  }
  
  const highContrast = localStorage.getItem('highContrast') === 'true';
  if (highContrast) {
    document.body.classList.add('high-contrast');
  }
  
  const grayscale = localStorage.getItem('grayscale') === 'true';
  if (grayscale) {
    document.body.classList.add('grayscale');
  }
  
  const underlineLinks = localStorage.getItem('underlineLinks') === 'true';
  if (underlineLinks) {
    document.querySelectorAll('a').forEach(link => {
      link.style.textDecoration = 'underline';
    });
  }
});

// Form submission
document.getElementById('accessibilityFeedback')?.addEventListener('submit', function(e) {
  e.preventDefault();
  showNotification('Thank you for your feedback! We will review it promptly.');
  this.reset();
});

function showNotification(message) {
  let notification = document.querySelector('.accessibility__notification');
  if (!notification) {
    notification = document.createElement('div');
    notification.className = 'accessibility__notification';
    document.body.appendChild(notification);
  }
  notification.textContent = message;
  notification.classList.add('show');
  setTimeout(() => {
    notification.classList.remove('show');
  }, 3000);
}
</script>

<?php include __DIR__ . "/partials/footer.php"; ?>