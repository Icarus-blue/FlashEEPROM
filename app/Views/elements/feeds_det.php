<div id="fb-root"></div>
<script src="https://unpkg.com/link-preview@0.1.0/link-preview.js"></script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v16.0&appId=167088527293658&autoLogAppEvents=1" nonce="pheupANJ"></script>
<?php if (count($feeds)): ?>
	<?php
	$title=$summary=$url=$image=$href_fb = "";
	$comment_input = (isset($userid))? 'comment-input': '';
	 foreach ($feeds as $feed): 
		$answer = ($feed->answer!='')? $feed->answer:0; 
		$feedbtnedit =""; $feedbtnfb ="";
		$mainImage = ($_image=postMainImage($feed->id))? $_image[0]:'';;
	 ?>
		
	<div id="comment_<?= $feed->id?>" class="section col-12 px-3 mb-3" data-feedsid = "<?= $feed->id?>" >
		<div class="row">	
			<div class="col-2 mt-2">
				<?= user_image(@$feed->email, @$feed->photo) ?>
			</div>
			<?php if ($feed->login != $login) { ?>
			<div class="col-1 my-auto" style="font-size:25px">
				<a href="" class="menu-left-opt user-message" data-bs-toggle="modal" data-bs-target="#messages" data-search="<?= $feed->login ?>" data-url="/Edx_ajax/messages_users_search"  data-userid= "<?= $feed->userid ?>" data-url2="/Edx_ajax/messages_users_search"><i class="far fa-comments"></i></a>
			</div>
			<?php
			}else{
				$feedbtnedit = "feed-btn-edit";
				$feedbtnfb   = "feed-btn-fb";
				$href_fb = "http://facebook.com/sharer.php?u=".base_url('feeds/detail/'.$feed->id);
				$title = $feed->title_feed;
				$summary= $feed->comment;
				$url= $href_fb;
				$image = $mainImage;
			 }
			 if ($is_moderator) {
			 	$feedbtnedit = "feed-btn-edit";	
			 }
			 ?>
			<div class="col-7 my-auto"><b><?= $feed->login ?></b><?= date('d/m/Y h:i:s a', strtotime($feed->mddate)) ?></div>
			<div class="col-1 my-auto <?= $feedbtnedit ?> float-end" style="display:none">
				<button href=""  class="btn btn-light icon by-3 w-100"  data-bs-toggle="modal" data-bs-target="#create_post" data-id="<?= $feed->id ?>" data-opt="update" data-url="/Edx_ajax/images_retrieve" data-title_feed = "<?= $feed->title_feed ?>" data-comments ="<?= $feed->comment ?>" title="Editar post" > <i class="fas fa-edit"></i></button>
			</div>
			<div class="col-12 post">
				<div class="row justify-content-center">
					<div class="col-12 mb-3">
						<?= $feed->title_feed ?>
					</div>
					<div class="col-12 mb-3 about text-justify">
					   <?php
$string = $feed->comment;
$pattern = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
$replacement = "<a target='_blank' href='$0'>$0</a>";
$string = preg_replace($pattern, $replacement, $string);
echo $string;
?>
					</div>
					<div class="row">
						<div class="comment_images col">
							<div class="row">
								<?php print_r($images[$feed->id]);?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col px-3">
				<hr>
				<div class="row mb-3">
						<div class="col-5 offset-1">
							<div class="text-left text-truncate"><i class="fas fa-star mx-2" style="color:darkgoldenrod;"></i><span class="text-truncate margin-left-md"><a class="like" data-url = "/Edx_ajax/feeds_likes" data-id ="<?= $feed->id ?>" data-likes = "likes-<?= $feed->id ?>" data-userid = "<?= @$userid ?>" href=""> Recomendar</a></span><span class="likes-<?= $feed->id ?>" style="font-size:10px"> (<?= $feed->likes ?>)</span>
							</div>
						</div>
						<div class="col-6">
							<div class="text-left text-truncate"><i class="far fa-comment-alt"></i><span class="text-truncate margin-left-md"><a class="comments px-2" data-url = "/Edx_ajax/c_comments"  data-id ="<?= $feed->id ?>"  data-userid = "<?= @$userid ?>"  href=""> Comentario</a></span><span class="comments-no" style="font-size:10px">(<?= $answer ?>)</span>
							</div>
						</div>
				</div>
				<div class="hidden comment<?= $feed->id ?> comments-list mb-3 comment-input">
				</div>	
				<div class="hidden comment<?= $feed->id ?> mb-3 <?=$comment_input?>">
					<form class="form-horizontal ajax_form" id="feed_form<?= $feed->id ?>" method="post" enctype="multipart/form-data" action="<?php echo base_url('/Edx_ajax/feeds');?>">
					<div class="col-1 px-0">
						<?= user_image(@$userid, @$photo) ?>
					</div>
				<input class="txt_csrfname" type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
				<input type="hidden" name="userid" value="<?= @$userid ?>">
				<input type="hidden" name="feedsid" value="<?= $feed->id ?>">
				<input type="hidden" name="url_rtn" value="<?= $url_rtn ?>">
					<div class="col-11 mt-2 px-0 mb-3">
						<textarea class="form-control" placeholder="Comentario..." name="comment" id="comment"></textarea>
					</div>
					<div class="col-12 upload-files-<?= $feed->id ?>  input-group form-group mb-3">
					</div>
					<progress id="prog" value="0" min="0" max="100"></progress>
					</form>
				</div>
				<div class="row comment<?= $feed->id ?> mb-3 <?=$comment_input?>" style="display:none;">
					<div class="col-2  justify-content-center">
						<button class="btn btn-light by-3 w-100 upload" data-feedsid="<?= $feed->id ?>" data-type="img" data-accp="image"  style="margin-left: 15px;" title="Subir Imagen"><i class="far fa-image"></i></button>
					</div>
					<div class="col-2">
						<button class="btn btn-light by-3 w-100 upload" data-feedsid="<?= $feed->id ?>" data-type="zip" data-accp="zip,application/octet-stream,application/zip,application/x-zip,application/x-zip-compressed" style="margin-left: 15px;" title="Subir Zip"><i class="fas fa-file-archive"></i></button>
					</div>
					<div class="col-2">
						<button class="btn btn-light by-3 w-100 upload" data-feedsid="<?= $feed->id ?>" data-type="hex" data-accp="hex" style="margin-left: 15px;" title="Subir Hex"><i class="fas fa-file-chart-line"></i></button>
					</div>
					<div class="offset-1 col-2">
					<button id="save_modal" name="save_modal" type="button" class="form-group btn btn-secondary p-0 users-posts" title="Guardar Post" data-url="/Edx_ajax/feeds_users" data-form="feed_form<?= $feed->id ?>" data-id=false data-feedsid="<?= $feed->id ?>">Post</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endforeach; ?>

<?php else: ?>
	<p>Haz un comentario</p>
	<?php endif; ?>

