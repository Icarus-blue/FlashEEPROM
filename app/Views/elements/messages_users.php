<ul class="list-unstyled mb-0">
<?php
if (count($users)):
foreach ($users as $key => $val) { 
if ($val->role!=0 or $val->userid == @$userid) {
	continue;
}
$_srchClss = '';
if (@$srchClss) {
	$_srchClss = 'srchClss';
}

$_message = $val->message;
if (strlen(htmlspecialchars_decode($val->message)) > 20) {
	$_message = substr(trim(htmlspecialchars_decode($val->message)), 0, 17).'...';
}

	?>
  <li class="p-2 border-bottom <?= $_srchClss?>">
    <a href="#!" class="d-flex justify-content-between pointer user" data-userid="<?=$val->userid ?>" data-url="/Edx_ajax/messages_det">
      <div class="d-flex flex-row">
        <div class="msg-img-user">
         <?= user_image(@$val->email, @$val->photo) ?>
          <span class="badge bg-success badge-dot"></span>
        </div>
        <div class="pt-1">
          <p class="fw-bold mb-0"><?= $val->login?></p>
          <p class="small text-muted msg-<?=$val->userid ?>"><?=$_message?></p>
        </div>
      </div>
      <div class="pt-1">
        <p class="small text-muted mb-1"></p>
        <span class="badge bg-danger rounded-pill float-end"><?= $val->cta?></span>
      </div>
    </a>
  </li>

<?php }
 else: ?> 
	<li><p class = "srchClss">Intente de nuevo</p></li>;
 <?php endif; ?>

</ul>
