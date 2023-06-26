<?php if (count($feeds)): ?>

	<?php
	
	$comment_input = (isset($userid))? 'comment-input': '';
	 foreach ($feeds as $feed): 
		$answer = ($feed->answer!='')? $feed->answer:0; 
		$rrss= 'https://www.facebook.com/sharer.php?u='.base_url('feeds/detail').'/'.$feed->id ;
	 ?>
	<!-- <a href="<?= $rrss?>"  class="btn btn-fb icon by-3 w-100" title="Publicar en Facebook" target="_blank" rel="nofollow"><i class="fab fa-facebook"></i></a> -->	
	<div id="comment_<?= $feed->id?>" class="section col-12 px-3 mb-3" data-feedsid = "<?= $feed->id?>" >
		<div class="row">	
			<div class="col-12 post">
				<div class="row justify-content-center pb-3" style="overflow:hidden;">
	<div class="col-10 my-3">
		<span style="font-size: 1.17em;font-weight: bold;"><?= $feed->title_feed ?></span>
	</div>
	<div class="col-2 display-6 mt-2">
		<a onclick="window.open('<?= $rrss?>', 'sharer', 'width=626,height=436');" href="javascript: void(0)" data-bs-toggle="tooltip" title="Compartir"><i class="fab fa-facebook"  class="btn btn-fb icon by-3 w-100" data-id="<?= $feed->id ?>"></i></a>
	</div>
					<div class="col-12 mb-3 about text-justify">
					     <?php
    $description = $feed->comment;
    $description = preg_replace('/(https?:\/\/[^\s]+)/', '<a href="$1" target="_blank">$1</a>', $description);
    echo $description;
    ?>
					
					</div>
						<div class="row">
	<div class="comment_images col">
		<div class="row">
			<?php
$buttonIndicators = $itemImg = "";
			if(count($images) > 0){
			foreach ($images[@$feed->id] as $kk => $img) {
			$active = (isset($active))?"":"active";
				
				$buttonIndicators .=  '<button type="button" data-bs-target="#carouselItems" data-bs-slide-to="'.$kk.'" class="'.$active.'" aria-current="true" aria-label="Slide $kk"></button>';
				$itemImg .= '<div class="carousel-item '.$active.'">
				<div class ="img-content">
			  				<img src="'.$img.'" class=""  alt="...">
			  	</div>
							</div>';
			}
			?>

			<div id="carouselItems" class="carousel slide" data-bs-ride="carousel">
			  <div class="carousel-indicators">
			  	<?= $buttonIndicators ?>
			  </div>
			  <div class="carousel-inner">
			  	<?= $itemImg ?>
			  </div>
			  <button class="carousel-control-prev" type="button" data-bs-target="#carouselItems" data-bs-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Previous</span>
			  </button>
			  <button class="carousel-control-next" type="button" data-bs-target="#carouselItems" data-bs-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Next</span>
			  </button>
			</div>
		<?php } ?>
		</div>
	</div>
						</div>
				</div>
			</div>
		</div>
	</div>
	<?php endforeach; ?>

<?php else: ?>
	<p>Haz un comentario</p>
	<?php endif; ?>

