--[[
    Este script debe leer los datos del archivo y luego mostrar el resultado
    en formato de tabla. Para ello las siguientes funciones están disponibles:
    - writetable(table, row, cell, value)
        Escribe una celda de la tabla de resultados.
        El parámetro table puede tener el valor 1 o 2 dependiendo de si se trata
        de la tabla de la izquierda(1) o la de la derecha(2).
        Debe notarse que la primera fila es el encabezado, por lo que solo se puede
        escribir en la celda 0.
    - writemeta(row, key, value)
        Escribe uno de los datos adicionales que se muestran debajo de las tablas.
        El valor row puede ir de 1 a 3 (correspondiente a cada fila disponible).
]]--

