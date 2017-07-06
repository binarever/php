LOAD DATA INFILE '/usr/share/dict/words' INTO TABLE example_myisam_dynamic(c);

LOAD DATA INFILE '/usr/share/dict/words' INTO TABLE example_myisam_fixed(c);

LOAD DATA INFILE '/usr/share/dict/words' INTO TABLE example_myisam_fixed2(c);

SELECT table_name,table_rows,row_format,data_length/1024 AS data, index_length/1024 AS indx
FROM INFORMATION_SCHEMA.TABLES
WHERE table_name LIKE 'example_myisam_%';