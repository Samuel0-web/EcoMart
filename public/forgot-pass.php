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
        <h1>Forgot password</h1>
        <p>Enter your email and we'll send you a reset link.</p>
      </div>

      <form id="forgotForm" novalidate>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" placeholder="Enter your email" autocomplete="email">
          <div class="error-text" id="emailError"></div>
        </div>

        <button type="submit" class="btn btn-primary" id="submitBtn">Send reset link</button>
      </form>

      <p class="footer">Remember your password? <a href="sign-in">Sign in</a></p>
    </div>
  </div>

  <script src="custom/js/auth.js"></script>

</body>
</html>