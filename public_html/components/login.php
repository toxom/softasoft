<section id="login">
    <button id="joinButton" class="button-join" onclick="toggleButtonText()">Join</button>
    <div class="login-container login-content">
        <form action="credentials.php" method="post">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <h3>Don't have an account?</h3>
        <h3><a href="register.php">Register</a></h3>
    </div>
</section>
