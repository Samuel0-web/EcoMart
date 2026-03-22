document.addEventListener('DOMContentLoaded', () => {
  // ========== MOBILE MENU ==========
  const menuToggle = document.getElementById('menuToggle');
  const closeMenu = document.getElementById('closeMenu');
  const mobileMenu = document.getElementById('mobileMenu');
  const overlay = document.getElementById('overlay');
  const body = document.body;
  
  // ========== SEARCH OVERLAY ==========
  const mobileSearchTrigger = document.getElementById('mobileSearchTrigger');
  const searchOverlay = document.getElementById('searchOverlay');
  const closeSearchOverlay = document.getElementById('closeSearchOverlay');
  
  // ========== DESKTOP SEARCH CLEAR BUTTON ==========
  const desktopSearch = document.getElementById('desktopSearch');
  const clearDesktopBtn = document.getElementById('clearDesktopSearch');
  
  // ========== MOBILE SEARCH CLEAR BUTTON ==========
  const mobileSearchInput = document.getElementById('mobileSearchInput');
  const clearMobileBtn = document.getElementById('clearMobileSearch');
  
  // ========== DROPDOWNS ==========
  const accountDropdown = document.getElementById('accountDropdown');
  const helpDropdown = document.getElementById('helpDropdown');

  // Mobile Menu Functions
  function openMenu() {
    mobileMenu.classList.add('active');
    overlay.classList.add('active');
    body.classList.add('menu-open');
  }

  function closeMenuFn() {
    mobileMenu.classList.remove('active');
    overlay.classList.remove('active');
    body.classList.remove('menu-open');
  }

  if (menuToggle) {
    menuToggle.addEventListener('click', (e) => {
      e.stopPropagation();
      openMenu();
    });
  }
  
  if (closeMenu) {
    closeMenu.addEventListener('click', (e) => {
      e.stopPropagation();
      closeMenuFn();
    });
  }
  
  if (overlay) {
    overlay.addEventListener('click', () => {
      closeMenuFn();
      closeSearch();
    });
  }

  // Search Overlay Functions
  function openSearch() {
    searchOverlay.classList.add('active');
    body.classList.add('menu-open');
    setTimeout(() => {
      if (mobileSearchInput) {
        mobileSearchInput.focus();
      }
    }, 100);
  }

  function closeSearch() {
    searchOverlay.classList.remove('active');
    body.classList.remove('menu-open');
  }

  if (mobileSearchTrigger) {
    mobileSearchTrigger.addEventListener('click', openSearch);
  }
  
  if (closeSearchOverlay) {
    closeSearchOverlay.addEventListener('click', closeSearch);
  }

  // Desktop Search Clear Button Logic
  if (desktopSearch && clearDesktopBtn) {
    function toggleClearButton() {
      if (desktopSearch.value.length > 0) {
        clearDesktopBtn.classList.add('visible');
      } else {
        clearDesktopBtn.classList.remove('visible');
      }
    }

    desktopSearch.addEventListener('input', toggleClearButton);
    
    clearDesktopBtn.addEventListener('click', () => {
      desktopSearch.value = '';
      desktopSearch.focus();
      clearDesktopBtn.classList.remove('visible');
    });

    // Initial check
    toggleClearButton();
  }

  // Mobile Search Clear Button Logic
  if (mobileSearchInput && clearMobileBtn) {
    function toggleMobileClearButton() {
      if (mobileSearchInput.value.length > 0) {
        clearMobileBtn.classList.add('visible');
      } else {
        clearMobileBtn.classList.remove('visible');
      }
    }

    mobileSearchInput.addEventListener('input', toggleMobileClearButton);
    
    clearMobileBtn.addEventListener('click', () => {
      mobileSearchInput.value = '';
      mobileSearchInput.focus();
      clearMobileBtn.classList.remove('visible');
    });

    // Initial check
    toggleMobileClearButton();
  }

  // Dropdown Functions
  function closeAllDropdowns() {
    document.querySelectorAll('.dropdown').forEach(d => d.classList.remove('active'));
  }

  function toggleDropdown(dropdown, event) {
    event.preventDefault();
    event.stopPropagation();
    
    const isActive = dropdown.classList.contains('active');
    closeAllDropdowns();
    if (!isActive) {
      dropdown.classList.add('active');
    }
  }

  // Account Dropdown
  if (accountDropdown) {
    const accountToggle = accountDropdown.querySelector('.dropdown-toggle');
    accountToggle.addEventListener('click', (e) => {
      toggleDropdown(accountDropdown, e);
    });
  }

  // Help Dropdown
  if (helpDropdown) {
    const helpToggle = helpDropdown.querySelector('.dropdown-toggle');
    helpToggle.addEventListener('click', (e) => {
      toggleDropdown(helpDropdown, e);
    });
  }

  // Close dropdowns when clicking outside
  document.addEventListener('click', (e) => {
    if (!e.target.closest('.dropdown')) {
      closeAllDropdowns();
    }
  });

  // Prevent closing when clicking inside dropdown menu
  document.querySelectorAll('.dropdown-menu').forEach(menu => {
    menu.addEventListener('click', (e) => {
      e.stopPropagation();
    });
  });

  // Close on Escape key
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      closeSearch();
      closeMenuFn();
      closeAllDropdowns();
    }
  });

  // Close mobile menu when clicking on a link
  document.querySelectorAll('.mobile-menu-links a').forEach(link => {
    link.addEventListener('click', closeMenuFn);
  });
});