
 document.getElementById("myForm").onsubmit =(e)=>{

    e.preventDefault();

    const url = "http://localhost/inventory/Brand/BrandController.php?use_case=AddBrand";
    var data = new URLSearchParams();
    for(const pair of new FormData(e.target))
    data.append(pair[0],pair[1])

    console.log(pair[0]);
    console.log(pair[1]);
    
}


  
