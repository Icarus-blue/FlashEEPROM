<?php
if (count($users)):
foreach ($users as $key => $val) { 
$_srchClss = '';
if (@$srchClss) {
	$_srchClss = 'srchClss';
}

 if($val->userid != $userid) { ?>
<!-- recieved userid_to -->
  <div class="d-flex flex-row justify-content-start">
    <div style="width: 45px; height: 100%;">
      <?= user_image(@$val->email, @$val->photo) ?>
    </div>
    <div>
      <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">
        <?= $val->message ?>
      </p>
      <p class="small ms-3 mb-3 rounded-3 text-muted float-end"><?= date_format(date_create($val->md_date),"h:i A") ?> | <?= date_format(date_create($val->md_date),"M d") ?></p>
    </div>
  </div>
<!-- send  userid -->
<?php }else{ ?>
  <div class="d-flex flex-row justify-content-end">
    <div>
      <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">
        <?= $val->message ?>
      </p>
      <p class="small me-3 mb-3 rounded-3 text-muted"><?= date_format(date_create($val->md_date),"h:i A") ?> | <?= date_format(date_create($val->md_date),"M d") ?></p>
    </div>
    <div style="width: 45px; height: 100%;">
      <?= user_image(@$user_email, @$photo) ?>
    </div>
  </div>

<?php } }
 else: ?> 
	<p class = "srchClss info">Selecciona, y envíe un mensaje...</p>
 <?php endif; ?>


