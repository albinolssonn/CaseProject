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

    <div class="content__container">
        <h2>Registrate and Log in</h2>
        
        <div class="table__grid">
            
            <div class="table__container" id="emp_table">
            <h3>Sign Up</h3>
                <div class="formclass" id="remove">
                    <form action="#">
                        <input type="text" id="email" placeholder="Email" >
                        <input type="text" id="name" placeholder="Full name" >
                        <input type="text" id="uid" placeholder="Username" >
                        <input type="password" id="pwd" placeholder="Password" >
                        <input type="password" id="repwd" placeholder="Re enter password">
                        <button type="submit" name="submit">Sign Up</button>
                    </form>
                </div>
            </div>

            <div class="table__container" id="car_table">
                <h3>Log In</h3>
                <div class="formclass" id="add">
                    <form action="#">
                        <input type="text" id="uid" placeholder="Username" >
                        <input type="password" id="pwd" placeholder="Password" >
                        <button type="submit" name="submit">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>      
    </div>
    </div>
</div>



<div>
    test
</div>    

</body>
</html>