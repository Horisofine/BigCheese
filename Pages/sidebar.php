<section class="sidebar">
    <!-- First inner container  -->
    <section id = "main">
        <div>
            <ul>
                <!-- Potentially a link to the home page -->
                <li>
                    <?php
                    
                        echo '<a style="pointer-events: none">' . $_SESSION['first_name'] . '<br>' . $_SESSION['last_name'] . '</a>';
                        
                    ?>
                </li>  
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