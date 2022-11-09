const mongoose = require("mongoose");
const Order = require("./Order");

const ClientSchema = mongoose.Schema({

    firstName: String,
    lastName: String,
    DOB: Date,
    orderHistory: [Order]

})

module.exports = mongoose.model("client", ClientSchema);