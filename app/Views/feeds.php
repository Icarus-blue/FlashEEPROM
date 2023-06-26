
<?=$menu_movil ?>
<?=$feed_header ?>
<div class="feeds-home container">
	<div class="feeds col-lg-9 offset-lg-2 mx-auto">
		<div class="row">
		<div class="feed-left col-2">
				<div class="feed-left-header">
					<div class="row">
						<?= user_image(@$user->email, @$user->photo) ?>
						<div class="col-8 p-0"></div>						
						<div class="col-1 p-0"></div>						
						<div class="col-3 p-0"></div>						
					</div>
				</div>
				<div class="py-5 user_box">
					<div class="text-center">
						<h3 style = "top:-12px"><?= esc(@$user->login) ?></h3>
						<?php 
						if ($stars[0]) {
							echo '<i class="fas fa-star mx-2" style="color:darkgoldenrod;"></i> '.$stars[1];
						}
						  ?>
					</div>
				</div>
				<div class="menu-left">	
					<ul class="list-group mt-3">
  					<li class="list-group-item notify" aria-disabled="true" data-url="/Edx_ajax/show_notifications">
  						<h2><i class="far fa-bell"></i><div class="notify circulo" style="display:none"><span>Un</span></div><span class="px-2"><a href="" class="menu-left-opt" data-bs-toggle="modal" data-bs-target="#notify">
  						Notifications</a></span></h2>
  					</li>
  					<li class="list-group-item" aria-disabled="true">
  						<h2><i class="far fa-envelope"></i><div class="msg_cta circulo" style="display:none"><span>Un</span></div><span class="px-2"><a href="" class="menu-left-opt" data-bs-toggle="modal" data-bs-target="#messages">
  						Messages</a></span></h2>
  					</li>
  					<li class="list-group-item publica" aria-disabled="true">
  						<h2><i class="far fa-bookmark"></i><span class="px-2"><a href="<?php echo base_url('home/feeds/publica')?>" class="menu-left-opt"> Publicaciones</a></span></h2>
  					</li>
  					<li class="list-group-item" aria-disabled="true">
  						<h2><i class="far fa-list-alt"></i><span class="px-2">Lists</span></h2>
  					</li>
<?php if ( isset($user->userid) ) { ?>
  					<li class="list-group-item" aria-disabled="true">
  						<h2><i class="far fa-user"></i><span class="px-2">
  							<!-- Button trigger modal -->
  							<a href="" class="menu-left-opt" data-bs-toggle="modal" data-bs-target="#upload-photo">
  						Profile</a></span></h2>
  					</li>
<?php }  ?>
					</ul>
				</div>
		</div>
		<div class="col-3 feed-right">
			<div class="form-group row pb-3" style="height:unset">
			  <div class="col-12" style="height:unset">
			    <input id="search" name="search" type="text" class="form-control py-3" placeholder="Buscar"  data-url = "/Edx_ajax/string_seach">
			  </div>
			</div>
			<div class="section py-3">
				<div class="row">
					<div class="col-12">
						<h3 class="px-2 mt-4">Los mas Comentados</h3>
						<recent_comments class="px-3">
							<?= $activity ?>
						</recent_comments>
					</div>
				</div>
			</div>
		</div>
		<div class="col-7 feed-center">
			<div class="row top mb-3 mx-unset">
				<div class="section">
				<div class="row mt-2">
					<div class="col-3">
						<?= user_image(@$user->email, @$user->photo) ?>
					</div>
					<div class="col-9" style="margin-left: -15px;">
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-light crt-publ mt-2 text-left" data-bs-toggle="modal" data-bs-target="#create_post">
						  Crear publicación
						</button>
					</div>
				</div>
				<div class="row mb-2">
					<div class="col-2 ml-2">
						<button class="btn btn-light icon by-3 w-100" style="margin-left: 15px;"><i class="fas fa-photo-video text-primary"></i></button>
					</div>
				</div>
				</div>
			</div>
			<div class="col-12">
				<div class="row mx-unset">
					<?= $feeds_det ?>
				</div>
			</div>
		</div>
		</div>
	</div>
</div>
<!--------------- MODAL-ZONE ------------------------->
<!-- Modal -->
<div class="modal fade" id="create_post" tabindex="-1" aria-labelledby="create_postLabel" aria-hidden="true">
  <div class="modal-dialog">
      	<form class="form-horizontal ajax_form" id="feed_item_form" method="post" enctype="multipart/form-data" action="<?php echo base_url('/Edx_ajax/feeds');?>">
    <div class="modal-content section">
      <div class="modal-header">
        <h5 class="modal-title" id="create_post">Crear un post</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
				<input class="txt_csrfname" type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
				<input type="hidden" name="userid" value="<?= @$user->userid ?>">
       	<div class="top mb-4">
       	<div class="row mt-2">
       		<div class="col-3">
       			<?= user_image(@$user->email, @$user->photo) ?>
       		</div>
       		<div class="col-9 position-relative" style="margin-left: -15px;">
       		  <span class="position-absolute top-50 start-0 translate-middle-y"><?= esc(@$user->login)  ?></span>
       		</div>
       	</div>
       </div>
     	 <div class="col-12">
     	 	<div class="mb-3">
     	 	  <label for="title_feed" class="form-label">Título</label>
     	 	  <input type="text" class="form-control" id="title_feed" name="title_feed" placeholder="Título">
     	 	</div>
     	 	<div class="mb-3">
     	 	  <textarea class="form-control" placeholder="Haga un comentario..." name="comments" id="comments" style="height: 100px"></textarea>
     	 	</div>
     	 </div>
     	 <div class="row">
	     	 <div class="comment_images col">

	     	 </div>
     	 </div>	
     	 <div class="col-12 upload-files input-group form-group mb-3">
     	 	
     	 </div>
      </div>
      <div class="modal-footer">
      	<div class="row mb-2 w-100">
       		<div class="col-2  justify-content-center">
       			<button class="btn btn-light by-3 w-100 upload" data-type="img" data-pholder="Imagen tipo .jpg .png .jpeg" style="margin-left: 15px;" title="Subir Imagen" type="button"><i class="fas fa-image"></i></button>
       		</div>
       		<div class="col-2">
       			<button class="btn btn-light by-3 w-100 upload" data-type="zip" data-pholder="File .ZIP" style="margin-left: 15px;" title="Subir Zip" type="button"><i class="far fa-file-archive"></i></button>
       		</div>
       		<div class="col-2">
       			<button class="btn btn-light by-3 w-100 upload" data-type="hex" data-pholder='Subir archivo .hex' style="margin-left: 15px;" title="Subir Hex" type="button"><i class="far fa-file-alt"></i></button>
       		</div>
       		<div class="col-3 text-end post-editar hidden">
       				<button id="" name="" type="submit" class="btn btn-success" title="Guardar Post" data-url = "/Edx_ajax/feeds_update" data-opt ="update" data-form = "feed_item_form" data-action="update"  data-id= "false">Guardar</button>
       		</div>
       		<div class="col-2 text-end post-editar hidden" >
       				<button id="delete_modal" name="delete_modal" type="button" class="btn btn-danger edit-update" title="Eliminar Post" data-url = "/Edx_ajax/feeds_update" data-opt ="delete" data-form = "feed_item_form" data-action="delete"  data-id= "false">Eliminar</button>
       		</div>
       		<div class="col-3 offset-1 text-end post-crear">
        			<button id="" name="" type="submit" class="btn btn-secondary" title="Guardar Post" data-url = "/Edx_ajax/feeds" data-form = "feed_item_form" data-id= "false" >Post</button>
        	</div>
       	</div>
        <!-- button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button -->
      </div>
    </div>       </form>

  </div>
</div>
<!--------------- MODAL-ZONE ------------------------->
<div class="modal fade" id="upload-photo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog section">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<form id="feed_user_photo" name="feed_user_photo">
      	<input class="txt_csrfname" type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
      	<input type="hidden" name="userid" value="<?= @$user->userid ?>">
      	  <div class="row mb-3">
      	    <label for="user_photo" class="col-3 col-form-label">Foto de Usuario</label>
      	    <div class="col-9">
      	      <input type="file" class="form-control upload-f" id="user_photo" name="user_photo">
      	    </div>
      	  </div>
      	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button id="save_modal" name="save_modal" type="button" class="btn btn-secondary" title="Guardar Foto" data-url = "/Edx_ajax/user_photo" data-form = "feed_user_photo" data-id= "false" >Guardar</button>
      </div>
    </div>
  </div>
</div>
<!--------------- MODAL-ZONE ------------------------->

<!--------------- MODAL-ZONE ------------------------->
<div class="modal fade" id="notify" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog section">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Notificaciones</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<notifications>
      	</notifications>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!--------------- MODAL-ZONE ------------------------->
<!--------------- MODAL-ZONE ------------------------->
<div class="modal fade" id="messages" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog section">
    <div class="modal-content">
      <div class="modal-header">
        <div class="rounded hidden" id="name-addon">
        	<span class="msg-user-back">
            <i class="fas fa-arrow-left"></i>
          </span>
        	<b><span class="msg-user">
            Edgar Caceres
          </span></b>
        </div>
        <div class="input-group rounded hidden">
          <input type="search" name="search" class="form-control rounded search" data-url="/Edx_ajax/messages_users_search" placeholder="Search" aria-label="Search"
          aria-describedby="search-addon" />
          <span class="input-group-text border-0" id="search-addon">
            <i class="fas fa-search"></i>
          </span>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<!-- section style="background-color: #CDC4F9;  margin-top: -100px;" -->
      	<section style="background-color: #CDC4F9;">
  <div class="container py-2">
    <div class="row">
      <div class="col-md-12">
        <div class="card" id="chat3" style="border-radius: 15px;">
          <div class="card-body flex-grow-1 overflow-hidden">
            <div class="row">
              <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0 msg-users">
                <div class="p-2  flex-grow-1">
                  <div data-mdb-perfect-scrollbar="true" style="position: relative; height: 400px">
  	<messages_users>
   <?= $messages_users ?> 
  	</messages_users>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-7 col-xl-8 msg-dets">
                <div class="pt-3 pe-3  msg-scroll" data-mdb-perfect-scrollbar="true"
                  style="position: relative; height: 400px">
  	<messages_dets>
   <?= @$messages_dets ?> 
  	</messages_dets>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
      </div>
      <div class="modal-footer">
        <div class="text-muted d-flex justify-content-start align-items-center pe-3" style="width:87%">
          <div style="width: 40px; height: 100%;">
          	<?= user_image(@$user->email, @$user->photo) ?>
          </div>
          <input type="text" class="form-control form-control-lg" id="message" name="message"
            placeholder="Escriba un mensaje">
          <!--a class="ms-1 text-muted" href="#!"><i class="fas fa-paperclip"></i></a>
          <a class="ms-3 text-muted" href="#!"><i class="fas fa-smile"></i></a-->
          <a class="pointer ms-3 add" href="#!" data-url="/Edx_ajax/message_send"><i class="fas fa-paper-plane"></i></a>
        </div>    	
      </div>
    </div>
  </div>
</div>
<!--------------- MODAL-ZONE ------------------------->
<script src="<?= base_url() ?>/assets/js/jquery-3.6.0.min.js"></script>
<script src="<?= base_url() ?>/assets/toastr/toastr.js"></script>
<script src="<?= base_url() ?>/assets/fontawesome/js/fontawesome.min.js"></script>
<script src="<?= base_url() ?>/assets/fontawesome/js/all.min.js"></script>
<script src="<?= base_url() ?>/assets/js/uploadf.js"></script>
<script src="<?= base_url() ?>/assets/js/custom_edx.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

