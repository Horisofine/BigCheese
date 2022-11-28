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
                        <li><a href="index.html">Products</a></li>  
                    </ul>
                </div>
            </section>

            <!-- Second inner container -->
            <section id ="main">
                <div>
                    <ul>
                        <li><a href="orders.html">Orders</a></li>  
                    </ul>
                </div>
                <div>
                    <ul>
                        <li><a href="customerLogin.html">Logout</a></li>  
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
               <table class="itemTable">
                     <tr>
                        <th id = "supplier" >Supplier Name</th>
                        <th>Item Name</th>
                        <th>Product ID</th>
                        <th>Price/ITEM</th>
                        <th>Amount in Stock</th>
                        <th>Desired Amount</th>
                    </tr> 
                    <tr>
                        <td>Cheese Factory</td>
                        <td>item5</td>
                        <td>#123</td>
                        <td class="price">4.99</td>
                        <td>12</td>
                        <td>
                            <input type="number"  id="quantity" value="0" class ="add" >
                        </td>
                        <td><button class ="filterBtn">add</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>item6</td>
                        <td>#123</td>
                        <td class="price">4.99</td>
                        <td>42</td>
                        <td>
                            <input type="number"  id="quantity" value="0" class ="add" >
                        </td>
                        <td><button class ="filterBtn">add</button></td>

                    </tr>
                <table class="itemTable">
                    <tr>
                        <th id = "supplier" >Supplier Name</th>
                        <th>Item Name</th>
                        <th>Product ID</th>
                        <th>Price/Item</th>
                        <th>Amount in Stock</th>
                        <th>Desired Amount</th>
                    </tr>
                    <tr>
                        <td>Cheezers</td>
                        <td>item1</td>
                        <td>#123</td>
                        <td class="price">5.25$</td>
                        <td>42</td>
                        <td>
                            <input type="number"  id="quantity" value="0" class ="add">
                        </td>
                        <td><button class ="filterBtn">add</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>item2</td>
                        <td>#123</td>
                        <td class="price">7.99$</td>
                        <td>42</td>
                        <td class="input-cell">
                            <input type="number"  id="quantity" value="0" class ="add" >
                        </td>
                        <td><button class ="filterBtn">Add</button></td>
                        
                    </tr>
                    <tr >
                        <th id ="supplier" >Supplier Name</th>
                        <th>Item Name</th>
                        <th>Product ID</th>
                        <th>Price/Item</th>
                        <th>Amount in Stock</th>
                        <th>Desired Amount</th>
                    </tr>
                
                    <tr class="clientRow">
                        <td>Cheezy's</td>
                        <td>item1</td>
                        <td>#123</td>
                        <td class="price">34$</td>
                        <td>42</td>
                        <td>
                            <input type="text" value = "0" id="quantity" class ="add" >
                        </td>
                        <td><button class ="filterBtn">add</button></td>
                    </tr>
                
                    <tr class = "clientRow">
                        <td></td>
                        <td>item2</td>
                        <td>#123</td>
                        <td class ="price">4.99$</td>
                        <td class ='stock'>23</td>
                        <td>
                            <input type="text"  id="quantity" value="0"  class ="add" >
                        </td>
                        <td><button class ="filterBtn">add</button></td>
                    </tr>
                    <tr class = "clientRow">
                        <td></td>
                        <td>item3</td>
                        <td>#123</td>
                        <td class ="price">7$</td>
                        <td>23</td>
                        <td>
                            <input type="text"  id="quantity" value="0" class ="add" >
                        </td>
                        <td><button class ="filterBtn">add</button></td>
                    </tr>

                    </tr> 
                
                </table>
                <div class="total-section row">
                    <header class="cart-header">Total<i class="fa-solid fa-cart-shopping"></i></header>
                    <b class="cart-total">0.00$</b>
                    <button class ="submitBtn">Submit</button>
                </div>
        </section>
            
        <section class="sidebar">
            <!-- First inner container  -->
            <section id = "main">
                <div>
                    <ul>
                        <!-- Potentially a link to the home page -->
                        <li><a href="cart.html">Cart</a></li>  
                    </ul>
                </div>
                <div>
                    <ul>
                        <!-- Potentially a link to the home page -->
                        <li><a href="user_account.html">Account</a></li>  
                    </ul>
                </div>
            </section>
        </section>
        
    </main>
    <script src="/Backend Scripts/ProductDisplay.js"></script>
    <script src = "cart.js"> </script>
    
</body>
</html>