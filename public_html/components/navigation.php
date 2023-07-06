
<div id="sidenav" class="sidenav">
    <?php include 'components/login.php'; ?>
</div>

<div id="toolnav" class="sidenav">
    <?php include 'components/cta.php'; ?>
</div>


<style>
    #toolnav {
        right: 0;
        left: auto;
    }

    #sidenav {
        right: auto;
        left: 0;
    }

</style>

<script src="js/navigation.js"></script>

<script>
    // JavaScript code to handle the opening and closing of the side navigation menu
    document.getElementById("joinButton").addEventListener("click", function() {
        document.getElementById("sidenav").classList.toggle("open");
        toggleLoginContainer();
    });


</script>




