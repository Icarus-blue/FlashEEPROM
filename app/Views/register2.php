			<article>
				<h2>¿Como uso Flasheeprom?</h2>
				<p1><font face="Helvetica Neue",Helvetica,Arial,sans-serif">Los ingenieros de Flasheeprom, hemos diseñado un motor de calculo extremandamente 
					facil de usar, hemos hecho una interface tan simple que en 3 pasos abras realizado el calculo. </font></p1>

					<p1><font face="Helvetica Neue",Helvetica,Arial,sans-serif">Primero tenemos creer una cuenta, de lo contrario nuestro motor de calculo, no te 
				permitira descargar tu archivo.  </font></p1>	

				<p1>
					<href="/"><img src="<?= base_url() ?>/assets/registrarse.png" width="612" height="249"></p1>	
					
				<h2>Subir archivo</h2>
				<p1><font face="Helvetica Neue",Helvetica,Arial,sans-serif">Una vez que tenemos nuestra cuenta creada, subiremos nuestro primer archivo de 
				la siguiente manera. Nos ubicamos en la pantalla principal y daremos clic en elegir archivo. FlashEeprom solo es compatible con formatos .hex y .bin. </font></p1>	
				<p1><href="/"><img src="<?= base_url() ?>/assets/elegir.png" width="612" height="249"></p1>	<br>
				<p1><font face="Helvetica Neue",Helvetica,Arial,sans-serif">Escogemos nuestro archivo, para el ejemplo usaremos el modelo "Hilux.bin" </font><p1>
				<p1><href="/"><img src="<?= base_url() ?>/assets/demo.png"  width="512" height="229"/></p1>	<br>
				<p1><font face="Helvetica Neue",Helvetica,Arial,sans-serif">Le damos en abrir y se nos cargara el nombre del archivo y sus datos en formato Hexadecimal </font><p1>
				<p1><href="/"><img src="<?= base_url() ?>/assets/datosdemo.png" width="612" height="249"></p1>	<br>

				<h2>Escoger Script</h2>
				<p1><font face="Helvetica Neue",Helvetica,Arial,sans-serif">Una vez que tenemos nuestro dato cargado, escogermos el Script con el que vamos a recalcular 
				los datos </font><p1>
				<p1><href="/"><img src="<?= base_url() ?>/assets/demoscript.png"	width="580" height="250"></p1><br>
				<p1><font face="Helvetica Neue",Helvetica,Arial,sans-serif">En el cuadro de busqueda. Usaremos el buscador de la pagina, para encontrar nuestro script, 
				Para esto solo necesitamos colocar el nombre de la marca o modelo, en el ejemplo solo colocamos el modelo, "Hilux"y escogemos el que tiene la misma memoria
				que el vehiculo que estamos trabajando </font><p1>
				<p1><href="/"><img src="<?= base_url() ?>/assets/busquedademo.png"  width="340" height="244"></p1>	<br>
				<p1><font face="Helvetica Neue",Helvetica,Arial,sans-serif">Al dar clic en el script, se nos cargara y automaticamente nos dara el Kilometroje   </font><p1>	
				<p1><href="/"><img src="<?= base_url() ?>/assets/democargado.png"  width="669" height="244"></p1>	<br>
		
				<h2>Modificar</h2>

				<p1><font face="Helvetica Neue",Helvetica,Arial,sans-serif">Para modificar el archivo, solo colocamos el valor deseado en la cuadro, en este ejemplo colocaremos 20000 
				y daremos clic en calcular </font><p1>
				<p1><href="/"><img src="<?= base_url() ?>/assets/calculo.png"  width="669" height="304"></p1>	<br>
				<p1><font face="Helvetica Neue",Helvetica,Arial,sans-serif">Los numeros rojos, nos indican las filas donde se ha sobre escrito, también podemos ver que el valor leido a 
				cambio a 19992, tiene un pequeño margen pero es aceptable. </font><p1>

				<h2>Descargar</h2>

				<p1><font face="Helvetica Neue",Helvetica,Arial,sans-serif">Por ultimo, una vez que tenemos nuestro archivo editado, le damos clic en descargar y empezara nuestra descargar
				ese archivo tendremos que subirlo a nuestra memoria por medio de cualquier programador y interfaz. </font><p1>
				<p1><href="/"><img src="<?= base_url() ?>/assets/descargar.png"  width="657" height="221"></p1>	<br>
				</article>
