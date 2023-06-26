<div class="feed-header hidden">
<div class="feed-left-header">
	<div class="row" style="height:140px;margin-right:0px">
		<div class="col-8 p-0"></div>						
		<div class="col-1 p-0"></div>						
		<div class="col-3 p-0"></div>						
	</div>
	<div style="margin-top: -133px;width: 100px;margin-left: auto; margin-right: auto;">
		<?= user_image(@$user->email, @$user->photo) ?>
	</div>


</div>
<div class="">
	<div class="text-center">
		<h3 style = "top: 0px"><?= esc(@$user->login) ?></h3>
		<?php 
		if ($stars[0]) {
			echo '<i class="fas fa-star mx-2" style="color:darkgoldenrod;"></i> '.$stars[1];
		}
		  ?>
	</div>
</div>
</div>