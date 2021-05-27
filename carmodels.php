<?php
include_once 'modules/navbar.php'
?>

<div class="main">

    <div class="hero__section">
        <div class="hero__content">
            <div class="hero__title">
                <h1>Carmodels</h1>
            </div>
        </div>
    </div>

    <div class="content__container">
        <h2>Car Data</h2>
        
        <div class="table__sales">
            
            <div class="table__container__sales" id="sales_table">
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

    <div class="content__container">
    <h2>Administration of carmodels</h2>

    <div class="table__grid">
            
            <div class="table__container" id="emp_table">
            <h3>Add car to database</h3>
                <div class="formclass" id="remove">
                    <form action="#">
                        <input type="text" id="Brand" value="Brand" onclick=" value=''">
                        <input type="text" id="Model" value="Model" onclick=" value=''">
                        <input type="text" id="Price" value="Price" onclick=" value=''">
                        <button type="submit" name="submit">Add Car</button>
                    </form>
                </div>
            </div>

            <div class="table__container" id="car_table">
                <h3>Remove car from database</h3>
                <div class="formclass" id="add">
                    <form action="#">
                        <input type="text" id="Brand" value="Car ID" onclick=" value=''">
                        <button type="submit" name="submit">Remove Car</button>
                    </form>
                </div>
            </div>
        </div>      
    </div>
</div>

</body>
</html>