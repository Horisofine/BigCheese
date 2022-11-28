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
        <section class="sidebar">
            <!-- First inner container  -->
            <section id = "main">
                <div>
                    <ul>
                        <!-- Potentially a link to the home page -->
                        <li><a href="supplier_products.html">Add Product</a></li>  
                    </ul>
                </div>
            </section>

            <!-- Second inner container -->
            <section id ="main">
                <div>
                    <ul>
                        <li><a href="edit_product.html">Edit Product</a></li>  
                    </ul>
                </div>
                <div>
                    <ul>
                        <li><a href="supplier_pending.html">Pending Orders</a></li>  
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
                        <th>Product Name</th>
                        <th>Product ID</th>
                        <th>Price</th>
                    </tr>
                    <tr>
                        <td>Product name</td>
                        <td>1ABC</td>
                        <td>150$</td>
                        <td><button class ="filterBtn" >Edit</button></td>
                    </tr>
                    <tr>
                        <td>Product name</td>
                        <td>1ABC</td>
                        <td>150$</td>
                        <td><button class ="filterBtn" >Edit</button></td>
                    </tr>
                    <tr>
                        <td>Product name</td>
                        <td>1ABC</td>
                        <td>150$</td>
                        <td><button class ="filterBtn" >Edit</button></td>
                    </tr>
                </table>
            </div>
        </section>

        <section class="sidebar">
            <!-- First inner container  -->
            <section id = "main">
                <div>
                    <ul>
                        <!-- Potentially a link to the home page -->
                        <li><a href="supplier_account.html">Account</a></li>  
                    </ul>
                </div>
            </section>

        </section>
    </main>
</body>
</html>