<?php
if (isset($login)) {
   $log_icon = "";
   $log_string = "logout";
 }else{
   $log_icon = "";
   $log_string = "login";
 } 
 ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light feeds-navbar">
  <div class="container-fluid">
    <div class="row">
      <div class="col-1 mx-2 me-1 p-0">
        <a class="navbar-brand" href="<?=base_url('feeds') ?>"><img src="<?=base_url('estilos/logo_small.jpeg') ?>" style="width: 2em;"> </a>
      </div>
      <div class="col-1 btn-navbar mt-1 me-4 option notify">
        <a href="" class="navbar-toggler notify" data-bs-toggle="modal" data-bs-target="#notify">
          <i class="fas fa-bell"></i>
        </a><div class="notify circulo" style="display:none"><span>Un</span></div>
      </div>
      <div class="col-1 btn-navbar mt-1  me-4">
        <a href="" class="navbar-toggler" data-bs-toggle="modal" data-bs-target="#messages">
          <i class="fas fa-envelope"></i>
        </a><div class="msg_cta circulo" style="display:none"><span>Un</span></div>
      </div>
      <div class="col-1 btn-navbar mt-1  me-4">
        <a class="navbar-toggler" href="#"><i class="fas fa-bookmark"></i></a>
      </div>
      <div class="col-1 btn-navbar mt-1  me-4">
        <a class="navbar-toggler" href="<?=base_url('calculador') ?>"><i class="fas fa-briefcase"></i></a>
      </div>
      <div class="col-1 btn-navbar mt-1  me-4">
        <a class="navbar-toggler" data-bs-toggle="modal" data-bs-target="#upload-photo"><i class="fas fa-user"></i></a>
      </div>   
      <div class="col-1">
    <a class="navbar-toggler btn-navbar" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class=""><i class="fas fa-power-off"></i></span>
    </a>
      </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="<?= base_url("/user/$log_string")?>" aria-disabled="true"><h2><?=$log_string?></h2></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
