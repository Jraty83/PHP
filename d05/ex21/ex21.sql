SELECT MD5(CONCAT(replace(phone_number, '7', '9'),42)) AS ft5
FROM distrib
WHERE id_distrib = 84;
