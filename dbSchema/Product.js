const mongoose = require("mongoose");
const Supplier = require("./Supplier").schema;

// Creating a Schema for a product
const productSchema = mongoose.Schema({
    
    // Referencing the supplier
    supplierID: Supplier,
    productName: String,
    productDetails: String

})

module.exports = mongoose.model("product", productSchema);