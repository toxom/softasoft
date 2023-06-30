<!DOCTYPE html>
<html>
<head>
    <title>CTA Form</title>
    <style>
        /* Styles for form fields */

        input[type="text"] {
            background-color: white;
            color: black;
            border: solid 2px black;
            width: 140px;
            height: 40px;
            padding: 5px;
            margin-bottom: 18px;
            font-family: "Century Gothic", Arial, sans-serif;
            font-size: 20px;
            text-align: left ; text-indent: 5%;
            cursor: pointer;
        }

        input[type="email"],
        input[type="password"],
        textarea {
            background-color: white;
            border: none;
            width: 300px;
            height: 40px;
            padding: 5px;
            margin-bottom: 18px;
            font-family: "Century Gothic", Arial, sans-serif;
            font-size: 20px;
            text-align: left ; text-indent: 5%;
        }

        textarea {
            max-width: 500px;
        }

        .name-fields {
            display: flex;
            gap: 10px;
        }

        .name-fields input[type="text"] {
            width: 150px;
        }



        button[type="submit"],
        button[type="button"] {
            background-color: white;
            border: 2px black;
            width: 300px;
            height: 40px;
            padding: 5px;
            font-family: "Century Gothic", Arial, sans-serif;
            font-size: 20px;
            cursor: pointer;
        }

        button[type="submit"]:hover,
        button[type="button"]:hover {
            background-color: darkcyan;
            border: 2px black;
            scale: 1.5;
            font-family: "Century Gothic", Arial, sans-serif;
            font-size: 20px;
            cursor: pointer;
        }

        button[type="submit"]:active,
        button[type="button"]:active {
            background-color: white;
            border: 2px black;
            width: 400px;
            height: 40px;
            padding: 5px;
            font-family: "Century Gothic", Arial, sans-serif;
            font-size: 20px;
            cursor: pointer;
        }

        input[type="email"]:hover,
        input[type="password"]:hover{
            background-color: red;
            color: yellowgreen;
            border: none;
            width: 400px;
            height: 40px;
            padding: 5px;
            font-family: "Century Gothic", Arial, sans-serif;
            font-size: 20px;
            cursor: pointer;
        }


        input[type="email"]:active,
        input[type="password"]:active{
            background-color: white;
            color: black;
            border: none;
            width: 400px;
            height: 40px;
            padding: 5px;
            font-family: "Century Gothic", Arial, sans-serif;
            font-size: 20px;
            cursor: pointer;
        }


        input[type="text"]:hover {
            background-color: red;
            color: yellowgreen;
            border: none;
            width: 300px;
            height: 40px;
            padding: 5px;
            font-family: "Century Gothic", Arial, sans-serif;
            font-size: 20px;
            cursor: pointer;
        }


        input[type="text"]:active {
            background-color: white;
            color: yellowgreen;
            border: none;
            width: 300px;
            height: 40px;
            padding: 5px;
            font-family: "Century Gothic", Arial, sans-serif;
            font-size: 20px;
            cursor: pointer;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        /* Additional styles for login container */
        .login-container {
            background-color: transparent;
            backdrop-filter: blur(10px); /* Add blur effect */

        }


        /* Show login container when side navigation is open
        .sidenav.open .login-container {
            background-color: transparent;
            backdrop-filter: blur(10px); /* Add blur effect */
            font-family: "Century Gothic", Arial, sans-serif;
            color: white; */


        }


    </style>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Process the form submission here
        // Retrieve the form data and perform necessary actions
        // For this example, let's simply display the submitted data

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $termsAgreement = $_POST['terms_agreement'];

        echo "<h2>Thank you, $name!</h2>";
        echo "<p>Your message has been submitted successfully.</p>";
        exit;
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <div>
            <h2 style="color: white; font-size: 24px; padding: 10px;">Join Us Today!</h2>
        </div>

        <div>
            <input type="text" name="first_name" placeholder="First Name*" required>
            <input type="text" name="last_name" placeholder="Last Name*" required>
        </div>

        <div>
            <input type="email" name="email" placeholder="Email*" required>
        </div>

        <div>
            <input type="password" name="password" placeholder="Choose a Password*" required>
        </div>

        <div>
            <h4 style="font-size: 12px; margin-left: 20px;">
                <input type="checkbox" name="terms_agreement" required>
                I agree to the <a href="terms_of_service.html" target="_blank">Terms of Service</a> and
                <a href="privacy_policy.html" target="_blank">Privacy Policy</a>
            </h4>
        </div>

        <div>
            <button type="submit">Start My Trial</button>
        </div>

        <div>
            <p style="text-align: center;">OR</p>
            <button type="button">Sign up with Google</button>
        </div>

        <div >
            <a id="signinButton" style="color: white;"href="#">Already have an account? Sign In</a>
        </div>



    </form>



    <script src="js/navigation.js"></script>
    <script>
        // Get the sidenav element
        const sidenavElement = document.querySelector("#sidenav");

        // Function to open the side navigation
        function openSideNav() {
            sidenavElement.classList.add("open");
        }

        // Attach event listener to the "Already have an account? Sign In" link
        const signInLink = document.querySelector("#signinButton");
        signInLink.addEventListener("click", openSideNav);
    </script>





</body>
</html>
