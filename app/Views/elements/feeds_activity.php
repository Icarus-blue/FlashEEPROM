<?php 
$activity='';
if (count($feeds)):
	foreach ($feeds as $val) {
		$answer = ($val->answer!='')? $val->answer:0;
	//	print_r($val->title_feed); echo "<<--<br>";
	$_srchClss = '';
	if (@$srchClss) {
		$_srchClss = 'srchClss';
	}
	if (isset($val->feeds_users)) {
		$val_title_feed = '<a href ="'.base_url('feeds/index/notify/'.$val->id).'" class = "pointer">'.$val->title_feed.'</a>';
	}else{
		$val_title_feed = $val->title_feed;
	}
	$activity .=   '<div class="comment-' .$val->id .' feed-comment '.$_srchClss.'">
	   <div class="row pb-2">
	       <div class="col-2 px-0">'.user_image($val->email, $val->photo).'
	       </div>
	       <div class="col-10">
	           <b>'.$val->login.'</b>
	           <span data-feedsid = '.$val->id.' data-feeds_users= "'.@$val->feeds_users.'" class = "val-title-feed"><a class="pointer" href="'.base_url("feeds/index/detail/".$val->id).'" data-feedsid = '.$val->id.' >'.$val_title_feed.'</a></span>
	           <div class="p-0 ">
	               <div class="col px-4">
	                 <span class="answered">('.$answer.') Han respondido a este post</span>
	               </div>
	           </div>
	       </div>
	    </div>
	</div>';        
	}
 else: 
	$activity = '<p class = "srchClss">Haz un comentario</p>';
 endif; 
echo $activity;
?>