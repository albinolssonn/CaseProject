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

    <div class="emp__container">
        <h2>Dashboard</h2>
        <div class="table__grid">
            
            <div class="table__container" id="emp_table">
                <h3>Employees</h3>
                <table class="top-row">
                    <tr>
                        <th>Employee ID</th>
                        <th>Name</th>
                    </tr>
                </table>
                <table id="emp_read">
                    <!-- Here goes Data -->
                </table>
            </div>

            <div class="table__container" id="car_table">
                <h3>Carmodels</h3>
                <table class="top-row">
                    <tr>
                        <th>Car ID</th>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Price</th>
                    </tr>
                </table>
                <table id="car_read">
                    <!-- Here goes data -->
                </table>
            </div>
        </div>      
    </div>
</div>

<div>
    test
</div>    

</body>
</html>