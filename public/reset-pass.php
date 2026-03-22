<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EcoMart · Reset Password</title>
  <link rel="stylesheet" href="custom/css/auth.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

  <div class="container">
    <div class="form-wrap">
      <div class="header">
        <h1>Reset password</h1>
        <p>Enter your new password below.</p>
      </div>

      <form id="resetForm" novalidate>
        <div class="form-group">
          <label for="password">New password</label>
          <div class="password-wrap">
            <input type="password" id="password" placeholder="Enter new password" autocomplete="new-password">
            <button type="button" class="toggle-password" id="togglePassword">Show</button>
          </div>
          <div class="error-text" id="passwordError"></div>
          <div class="strength-bar">
            <div id="strengthFill" class="strength-fill"></div>
          </div>
          <div class="strength-text">
            <span>Strength</span>
            <span id="strengthLabel">—</span>
          </div>
        </div>

        <div class="form-group">
          <label for="confirmPassword">Confirm password</label>
          <div class="password-wrap">
            <input type="password" id="confirmPassword" placeholder="Confirm new password" autocomplete="new-password">
            <button type="button" class="toggle-password" id="toggleConfirmPassword">Show</button>
          </div>
          <div class="error-text" id="confirmPasswordError"></div>
        </div>

        <button type="submit" class="btn btn-primary" id="submitBtn">Reset password</button>
      </form>

      <p class="footer">Remember your password? <a href="sign-in">Sign in</a></p>
    </div>
  </div>

  <script src="custom/js/auth.js"></script>

</body>
</html>