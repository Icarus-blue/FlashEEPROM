const bytes = new Uint8Array([0x00, 0x00]);
const decoder = new TextDecoder('iso-8859-1');
const charString = decoder.decode(bytes);
console.log(charString);