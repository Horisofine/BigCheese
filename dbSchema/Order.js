const mongoose = require("mongoose");
const Product = require("./Product").schema;

// Creating a Schema for an order
const OrderSchema = mongoose.Schema({

    DateOfOrder: String,
    ExpectedDelDate: String,
    client_name: String,
    status: String,
    productList: [Product]

})

module.exports = mongoose.model("order", OrderSchema);