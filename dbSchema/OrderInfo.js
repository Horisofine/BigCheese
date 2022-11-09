const mongoose = require("mongoose");
const Product = require("./Product");

const OrderInfoSchema = mongoose.Schema({

    orderNum: Number,
    numItems: Number,
    products: [Product]

})

module.exports = mongoose.model("orderInfo", OrderInfoSchema);