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
        <h2>Employee Data</h2>
        
        <div class="table__sales">
            
            <div class="table__container__sales" id="sales_table">
                <h3>Employees</h3>
                <table class="top-row">
                    <tr>
                        <th>Employee ID</th>
                        <th>Name</th>
                    </tr>
                </table>
                <table id="emp_read">
                    <!-- Here goes data -->
                </table>
            </div>
        </div>    
    </div>


    <div class="content__container">
        <h2>Sales board</h2>
        
        <div class="table__sales">
            
            <div class="table__container__sales" id="sales_table">
                <h3>Sales Table</h3>
                <table class="top-row">
                    <tr>
                        <th>Employee ID</th>
                        <th>Name</th>
                        <th>Sales</th>
                    </tr>
                </table>
                <table id="sales_read">
                    <!-- Here goes Data -->
                </table>
            </div>
        </div>    
    </div>
</div>




    
    
</body>
</html>