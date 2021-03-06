--3.1--
SELECT EMP_NO, TRAB_COD
FROM EMPLEADOS
UNION
SELECT EMP_NO, TRAB_COD
FROM HISTORIAL_LABORAL;


--3.2--
SELECT EMP_NO, TRAB_COD, DPTO_COD
FROM EMPLEADOS
UNION
SELECT EMP_NO, TRAB_COD, DPTO_COD
FROM HISTORIAL_LABORAL
ORDER BY DPTO_COD;

--3.3--
SELECT EMP_NO, TRAB_COD
FROM EMPLEADOS
INTERSECT
SELECT EMP_NO, TRAB_COD
FROM HISTORIAL_LABORAL;

--3.5--
SELECT EMP_NO, TRAB_COD, TO_CHAR(SALARIO)
FROM EMPLEADOS
UNION
SELECT EMP_NO, TRAB_COD, 'SIN SALARIO'
FROM HISTORIAL_LABORAL;