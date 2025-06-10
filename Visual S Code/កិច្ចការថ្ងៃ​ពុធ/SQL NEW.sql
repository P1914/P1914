SELECT Class.TeacherID,Teacher.TeacherID,Study.StudentID,Student.StudentID,Subject.SubjectID
FROM Study
JOIN Teacher 
ON 
Teacher.FirstName=Teacher.TeacherID
JOIN Student 
ON Student.StudentID=Student.StudentID
JOIN Class 
ON Teacher.LastName=Teacher.TeacherID
JOIN Subject
ON Subject.SubjectID=Subject.SubjectID;