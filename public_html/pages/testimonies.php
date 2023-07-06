<!DOCTYPE html>
<html>
<head>
    <title>Testimonies</title>
    <link rel="stylesheet" href="path/to/styles.css">
    <!-- Include other CSS files and meta tags as needed -->
    <style>
        /* CSS class for the click animation */
        .click-animation {
            transition: transform 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        /* CSS class for the hover animation */
        .hover-animation {
            animation: bounce-hover 1s cubic-bezier(0.68, -0.55, 0.265, 1.55) infinite;
        }

        /* CSS class for the click animation */
        .click-animation {
            animation: bounce-click 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        /* Keyframes for the hover animation */
        @keyframes bounce-hover {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        /* Keyframes for the click animation */
        @keyframes bounce-click {
            0% { transform: scale(1); }
            50% { transform: scale(1.5); }
            100% { transform: scale(1); }
        }

        h1 {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 24px;
            font-weight: 500;
            color: #4034AC;
        }

        body {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 20px;
            font-weight: 300;
            color: white;
            background-color: #6F00DE;
            flex-direction:row;
            justify-content: flex-start;
            align-items: center;
            opacity: 0;
            position: center;
            animation: fadeInSection 1s ease-in forwards;
            height: 800px;
            border-radius: 10px; /* Add border-radius property for rounded edges */
        }



        h2 {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 24px;
            font-weight: 500;
            color: #4034AC;
        }

        p {
            font-family: "Century Gothic", Arial, sans-serif;
            font-size: 24px;
            line-height: 1.5;
            color: white;
            margin-right: 60px;
            margin-left: 60px;
            padding: 10px;


        }

        @keyframes scaleEffect {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.5);
            }
            100% {
                transform: scale(1.5);
            }
        }

        @keyframes shake {
            0%, 100% {
                transform: translateX(0);
            }
            10%, 30%, 50%, 70%, 90% {
                transform: translateX(-10px);
            }
            20%, 40%, 60%, 80% {
                transform: translateX(10px);
            }
            100% {
                transform: translateX(0);
            }
        }
        p:hover {
            background-color: aquamarine;
            color: darkcyan; /* Change the text color on hover */
            transition: background-color 0.2s ease-in-out; /* Apply a transition effect */
            transform: scale(1.1);
            animation: scaleEffect 0.2s ease;
            transition: color 0.2s ease-in-out; /* Apply a transition effect */


        }

        p:active {
            background-color: red;
            color: darkcyan; /* Change the text color on hover */
            transition: background-color 0.3s ease-in-out; /* Apply a transition effect */
            transform: scale(1.3); skewX(30px);
            animation: scaleEffect 0.2s ease;
            animation: shake 0.8s ease;
            transition: color 0.3s ease-in-out; /* Apply a transition effect */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Add a box shadow */
            filter: blur(2px); /* Apply a blur effect */
            filter: hue-rotate(1deg) drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.5));

        }




    </style>
    <!-- Include other CSS files and meta tags as needed -->
</head>

<body>
    <div class="testimonies" style="text-align: center;">
        <p>Testimonies</p>
        <img src="assets/illustrations/corpart1.svg" alt="Logo" onclick="animateAboutContent(this)" onmouseover="addHoverAnimation(this)" onmouseout="removeHoverAnimation(this)" class="corpart click-animation">
        <p>Time to play</p>
    </div>


    <!-- Include other HTML content and scripts as needed -->

    <script>
        function animateAboutContent(element) {
            element.classList.add('click-animation');
            setTimeout(function() {
                element.classList.remove('click-animation');
            }, 200);
        }

        function addHoverAnimation(element) {
            element.classList.add('hover-animation');
        }

        function removeHoverAnimation(element) {
            element.classList.remove('hover-animation');
        }
    </script>
</body>
</html>
