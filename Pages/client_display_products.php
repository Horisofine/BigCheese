<?php
    include_once 'includes/dbConfig.inc.php';

    $sql1 = "SELECT supplier_id, company_name FROM suppliers";
    $supplierResult = mysqli_query($conn, $sql1);
    $resultCheck1 = mysqli_num_rows($supplierResult);

    if ($resultCheck1 > 0) :

        while ($row1 = mysqli_fetch_assoc($supplierResult)) :

            $supplierID = $row1["supplier_id"];
            $company_name = $row1["company_name"];
            
            $sql2 = "SELECT * FROM products WHERE supplier_id='$supplierID';";
            $productResult = mysqli_query($conn, $sql2);
            $resultCheck2 = mysqli_num_rows($productResult);

            if ($resultCheck2 > 0) :
                ?>

                <table class="itemTable">
                    <tr>
                        <th id = "supplier" >Supplier Name</th>
                        <th>Item Name</th>
                        <th>Product ID</th>
                        <th>Price/Item</th>
                        <th>Amount in Stock</th>
                        <th>Desired Amount</th>
                    </tr>

                <?php
                $count = 0;

                while ($row2 = mysqli_fetch_assoc($productResult)) :

                    if ($count > 0) {
                        $company_name = "";
                    }

                    $product_name = $row2["product_name"];
                    $productID = $row2["product_id"];
                    $price = $row2["price"];
                    $quantity = $row2["quantity"];
                    $detail = $row2["detail"];

                    ?>
                    <tr>
                        <td> <?php echo $company_name ?></td>
                        <td> <?php echo $product_name ?></td>
                        <td> <?php echo $productID ?></td>
                        <td class="price"> <?php echo $price ?>$</td>
                        <td> <?php echo $quantity ?></td>
                        <td>
                            <input type="text" name="add_quantity" id="quantity" value="0" class ="add">
                        </td>
                        <td><button type="button" class="filterBtn">add</button></td>
                    </tr>
                    
                    <?php
                    $count++;
                endwhile;
            endif;
            ?>
            </table>
        <?php
        endwhile;
    endif;

