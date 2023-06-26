<?=$menu_movil ?>
<?=$feed_header ?>
<div class="feeds-detail container">
	<div class="feeds col-lg-9 offset-lg-2 mx-auto">
		<div class="row">
<br>
		<div class="col-3 feed-right">
			<div class="form-group row" style="height:unset;margin: 0rem 0rem 1rem;">
		    <div class="col-4 mt-2">
   				<div class="user-image col-8 mx-auto px-0">
   					<?= user_image(@$feed[0]->email, @$feed[0]->photo) ?>
   				</div>			
			  </div>
			  	   				<?php if ($feed[0]->login != $login) { ?>
   					<div class="col-1 my-auto" style="font-size:25px;margin-left:-2.5rem">
   					<a href="" class="menu-left-opt user-message" data-bs-toggle="modal" data-bs-target="#messages" data-search="<?= $feed[0]->login ?>" data-url="/Edx_ajax/messages_users_search"  data-userid= "<?= $feed[0]->userid ?>" data-url2="/Edx_ajax/messages_users_search"><i class="far fa-comments"></i></a>
   				</div>
   				<?php } ?>	
			  <div class="col-8 mt-4"><b><?= $feed[0]->login ?></b><?= date('d/m/Y h:i:s a', strtotime($feed[0]->mddate)) ?></div>
			  <div class="col-5 offset-1">
			  	<div class="text-left text-truncate"><i class="fas fa-star mx-2" style="color:darkgoldenrod;"></i><span class="text-truncate margin-left-md"><a class="like" data-url = "/Edx_ajax/feeds_likes" data-id ="<?= $feed[0]->id ?>" data-likes = "likes-<?= $feed[0]->id ?>" data-userid = "<?= @$userid ?>" href=""> Recomendar</a></span><span class="likes-<?= $feed[0]->id ?>" style="font-size:10px"> (<?= $feed[0]->likes ?>)</span>
			  	</div>
			  </div>
			</div>
			<div class="section py-3" data-feedsid="<?= $feed[0]->id ?>">
				<div class="row">
					<div class="col-12">
						<div class="col-5 offset-1 pb-3">
							<div class="text-left text-truncate"><i class="fas fa-star mx-2" style="color:darkgoldenrod;"></i><span class="text-truncate margin-left-md"><a class="like" data-url = "/Edx_ajax/feeds_likes" data-id ="<?= $feed[0]->id ?>" data-likes = "likes-<?= $feed[0]->id ?>" data-userid = "<?= @$userid ?>" href=""> Recomendar</a></span><span class="likes-<?= $feed[0]->id ?>" style="font-size:10px"> (<?= $feed[0]->likes ?>)</span>
							</div>
						</div>
						<recent_comments class="px-3 comments-list">
							<?= $activity['rsp']['comments'] ?>
							<?php 
								$feedsid = $feed[0]->id;
								echo view("elements/feed_comment_add"); 
							?>
						</recent_comments>
					</div>
				</div>
			</div>
		</div>
		<div class="col-9 feed-center">
			<div class="col-12">
				<div class="row mx-unset">
					<?= $feed_detail ?>
				</div>
			</div>
		</div>
    <div class="col feed-bottom">
      <div class="section py-3" data-feedsid="<?= $feed[0]->id ?>">
        <div class="row">
          <div class="col-12">
            <div class="col-5 offset-1 pb-3">
              <div class="text-left text-truncate"><i class="fas fa-star mx-2" style="color:darkgoldenrod;"></i><span class="text-truncate margin-left-md"><a class="like" data-url = "/Edx_ajax/feeds_likes" data-id ="<?= $feed[0]->id ?>" data-likes = "likes-<?= $feed[0]->id ?>" data-userid = "<?= @$userid ?>" href=""> Recomendar</a></span><span class="likes-<?= $feed[0]->id ?>" style="font-size:10px"> (<?= $feed[0]->likes ?>)</span>
              </div>
            </div>
            <recent_comments class="px-3 comments-list">
              <?= $activity['rsp']['comments'] ?>
              <?php 
                $feedsid = $feed[0]->id;
                echo view("elements/feed_comment_add"); 
              ?>
            </recent_comments>
          </div>
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
    <div class="modal-content section">
      <div class="modal-header">
        <h5 class="modal-title" id="create_post">Crear un post</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<form class="form-horizontal ajax_form" id="feed_item_form" method="post" enctype="multipart/form-data" action="<?php echo base_url('/Edx_ajax/feeds');?>">
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
     	 	  <textarea class="form-control" placeholder="Haga un comentario..." name="comments_edx" id="comments_edx" style="height: 100px"></textarea>
     	 	</div>
     	 </div>	
     	 <div class="col-12 upload-files input-group form-group mb-3">
     	 	
     	 </div>
     	 </form>
      </div>
      <div class="modal-footer">
      	<div class="row mb-2 w-100">
       		<div class="col-2  justify-content-center">
       			<button class="btn btn-light by-3 w-100 upload" data-type="img" data-pholder="Imagen tipo .jpg .png .jpeg" style="margin-left: 15px;" title="Subir Imagen"><i class="fas fa-image"></i></button>
       		</div>
       		<div class="col-2">
       			<button class="btn btn-light by-3 w-100 upload" data-type="zip" data-pholder="File .ZIP" style="margin-left: 15px;" title="Subir Zip"><i class="far fa-file-archive"></i></button>
       		</div>
       		<div class="col-2">
       			<button class="btn btn-light by-3 w-100 upload" data-type="hex" data-pholder='Subir archivo .hex' style="margin-left: 15px;" title="Subir Hex"><i class="far fa-file-alt"></i></button>
       		</div>
       		<div class="col-3 offset-3 text-end">
        			<button id="save_modal" name="save_modal" type="button" class="btn btn-secondary" title="Guardar Post" data-url = "/Edx_ajax/feeds" data-form = "feed_item_form" data-id= "false" >Post</button>
        	</div>
       	</div>
        <!-- button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button -->
      </div>
    </div>
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
        <div class="input-group rounded">
          <input type="search" name="search" class="form-control rounded search" data-url="/Edx_ajax/messages_users_search" placeholder="Search" aria-label="Search"
          aria-describedby="search-addon" />
          <span class="input-group-text border-0" id="search-addon">
            <i class="fas fa-search"></i>
          </span>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<section style="background-color: #CDC4F9;  margin-top: -100px;">
  <div class="container py-2">
    <div class="row">
      <div class="col-md-12">
        <div class="card" id="chat3" style="border-radius: 15px;">
          <div class="card-body flex-grow-1 overflow-hidden">
            <div class="row">
              <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0">
                <div class="p-2  flex-grow-1">
                  <div data-mdb-perfect-scrollbar="true" style="position: relative; height: 400px">
  	<messages_users>
   <?= $messages_users ?> 
  	</messages_users>
                  </div>

                </div>

              </div>

              <div class="col-md-6 col-lg-7 col-xl-8">
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

