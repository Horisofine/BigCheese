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