<?php
  // Process any form submissions or perform necessary actions here
?>

<button id="joinButton" class="button-join" onclick="toggleButtonText()" onclick="toggleSidenav()">Join</button>

<style>
  .button-join.login::after {
    content: "Login";
  }
  
</style>

<script>
  function toggleButtonText() {
    var button = document.getElementById("joinButton");
    button.classList.toggle("login");
  }
</script>

