<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="../styles/main.css">
</head>
<body>
    <nav><?php include '../styles/sidebaradmin.php'?>FK Inventory System</nav>
  <center>
    <h1><b>Inform New Order</b></h1>
        <div>
            <form action="OrderController.php" method="post">
                <table style="border: 3px solid maroon;margin:10px;padding:50px; width:auto;">
                    <tr>
                        <td><label for="Order_ID">Order ID:</label></td>
                        <td colspan="5"><input type="text" name="Order_ID"/></td>
                    </tr>
                    <tr>
                        <td><label for="Admin_ID">Admin ID:</label></td>
                        <td colspan="5"><input type="text" name="Admin_ID"/></td>
                    </tr>
                    <tr>
                        <td><label for="Item_Code">Item Code:</label></td>
                        <td colspan="5"><input type="text" name="Item_Code"/></td>
                    </tr>
                    <tr>
                        <td><label for="Item_Quantity">Item Quantity:</label></td>
                        <td colspan="5"><input type="text" name="Item_Quantity"/></td>
                    </tr>
					 <tr>
                        <td><label for="Item_Quantity">Order Time:</label></td>
                        <td colspan="5"><input type="text" name="Order_time"/></td>
                    </tr>
                   <tr>
                        <td>
                            <br><br><button onclick="location.href='view.php'">Submit</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </center>
</body>
</html>
<?php
	$link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());

	mysqli_select_db($link, "fkisdb") or die(mysqli_error());
    


    
    

?>



              
           
        
