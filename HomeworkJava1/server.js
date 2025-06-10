const express = require('express');
const bodyParser = require('body-parser');
const cors = require('cors');

const app = express();
const port = 3000;

// Middleware
app.use(cors());
app.use(bodyParser.json());

// Fake product data (in-memory database)
let products = [
    { id: 1, name: 'ទំនិញ A', price: 100 },
    { id: 2, name: 'ទំនិញ B', price: 150 }
];

// GET endpoint to retrieve all products
app.get('/api/products', (req, res) => {
    res.json(products);
});

// POST endpoint to add a new product
app.post('/api/products', (req, res) => {
    const newProduct = req.body;
    newProduct.id = products.length + 1; // Assign a new ID
    products.push(newProduct); // Add new product to the array
    res.status(201).json(newProduct); // Return the added product with status 201
});

// Start server
app.listen(port, () => {
    console.log(`Server is running on http://localhost:${port}`);
});
