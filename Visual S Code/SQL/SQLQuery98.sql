CREATE FUNCTION dbo.Game12(@quantity INT, @list_price DECIMAL(10, 2)
)
RETURNS DECIMAL(10,2)
AS
BEGIN
	RETURN (@quantity *@list_price );
	END;

select dbo.Game12(12, 60)Amount;
select dbo.Game123(30, 20)Namla;