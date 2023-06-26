writekm = math.floor(65535-(value /32))
a = writekm
writereverse(0xC80, 0, a , 2)

a1 = math.floor(a / 2^ 4)
a2 = a1 % 16
write(0xc80, 10, (a2 * (2 ^ 4)) + a1, 1)






writekm2 = (65535-((65535-writekm)*2))
b = writekm2
writereverse(0xC80, 2, b , 2)

writekm2 = (65535-((65535-writekm)*4))
c = writekm2
writereverse(0xC80, 4, c , 2)

writekm2 = (65535-((65535-writekm)*8))
d = writekm2
writereverse(0xC80, 6, d , 2)




