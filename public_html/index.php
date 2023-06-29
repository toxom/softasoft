<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/pages/index.css">
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
        <?php include 'components/login.php'; ?>
    </div>
    
    <?php include 'pages/about.php'; ?>
    <?php include 'pages/services.php'; ?>
    <?php include 'pages/contact.php'; ?>




    <script src="js/navigation.js"></script>
</body>
</html>
