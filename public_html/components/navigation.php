<div id="sidenav" class="sidenav">
    <button id="joinButton" class="button-join" onclick="toggleButtonText()">Join</button>
    <div class="login-container login-content" id="loginContent">
        <?php include 'components/login.php'; ?>
    </div>
</div>

<div id="toolnav" class="sidenav">
    <div class="login-container login-content" id="loginContent">
        <?php include 'components/login.php'; ?>
    </div>
</div>

<script src="js/navigation.js"></script>

<style>
    #toolnav {
        right: 0;
        left: auto;
    }
 </style>

 