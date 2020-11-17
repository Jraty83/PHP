SELECT f.id_genre,g.name AS name_genre,f.id_distrib,d.name AS name_distrib,f.title AS title_film
FROM film f
LEFT JOIN genre g ON g.id_genre = f.id_genre
LEFT JOIN distrib d ON d.id_distrib = f.id_distrib
WHERE (f.id_genre BETWEEN 4 AND 8);
