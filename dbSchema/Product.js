const mongoose = require("mongoose");

const productSchema = mongoose.Schema({
    name: String,
    price: Number,
    details: String
})

module.exports = mongoose.model("product", productSchema);