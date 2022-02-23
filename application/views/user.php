<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <style>
        * {
            box-sizing: border-box;
        }

        .row {
            margin-left: -5px;
            margin-right: -5px;
        }

        .column {
            float: left;
            width: 50%;
            padding: 5px;
        }

        /* Clearfix (clear floats) */
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th,
        td {
            text-align: left;
            padding: 16px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <div class="content">
        <div class="column">
            <table id="cart"class="table table-borderless">
                <thead>
                    <tr>
                        <th>Item Name</th>
                        <th>Item price</th>
                        <th>Item quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($product as $row) { ?>
                        <tr>
                            <td>
                                <p> <input type="text" id="product" class="q" value="<?= $row['product_name'] ?>" readonly  placeholder="" /><i class="fa fa-caret-down" id="add" style="font-size:24px"></i> </p>
                                <p class="stockStatus" value=""> <?= $row['stock'] ?>In Stock</p>
                            </td>
                            <td><input id="price" class="price" value="<?= $row['price'] ?>" placeholder="" readonly /></td>
                            <td>
                                 <input  type="number" id="quantity" class="qty" value="1" placeholder="" /> 
                            </td>
                            <!-- <td>
                                <input hidden type="number" id="total" class="total" value="1" placeholder="" /> 
                            </td> -->
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="column">

            <table id="carttable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Item Name</th>
                        <th> price</th>
                        <th>quantity</th>
                        <th>Total</th>
                        <th>Action</th>


                    </tr>
                </thead>
                <tbody id="ivoicetable1">

                </tbody>
            </table>
        </div>
    </div>
    <script>
        $(document).ready(function() {

            $("#quantity").change(function() {
                // $("#cart > tbody  > tr").each(function()   { 
                var qty = this.value;
                var price =  $(this).find('#price').val();
                var total= qty * price;
            
           
            // });
            });





            $('#add').on('click', function() { // Render table for pdts that assigned to sections(homepage)
                // $(this).remove();



                $('#carttable tbody').append('<tr>');
                $('#carttable tbody').append('<td>' + ' <p> ' + '<input type="text" id="product" class="q" value="" placeholder="" />' + ' </p> ' + '</td>');
                $('#carttable tbody').append('<td>' + ' <input type="text" value="" placeholder="" />' + '</td>');
                $('#carttable tbody').append('<td>' + ' <input type="number" id="quantity"class="qty" value="1" placeholder="" />' + '</td>');






            });

            // $('body').on("click", ".remove4", function() { // Remove assigned pdts from table 

           


            //     $('.' + crnt).remove();
            // });
        });
    </script>
</body>

</html>