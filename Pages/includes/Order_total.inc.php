<?php

    // Makes sure the user accessed this file through the submit button
    if (isset($_POST["order_submit"])) {
        $prices = $_POST["add_quantity"];
        echo $prices;
    }