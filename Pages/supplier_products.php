<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="test.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <main>
        <?php
            require 'sidebar_left.php'
        ?>

        <section class="maincontent">
            <div>
                <table>
                    <tr>
                        <td>
                            <button class="filterBtn"><i class="fa fa-filter"></i>&nbspFilter</button>
                        </td>
                        <td>
                            <select class="drpdwnSrch">
                                <option class="content">By Name</option>
                                <option class="content">By ID</option>
                                <option class="content">By [...]</option>
                            </select>
                            <input type="text" placeholder="Search..." class="srchBar">
                            <button type="submit" class="srchBtn"><i class="fa fa-search"></i></button>
                        </td>
                        <td class="showResults">Showing (number of) Results</td>
                        <td>
                            <label class="sortBy">Sort by:</label>
                            <select class="drpdwnSrch">
                                <option class="content">Featured</option>
                                <option class="content">Price: Low to High</option>
                                <option class="content">Price: High to Low</option>
                                <option class="content">Date: New to Old</option>
                                <option class="content">Date: Old to New</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>

            <div>
                <table class="itemTable">
                    
                    <tbody>
                    <tr>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Details</th>
                    </tr>
                    <tr>
                        <form action="Add_Product.inc.php" method="post">
                        <td><input type="text" id="itemName" placeholder="Product Name"></td>
                        <td><input type="text" id="price" placeholder="Price"></td>
                        <td><input type="text" id="quantity" placeholder="Quantity"></td>
                        <td><input type="text" id="detail" placeholder="Detail"></td>
                        <td><button type="button" class="add-row btn">Add<i class="fa-solid fa-circle-plus"></i></button></td>
                    </tr> 
                </tbody>
                </table>
            </div>
            
                <button type="submit" class="delete-row">Remove</button>            
           
        </section>

        <?php
            require 'sidebar_right.php';
        ?>

        <script src = "order.js"> </script>
    </main>
    
</body>

</html>