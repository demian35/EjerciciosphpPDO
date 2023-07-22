DELIMITER $$
CREATE PROCEDURE obtenerNombrealumno()
BEGIN
	SELECT alumno as dato FROM basededatospracticapdo.alumnos;
END $$
DELIMITER ;
