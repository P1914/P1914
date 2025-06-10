select StudentID,DAteOfBirth,datediff (YY,Dateofbirth,getdate()) as Age
From PheakPhalla123
select StudentID,DAteOfBirth,datediff (YY,Dateofbirth,getdate()) as Age
From PheakPhalla123
where datediff (YY,Dateofbirth,getdate()) >19;