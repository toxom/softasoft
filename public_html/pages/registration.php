<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="css/components/navigation.css">
    <link rel="stylesheet" href="css/components/footer.css">
    <link rel="stylesheet" href="css/components/header.css">
    <link rel="stylesheet" href="css/components/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Century+Gothic&display=swap" rel="stylesheet">
    <!-- Include other CSS files and meta tags as needed -->
</head>

<body>
    <?php include 'components/header.php'; ?>
    <?php include 'components/navigation.php'; ?>
    
    <div id="sidenav" class="sidenav">
        <?php include 'components/login.php'; ?>
    </div>

    <div id="toolnav" class="sidenav">
        <div class="cta-content">
            <?php include 'components/cta.php'; ?>
        </div>
    </div>

    <div id="Banner">
        <?php include 'components/banner.php'; ?>
    </div>

    <div id="span">
        <?php include 'components/banner.php'; ?>
    </div>

    <div id="about">
        <div class="about-content">
            <?php include 'pages/about.php'; ?>
        </div>
    </div>

    <div id="services">
        <?php include 'pages/services.php'; ?>
    </div>


    <div id="testimonies">
        <?php include 'pages/testimonies.php'; ?>
    </div>

    <div id="faq">
        <?php include 'pages/faq.php'; ?>
    </div>

    <div id="contact">
        <?php include 'pages/contact.php'; ?>
    </div>

    <script src="js/navigation.js"></script>
    
</body>

</html>

