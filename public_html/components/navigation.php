
<div id="sidenav" class="sidenav">
</div>

<div id="toolnav" class="sidenav">
    <div></div>
</div>


<style>
    #toolnav {
        right: 0;
        left: auto;
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




