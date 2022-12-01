USE tienda;
-- 1. Llista el nom de tots els productes que hi ha en la taula "producto".
SELECT nombre FROM producto ORDER BY nombre ASC;
-- 2. Llista els noms i els preus de tots els productes de la taula "producto".
SELECT nombre, codigo FROM producto ORDER BY nombre ASC;
-- 3. Llista totes les columnes de la taula "producto".
SELECT * FROM producto;
-- 4. Llista el nom dels "productos", el preu en euros i el preu en dòlars nord-americans (USD).
SELECT nombre, CONCAT(precio,' €') 'precio euro', CONCAT(ROUND((precio*1.04),2),' $') 'precio dolar' FROM producto ORDER BY nombre ASC;
-- 5. Llista el nom dels "productos", el preu en euros i el preu en dòlars nord-americans. Utilitza els següents àlies per a les columnes: nom de "producto", euros, dòlars nord-americans.
SELECT nombre 'nom de "producto"', CONCAT(precio,' €') 'euros', CONCAT(ROUND((precio*1.04),2),' $') 'dòlars nord-americans' FROM producto ORDER BY nombre ASC;
-- 6. Llista els noms i els preus de tots els productes de la taula "producto", convertint els noms a majúscula.
SELECT UPPER(nombre) 'nombre', precio FROM producto ORDER BY nombre ASC;
-- 7. Llista els noms i els preus de tots els productes de la taula "producto", convertint els noms a minúscula.
SELECT LOWER(nombre) 'nombre', precio FROM producto ORDER BY nombre ASC;
-- 8. Llista el nom de tots els fabricants en una columna, i en una altra columna obtingui en majúscules els dos primers caràcters del nom del fabricant.
SELECT nombre, UPPER(SUBSTRING(nombre, 1 , 2)) 'Código' FROM fabricante ORDER BY nombre ASC;
-- 9. Llista els noms i els preus de tots els productes de la taula "producto", arrodonint el valor del preu.
SELECT nombre, ROUND(precio,2) 'precio' FROM producto ORDER BY nombre ASC;
-- 10. Llista els noms i els preus de tots els productes de la taula "producto", truncant el valor del preu per a mostrar-lo sense cap xifra decimal.
SELECT nombre, ROUND(precio,0) 'precio' FROM producto ORDER BY nombre ASC;
-- 11. Llista el codi dels fabricants que tenen productes en la taula "producto".
select DISTINCT codigo_fabricante FROM producto ORDER BY codigo_fabricante ASC; 
-- 12. Llista el codi dels fabricants que tenen productes en la taula "producto", eliminant els codis que apareixen repetits.
select DISTINCT codigo_fabricante FROM producto ORDER BY codigo_fabricante ASC; 
-- 13. Llista els noms dels fabricants ordenats de manera ascendent.
select nombre FROM fabricante ORDER BY nombre ASC; 
-- 14. Llista els noms dels fabricants ordenats de manera descendent.
select nombre FROM fabricante ORDER BY nombre DESC;  
-- 15. Llista els noms dels productes ordenats, en primer lloc, pel nom de manera ascendent i, en segon lloc, pel preu de manera descendent.
SELECT nombre FROM producto ORDER BY nombre ASC, precio DESC;
-- 16. Retorna una llista amb les 5 primeres files de la taula "fabricante".
SELECT codigo, nombre FROM fabricante ORDER BY codigo ASC LIMIT 5;
-- 17. Retorna una llista amb 2 files a partir de la quarta fila de la taula "fabricante". La quarta fila també s'ha d'incloure en la resposta.
SELECT codigo, nombre FROM fabricante WHERE codigo between 4 AND 5;
-- 18. Llista el nom i el preu del producte més barat. (Utilitza solament les clàusules ORDER BY i LIMIT). NOTA: Aquí no podries usar MIN(preu), necessitaries GROUP BY.
SELECT nombre, precio FROM producto ORDER BY precio LIMIT 1;
-- 19. Llista el nom i el preu del producte més car. (Fes servir solament les clàusules ORDER BY i LIMIT). NOTA: Aquí no podries usar MAX(preu), necessitaries GROUP BY.
SELECT nombre, precio FROM producto ORDER BY precio DESC LIMIt 1;
-- 20. Llista el nom de tots els productes del fabricant el codi de fabricant del qual és igual a 2.
SELECT nombre FROM producto WHERE codigo_fabricante = 2 ORDER BY precio DESC LIMIt 1;
-- 21. Retorna una llista amb el nom del producte, preu i nom de fabricant de tots els productes de la base de dades.
SELECT pr.nombre 'Nombre producto' , CONCAT(pr.precio, ' €') 'Precio', fr.nombre 'Nombre fabricante' FROM producto pr INNER JOIN fabricante fr ON pr.codigo_fabricante = fr.codigo;
-- 22. Retorna una llista amb el nom del producte, preu i nom de fabricant de tots els productes de la base de dades. Ordena el resultat pel nom del fabricant, per ordre alfabètic.
SELECT pr.nombre 'Nombre producto' , CONCAT(pr.precio, ' €') 'Precio', fr.nombre 'Nombre fabricante' FROM producto pr INNER JOIN fabricante fr ON pr.codigo_fabricante = fr.codigo ORDER BY fr.nombre;
-- 23. Retorna una llista amb el codi del producte, nom del producte, codi del fabricant i nom del fabricant, de tots els productes de la base de dades.
SELECT pr.codigo 'Código producto', pr.nombre 'Nombre producto',  fr.codigo 'Código fabricante', fr.nombre 'Nombre fabricante' FROM producto pr INNER JOIN fabricante fr ON pr.codigo_fabricante = fr.codigo ORDER BY pr.codigo;
-- 24. Retorna el nom del producte, el seu preu i el nom del seu fabricant, del producte més barat.
SELECT pr.nombre 'Nombre producto' , CONCAT(pr.precio, ' €') 'Precio', fr.nombre 'Nombre fabricante' FROM producto pr INNER JOIN fabricante fr ON pr.codigo_fabricante = fr.codigo ORDER BY pr.precio LIMIT 1;
-- 25. Retorna el nom del producte, el seu preu i el nom del seu fabricant, del producte més car.
SELECT pr.nombre 'Nombre producto' , CONCAT(pr.precio, ' €') 'Precio', fr.nombre 'Nombre fabricante' FROM producto pr INNER JOIN fabricante fr ON pr.codigo_fabricante = fr.codigo ORDER BY pr.precio DESC LIMIT 1;
-- 26. Retorna una llista de tots els productes del fabricant Lenovo.
SELECT pr.nombre 'Productos de Lenovo' FROM producto pr INNER JOIN fabricante fr ON pr.codigo_fabricante = fr.codigo WHERE fr.nombre = 'Lenovo' ORDER BY pr.nombre;
-- 27. Retorna una llista de tots els productes del fabricant Crucial que tinguin un preu major que 200 €.
SELECT pr.nombre 'Productos de Crucial > 200 €' FROM producto pr INNER JOIN fabricante fr ON pr.codigo_fabricante = fr.codigo WHERE fr.nombre = 'Lenovo' AND pr.precio > 200 ORDER BY pr.nombre;
-- 28. Retorna una llista amb tots els productes dels fabricants Asus, Hewlett-Packard i Seagate. Sense utilitzar l'operador IN.
SELECT pr.nombre 'Productos' FROM producto pr INNER JOIN fabricante fr ON pr.codigo_fabricante = fr.codigo WHERE fr.nombre = 'Asus' OR fr.nombre = 'Hewlett-Packard' OR fr.nombre = 'Seagate' ORDER BY pr.nombre;
-- 29. Retorna un llistat amb tots els productes dels fabricants Asus, Hewlett-Packard i Seagate. Usant l'operador IN.
SELECT pr.nombre 'Productos' FROM producto pr INNER JOIN fabricante fr ON pr.codigo_fabricante = fr.codigo WHERE fr.nombre IN ('Asus','Hewlett-Packard','Seagate') ORDER BY pr.nombre;
-- 30. Retorna un llistat amb el nom i el preu de tots els productes dels fabricants el nom dels quals acabi per la vocal e.
SELECT pr.nombre, pr.precio FROM producto pr INNER JOIN fabricante fr ON pr.codigo_fabricante = fr.codigo WHERE RIGHT(fr.nombre , 1) = 'E' ORDER BY pr.nombre;
SELECT pr.nombre, pr.precio FROM producto pr INNER JOIN fabricante fr ON pr.codigo_fabricante = fr.codigo WHERE fr.nombre LIKE '%e' ORDER BY pr.nombre;
-- 31. Retorna un llistat amb el nom i el preu de tots els productes dels fabricants dels quals contingui el caràcter w en el seu nom.
SELECT pr.nombre, pr.precio FROM producto pr INNER JOIN fabricante fr ON pr.codigo_fabricante = fr.codigo WHERE fr.nombre LIKE '%W%' ORDER BY pr.nombre;
-- 32. Retorna un llistat amb el nom de producte, preu i nom de fabricant, de tots els productes que tinguin un preu major o igual a 180 €. Ordena el resultat, en primer lloc, pel preu (en ordre descendent) i, en segon lloc, pel nom (en ordre ascendent).
SELECT pr.nombre 'Nombre producto', pr.precio, fr.nombre 'Nombre fabricante' FROM producto pr INNER JOIN fabricante fr ON pr.codigo_fabricante = fr.codigo WHERE pr.precio >= 180 ORDER BY pr.precio DESC, pr.nombre;
-- 33. Retorna un llistat amb el codi i el nom de fabricant, solament d'aquells fabricants que tenen productes associats en la base de dades.
SELECT DISTINCT fr.codigo, fr.nombre FROM fabricante fr RIGHT JOIN producto pr ON fr.codigo = pr.codigo_fabricante;
-- 34. Retorna un llistat de tots els fabricants que existeixen en la base de dades, juntament amb els productes que té cadascun d'ells. El llistat haurà de mostrar també aquells fabricants que no tenen productes associats.
SELECT DISTINCT fr.nombre, pr.nombre FROM fabricante fr LEFT JOIN producto pr ON fr.codigo = pr.codigo_fabricante;
-- 35. Retorna un llistat on només apareguin aquells fabricants que no tenen cap producte associat.
SELECT DISTINCT fr.nombre FROM fabricante fr LEFT JOIN producto pr ON fr.codigo = pr.codigo_fabricante WHERE pr.nombre IS NULL;
-- 36. Retorna tots els productes del fabricant Lenovo. (Sense utilitzar INNER JOIN).
SELECT pr.nombre FROM producto pr WHERE pr.codigo_fabricante IN (SELECT fr.codigo FROM fabricante fr WHERE fr.nombre = 'Lenovo') ORDER BY pr.nombre;
-- 37. Retorna totes les dades dels productes que tenen el mateix preu que el producte més car del fabricant Lenovo. (Sense fer servir INNER JOIN).
/* SELECT pr.precio FROM producto pr WHERE pr.codigo_fabricante IN (SELECT fr.codigo FROM fabricante fr WHERE fr.nombre = 'Lenovo') ORDER BY pr.precio DESC LIMIT 1; */
SELECT pr.nombre FROM producto pr WHERE pr.precio > (SELECT pr.precio FROM producto pr WHERE pr.codigo_fabricante IN (SELECT fr.codigo FROM fabricante fr WHERE fr.nombre = 'Lenovo') ORDER BY pr.precio DESC LIMIT 1);
-- 38. Llista el nom del producte més car del fabricant Lenovo.
SELECT pr.nombre 'Nombre producto' FROM producto pr INNER JOIN fabricante fr ON pr.codigo_fabricante = fr.codigo WHERE fr.nombre = 'Lenovo' ORDER BY pr.precio DESC LIMIT 1;
-- 39. Llista el nom del producte més barat del fabricant Hewlett-Packard.
SELECT pr.nombre 'Nombre producto' FROM producto pr INNER JOIN fabricante fr ON pr.codigo_fabricante = fr.codigo WHERE fr.nombre = 'Hewlett-Packard' ORDER BY pr.precio LIMIT 1;
-- 40. Retorna tots els productes de la base de dades que tenen un preu major o igual al producte més car del fabricant Lenovo.
SELECT pr.nombre 'Nombre producto', pr.precio FROM producto pr INNER JOIN fabricante fr ON pr.codigo_fabricante = fr.codigo WHERE pr.precio >= (SELECT pr.nombre FROM producto pr INNER JOIN fabricante fr ON pr.codigo_fabricante = fr.codigo WHERE fr.nombre = 'Lenovo' ORDER BY pr.precio DESC LIMIT 1);
-- 41. Llesta tots els productes del fabricant Asus que tenen un preu superior al preu mitjà de tots els seus productes.
/* SELECT AVG(pr.precio) FROM producto pr INNER JOIN fabricante fr ON pr.codigo_fabricante = fr.codigo WHERE fr.nombre = 'Asus';*/
SELECT pr.nombre FROM producto pr INNER JOIN fabricante fr ON pr.codigo_fabricante = fr.codigo WHERE fr.nombre = 'Asus' AND pr.precio > (SELECT AVG(pr.precio) FROM producto pr inner JOIN fabricante fr ON pr.codigo_fabricante = fr.codigo WHERE fr.nombre = 'Asus');
