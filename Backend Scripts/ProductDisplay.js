import { default as mongoose, mongo } from "mongoose";
import ProductSchema from "./dbSchema/Product";

mongoose.connect(
  "mongodb+srv://admin:adminPassword@bigmindmove.lq18gdi.mongodb.net/BigCheese"
);

DiplayProductsForClient();

async function DiplayProductsForClient() {

    const product = mongoose.model("product", ProductSchema);

    const documents = await product.find()
    console.log(documents);
}
