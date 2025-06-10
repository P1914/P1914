CREATE TABLE Show (
    ShowID INT PRIMARY KEY IDENTITY(1,1),
    ShowName NVARCHAR(255) NOT NULL,
    Genre NVARCHAR(100),
    ReleaseDate DATE,
    Rating DECIMAL(3, 1)
);
CREATE PROCEDURE PopulateShowTable
    @ShowName NVARCHAR(255),
    @Genre NVARCHAR(100),
    @ReleaseDate DATE,
    @Rating DECIMAL(3, 1)
AS
BEGIN
    -- Insert the data into the Show table
    INSERT INTO Show (ShowName, Genre, ReleaseDate, Rating)
    VALUES (@ShowName, @Genre, @ReleaseDate, @Rating);

    -- Optionally return a confirmation
    PRINT 'Record inserted successfully.';
END;
GO
EXEC PopulateShowTable 
    @ShowName = 'Breaking Bad', 
    @Genre = 'Drama', 
    @ReleaseDate = '2008-01-20', 
    @Rating = 9.5;
CREATE TYPE ShowType AS TABLE (
    ShowName NVARCHAR(255),
    Genre NVARCHAR(100),
    ReleaseDate DATE,
    Rating DECIMAL(3, 1)
);
GO
CREATE PROCEDURE PopulateShowTableBulk
    @ShowList ShowType READONLY
AS
BEGIN
    -- Insert multiple records
    INSERT INTO Show (ShowName, Genre, ReleaseDate, Rating)
    SELECT ShowName, Genre, ReleaseDate, Rating
    FROM @ShowList;

    PRINT 'Bulk records inserted successfully.';
END;
GO