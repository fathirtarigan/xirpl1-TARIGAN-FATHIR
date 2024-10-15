<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color:#5F9EA0;

        header {
            background-color: #222327;
            color: #29fd53;
            padding: 15px;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 10px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        .content {
            display: flex;
            flex: 1;
        }

        h2 {
            color:white;
        }

        p{
            color:white;
        }

        .sidebar {
            width: 200px;
            background-color:gray;
            padding: 15px;
        }

        .sidebar a {
            display: block;
            padding: 10px;
            color: #333;
            text-decoration: none;
            margin-bottom: 5px;
            background-color: #eaeaea;
            text-align: center;
        }

        .sidebar a:hover {
            background-color: #ddd;
        }

        .main-content {
            flex: 1;
            padding: 20px;
        }

        footer {
            background-color: #222327;
            color: #29fd53;
            text-align: center;
            padding: 10px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>My Website</h1>
    </header>

    <!-- Content -->
    <div class="content">
        <!-- Sidebar -->
        <div class="sidebar">
            <a href="index.php?page=home">Home</a>
            <a href="profile.php?page=profile">Profile</a>
            <a href="index.php?page=about">About</a>
            <a href="index.php?page=contact">Contact</a>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <?php
            // Determine which page content to show
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 'home';
            }

            // Display content based on the page variable
            switch ($page) {
                case 'home':
                    echo '<h2>Selamat Datang Di Website Saya</h2><p>This is the home page content.</p>';
                    break;
                case 'profile':
                    echo '<h2>Our Services</h2><p>This is the services page content.</p>';
                    break;
                case 'about':
                    echo '<h2>About Us</h2><p>This is the about page content.</p>';
                    break;
                case 'contact':
                    echo '<h2>Contact Us</h2><p>This is the contact page content.</p>';
                    break;
                default:
                    echo '<h2>Page not found</h2><p>The page you are looking for does not exist.</p>';
                    break;
            }
            ?>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 My Website</p>
    </footer>
</body>
</html>
