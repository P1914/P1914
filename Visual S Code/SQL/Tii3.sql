ALTER FUNCTION products (@start_year INT, @end_year INT)
RETURNS TABLE
AS
RETURN
    SELECT 
        product_name, 
        model_year, 
        list_price
    FROM 
        production.products
    WHERE 
        model_year BETWEEN @start_year AND @end_year;

CREATE TABLE products (
    product_id INT PRIMARY KEY,
    product_name NVARCHAR(100),
    model_year INT,
    list_price DECIMAL(10,2)
);
select * from products

INSERT INTO products (product_id, product_name, model_year, list_price)
VALUES 
(1, 'Laptop A', 2021, 999.99),
(2, 'Phone B', 2022, 599.99),
(3, 'Tablet C', 2023, 399.99),
(4, 'Monitor D', 2020, 199.99);

