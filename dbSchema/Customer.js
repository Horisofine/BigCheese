const mongoose = require("mongoose");
const Order = require("./Order").schema;

// Creating a Schema for a customer
const CustomerSchema = mongoose.Schema({

    firstName: String,
    lastName: String,
    DOB: Date,
    orderHistory: [Order]

})

module.exports = mongoose.model("client", CustomerSchema);