SELECT name
FROM distrib
WHERE id_distrib in (42,62,63,64,65,66,67,68,69,71,88,89,90)
OR (LENGTH(name) - LENGTH(replace(name, 'y', '')) = 2)
OR (LENGTH(name) - LENGTH(replace(name, 'Y', '')) = 2)
LIMIT 2,5;
