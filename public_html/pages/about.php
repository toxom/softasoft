<!DOCTYPE html>

<html>

<head>
    <title>About</title>
    <link rel="stylesheet" href="path/to/styles.css">
    <!-- Include other CSS files and meta tags as needed -->

    <!-- Include other CSS files and meta tags as needed -->
</head>

<body>
    <section class="about" style="text-align: center;">
        <img src="assets/logos/logos.svg" alt="Logo" onclick="scrollToTop()" class="logo">
        <p>Cпорим, этоты в будущем?</p>
        <img src="assets/illustrations/corpart1.svg" alt="Logo" onclick="animateAboutContent(this)" onmouseover="addHoverAnimation(this)" onmouseout="removeHoverAnimation(this)" class="corpart click-animation">
        <p>Он уже достиг всех твоих целей, потому что поспорил с нами. А ты рискнешь?</p>
    </section>

</body>



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
