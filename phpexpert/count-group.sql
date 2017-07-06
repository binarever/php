SET SESSION sql_mode=ONLY_FULL_GROUP_BY;

SELECT country,COUNT(*) AS color_count
FROM flags
GROUP BY country;