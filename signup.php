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
        <h2>Sign Up</h2>

        <form action="includes/signup.inc.php" method="POST">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="email" placeholder="email">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwdrepeat" placeholder="Repeat Password">
            <button type="submit" name="submit">Sign Up</button>
        </form>
    </section>
</div>



<div>
    test
</div>    

</body>
</html>