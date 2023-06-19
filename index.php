<!DOCTYPE html>
<html>
<head>
    <title>Welcome to My Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Welcome to My Website!</h1>
    <p>This is the landing page of my website. Feel free to explore and learn more about what we have to offer.</p>

    <nav>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

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

    <script>
        // Add smooth scrolling effect to the navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
