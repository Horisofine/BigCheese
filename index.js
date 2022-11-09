const mongoose = require("mongoose");
const ProductSchema = require("./dbSchema/Product");
const OrderInfoSchem = require("./dbSchema/Product");


mongoose.connect("mongodb+srv://admin:adminPassword@bigmindmove.lq18gdi.mongodb.net/BigCheese");

async function run() {
    try {
        const product = await ProductSchema.create({ 
            name: "Orange", 
            price: 1001
        });
        console.log(product);

        const orderinf = await OrderInfoSchem.create({
            ordernum: 3,
            numitems: 3,
            products: [product]
        });
        console.log(orderinf);
    }
    catch (err){
        console.error(err);
    }
}

run();  