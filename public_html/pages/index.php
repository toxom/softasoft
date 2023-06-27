<!DOCTYPE html>
<html>
<head>
    <title>Welcome to My Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Century+Gothic&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'navigation.php'; ?>

    <header id="header">
        <div class="section-links">
            <a href="#softa">Softa</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#contact">Contact</a>
        </div>
        <div class="search-container">
            <form action="/search.php" method="post">
                <input type="text" placeholder="Search.." name="search" maxlength="50">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </header>

    <section id="login">
        <div class="login-container">
            <h2>Login</h2>
            <form action="login.php" method="post">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
            <p>Don't have an account? <a href="register.php">Register</a></p>
        </div>
    </section>

    <section id="softa">
    </section>

    <section id="about">
        <h2>About</h2>
        <p>This is the about section of the website. Add your content and information about your company or yourself here.</p>
    </section>

    <section id="services">
        <h2>Services</h2>
        <p>This is the services section of the website. List the services you offer and provide details about each service.</p>
    </section>

    <section id="contact">
        <h2>Contact</h2>
        <p>This is the contact section of the website. Include your contact information, such as phone number, email, or a contact form.</p>
    </section>

    <?php include 'footer.php'; ?>
    
    <script src="navigation.js"></script>
</body>
</html>
