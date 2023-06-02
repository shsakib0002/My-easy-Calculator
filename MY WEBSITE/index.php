<!DOCTYPE html>
<html>
<head>
    <title>My Easy Calculator</title>
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/calculator.css">
    <link rel="stylesheet" type="text/css" href="css/about.css">
    <link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <img src="logo.png" alt="logo">
            </div>
            <nav>
                <ul class="nav-list">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">My Calculator</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Sign-up</a></li>
                </ul>
            </nav>
            <div class="search-bar">
                <input type="text" name="search" id="search" placeholder="Search">
                <button class="search-btn">Search</button>
            </div>
        </div>
    </header>

    <main>
        <h2>Welcome to My Website</h2>
        <p>This is a simple PHP website.</p>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> My Website. All rights reserved.</p>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
