function showAddProductForm() {
    const productList = document.getElementById("productList");
    const productForm = `
        <form id="addProductForm">
            <h3>បន្ថែមទំនិញថ្មី</h3>
            <label for="productName">ឈ្មោះទំនិញ:</label>
            <input type="text" id="productName" required>
            <label for="productPrice">តម្លៃ:</label>
            <input type="number" id="productPrice" required>
            <button type="submit">បន្ថែម</button>
        </form>
    `;
    productList.innerHTML = productForm;
    document.getElementById("addProductForm").addEventListener("submit", addProduct);
}

function addProduct(event) {
    event.preventDefault();

    const name = document.getElementById("productName").value;
    const price = document.getElementById("productPrice").value;

    const product = { name, price };
    console.log("បន្ថែមទំនិញ:", product);

    // Add product to database or handle in backend (API call)
    // Example: sendProductToServer(product);

    alert("ទំនិញបានបន្ថែមទៅក្នុងប្រព័ន្ធ!");
}
