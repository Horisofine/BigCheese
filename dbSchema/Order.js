const mongoose = require("mongoose");
const Orderinfo = require("./OrderInfo");

const OrderSchema = mongoose.Schema({

    DateOfOrder: Date,
    ExpectedDelDate: Date,
    client_name: String,
    status: String,
    orderInfo: Orderinfo
})

module.exports = mongoose.model("order", OrderSchema);