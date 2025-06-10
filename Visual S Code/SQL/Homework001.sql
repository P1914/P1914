-- Create the TblMarket table
CREATE TABLE TblMarket (
    MarketId INT PRIMARY KEY IDENTITY(1,1),
    MarketName VARCHAR(100) NOT NULL,
    Location NVARCHAR(200) NOT NULL,
    Category VARCHAR(50) NOT NULL
);
CREATE PROCEDURE InsertMarket
    @MarketName VARCHAR(100),
    @Location NVARCHAR(200),
    @Category VARCHAR(50)
AS
BEGIN 
    INSERT INTO TblMarket (MarketName, Location, Category)
    VALUES (@MarketName, @Location, @Category);
END;
EXEC InsertMarket 
    @MarketName = 'Central Market', 
    @Location = 'Downtown', 
    @Category = 'Retail';
EXEC InsertMarket 
    @MarketName = 'Farmers Market', 
    @Location = 'Westside', 
    @Category = 'Agriculture';
	SELECT *FROM TblMarket;
