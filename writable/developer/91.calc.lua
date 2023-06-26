km1 = value *10
k1 = read(0x08, 0, 1)
k2 = read(0x09, 0, 1)
k3 = read(0x0A, 0, 1)
km2 = k1 + k2 + k3
a= 0xFF - km2
b= a + 1
writereverse(0x00, 8, km1, 3)
writereverse(0x00, 11, b, 1)
