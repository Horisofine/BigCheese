const mongoose = require("mongoose");
const express = require("express");
const app = express();
const bodyParser = require("body-parser");
const port = 8080;
const db = "mongodb+srv://admin:adminPassword@bigmindmove.lq18gdi.mongodb.net/BigCheese";

// Importing Schemas for our documents
const ProductSchema = require("./dbSchema/Product");
const SupplierSchema = require("./dbSchema/Supplier");
const OrderSchema = require("./dbSchema/Order");

// Connecting to the db via mongoose
mongoose.connect(db);

app.listen(port, function(){
    console.log('Listening on port ' + port);
})


