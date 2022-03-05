<!DOCTYPE html>
<html>

<head>
    <script>
        function validateForm() {
            let x = document.forms["myForm"]["fname"].value;
            let y = document.forms["myForm"]["fprice"].value;
            let z = document.forms["myForm"]["fstock"].value;

            if (x == "") {
                alert("Name must be filled out");
                return false;
            }
            if (y == "") {
                alert("Price must be filled out");
                return false;
            }
            if (z == "") {
                alert("Stock must be filled out");
                return false;
            }

        }
    </script>
</head>

<body>

    <h2>Add Product Details</h2>

    <form name="myForm" id="formsubmit" action="<?php echo base_url();?>shopping/create_product" onsubmit="return validateForm()"  method="post">
        Product Name: <input type="text" class="form-control" name="fname">
        <br><br>
        Price (USD): <input type="number"class="form-control" name="fprice">
        <br><br>
        Stock : <input type="number" class="form-control" name="fstock">

        <br><br>

        <input type="" onClick="cartsubmit()"value="Submit">
    </form>


    
    <script type="text/javascript"> 
  function cartsubmit(){
   // alert('sdfsdf');
    var dataString = $("#formsubmit").serialize();
    //var url="ControllerName/MethodName"
        $.ajax({
        type:"POST",
        url:"<?php echo base_url(); ?>Shopping/create_product",
        data:dataString,
        dataType: 'json',
        success:function (data) {
            
            window.location.reload(true);
        }
        }); 
       // location.reload(true);
        };    
  
</script>

</body>

</html>