function fetchData(){
    fetch("http://localhost:8080/caseproject/API/employees/read.php").then(response =>{
    return response.json(); 
})
.then(data=>{
    console.log(data.data); 
    const html = data.data.map(employees => {
        return `
        <div class="Employees">
        <p>Name: ${employees.Name}</p>
        <p>Employee ID: ${employees.Emp_ID}</p>

        </div>`
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

fetchData(); 