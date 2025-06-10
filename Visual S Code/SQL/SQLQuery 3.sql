create database DB242;
create table TblNew242
(
RoomID int primary key identity(1,1),
RoomName varchar(100) not null,
FloNum int null
);
use DB242;
Go
insert into TblNew242 values('DB242',2);
insert into TblNew242(RoomName) values('DB242');
select * from TblNew242

create Proc TestingPro
as
begin
select * from TblNew242
end;

execute TestingPro;