<?php
    session_start();

    if(isset($_SESSION["first_name"])) {

        include_once 'includes/dbConfig.inc.php';
        $clientID = $_SESSION['client_id'];

        $sql = "SELECT first_name, last_name, email_address FROM clients WHERE client_id='$clientID'";
        $result = mysqli_query($conn, $sql);

        if ($row = mysqli_fetch_assoc($result)) {

            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $email_address = $row['email_address'];
    
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

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
                            <li><a href="customerLogin.php">Logout</a></li>  
                        </ul>
                    </div>
                </section>
            </section>

            <section class="maincontent">
                <h2 class="h2Acc">Your Account</h2>
                <div class="infoDiv">
                    <!-- <table class="userInfoTable">
                        <tr>
                            <td>
                                <input type="text" placeholder="User Name">
                                <br><br>
                                <input type="text" placeholder="Password">
                                <br><br>
                                <input type="text" placeholder="Email Address">
                            </td>
                        </tr>
                        <tr>
                            <td class="tdImg">
                                <button type="submit" class="accEditBtn">Edit</button>
                            </td>
                            <td>
                                <br><br>
                                <input type="text" placeholder="First Name">
                                <br><br>
                                <input type="text" placeholder="Last Name">
                                <br><br>
                                <select>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                                <br><br>
                                <select>
                                    <option>United States</option>
                                    <option>Canada</option>
                                    <option>Other</option>
                                </select>
                            </td>
                        </tr>
                    </table> -->

                    <table class="userInfoTable">
                        <tr>
                            <td><b>First Name </b></td>
                            <td> <?php echo $first_name ?> </td>
                        </tr>
                        <tr>
                            <td><b>Last Name </b></td>
                            <td> <?php echo $last_name ?> </td>
                        </tr>
                        <tr>
                            <td><b>Email Address </b></td>
                            <td> <?php echo $email_address ?> </td>
                        </tr>
                        <tr>
                            <td> <button type="button" class="filterBtn">Edit Info</button> </td>
                            <td> <button type="button" class="filterBtn">Change Password</button> </td>
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
                            <li><a href="cart.php">Cart</a></li>  
                        </ul>
                    </div>
                    <div>
                        <ul>
                            <!-- Potentially a link to the home page -->
                            <li><a href="user_account.php">Account</a></li>  
                        </ul>
                    </div>
                </section>
            </section>
        </main>
    </body>
</html>