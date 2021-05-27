<?php
include_once 'modules/navbar.php'
?>


<div class="main">

    <div class="hero__section">
            <div class="hero__content">
                <div class="hero__title">
                    <h1>Welcome to caseproject</h1>
                </div>
            </div>

            
    </div>

    <section class="signup-form">
        <h2>Log in</h2>

        <form action="includes/login.inc.php" method="POST">
            <input type="text" name="name" placeholder="Username/Email">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="submit">Log In</button>
        </form>
    </section>
</div>