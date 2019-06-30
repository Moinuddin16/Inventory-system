<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
        <link rel="stylesheet" type="text/css" href="css\style_ShowBrands.css">
    </head>
    <body>

        <table id="mytable"></table>
        <button  id ="mybtn">Get Brands</button>
            
 
    <script>
            document.getElementById("mybtn").onclick = ()=>{
            fetch("http://localhost/inventory/Brand/BrandController.php?use_case=GetBrands")
                .then(data => {
                    return data.json()
                }).then(value => {
                var table = document.getElementById("mytable");

                var col = [];
                for (var i = 0; i < value.data.length; i++) {
                    for (var key in value.data[i]) {
                        if (col.indexOf(key) === -1) {
                            col.push(key);
                        }
                    }
                }
                    var row = table.insertRow(0);
                    var cell1 = row.insertCell(0);
                    var cell2 = row.insertCell(1);
            
                    cell1.innerHTML = col[1];
                    cell2.innerHTML = col[2];
            
        
                for (var i = 0 , j = 1 ;j<value.data.length+1   ; j++,i++)
                {
                    var row = table.insertRow(j);
                    var cell1 = row.insertCell(0);
                    var cell2 = row.insertCell(1);
            
                    cell1.innerHTML = value.data[i].title;
                    cell2.innerHTML = value.data[i].website;
                }
            })
    }
    </script>
</body>
</html>