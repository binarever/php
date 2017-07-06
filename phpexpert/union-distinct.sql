SELECT f.country,'Dark'
FROM flags f
INNER JOIN colors c USING (color)
WHERE c.is_dark='yes'
UNION DISTINCT
SELECT f.country,'Primary'
FROM flags f
INNER JOIN colors c USING (color)
WHERE c.is_primary='yes';