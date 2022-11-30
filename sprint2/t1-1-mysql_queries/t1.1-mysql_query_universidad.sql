USE universidad;
-- 1. Si us plau, descàrrega la base de dades del fitxer schema_universidad.sql, visualitza el diagrama E-R en un editor i efectua les següents consultes:

-- 1.1. Retorna un llistat amb el primer cognom, segon cognom i el nom de tots els/les alumnes. El llistat haurà d'estar ordenat alfabèticament de menor a major pel primer cognom, segon cognom i nom.
SELECT nombre, apellido1, apellido2, fecha_nacimiento FROM persona WHERE tipo='alumno' ORDER BY apellido1, apellido2, nombre;
-- 1.2. Esbrina el nom i els dos cognoms dels/les alumnes que no han donat d'alta el seu número de telèfon en la base de dades.
SELECT nombre, apellido1, apellido2 FROM persona WHERE (tipo='alumno' AND telefono IS NULL) ORDER BY apellido1, apellido2, nombre;
-- 1.3. Retorna el llistat dels/les alumnes que van néixer en 1999.
SELECT nombre, apellido1, apellido2 FROM persona WHERE (tipo='alumno' AND fecha_nacimiento between '1999-01-01' AND '1999-12-31') ORDER BY apellido1, apellido2, nombre;
-- (para probar si incluye la fecha que se pone) 
SELECT nombre, apellido1, apellido2 FROM persona WHERE (tipo='alumno' AND fecha_nacimiento between '1999-02-11' AND '1999-05-24') ORDER BY apellido1, apellido2, nombre;
-- 1.4. Retorna el llistat de professors/es que no han donat d'alta el seu número de telèfon en la base de dades i a més el seu NIF acaba en K.
SELECT nombre, apellido1, apellido2 FROM persona WHERE (tipo='profesor' AND  telefono IS NULL AND SUBSTRING(nif,9,1)='K') ORDER BY apellido1, apellido2, nombre;
-- 1.5. Retorna el llistat de les assignatures que s'imparteixen en el primer quadrimestre, en el tercer curs del grau que té l'identificador 7.
SELECT nombre, cuatrimestre FROM asignatura  WHERE cuatrimestre=1 ORDER BY nombre;
-- 1.6. Retorna un llistat dels professors/es juntament amb el nom del departament al qual estan vinculats/des. El llistat ha de retornar quatre columnes, primer cognom, segon cognom, nom i nom del departament. El resultat estarà ordenat alfabèticament de menor a major pels cognoms i el nom.
SELECT pe.apellido1, pe.apellido2, pe.nombre, dp.nombre FROM persona pe INNER JOIN profesor pf ON pf.id_profesor = pe.id INNER JOIN departamento dp ON dp.id = pf.id_departamento ORDER BY pe.apellido1, pe.apellido2, pe.nombre;
-- 1.7. Retorna un llistat amb el nom de les assignatures, any d'inici i any de fi del curs escolar de l'alumne/a amb NIF 26902806M.
SELECT asi.nombre, ce.anyo_inicio, ce.anyo_fin
FROM persona pe INNER JOIN alumno_se_matricula_asignatura am ON am.id_alumno = pe.id INNER JOIN asignatura asi ON asi.id = am.id_asignatura INNER JOIN curso_escolar ce ON ce.id = am.id_curso_escolar WHERE pe.nif = '26902806M';
-- 1.8. Retorna un llistat amb el nom de tots els departaments que tenen professors/es que imparteixen alguna assignatura en el Grau en Enginyeria Informàtica (Pla 2015).
/*SELECT dp.nombre
FROM asignatura asi INNER JOIN profesor pr ON pr.id_profesor = asi.id_profesor
INNER JOIN departamento dp ON dp.id = pr.id_departamento 
WHERE asi.id_grado = 4;

SELECT dp.nombre
FROM departamento dp INNER JOIN profesor pr ON pr.id_departamento = dp.id 
INNER JOIN asignatura asi ON pr.id_profesor = asi.id_profesor
WHERE asi.id_profesor = 10;*/

/*FROM persona pe INNER JOIN profesor pr ON pr.id_profesor = pe.id
INNER JOIN departamento dp ON dp.id = pr.id_departamento
INNER JOIN asignatura asi ON asi.id_profesor = pr.id_profesor
-- INNER JOIN grado gr ON gr.id = asi.id_grado
WHERE asi.id_grado = 4;*/

-- 1.9. Retorna un llistat amb tots els/les alumnes que s'han matriculat en alguna assignatura durant el curs escolar 2018/2019.
SELECT DISTINCT pe.nombre, pe.apellido1, pe.apellido2 FROM persona pe INNER JOIN alumno_se_matricula_asignatura am ON am.id_alumno = pe.id WHERE am.id_curso_escolar = 5;

-- 2. Resol les 6 següents consultes utilitzant les clàusules LEFT JOIN i RIGHT JOIN.

-- 2.1. Retorna un llistat amb els noms de tots els professors/es i els departaments que tenen vinculats/des. 
-- El llistat també ha de mostrar aquells professors/es que no tenen cap departament associat. 
-- El llistat ha de retornar quatre columnes, nom del departament, primer cognom, segon cognom i nom del professor/a. 
-- El resultat estarà ordenat alfabèticament de menor a major pel nom del departament, cognoms i el nom.

SELECT dp.nombre, pe.apellido1, pe.apellido2, pe.nombre
FROM profesor pr LEFT JOIN departamento dp ON pr.id_profesor = dp.id
ORDER BY dp.nombre, pe.apellido1, pe.apellido2, pe.nombre;

-- 2.2. Retorna un llistat amb els professors/es que no estan associats a un departament.

-- 2.3. Retorna un llistat amb els departaments que no tenen professors/es associats.

-- 2.4. Retorna un llistat amb els professors/es que no imparteixen cap assignatura.

-- 2.5. Retorna un llistat amb les assignatures que no tenen un professor/a assignat.

-- 2.6. Retorna un llistat amb tots els departaments que no han impartit assignatures en cap curs escolar.


-- 3. Consultes resum:

-- 3.1. Retorna el nombre total d'alumnes que hi ha.

-- 3.2. Calcula quants/es alumnes van néixer en 1999.

-- 3.3. Calcula quants/es professors/es hi ha en cada departament. El resultat només ha de mostrar dues columnes, una amb el nom del departament i una altra amb el nombre de professors/es que hi ha en aquest departament. El resultat només ha d'incloure els departaments que tenen professors/es associats i haurà d'estar ordenat de major a menor pel nombre de professors/es.

-- 3.4. Retorna un llistat amb tots els departaments i el nombre de professors/es que hi ha en cadascun d'ells. Té en compte que poden existir departaments que no tenen professors/es associats/des. Aquests departaments també han d'aparèixer en el llistat.

-- 3.5. Retorna un llistat amb el nom de tots els graus existents en la base de dades i el nombre d'assignatures que té cadascun. Té en compte que poden existir graus que no tenen assignatures associades. Aquests graus també han d'aparèixer en el llistat. El resultat haurà d'estar ordenat de major a menor pel nombre d'assignatures.

-- 3.6. Retorna un llistat amb el nom de tots els graus existents en la base de dades i el nombre d'assignatures que té cadascun, dels graus que tinguin més de 40 assignatures associades.

-- 3.7. Retorna un llistat que mostri el nom dels graus i la suma del nombre total de crèdits que hi ha per a cada tipus d'assignatura. El resultat ha de tenir tres columnes: nom del grau, tipus d'assignatura i la suma dels crèdits de totes les assignatures que hi ha d'aquest tipus.

-- 3.8. Retorna un llistat que mostri quants/es alumnes s'han matriculat d'alguna assignatura en cadascun dels cursos escolars. El resultat haurà de mostrar dues columnes, una columna amb l'any d'inici del curs escolar i una altra amb el nombre d'alumnes matriculats/des.

-- 3.9. Retorna un llistat amb el nombre d'assignatures que imparteix cada professor/a. El llistat ha de tenir en compte aquells professors/es que no imparteixen cap assignatura. El resultat mostrarà cinc columnes: id, nom, primer cognom, segon cognom i nombre d'assignatures. El resultat estarà ordenat de major a menor pel nombre d'assignatures.

-- 3.10. Retorna totes les dades de l'alumne més jove.

-- 3.11. Retorna un llistat amb els professors/es que tenen un departament associat i que no imparteixen cap assignatura.
