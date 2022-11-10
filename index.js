const mongoose = require("mongoose");

// Importing Schemas for our documents
const ProductSchema = require("./dbSchema/Product");
const SupplierSchema = require("./dbSchema/Supplier");
const OrderSchema = require("./dbSchema/Order");

// Connecting to the db via mongoose
mongoose.connect("mongodb+srv://admin:adminPassword@bigmindmove.lq18gdi.mongodb.net/BigCheese");

async function run() {
    try {
        // const supplier1 = await SupplierSchema.create({
        //     name: "John Stones",
        //     emailAddress: "test@email.com",
        //     phoneNumber: 123456789
        // })
        // console.log(supplier1);

        // const product = await ProductSchema.create({ 

        //     supplierID: supplier1,
        //     productName: "Orange", 
        //     productDetails: "Hello"
            
        // });
        // console.log(product);

        // const supplier2 = await SupplierSchema.create({
        //     name: "Johnny Samuels",
        //     emailAddress: "test2@email.com",
        //     phoneNumber: 56829241
        // })
        // console.log(supplier2);

        // const product2 = await ProductSchema.create({ 

        //     supplierID: supplier2,
        //     productName: "Apple", 
        //     productDetails: "Bye"
            
        // });
        // console.log(product2);

        const order1 = await OrderSchema.create({

            DateOfOrder: "22/11/2022",
            ExpectedDelDate: "22/12/2022",
            client_name: "Sett Brian",
            status: "In process",
            productList: [
                await ProductSchema.create({ 

                    supplierID: await SupplierSchema.create({
                        name: "John Stones",
                        emailAddress: "test@email.com",
                        phoneNumber: 123456789
                    }),
                    productName: "Orange", 
                    productDetails: "Hello"
                    
                })
                , 
                await ProductSchema.create({ 

                    supplierID: await SupplierSchema.create({
                        name: "Johnny Samuels",
                        emailAddress: "test2@email.com",
                        phoneNumber: 56829241
                    }),
                    productName: "Apple", 
                    productDetails: "Bye"
                    
                })
            ]
            
        })
        console.log(order1);

        // const orderinf = await ProductListSchema.create({
        //     ordernum: 3,
        //     numitems: 2,
        //     products: [product, product2]
        // });
        // console.log(orderinf);
    }
    catch (err){
        console.error(err);
    }
}

 run();  
