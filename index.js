const { MongoClient } = require("mongodb");
const uri = "mongodb+srv://admin:adminPassword@bigmindmove.lq18gdi.mongodb.net/?retryWrites=true&w=majority";
const client = new MongoClient(uri);

connect = async () => {

    try {
        
        client.connect();
        console.log("connected");

        const db = client.db("BigCheese");
        
        const collection = db.collections();
        collection.forEach(c=>console.log(c));
        // const searchCursor = await collection.find();

        // const results = await searchCursor.toArray();
        // results.forEach(r=>console.log(r))
    } 
    catch (error) {
        console.log(`Something bad happend: ${error}`);
    }
    finally {
        await client.close();
    }


}

connect().catch(console.dir);