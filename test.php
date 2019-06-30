<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
    </head>
    <body>
        <div id="Add_Brand">
            <form id="myForm">
                Brand Name : 
                <input class="inputMod" type="text" name="name" placeholder="Brand Name"><br>
                Brand Website : 
                <input class="inputMod" type="text" name="website" placeholder="Brand Website"><br>
                <input type="submit" value="Submit">
            </form>
        </div>

        <script>
            document.getElementById("myForm").onsubmit =(e)=>{
                e.preventDefault();

                const url = "http://localhost/inventory/Brand/BrandController.php?use_case=AddBrand";
                var data = new URLSearchParams();
                for(const pair of new FormData(e.target))
                data.append(pair[0],pair[1])
                
                fetch(url,{
                    method : "post",
                    body: data,
                }).then(res=>res.json())
                .then(res2 => console.log(res2))
            }

        </script>
    </body>
</html>
