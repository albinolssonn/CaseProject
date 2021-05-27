<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/caseproject/CSS/stylesheet.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
    <script src="/caseproject/JS/main.js"></script>
    <title>Dashboard</title>
</head>


<body>
<nav>
<div class="navbar__container">
    <ul>
        <li><a href="index.php">Dashboard</a></li>
        <li><a href="employees.php">Employees</a></li>
        <li><a href="carmodels.php">Carmodels</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="signin.php">Sign Out</a></li>
    </ul>
</div>
</nav>

<div class="navbar__container"></div>
<div class="main">

    <div class="hero__section">
            <div class="hero__content">
                <div class="hero__title">
                    <h1>Welcome back Albin!</h1>
                </div>
            </div>
    </div>

    <div class="content__container">
        <h2>Profile Page</h2>

        <div class="table__grid">
                
                <div class="table__container__grid" id="emp_table">
                <h3>Register Sold Object</h3>
                    <div class="formclass" id="remove">
                        <form action="#">
                            <input type="text" id="Car_ID" placeholder="Car ID">
                            <input type="text" id="Model" placeholder="Model">
                            <input type="text" id="Price" placeholder="Price">
                            <button type="submit" name="submit">Add Car</button>
                        </form>
                    </div>
                </div>

                <div class="table__container__grid" id="car_table">
                    <h3>Total Sales</h3>
                    <div class="kpi__div" id="kpi">
                        <h1>533,000</h1>
                    </div>
                </div>
            </div>      
        </div>
    </div>





</div>




<?php
include_once 'modules/footer.php'
?>

  

</body>
</html>