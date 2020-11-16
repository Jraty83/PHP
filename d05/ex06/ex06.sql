SELECT title,summary
FROM film
WHERE LOCATE('Vincent', summary)
ORDER BY id_film ASC;
