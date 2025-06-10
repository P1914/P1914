-- Create the Student table if it does not exist
CREATE TABLE IF NOT EXISTS Student (
    StudentID INT PRIMARY KEY,
    FullName VARCHAR(255)
	NOT NULL,
    Sex CHAR(1)
	CHECK (Sex IN ('M', 'F')),
    DateOfBirth DATE NOT NULL
);

-- Create the stored procedure for inserting data
DELIMITER $$

CREATE PROCEDURE AddStudent(
    IN p_StudentID INT,
    IN p_FullName VARCHAR(255),
    IN p_Sex CHAR(1),
    IN p_DateOfBirth DATE
)
BEGIN
    -- Insert the data into the Student table
    INSERT INTO Student (StudentID, FullName, Sex, DateOfBirth)
    VALUES (p_StudentID, p_FullName, p_Sex, p_DateOfBirth);
END $$

DELIMITER ;