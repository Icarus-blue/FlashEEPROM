--[[
    Este script debe leer el valor actual presente en el archivo.
    Ese valor se devuelve directamente con un return.
    Las siguientes funciones están disponibles para manipular el archivo:
    - size()
        Devuelve la cantidad de bytes en el archivo
    - rows()
        Devuelve la cantidad de filas en el archivo
    - read(row, cell, bytes = 1)
        Lee uno o más bytes del archivo y devuelve el resultado como número.
        Ejemplos:
            read(0x20, 2)
            read(0x40, 0, 3)
    - readreverse(row, cell, bytes)
        Esta función es igual a read excepto que considera que el byte menos
        significativo está primero.
        Ejemplos:
            readreverse(0x20, 2, 2)
            readreverse(0x40, 0, 3)
]]--

