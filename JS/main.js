// Fetch Method for Employees
function fetchEmpData(){
    fetch("http://localhost:8080/caseproject/API/employees/read.php").then(response =>{
    return response.json(); 
})
.then(data=>{
    console.log(data.data); 
    const html = data.data.map(employees => {
        // return value to put into html
        return `

        <tr>
        <td>${employees.Emp_ID}</td>
        <td>${employees.Name}</td>
        </tr>`

    })
    .join('');
    console.log(html); 
    document
        .querySelector("#emp_read").innerHTML = html; 
})
.catch(error =>{
    console.log(error);
}); 
}
fetchEmpData();


// Fetch Method for Carmodels
function fetchCarData(){ // Fetch data from API
    fetch("http://localhost:8080/caseproject/API/carmodels/read.php").then(response =>{
    return response.json(); 
}) // Log data 
.then(data=>{
    console.log(data.data); 
    const html = data.data.map(Carmodels => {
        return  `
        

        <tr>
        <td>${Carmodels.Car_ID}</td>
        <td>${Carmodels.Brand}</td>
        <td>${Carmodels.Model}</td>
        <td>${Carmodels.Price}</td>
        </tr>`

    })
    .join(''); 
    console.log(html); 
    document 
        .querySelector("#car_read").innerHTML = html; // "Prints const HTML/data at #id"
})
.catch(error =>{
    console.log(error);
}); 
}

fetchCarData();


// Method for fetch Sales per Emp
function fetchSalesData(){
    fetch("http://localhost:8080/caseproject/API/employees/readSales.php").then(response =>{
    return response.json(); 
})
.then(data=>{
    console.log(data.data); 
    const html = data.data.map(employees => {
        return  `
        <tr>
        <td>${employees.Emp_ID}</td>
        <td>${employees.Name}</td>
        <td>${employees.Sales}</td>
        </tr>`

    })
    .join('');
    console.log(html); 
    document
        .querySelector("#sales_read").innerHTML = html; 
})
.catch(error =>{
    console.log(error);
}); 
}

fetchSalesData();


// Method for removing car
function removeCar(){

}

// Method for adding car
function addCar(){

}