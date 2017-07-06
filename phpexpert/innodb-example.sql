CREATE TABLE example_innodb(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	c VARCHAR(100) NOT NULL)
ENGINE=InnoDB;

LOAD DATA INFILE '/usr/share/dict/words' INTO TABLE example_innodb(c);

SELECT table_name,table_rows,row_format,data_length/1024 AS data,index_length/1024 AS indx 
FROM  INFORMATION_SCHEMA.TABLES 
WHERE table_name LIKE 'example_%';