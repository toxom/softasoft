<header id="header" style="display: flex;">
    <div style="margin-left: 150px;">
        <img src="assets/logos/logos.svg" alt="Logo" onclick="scrollToTop()" class="logo">
    </div>    
    <div class="section-links" style="margin-left: 10px; margin-right: 10px">
        <a href="#about" onclick="event.preventDefault(); smoothScroll('#about');" class="active">About</a>
        <a href="#services" onclick="event.preventDefault(); smoothScroll('#services');">Services</a>
        <a href="#testimonies" onclick="event.preventDefault(); smoothScroll('#testimonies');">Testimonies</a>
        <a href="#faq" onclick="event.preventDefault(); smoothScroll('#faq');">FAQ</a>

        <a href="#contact" alt="Contact" onclick="scrollToTop('#contact')" class="contact">Contact</a>

    </div>
    <div class="search-container" style="display: none;">
        <form action="/search.php" method="post">
            <input type="text" placeholder="Search.." name="search" maxlength="50">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</header>
<img src="assets/logos/logos.svg" alt="Logo" onclick="scrollToTop()" class="logo">
<script>
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    }

    function toggleButtonText() {
        var button = document.getElementById("joinButton");
        if (button.innerHTML === "Join") {
            button.innerHTML = "Login";
        } else {
            button.innerHTML = "Join";
        }
    }
</script>

<script src="js/navigation.js"></script>


<style>
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

    @keyframes pulse {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(0.5);
        }
        100% {
            transform: scale(1);
        }
    }

    @keyframes fadeOut {
        0% {
            opacity: 1;
        }
        100% {
            opacity: 0;
        }
    }


    .logo {
        transition: transform 0.3s ease;
    }

    .logo:hover {
        animation: pulse 3s infinite ease;
        transition: transform 0.3s ease-out;
    }

    .logo:active {
        animation: shake 0.5s infinite;
        animation-iteration-count: 1;
    }

</style>