// public/js/auth.js

// ============== TOGGLE PASSWORD (COMMON) ==============
function initTogglePassword() {
    const toggleBtn = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');

    if (!toggleBtn || !passwordInput) return;

    toggleBtn.addEventListener('click', () => {
        const type = passwordInput.type === 'password' ? 'text' : 'password';
        passwordInput.type = type;
        toggleBtn.textContent = type === 'password' ? 'Show' : 'Hide';
    });
}

// ============== SIGNUP FORM ==============
function initSignup() {
    const signupForm = document.getElementById('signupForm');
    if (!signupForm) return;

    const usernameInput = document.getElementById('username');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const strengthFill = document.getElementById('strengthFill');
    const strengthLabel = document.getElementById('strengthLabel');
    const usernameError = document.getElementById('usernameError');
    const emailError = document.getElementById('emailError');
    const passwordError = document.getElementById('passwordError');

    // Real-time password strength
    if (strengthFill && strengthLabel) {
        passwordInput.addEventListener('input', () => {
            const val = passwordInput.value;
            clearError(passwordInput, passwordError);

            if (!val) {
                strengthFill.style.width = '0%';
                strengthLabel.textContent = '—';
                return;
            }

            let score = 0;
            if (val.length > 6) score++;
            if (val.length > 10) score++;
            if (/[A-Z]/.test(val)) score++;
            if (/[0-9]/.test(val)) score++;

            const states = [
                { width: '25%', color: '#dc2626', label: 'Weak' },
                { width: '50%', color: '#f59e0b', label: 'Fair' },
                { width: '75%', color: '#22c55e', label: 'Good' },
                { width: '100%', color: '#16a34a', label: 'Strong' }
            ];

            const state = states[Math.min(score, 3)];
            strengthFill.style.width = state.width;
            strengthFill.style.background = state.color;
            strengthLabel.textContent = state.label;
        });
    }

    // Clear errors on input
    usernameInput.addEventListener('input', () => clearError(usernameInput, usernameError));
    emailInput.addEventListener('input', () => clearError(emailInput, emailError));

    // Signup form submission
    signupForm.addEventListener('submit', (e) => {
        e.preventDefault();

        clearError(usernameInput, usernameError);
        clearError(emailInput, emailError);
        clearError(passwordInput, passwordError);

        let hasError = false;

        const usernameErr = validateUsername(usernameInput.value);
        if (usernameErr) {
            showError(usernameInput, usernameError, usernameErr);
            hasError = true;
        }

        const emailErr = validateEmail(emailInput.value);
        if (emailErr) {
            showError(emailInput, emailError, emailErr);
            hasError = true;
        }

        const passwordErr = validateSignupPassword(passwordInput.value);
        if (passwordErr) {
            showError(passwordInput, passwordError, passwordErr);
            hasError = true;
        }

        if (!hasError) {
            console.log('Signup valid:', {
                username: usernameInput.value,
                email: emailInput.value,
                password: passwordInput.value
            });
        }
    });
}

// ============== SIGNIN FORM ==============
function initSignin() {
    const signinForm = document.getElementById('signinForm');
    if (!signinForm) return;

    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const rememberCheckbox = document.getElementById('remember');
    const emailError = document.getElementById('emailError');
    const passwordError = document.getElementById('passwordError');

    // Clear errors on input
    emailInput.addEventListener('input', () => clearError(emailInput, emailError));
    passwordInput.addEventListener('input', () => clearError(passwordInput, passwordError));

    // Signin form submission
    signinForm.addEventListener('submit', (e) => {
        e.preventDefault();

        clearError(emailInput, emailError);
        clearError(passwordInput, passwordError);

        let hasError = false;

        const emailErr = validateEmail(emailInput.value);
        if (emailErr) {
        showError(emailInput, emailError, emailErr);
        hasError = true;
        }

        const passwordErr = validateSigninPassword(passwordInput.value);
        if (passwordErr) {
        showError(passwordInput, passwordError, passwordErr);
        hasError = true;
        }

        if (!hasError) {
            console.log('Signin valid:', {
                email: emailInput.value,
                password: passwordInput.value,
                remember: rememberCheckbox ? rememberCheckbox.checked : false
            });
        }
    });
}

// ============== COMMON FUNCTIONS ==============
function showError(input, errorEl, message) {
    if (!input || !errorEl) return;
    input.classList.add('error');
    errorEl.textContent = message;
    errorEl.classList.add('visible');
}

function clearError(input, errorEl) {
    if (!input || !errorEl) return;
    input.classList.remove('error');
    errorEl.textContent = '';
    errorEl.classList.remove('visible');
}

function validateUsername(value) {
    if (!value.trim()) return 'Username is required';
    if (value.length < 3) return 'Username must be at least 3 characters';
    if (value.length > 20) return 'Username must be less than 20 characters';
    if (!/^[a-zA-Z0-9_]+$/.test(value)) return 'Only letters, numbers, and underscores allowed';
    return '';
}

function validateEmail(value) {
    if (!value.trim()) return 'Email is required';
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(value)) return 'Please enter a valid email';
    return '';
}

function validateSignupPassword(value) {
    if (!value) return 'Password is required';
    if (value.length < 8) return 'Password must be at least 8 characters';
    if (!/[A-Z]/.test(value)) return 'Include at least one uppercase letter';
    if (!/[a-z]/.test(value)) return 'Include at least one lowercase letter';
    if (!/[0-9]/.test(value)) return 'Include at least one number';
    return '';
}

function validateSigninPassword(value) {
    if (!value) return 'Password is required';
    return '';
}

// ============== FORGOT PASSWORD FORM ==============
function initForgotPassword() {
    const forgotForm = document.getElementById('forgotForm');
    if (!forgotForm) return;

    const emailInput = document.getElementById('email');
    const emailError = document.getElementById('emailError');
    const submitBtn = document.getElementById('submitBtn');

    // Clear errors on input
    emailInput.addEventListener('input', () => clearError(emailInput, emailError));

    // Forgot password form submission
    forgotForm.addEventListener('submit', (e) => {
        e.preventDefault();

        clearError(emailInput, emailError);

        let hasError = false;

        const emailErr = validateEmail(emailInput.value);
        if (emailErr) {
        showError(emailInput, emailError, emailErr);
        hasError = true;
        }

        if (!hasError) {
            // Disable button and show loading state
            submitBtn.disabled = true;
            submitBtn.textContent = 'Sending...';
        }
    });
}

// ============== RESET PASSWORD FORM ==============
function initResetPassword() {
  const resetForm = document.getElementById('resetForm');
  if (!resetForm) return;

  const passwordInput = document.getElementById('password');
  const confirmInput = document.getElementById('confirmPassword');
  const toggleBtn = document.getElementById('togglePassword');
  const toggleConfirmBtn = document.getElementById('toggleConfirmPassword');
  const strengthFill = document.getElementById('strengthFill');
  const strengthLabel = document.getElementById('strengthLabel');

  const passwordError = document.getElementById('passwordError');
  const confirmError = document.getElementById('confirmPasswordError');

  // Toggle password visibility for both fields
  if (toggleBtn && passwordInput) {
    toggleBtn.addEventListener('click', () => {
      const type = passwordInput.type === 'password' ? 'text' : 'password';
      passwordInput.type = type;
      toggleBtn.textContent = type === 'password' ? 'Show' : 'Hide';
    });
  }

  if (toggleConfirmBtn && confirmInput) {
    toggleConfirmBtn.addEventListener('click', () => {
      const type = confirmInput.type === 'password' ? 'text' : 'password';
      confirmInput.type = type;
      toggleConfirmBtn.textContent = type === 'password' ? 'Show' : 'Hide';
    });
  }

  // Real-time password strength
  if (strengthFill && strengthLabel) {
    passwordInput.addEventListener('input', () => {
      const val = passwordInput.value;
      clearError(passwordInput, passwordError);

      if (!val) {
        strengthFill.style.width = '0%';
        strengthLabel.textContent = '—';
        return;
      }

      let score = 0;
      if (val.length > 6) score++;
      if (val.length > 10) score++;
      if (/[A-Z]/.test(val)) score++;
      if (/[0-9]/.test(val)) score++;

      const states = [
        { width: '25%', color: '#dc2626', label: 'Weak' },
        { width: '50%', color: '#f59e0b', label: 'Fair' },
        { width: '75%', color: '#22c55e', label: 'Good' },
        { width: '100%', color: '#16a34a', label: 'Strong' }
      ];

      const state = states[Math.min(score, 3)];
      strengthFill.style.width = state.width;
      strengthFill.style.background = state.color;
      strengthLabel.textContent = state.label;
    });
  }

  // Clear errors on input
  passwordInput.addEventListener('input', () => clearError(passwordInput, passwordError));
  confirmInput.addEventListener('input', () => clearError(confirmInput, confirmError));

  // Reset password form submission
  resetForm.addEventListener('submit', (e) => {
    e.preventDefault();

    clearError(passwordInput, passwordError);
    clearError(confirmInput, confirmError);

    const password = passwordInput.value;
    const confirmPassword = confirmInput.value;

    let hasError = false;

    const passwordErr = validateSignupPassword(password);
    if (passwordErr) {
      showError(passwordInput, passwordError, passwordErr);
      hasError = true;
    }

    if (password !== confirmPassword) {
      showError(confirmInput, confirmError, 'Passwords do not match');
      hasError = true;
    }

    if (!hasError) {
      console.log('Password reset valid:', { password });
      // resetForm.submit();
    }
  });
}

// ============== INITIALIZE ==============
document.addEventListener('DOMContentLoaded', () => {
  initTogglePassword();
  initSignup();
  initSignin();
  initForgotPassword();
  initResetPassword();
});