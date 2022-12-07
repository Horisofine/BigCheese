<?php
    session_start();
    include_once 'includes/dbConfig.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <script src="https://kit.fontawesome.com/43124feaf5.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    
</head>
<body>
    <main>
        <section class="sidebar">
            <!-- First inner container  -->
            <section id = "main">
                <div>
                    <ul>
                        <!-- Potentially a link to the home page -->
                        <li><a href="index.php">Products</a></li>  
                    </ul>
                </div>
            </section>

            <!-- Second inner container -->
            <section id ="main">
                <div>
                    <ul>
                        <li><a href="orders.php">Orders</a></li>  
                    </ul>
                </div>
                <div>
                    <ul>
                        <li>
                            <form action="includes/logout.inc.php" method="post">
                                <button type="submit" name="logout-submit">Logout</button>
                            </form>
                        </li>  
                    </ul>
                </div>
            </section>
        </section>

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
            <form action="includes/Order_total.inc.php" method="post">

                <?php
                    require 'client_display_products.php';
                ?>
                
                <!-- <div class="total-section row">
                    <header class="cart-header">Total<i class="fa-solid fa-cart-shopping"></i></header>
                    <b class="cart-total">0.00$</b>
                    <button class ="submitBtn" type="submit" name="order_submit">Submit</button>
                </div> -->

            </form>
            <script>
                $(document).ready(function() {
                /* This section is for the cart */
                let total = '';
                let roundedTotal = 0.0;
                var sum = 0.0;
                const sales_map = new Map();
                const sales_list = [];
                var previous_cheap = 0.0;
                var cheapeast_previous = '';
                
                
                    $('.filterBtn').click(function(){
                        var client_counter = 0;
                        var sum1 = 0.0;
                        var sum2 = 0.0;
                        var price = 0.0;
                        var quantity = 0.0;
                        var addRow = '';
                        var itemName = '';
                        var i = 3;
                        var product_name = '';
                        

                    while (client_counter < i){
                        sum = 0.0;
                    
                        $(`.itemTable${client_counter} tr`).each(function(){
                            $(this).find('.price').each(function(){
                                price = parseFloat($(this).html());
                    
                            });
                            itemName = $(this).find(`#supplier${client_counter}`).html();
                            product_name = $(this).find('#product').html();

                            $(this).find('#quantity').each(function(){
                                quantity = parseFloat($(this).val());
                                sum += quantity*price; 
                                
                            }); 
                            
                            roundedTotal = sum.toFixed(2);  
                            total = $("<b> <b>").text(`${roundedTotal}`); 
                            $(`.cart-total${client_counter}`).text('');
                            $(`.cart-total${client_counter}`).text(roundedTotal+'$');
                            if(itemName != undefined){console.log("item name: " + itemName);}
                            
                            // console.log("rounded total: " + roundedTotal);
                            // console.log("quantity: " + quantity);

                            sales_list.push(product_name,price,quantity);
                            if(itemName != undefined){
                                sales_map.set(itemName, sales_list);
                            }

                            
                        }); 
                        if(client_counter === 0){previous_cheap = sum;}
                        if (sum <= cheapeast_previous){
                            previous_cheap = sum;
                            cheapeast_previous = itemName;
                            console.log("Cheapest option: ", previous_cheap , " worth: ", previous_cheap);
                        }
                        client_counter++;
                        
                    }

                });
                    
                   

                    $('.submitBtn').click(()=>{
                        if ( roundedTotal >= 5000){
                            alert('Order is pending');
                        }
                    });
                });
            </script>
        </section>
            
        <?php
            require 'sidebar_right.php';
        ?>
        
    </main>
    
</body>
</html>
