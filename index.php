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
        <h2>Dashboard</h2>
        <div class="table__grid">
            
            <div class="table__container__grid" id="emp_table">
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
                <button onclick="fetchEmpData();">Update Table</button>
            </div>

            <div class="table__container__grid" id="car_table">
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
                <button onclick="fetchCarData();">Update Table</button>
            </div>
        </div>      
    </div>
</div>

<?php
include_once 'modules/footer.php'
?>



</body>
</html>