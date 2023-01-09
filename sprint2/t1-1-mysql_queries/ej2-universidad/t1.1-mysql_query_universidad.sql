USE universidad;
-- 1. Si us plau, descàrrega la base de dades del fitxer schema_universidad.sql, visualitza el diagrama E-R en un editor i efectua les següents consultes:

-- 1.1. Retorna un llistat amb el primer cognom, segon cognom i el nom de tots els/les alumnes. El llistat haurà d'estar ordenat alfabèticament de menor a major pel primer cognom, segon cognom i nom.
SELECT nombre, apellido1, apellido2, fecha_nacimiento FROM persona WHERE tipo='alumno' ORDER BY apellido1, apellido2, nombre;
-- 1.2. Esbrina el nom i els dos cognoms dels/les alumnes que no han donat d'alta el seu número de telèfon en la base de dades.
SELECT nombre, apellido1, apellido2 FROM persona WHERE (tipo='alumno' AND telefono IS NULL) ORDER BY apellido1, apellido2, nombre;
-- 1.3. Retorna el llistat dels/les alumnes que van néixer en 1999.
SELECT nombre, apellido1, apellido2 FROM persona WHERE (tipo='alumno' AND fecha_nacimiento between '1999-01-01' AND '1999-12-31') ORDER BY apellido1, apellido2, nombre;
/* (para probar si incluye la fecha que se pone) 
SELECT nombre, apellido1, apellido2 FROM persona WHERE (tipo='alumno' AND fecha_nacimiento between '1999-02-11' AND '1999-05-24') ORDER BY apellido1, apellido2, nombre; */
-- 1.4. Retorna el llistat de professors/es que no han donat d'alta el seu número de telèfon en la base de dades i a més el seu NIF acaba en K.
SELECT nombre, apellido1, apellido2 FROM persona WHERE (tipo='profesor' AND  telefono IS NULL AND SUBSTRING(nif,9,1)='K') ORDER BY apellido1, apellido2, nombre;
-- 1.5. Retorna el llistat de les assignatures que s'imparteixen en el primer quadrimestre, en el tercer curs del grau que té l'identificador 7.
SELECT nombre, cuatrimestre, id_grado FROM asignatura  WHERE (cuatrimestre=1 AND id_grado=7) ORDER BY nombre;
-- 1.6. Retorna un llistat dels professors/es juntament amb el nom del departament al qual estan vinculats/des. El llistat ha de retornar quatre columnes, primer cognom, segon cognom, nom i nom del departament. El resultat estarà ordenat alfabèticament de menor a major pels cognoms i el nom.
SELECT pe.apellido1, pe.apellido2, pe.nombre, dp.nombre FROM persona pe INNER JOIN profesor pf ON pf.id_profesor = pe.id INNER JOIN departamento dp ON dp.id = pf.id_departamento ORDER BY pe.apellido1, pe.apellido2, pe.nombre;
-- 1.7. Retorna un llistat amb el nom de les assignatures, any d'inici i any de fi del curs escolar de l'alumne/a amb NIF 26902806M.
SELECT asi.nombre, ce.anyo_inicio, ce.anyo_fin FROM persona pe INNER JOIN alumno_se_matricula_asignatura am ON am.id_alumno = pe.id INNER JOIN asignatura asi ON asi.id = am.id_asignatura INNER JOIN curso_escolar ce ON ce.id = am.id_curso_escolar WHERE pe.nif = '26902806M';
-- 1.8. Retorna un llistat amb el nom de tots els departaments que tenen professors/es que imparteixen alguna assignatura en el Grau en Enginyeria Informàtica (Pla 2015).
SELECT DISTINCT dp.nombre 'Nombre Departamento' FROM departamento dp INNER JOIN profesor pr ON dp.id = pr.id_departamento INNER JOIN asignatura asi ON pr.id_profesor = asi.id_profesor INNER JOIN grado gr ON asi.id_grado = gr.id;
-- 1.9. Retorna un llistat amb tots els/les alumnes que s'han matriculat en alguna assignatura durant el curs escolar 2018/2019.
SELECT DISTINCT pe.nombre, pe.apellido1, pe.apellido2 FROM persona pe INNER JOIN alumno_se_matricula_asignatura am ON am.id_alumno = pe.id WHERE am.id_curso_escolar = 5;

-- 2. Resol les 6 següents consultes utilitzant les clàusules LEFT JOIN i RIGHT JOIN.

-- 2.1. Retorna un llistat amb els noms de tots els professors/es i els departaments que tenen vinculats/des. 
-- El llistat també ha de mostrar aquells professors/es que no tenen cap departament associat. 
-- El llistat ha de retornar quatre columnes, nom del departament, primer cognom, segon cognom i nom del professor/a. 
-- El resultat estarà ordenat alfabèticament de menor a major pel nom del departament, cognoms i el nom.
-- ¡ERRONEA! -- SELECT dp.nombre, pe.apellido1, pe.apellido2, pe.nombre, pr.id_departamento FROM profesor pr LEFT JOIN departamento dp ON pr.id_profesor = dp.id INNER JOIN persona pe ON pr.id_profesor = pe.id ORDER BY dp.nombre, pe.apellido1, pe.apellido2, pe.nombre;
SELECT dp.nombre, pe.apellido1, pe.apellido2, pe.nombre FROM persona pe LEFT JOIN profesor pr ON pe.id = pr.id_profesor LEFT JOIN departamento dp ON pr.id_departamento = dp.id WHERE pe.tipo = 'profesor' ORDER BY dp.nombre, pe.apellido1, pe.apellido2, pe.nombre;
-- 2.2. Retorna un llistat amb els professors/es que no estan associats a un departament.
-- ¡ERRONEA! pe.apellido1, pe.apellido2, pe.nombre FROM profesor pr LEFT JOIN departamento dp ON pr.id_profesor = dp.id INNER JOIN persona pe ON pr.id_profesor = pe.id WHERE dp.nombre IS NULL ORDER BY dp.nombre, pe.apellido1, pe.apellido2, pe.nombre;
SELECT dp.nombre, pe.apellido1, pe.apellido2, pe.nombre FROM persona pe LEFT JOIN profesor pr ON pe.id = pr.id_profesor LEFT JOIN departamento dp ON pr.id_departamento = dp.id WHERE (pe.tipo = 'profesor' AND  dp.nombre IS NULL)  ORDER BY dp.nombre, pe.apellido1, pe.apellido2, pe.nombre;
-- 2.3. Retorna un llistat amb els departaments que no tenen professors/es associats.
SELECT dp.nombre, pr.id_profesor FROM departamento dp LEFT JOIN profesor pr ON dp.id = pr.id_departamento WHERE pr.id_profesor IS NULL ORDER BY dp.nombre;
-- 2.4. Retorna un llistat amb els professors/es que no imparteixen cap assignatura.
-- ¡ERRONEA! SELECT pe.nombre, pe.apellido1, pe.apellido2 FROM profesor pr left JOIN asignatura asi ON pr.id_profesor = asi.id_profesor INNER JOIN persona pe ON pr.id_profesor = pe.id WHERE asi.nombre IS NULL ORDER BY pe.apellido1, pe.apellido2, pe.nombre;
SELECT pe.nombre, pe.apellido1, pe.apellido2, asi.id FROM persona pe left JOIN asignatura asi ON pe.id = asi.id_profesor WHERE (pe.tipo = 'profesor' AND asi.nombre IS NULL) ORDER BY pe.apellido1, pe.apellido2, pe.nombre;
-- 2.5. Retorna un llistat amb les assignatures que no tenen un professor/a assignat.
SELECT asi.nombre FROM asignatura asi LEFT JOIN profesor pr  ON asi.id_profesor = pr.id_profesor WHERE pr.id_profesor IS NULL ORDER BY asi.nombre;
-- 2.6. Retorna un llistat amb tots els departaments que no han impartit assignatures en cap curs escolar.
-- ¡ERRONEA! SELECT DISTINCT dp.nombre, asi FROM asignatura asi RIGHT JOIN profesor pr ON asi.id_profesor = pr.id_profesor INNER JOIN departamento dp ON pr.id_departamento = dp.id WHERE asi.nombre IS NULL ORDER BY dp.nombre;
SELECT DISTINCT dp.nombre FROM departamento dp left JOIN profesor pr ON dp.id = pr.id_departamento left JOIN asignatura asi ON pr.id_profesor = asi.id_profesor WHERE asi.nombre IS NULL ORDER BY dp.nombre;
			-- se visualiza lo que se recoge poniendo delante en el SELECT: asi.nombre, pr.id_profesor, pr.id_departamento

-- 3. Consultes resum:
-- 3.1. Retorna el nombre total d'alumnes que hi ha.
SELECT COUNT(id) 'Total alumnos' FROM persona WHERE tipo = 'alumno';
-- 3.2. Calcula quants/es alumnes van néixer en 1999.
-- ¡ERRONEA! SELECT COUNT(id) 'Total alumnos' FROM persona WHERE tipo = 'alumno';
SELECT COUNT(id) 'Total alumnos' FROM persona WHERE  (tipo='alumno' AND fecha_nacimiento between '1999-01-01' AND '1999-12-31') ;
-- 3.3. Calcula quants/es professors/es hi ha en cada departament. 
-- El resultat només ha de mostrar dues columnes, una amb el nom del departament i una altra amb el nombre de professors/es que hi ha en aquest departament. 
-- El resultat només ha d'incloure els departaments que tenen professors/es associats i haurà d'estar ordenat de major a menor pel nombre de professors/es.
SELECT dp.nombre, COUNT(*) 'num profesores' FROM departamento dp INNER JOIN profesor pr ON dp.id = pr.id_departamento GROUP BY pr.id_departamento ORDER BY COUNT(*);
-- 3.4. Retorna un llistat amb tots els departaments i el nombre de professors/es que hi ha en cadascun d'ells. 
-- Té en compte que poden existir departaments que no tenen professors/es associats/des. 
-- Aquests departaments també han d'aparèixer en el llistat.
SELECT dp.nombre, COUNT(pr.id_departamento) 'num profesores' FROM departamento dp LEFT JOIN profesor pr ON dp.id = pr.id_departamento  GROUP BY dp.id ORDER BY COUNT(pr.id_departamento);
-- 3.5. Retorna un llistat amb el nom de tots els graus existents en la base de dades i el nombre d'assignatures que té cadascun. 
-- Té en compte que poden existir graus que no tenen assignatures associades. 
-- Aquests graus també han d'aparèixer en el llistat. 
-- El resultat haurà d'estar ordenat de major a menor pel nombre d'assignatures.
SELECT gr.nombre, COUNT(asi.nombre) 'Num. Asignaturas' FROM grado gr LEFT JOIN asignatura asi ON gr.id = asi.id_grado GROUP BY gr.id ORDER BY COUNT(asi.nombre) DESC;
-- 3.6. Retorna un llistat amb el nom de tots els graus existents en la base de dades i el nombre d'assignatures que té cadascun, dels graus que tinguin més de 40 assignatures associades.
SELECT gr.nombre, COUNT(asi.nombre) FROM grado gr LEFT JOIN asignatura asi ON gr.id = asi.id_grado GROUP BY gr.id HAVING COUNT(asi.nombre) > 50 ORDER BY COUNT(asi.nombre) DESC;
-- 3.7. Retorna un llistat que mostri el nom dels graus i la suma del nombre total de crèdits que hi ha per a cada tipus d'assignatura. El resultat ha de tenir tres columnes: nom del grau, tipus d'assignatura i la suma dels crèdits de totes les assignatures que hi ha d'aquest tipus.

-- 3.8. Retorna un llistat que mostri quants/es alumnes s'han matriculat d'alguna assignatura en cadascun dels cursos escolars. El resultat haurà de mostrar dues columnes, una columna amb l'any d'inici del curs escolar i una altra amb el nombre d'alumnes matriculats/des.

-- 3.9. Retorna un llistat amb el nombre d'assignatures que imparteix cada professor/a. 
-- El llistat ha de tenir en compte aquells professors/es que no imparteixen cap assignatura. 
-- El resultat mostrarà cinc columnes: id, nom, primer cognom, segon cognom i nombre d'assignatures. El resultat estarà ordenat de major a menor pel nombre d'assignatures.


-- 3.10. Retorna totes les dades de l'alumne més jove.
SELECT id, nif, nombre, apellido1, apellido2, ciudad, direccion, telefono, fecha_nacimiento, sexo, tipo FROM persona WHERE fecha_nacimiento = (SELECT MIN(fecha_nacimiento) FROM persona WHERE tipo = 'Alumno'); 

-- 3.11. Retorna un llistat amb els professors/es que tenen un departament associat i que no imparteixen cap assignatura.
