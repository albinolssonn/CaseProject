function fetchData(){
    fetch("http://localhost:8080/caseproject/API/carmodels/read.php").then(response =>{
    return response.json(); 
})
.then(data=>{
    console.log(data.data); 
    const html = data.data.map(Carmodels => {
        return `
        <div class="Carmodels">
        <p>Car_ID: ${Carmodels.Car_ID}</p>
        <p>Brand: ${Carmodels.Brand}</p>
        <p>Model: ${Carmodels.Model}</p>
        <p>Price: ${Carmodels.Price}</p>
        </div>`
    })
    .join('');
    console.log(html); 
    document
        .querySelector("#car_read").innerHTML = html; 
})
.catch(error =>{
    console.log(error);
}); 
}

fetchData(); 