<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found | EcoMart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
            background: linear-gradient(135deg, #f6f8fb 0%, #e9ecf0 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .error-container {
            max-width: 600px;
            width: 100%;
            text-align: center;
        }

        /* 404 Number Animation */
        .error-code {
            font-size: 180px;
            font-weight: 800;
            line-height: 1;
            color: #1a1a1a;
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
            animation: float 3s ease-in-out infinite;
        }

        .error-code span {
            color: #c9ac09;
            text-shadow: 0 5px 20px rgba(201, 172, 9, 0.3);
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-15px);
            }
        }

        /* Icon Animation */
        .error-icon {
            width: 100px;
            height: 100px;
            background: rgba(201, 172, 9, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem;
            animation: pulse 2s ease-in-out infinite;
        }

        .error-icon i {
            font-size: 50px;
            color: #c9ac09;
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
                opacity: 1;
            }
            50% {
                transform: scale(1.05);
                opacity: 0.8;
            }
        }

        .error-title {
            font-size: 32px;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 1rem;
        }

        .error-message {
            font-size: 18px;
            color: #666;
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        /* Search Form */
        .search-form {
            margin-bottom: 2rem;
        }

        .search-group {
            display: flex;
            align-items: center;
            background: #fff;
            border: 2px solid #e0e0e0;
            border-radius: 60px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .search-group:focus-within {
            border-color: #c9ac09;
            box-shadow: 0 0 0 4px rgba(201, 172, 9, 0.1);
        }

        .search-group i {
            color: #999;
            font-size: 18px;
            padding-left: 20px;
        }

        .search-input {
            flex: 1;
            padding: 15px 15px 15px 10px;
            border: none;
            font-size: 16px;
            outline: none;
            background: transparent;
        }

        .search-btn {
            padding: 15px 30px;
            background: #c9ac09;
            color: #fff;
            border: none;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        .search-btn:hover {
            background: #a88d07;
        }

        /* Quick Links Grid */
        .quick-links {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .quick-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 20px;
            background: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 12px;
            text-decoration: none;
            transition: all 0.3s ease;
            color: #333;
        }

        .quick-link:hover {
            border-color: #c9ac09;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(201, 172, 9, 0.1);
        }

        .quick-link i {
            font-size: 20px;
            color: #c9ac09;
        }

        .quick-link span {
            font-size: 14px;
            font-weight: 500;
        }

        /* Home Button */
        .home-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 14px 32px;
            background: #c9ac09;
            color: #fff;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
            margin-bottom: 2rem;
        }

        .home-btn:hover {
            background: #a88d07;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(201, 172, 9, 0.3);
        }

        .home-btn i {
            transition: transform 0.3s ease;
        }

        .home-btn:hover i {
            transform: translateX(-5px);
        }

        /* Help Section */
        .help-section {
            padding: 20px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 16px;
            margin-top: 1rem;
        }

        .help-text {
            font-size: 14px;
            color: #666;
            margin-bottom: 1rem;
        }

        .help-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .help-link {
            color: #c9ac09;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: color 0.2s;
        }

        .help-link:hover {
            text-decoration: underline;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .error-code {
                font-size: 120px;
            }

            .error-title {
                font-size: 28px;
            }

            .error-message {
                font-size: 16px;
            }

            .search-group {
                flex-direction: column;
                border-radius: 16px;
            }

            .search-group i {
                display: none;
            }

            .search-input {
                width: 100%;
                padding: 15px;
                border-bottom: 1px solid #e0e0e0;
            }

            .search-btn {
                width: 100%;
                border-radius: 0;
            }

            .quick-links {
                grid-template-columns: 1fr;
            }

            .error-icon {
                width: 80px;
                height: 80px;
            }

            .error-icon i {
                font-size: 40px;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 1rem;
            }

            .error-code {
                font-size: 100px;
            }

            .error-title {
                font-size: 24px;
            }

            .error-message {
                font-size: 14px;
            }

            .home-btn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <div class="error-container">
        <!-- Animated Icon -->
        <div class="error-icon">
            <i class="bi bi-compass"></i>
        </div>

        <!-- 404 Animation -->
        <div class="error-code">
            <span>4</span>0<span>4</span>
        </div>

        <!-- Error Message -->
        <h1 class="error-title">Oops! Page Not Found</h1>
        <p class="error-message">The page you're looking for seems to have wandered off. Let's help you find your way back.</p>

        <!-- Home Button -->
        <a href="home" class="home-btn">
            <i class="bi bi-arrow-left"></i>
            Back to Home
        </a>

        <!-- Search Form -->
        <form class="search-form" action="search" method="GET">
            <div class="search-group">
                <i class="bi bi-search"></i>
                <input type="text" name="q" class="search-input" placeholder="Search for products, brands, or categories..." autocomplete="off">
                <button type="submit" class="search-btn">Search</button>
            </div>
        </form>

        <!-- Quick Links -->
        <div class="quick-links">
            <a href="shop" class="quick-link">
                <i class="bi bi-shop"></i>
                <span>Browse Products</span>
            </a>
            <a href="categories" class="quick-link">
                <i class="bi bi-grid"></i>
                <span>All Categories</span>
            </a>
            <a href="deals" class="quick-link">
                <i class="bi bi-tag"></i>
                <span>Today's Deals</span>
            </a>
            <a href="contact" class="quick-link">
                <i class="bi bi-headset"></i>
                <span>Customer Support</span>
            </a>
        </div>

        <!-- Help Section -->
        <div class="help-section">
            <p class="help-text">Still having trouble? We're here to help!</p>
            <div class="help-links">
                <a href="faq" class="help-link">FAQ</a>
                <a href="contact" class="help-link">Contact Us</a>
                <a href="help" class="help-link">Help Center</a>
            </div>
        </div>
    </div>

    <script>
        // Optional: Add some console humor for developers
        console.log("%c🛸 404 Error - Looks like you've ventured into uncharted territory!", "color: #c9ac09; font-size: 14px; font-weight: bold;");
        console.log("%c👉 Head back to the homepage or try searching for what you need.", "color: #666; font-size: 12px;");

        // Auto-focus on search input (optional)
        document.querySelector('.search-input').focus();
    </script>
</body>
</html>