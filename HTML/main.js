function fetchData(){
    fetch("http://localhost:8080/caseproject/API/employees/read.php").then(response =>{
    return response.json(); 
})
.then(data=>{
    console.log(data.data); 
    const html = data.data.map(employees => {
        return `<p>Name: ${employees.Name}</p>`
    })
    .join('');
    console.log(html); 
    document
        .querySelector("#id").innerHTML = html; 
})
.catch(error =>{
    console.log(error);
}); 
}

fetchData(); 