--[[
    Este script debe escribir el valor elegido en el archivo.
    El valor elegido está disponible en la variable value.
    Además de las funciones de lectura, están disponibles estas funciones de escritura:
    - write(row, cell, value, bytes = nil)
        Escribe uno o más bytes en el archivo. El valor debe ser un número.
        Si el parámetro bytes es nulo (nil), se escriben tantos bytes como sea necesario
        para representar el número pasado en value.
        Si el parámetro bytes es un entero positivo, se escribe solo la cantidad
        de bytes especificada y se descarta el resto.
        Ejemplos:
            write(0x20, 2, 0xFA)
            write(0x40, 0, 0xFFAA, 1)
    - writereverse(row, cell, value, bytes = nil)
        Esta función es igual a write excepto que se escribe el byte menos significativo
        primero.
        Ejemplos:
            writereverse(0x20, 2, 0xFAEE)
            write(0x40, 0, 0xFFAA, 1)
]]--

