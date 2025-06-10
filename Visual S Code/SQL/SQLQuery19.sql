CREATE FUNCTION dbo.Game98(@quantity INT, @list_price int)
RETURNS DECIMAL
AS
BEGIN
	RETURN (@quantity *@list_price );
	END;

select dbo.Game98(12, 60)Amount;