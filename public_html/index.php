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

    <div id="header">
        <!-- Here you can put other elements you want to be inside the top section -->
    </div>

    <div class="search-container">
        <form action="/search.php" method="post">
            <input type="text" placeholder="Search.." name="search" maxlength="50">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>

    
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