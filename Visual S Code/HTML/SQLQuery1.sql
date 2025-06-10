create proc ProDel(@ as varchar(50))
as
begin
delete from Phalla123
where ItemName= @DEl
end;


exec ProDel 'spri'