km1 = value /16 
km2 = (65535-(value/16))
writereverse(0X1A0, 4, km1 , 2)
writereverse(0X1A0, 6, km2 , 2)
writereverse(0X1A0, 8, km1 , 2)
writereverse(0X1A0, 10, km2 , 2)
writereverse(0X1A0, 12, km1 , 2)
writereverse(0X1A0, 14, km2 , 2)
writereverse(0X1B0, 0, km1 , 2)
writereverse(0X1B0, 2, km2 , 2)
writereverse(0X1B0, 4, km1 , 2)
writereverse(0X1B0, 6, km2 , 2)
writereverse(0X1B0, 8, km1 , 2)
writereverse(0X1B0, 10, km2 , 2)
writereverse(0X1B0, 12, km1 , 2)
writereverse(0X1B0, 14, km2 , 2)
writereverse(0X1C0, 0, km1 , 2)
writereverse(0X1C0, 2, km2 , 2)