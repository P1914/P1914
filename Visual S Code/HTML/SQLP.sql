-- Create the Student table if it doesn't exist
CREATE TABLE IF NOT EXISTS Student (
    StudentID INT PRIMARY KEY,
    FullName NVARCHAR(255) NOT NULL,
    Sex CHAR(1) CHECK (Sex IN ('M', 'F')),
    DateOfBirth DATE NOT NULL
);

-- Create the stored procedure to insert data
DELIMITER $$

CREATE PROCEDURE InsertStudent(
    IN p_StudentID INT,
    IN p_FullName NVARCHAR(255),
    IN p_Sex CHAR(1),
    IN p_DateOfBirth DATE
)
BEGIN
    -- Insert the provided data into the Student table
    INSERT INTO Student (StudentID, FullName, Sex, DateOfBirth)
    VALUES (p_StudentID, p_FullName, p_Sex, p_DateOfBirth);
END $$

DELIMITER ;

CALL InsertStudent(1, 'John Doe', 'M', '2000-01-01');
CALL InsertStudent(2, 'Jane Smith', 'F', '2001-02-15');