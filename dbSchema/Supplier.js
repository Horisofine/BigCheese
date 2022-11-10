const mongoose = require("mongoose");

// Creating a Schema for the supplier
const SupplierSchema = mongoose.Schema({

    name: String,
    emailAddress: String,
    phoneNumber: Number

})

module.exports = mongoose.model("supplier", SupplierSchema);