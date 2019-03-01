--2--
SELECT E.CODIGOEMPLEADO AS "CODIGO DEL EMPLEADO", COUNT(C.CODIGOCLIENTE) AS "CLIENTES QUE ATIENDE"
FROM EMPLEADOS E, CLIENTES C
WHERE E.CODIGOEMPLEADO = C.CODIGOEMPLEADOREPVENTAS (+)
GROUP BY E.CODIGOEMPLEADO
ORDER BY E.CODIGOEMPLEADO;

--3--
SELECT C.NOMBRECLIENTE
FROM CLIENTES C, PEDIDOS P
WHERE C.CODIGOCLIENTE = P.CODIGOCLIENTE
AND P.FECHAPEDIDO BETWEEN TO_DATE('2008/01/01','YY/MM/DD') AND TO_DATE ('2008/12/31','YY/MM/DD')
--AND EXTRACT(YEAR FROM P.FECHAPEDIDO)=2008
GROUP BY C.NOMBRECLIENTE;
--NO USAR --> LIKE '%2008%'

SELECT * FROM PEDIDOS;

--4--
SELECT C.NOMBRECLIENTE , O.CIUDAD AS "LOCALIDAD OFICINA"
FROM CLIENTES C, OFICINAS O
WHERE C.CIUDAD = O.CIUDAD;
