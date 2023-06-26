<div class="comment<?= $feedsid ?> mb-3">
	<form class="form-horizontal ajax_form" id="feed_form<?= $feedsid ?>" method="post" enctype="multipart/form-data" action="<?php echo base_url('/Edx_ajax/feeds');?>">
	<div class="col-1 px-0">
		<?= user_image(@$userid, @$photo) ?>
	</div>
<input class="txt_csrfname" type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
<input type="hidden" name="userid" value="<?= @$userid ?>">
<input type="hidden" name="feedsid" value="<?= $feedsid ?>">
<input type="hidden" name="url_rtn" value="<?= $url_rtn ?>">
	<div class="col-11 mt-2 px-0 mb-3">
		<textarea class="form-control" placeholder="Comentario..." name="comment" id="comment"></textarea>
	</div>
	<div class="col-12 upload-files-<?= $feedsid ?>  input-group form-group mb-3">
	</div>
	<progress id="prog" value="0" min="0" max="100"></progress>
	</form>
</div>
<div class="row comment<?= $feedsid ?> mb-3">
	<div class="col-2">
		<button class="btn btn-light by-3 w-100 upload" data-feedsid="<?= $feedsid ?>" data-type="img" data-accp="image"  style="margin-left: 15px;" title="Subir Imagen"><i class="far fa-image"></i></button>
	</div>
	<div class="col-2">
		<button class="btn btn-light by-3 w-100 upload" data-feedsid="<?= $feedsid ?>" data-type="zip" data-accp="zip,application/octet-stream,application/zip,application/x-zip,application/x-zip-compressed" style="margin-left: 15px;" title="Subir Zip"><i class="fas fa-file-archive"></i></button>
	</div>
	<div class="col-2">
		<button class="btn btn-light by-3 w-100 upload" data-feedsid="<?= $feedsid ?>" data-type="hex" data-accp="hex" style="margin-left: 15px;" title="Subir Hex"><i class="fas fa-file-chart-line"></i></button>
	</div>
	<div class="col-3">
	<button id="save_modal" name="save_modal" type="button" class="form-group btn btn-secondary p-0 users-posts" title="Guardar Post" data-url="/Edx_ajax/feeds_users" data-form="feed_form<?= $feedsid ?>" data-id=false data-feedsid="<?= $feedsid ?>">Post</button>
	</div>
</div>