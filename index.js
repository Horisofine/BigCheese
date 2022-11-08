// const { MongoClient } = require("mongodb");

// async function main() {
// 	// we'll add code here soon
// }

// async function connect() {

//     try {
//         const uri = "mongodb+srv://admin:adminPassword@bigmindmove.lq18gdi.mongodb.net/?retryWrites=true&w=majority";
//         const client = new MongoClient(uri);

//         await client.connect();
//         console.log("connected");

//         await listDatabases(client);
        
//         // const db = client.db("BigCheese");
        
//         // console.log(db.databaseName);
//         // const collection = await db.collection("BigCheese.Orders");
//         // const searchCursor = await collection.find();

//         // if ((await searchCursor.countDocuments()) === 0) {
//         //     console.log("No documents found!");
//         //   }
        
//         //   await searchCursor.forEach(console.dir);
//     } 
//     catch (error) {
//         console.log(`Something bad happend: ${error}`);
//     }
//     finally {
//         await client.close();
//     }


// }

const { MongoClient, ServerApiVersion } = require('mongodb');

async function main(){
    /**
     * Connection URI. Update <username>, <password>, and <your-cluster-url> to reflect your cluster.
     * See https://docs.mongodb.com/ecosystem/drivers/node/ for more details
     */
    const uri = "mongodb+srv://admin:adminPassword@bigmindmove.lq18gdi.mongodb.net/?retryWrites=true&w=majority";
 

    const client = new MongoClient(uri, {useUnifiedTopology: true});
 
    try {
        // Connect to the MongoDB cluster
        await client.connect();
 
        // Make the appropriate DB calls
        await  listDatabases(client);
 
    } catch (e) {
        console.error(e);
    } finally {
        await client.close();
    }
}

main().catch(console.error);

async function listDatabases(client) {
    databasesList = await client.db().admin().listDatabases();

    console.log("Databases:");
    databasesList.databases.forEach(db => console.log(` - ${db.name}`));
};