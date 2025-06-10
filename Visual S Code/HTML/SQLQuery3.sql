USE master
Create database Coffeeshop
use Coffeeshop
Create table TblOrder(
OrderID int,
BrandName varchar(50),
Price varchar,
Quantity int,
Date datetime,

);
insert into TblOrder
values (1,'Americano','2','1','01.08.2024');

select * From TblOrder