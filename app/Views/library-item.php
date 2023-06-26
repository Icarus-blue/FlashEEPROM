			<article style="max-width: 700px">
				<h2>Archivo Compartido</h2>
				<img style="float: right; max-width: 35em" src="<?= base_url() ?>/library/image/<?= $item->shareid ?>">
				<dl>
					<dt>Marca</dt>
					<dd><?= esc($item->brand) ?></dd>
				</dl>
				<dl>
					<dt>Modelo</dt>
					<dd><?= esc($item->brand) ?></dd>
				</dl>
				<dl>
					<dt>Año</dt>
					<dd><?= $item->year ?></dd>
				</dl>
				<dl>
					<dt>Memoria</dt>
					<dd><?= $item->memory ?></dd>
				</dl>
				<dl>
					<dt>Kilómetros</dt>
					<dd><?= $item->memory ?></dd>
				</dl>
				<dl>
					<dt>Subido por</dt>
					<dd><?= esc($item->login) ?></dd>
				</dl>
				<dl>
					<dt>Costo de la descarga</dt>
					<dd><?= $item->tokens ?> tokens</dd>
				</dl>
				<p>
					<a class="downloadlink btn btn-primary" href="<?= base_url() ?>/library/download/<?= $item->shareid ?>" data-tokens="<?= $item->tokens ?>">Descargar</a>
				</p>
			</article>
