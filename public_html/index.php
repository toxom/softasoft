<?php
// @language=php
?>
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
    <link href="https://fonts.googleapis.com/css2?family=Century+Gothic&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #4034AC;
        }
    </style>
    <!-- Include other CSS files and meta tags as needed -->
</head>

<body>
    <?php include 'components/header.php'; ?>
    <?php include 'components/navigation.php'; ?>





    <?php include 'pages/about.php'; ?>
    <?php include 'pages/services.php'; ?>
    <?php include 'pages/testimonies.php'; ?>
    <?php include 'pages/faq.php'; ?>
    <?php include 'pages/contact.php'; ?>


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

    <?php include 'components/footer.php'; ?>
    
    <script src="js/navigation.js"></script>
</body>
</html>
