<?php

namespace App\Models;

use CodeIgniter\Model;

class FeedsSystemModel extends Model
{
  protected $table = 'feeds_files';
  protected $primaryKey = 'id';

  protected $returnType = 'App\Entities\UploadFiles';

  protected $allowedFields = [
    'feedsid', 'feeds_userid', 'filename', 'filename_o', 'filesize', 'type'
    ];

  protected $useTimestamps = false;

    public function getById(int $id)
    {
      return $this->where('luascriptid', $id)->first();
    }

    public function getPublished()
    {
      return $this->where('published_at IS NOT NULL')->findAll();
    }

    public function getFeed($feedsid)
    {
      $query = $this->db->query("
          SELECT fe.id, fe.userid, fe.title_feed, fe.comment, fe.images, fe.zipes, fe.hexes, fe.mddate, fe.status, fe.likes, us.login, us.email, us.photo , aw.answer 
          FROM feeds fe 
          LEFT JOIN user us ON (fe.userid = us.userid)
          LEFT JOIN feeds_users_vw1  aw ON (fe.id = aw.feedsid)
          WHERE fe.status = 1 AND fe.id = $feedsid 
          ORDER BY fe.id DESC
          LIMIT 1
      ");
      return $query->getResult();
    }
    public function getRecentFeeds($items,  $type = false, $opt = false)
    {
        if (!$type) {
        $query = $this->db->query("
            SELECT fe.id, fe.userid, fe.title_feed, fe.comment, fe.images, fe.zipes, fe.hexes, fe.mddate, fe.status, fe.likes, us.login, us.email, us.photo , aw.answer 
            FROM feeds fe 
            LEFT JOIN user us ON (fe.userid = us.userid)
            LEFT JOIN feeds_users_vw1  aw ON (fe.id = aw.feedsid)
            WHERE fe.status = 1
            ORDER BY fe.id DESC
            LIMIT $items
        ");
        }else{
          if ($opt=='publica') {
           //Publicaciones
           $query = $this->db->query("
               SELECT fe.id, fe.userid, fe.title_feed, fe.comment, fe.images, fe.zipes, fe.hexes, fe.mddate, fe.status, fe.likes, us.login, us.email, us.photo , aw.answer, fc.answ_likes 
               FROM feeds fe 
               LEFT JOIN user us ON (fe.userid = us.userid)
               LEFT JOIN feeds_users_vw1  aw ON (fe.id = aw.feedsid)
               LEFT JOIN (SELECT fu.feedsid feedsid, count(fu.feedsid) answer, fl.likes, (count(fu.feedsid) + fl.likes) answ_likes FROM `feeds_users` fu LEFT JOIN (SELECT feedsid, COUNT(likes) likes FROM `feeds_likes` WHERE 1 GROUP BY feedsid ) fl ON (fl.feedsid = fu.feedsid) WHERE status = 1 GROUP BY feedsid) fc ON (fc.feedsid = fe.id)
               WHERE fe.status = 1 AND fe.userid = $items
               ORDER BY fc.answ_likes DESC
               LIMIT 5");
        }elseif ($opt=='notify') {
       $_items = ' fe.id <= '.$items;
             $sqlStr= 'SELECT fe.id, fe.userid, fe.title_feed, fe.comment, fe.images, fe.zipes, fe.hexes, fe.mddate, fe.status, fe.likes, us.login, us.email, us.photo , aw.answer 
            FROM feeds fe 
            LEFT JOIN user us ON (fe.userid = us.userid)
            LEFT JOIN feeds_users_vw1  aw ON (fe.id = aw.feedsid)
            WHERE '.$_items.' AND fe.status = 1
            ORDER BY fe.mddate DESC
            LIMIT 10';
            $query = $this->db->query($sqlStr);
        }else{
            //die('4.-');
            $__items = explode(' ', $items); $_items = "";
             foreach ($__items as $str) {
                $_items .= ' fe.title_feed LIKE "%'.$str.'%" OR';
             }
             $_items = ' ('. substr($_items, 0,-3).') ' ;
             $sqlStr= 'SELECT fe.id, fe.userid, fe.title_feed, fe.comment, fe.images, fe.zipes, fe.hexes, fe.mddate, fe.status, fe.likes, us.login, us.email, us.photo , aw.answer 
            FROM feeds fe 
            LEFT JOIN user us ON (fe.userid = us.userid)
            LEFT JOIN feeds_users_vw1  aw ON (fe.id = aw.feedsid)
            WHERE '.$_items.' AND fe.status = 1
            ORDER BY fe.mddate DESC
            LIMIT 10';
            $query = $this->db->query($sqlStr);
        }
        }

        return $query->getResult();
    }

    public function getNotification($items,  $type = false)
    {

    
    $_items = (is_array($items))? implode(',', $items):$items;

        $query = $this->db->query("
            SELECT fe.id, fe.userid, fe.title_feed aux, fu.comment title_feed, fu.id feeds_users, fe.mddate, fe.status, fe.likes, us.login, us.email, us.photo , aw.answer 
            FROM feeds_users fu
            LEFT JOIN user us ON (fu.userid = us.userid)
            LEFT JOIN feeds fe ON (fe.id = fu.feedsid) 
            LEFT JOIN feeds_users_vw1  aw ON (fe.id = aw.feedsid)
            WHERE fe.status = 1 AND
            fu.id IN ($_items)
            ORDER BY fe.mddate DESC
            LIMIT 10;
        ");

        return $query->getResult();
    }

    public function getFilesSets($param){
      $rows = [
        'files_max'     => 20 ,     //(max file Quantity)
        'mfs'           => 10 ,     //(max file size Mega)  
        'path'          => 'estilos/imgs',
        'path-users'    => 'estilos/users',
        'zip-bin'       => ['a','zip','bin'],
        'ico-zip-bin'   => ['a','<div class="icon-f  img-@id"><a href="'.base_url().'/estilos/imgs/@file" download="@title"><i class="far fa-file-archive mt-2" data-file="@file" title="@title"></i></a></div>','<div class="icon-f img-@id"><a href="'.base_url().'/estilos/imgs/@file" download="@title"><i class="far fa-file-alt" data-file="@file" title="@title"></i></a></div>'],
        'typelog' => [10 => "Haz realizado (@n) post@S", 20 =>  "@user hizo (@n) comentario@S", 30 => "@user dió (@n) like@S", 40 => "@user respondio a tu comentario"]
      ];
      return $rows[$param];
    }

    public function getFeedsFilesSize($feedsid)
    {
      $q_filesize = $this->db->query("SELECT SUM(filesize) suma FROM feeds_files WHERE feedsid = ".$feedsid." GROUP BY feedsid");
      $suma = ($_suma = $q_filesize->getResult())? $_suma[0]->suma : 0;

      return $suma;
    }

    public function getFeedsFilesQuantity($feedsid)
    {
      $q_filesq = $this->db->query("SELECT count(filename) cta FROM feeds_files WHERE feedsid = ".$_POST['feedsid']." GROUP BY feedsid");
      $cta = ($_cta = $q_filesq->getResult())? $_cta[0]->cta : 0;

      return $cta;
    }
  public function getStarsQuantity($userid)
  {
    $q_filesq = $this->db->query("SELECT COUNT(fl.id) cta FROM feeds fe LEFT JOIN feeds_likes fl ON (fe.id = fl.feedsid) WHERE fe.userid = $userid GROUP BY fe.userid");
    $cta = ($_cta = $q_filesq->getResult())? $_cta[0]->cta : 0;

    return $cta;
  }

/** Inserta file en tabla para cada feeds de usuarios
*   feedsid :       ID del feed
*   feeds_user_id:  Id del feeds del usuario
*   q_files :       Files importados
*///////////////////////////////////////////////////////////////////////////
    public function insertFeedsFiles($feedsid, $feeds_user_id, $_files){
        $script = new \App\Entities\UploadFiles();
        $_id = false;
        $script->feedsid = $feedsid;
        $script->feeds_userid = $feeds_user_id;
$_i=0;
        foreach ($_files as $nro => $_fl) {  
          $_i++;
          $script->filename_o = $_fl["name"];
          $temporary = explode(".", $_fl["name"]);
          $file_extension = end($temporary);
          $file_name = date('ymdhis')."_$_i.".$file_extension;

          $script->filename = $file_name;
          $script->filesize = $_fl['size'];
          $script->type     = $_fl['type'];
          /*[name] => MyFile.jpg
            [type] => image/jpeg
            [tmp_name] => /tmp/php/php6hst32
            [error] => UPLOAD_ERR_OK
            [size] => 98174*/
          if ($id = $this->insert($script)) {
          $sourcePath = $_fl['tmp_name']; // Storing source path of the file in a variable
          $targetPath = $this->getFilesSets('path').'/'.$file_name; // Target path where file is to be stored
          $uploaded = move_uploaded_file($sourcePath,$targetPath) ; 
              $_id[] = $targetPath;
          }
        }
      return $_id;

    }
    /** Inserta file en tabla para cada feeds de usuarios
    *   feedsid :       ID del feed
    *   feeds_user_id:  Id del feeds del usuario
    *   q_files :       Files importados
    *///////////////////////////////////////////////////////////////////////////
    public function insertUserImage($feedsid, $feeds_user_id, $_files){
    $script = new \App\Entities\UploadFiles();
    $_id = false;
    $script->feedsid = $feedsid;
    $script->feeds_userid = $feeds_user_id;
    $_i=0;
  
    $_i++;
    $script->filename_o = $_fl["name"];
    $temporary = explode(".", $_fl["name"]);
    $file_extension = end($temporary);
    $file_name = date('ymdhis')."_$_i.".$file_extension;

    $script->filename = $file_name;
    $script->filesize = $_fl['size'];
    $script->type     = $_fl['type'];
    $data = ['feedsid' => $feedsid, 'feeds_userid' => $feeds_user_id, 'feeds_userid_feed' => $feeds_userid_feed, 'userid' => $userid, 'log_type' => $log_type];
    $save = $this->db->table('feeds_logs')->insert($data);
    if ($id = $this->insert($script)) {
      $sourcePath = $_fl['tmp_name']; // Storing source path of the file in a variable
      $targetPath = $this->getFilesSets('path-users').'/'.$file_name; // Target path where file is to be stored
      $uploaded = move_uploaded_file($sourcePath,$targetPath) ; 
      $_id[] = $targetPath;
    }

    return $_id;

    }

      public function getf_Images($feeds, $user)
    {     
      $rows=[];
      foreach ($feeds as $kk => $val) {
        $rows[$val->id] = $this->getfeedsImages($val->id, 0, @$user->userid);
      }
      return $rows;

    }

    public function getFilesImagesArray($feedsid, $feeds_userid)
    {     
      $rows = [];
      $query = $this->db->query("SELECT ff.id, ff.feedsid, ff.feeds_userid, ff.filename, ff.filename_o, ff.filesize, ff.type, ff.mddate, ff.status, fe.userid user FROM feeds_files ff   LEFT JOIN feeds fe ON ff.feedsid = fe.id WHERE ff.feedsid = $feedsid AND ff.feeds_userid = 0 AND fe.userid =  $feeds_userid
        ORDER BY ff.type DESC");
      $images = ""; $x=true;
      foreach ($query->getResult() as $img) {
         $temporary = explode(".", $img->filename_o);
         $_f_ext = end($temporary);
         $_ext = array_search($_f_ext, $this->getFilesSets('zip-bin'));
         $_times='';
         
         if ($x) {
           $x=false;
           $_xClass =' feeds-image-100';
         }

         if (@$user) {
          $is_moderator =  ($moderator = get_any_table('user','is_moderator',['userid'=>$user]))? $moderator[0]->is_moderator:false;;
           if ($img->user == @$user or $is_moderator ) {
             $_times= '<i class="fas fa-times img-'.$img->id.$_xClass.'" data-id = "'.$img->id.'" title="eliminar"></i>';
           }
         }
         $_xClass ='';

         if (!$_ext) {
          $rows[$feedsid][] = base_url().'/'.$this->getFilesSets('path').'/'.$img->filename;
         }

    }
    return $rows;
  }

    public function getfeedsImages($feedsid, $feeds_userid, $user)
    { 
      $query = $this->db->query("SELECT ff.id, ff.feedsid, ff.feeds_userid, ff.filename, ff.filename_o, ff.filesize, ff.type, ff.mddate, ff.status, fe.userid user FROM feeds_files ff   LEFT JOIN feeds fe ON ff.feedsid = fe.id WHERE ff.feedsid = $feedsid  AND ff.feeds_userid = $feeds_userid ORDER BY ff.type DESC");
      
      $images = $_xClass = ""; $x=true;
      foreach ($query->getResult() as $img) {
         $temporary = explode(".", $img->filename_o);
         $_f_ext = end($temporary);
         $_ext = array_search($_f_ext, $this->getFilesSets('zip-bin'));
         $_times='';
         
         if ($x) {
           $x=false;
           $_xClass ='-12';
         }

         if (@$user) {
          $is_moderator =  ($moderator = get_any_table('user','is_moderator',['userid'=>@$user]))? $moderator[0]->is_moderator:false;
          $ms = ($_ext)? ' ms-3':'';
           if ($img->user == @$user or $is_moderator) {
             $_times= '<i class="fas fa-times img-'.$img->id.' pointer'.$ms.'" data-id = "'.$img->id.'" data-url="/edx_ajax/images_update" data-opt = "delete" title="eliminar"></i>';
           }
         }

         if (!$_ext) {
          $images .= str_replace(['@id','@file','@title'], [$img->id, $img->filename,$img->filename_o],'<div class="col'.$_xClass.' mb-3" style="display:block"><div class="thumb img-@id"><a href="'.base_url().'/feeds/detail/'.$feedsid.'"><img src="'.base_url().'/'.$this->getFilesSets('path').'/'.$img->filename.'" class="img-thumbnail mx-2" title="'.$img->filename_o.'" alt="'.$_ext.'"></a></div>').$_times.'</div>';
         }else{
          $f_img = $this->getFilesSets('ico-zip-bin');
          $images .='<div class="col-1 mb-3">'. str_replace(['@id','@file','@title'], [$img->id, $img->filename,$img->filename_o],   $f_img[$_ext]).$_times.'</div>';
         }
         $_xClass ='';
      }

      return $images;
    }

    public function dltfeeds($id)
    {
      $save = $this->db->query("DELETE FROM feeds WHERE id =" . $id);
      $this->db->query("DELETE FROM feeds_likes WHERE feedsid =" . $id);
      $this->db->query("DELETE FROM feeds_files WHERE feedsid =" . $id);
      $this->db->query("DELETE FROM feeds_logs WHERE feedsid =" . $id);
      $this->db->query("DELETE FROM feeds_users WHERE feedsid =" . $id);
      return $save;
       
    }

    public function dltfeedsImages($id)
    {
      return $this->db->query("DELETE FROM feeds_files WHERE id =" . $id);
    }
    /** Log Feeds
    *   $userid :       current user
    *   $log_type:  10 -     , 20 - Feeds Comment, 30 - Mensaje de Texto, 90 - hubo un error inesperado
    *   $feedsid :       Id del Feed
    *   $feeds_userid :  ID del comentario del feed
    *   $feeds_userid_feed :  Comentario del comentario del feed
    * 
    *///////////////////////////////////////////////////////////////////////////
    public function notificationLog( $userid, $log_type, $feedsid, $feeds_userid = 0, $feeds_userid_feed = 0)
    {
      $qry = $this->db->query("SELECT userid FROM feeds WHERE id = ".$feedsid);
      $userid_to = 0;
      if (!($rows = $qry->getResult())) {
        $log_type = 90; 
      }else{
        $userid_to = $rows[0]->userid;
      }
      $data = ['feedsid' => $feedsid, 'feeds_userid' => $feeds_userid, 'feeds_userid_feed' => $feeds_userid_feed, 'userid' => $userid,'userid_to' => $userid_to, 'log_type' => $log_type];
      $save = $this->db->table('feeds_logs')->insert($data);
        
      if ($save){
        $feed_id = $this->db->insertID();
      }
        
      return $save;
    }
    public function getTopCommented($items)
    {
        $query = $this->db->query("
            SELECT fe.id, fe.userid, fe.title_feed, fe.comment, fe.images, fe.zipes, fe.hexes, fe.mddate, fe.status, fe.likes, us.login, us.email, us.photo , aw.answer 
            FROM feeds fe 
            LEFT JOIN user us ON (fe.userid = us.userid)
            LEFT JOIN feeds_users_vw1  aw ON (fe.id = aw.feedsid)
            WHERE fe.status = 1
            ORDER BY aw.answer DESC
            LIMIT $items
        ");
        
        return $query->getResult();
    }



    public function upload_media($input, $validextensions, $max_file_size=5, $directory='uploads'){
      if(isset($input["name"]) && $input["name"] !==''){
        $temporary = explode(".", $input["name"]);
        $file_extension = end($temporary);
        $maxSize = $max_file_size*1024*1024;
        if ($input["size"] > $maxSize){
          $res['status'] = 'error';
          $res['message'] = 'Max file size is '.$max_file_size.'MB.';
          return $res;
        }
        if (!in_array($file_extension, $validextensions)){
          $exts = implode(", ", $validextensions);
          $res['status'] = 'error';
          $res['message'] = 'Only following types are allowed '.$exts;
          return $res;
        }
        if ($input["error"] > 0) {
          $res['status'] = 'error';
          $res['message'] = $input["error"];
          return $res;
        }
$sourcePath = $input['tmp_name']; // Storing source path of the file in a variable
$file_name = date('ymdhis').'.'.$file_extension;
$targetPath = $directory.'/'.$file_name; // Target path where file is to be stored
$uploaded = move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file

if ($uploaded){
  $res['status'] = 'success';
  $res['file_name'] = $file_name;
  $res['directory'] = $directory;
  $res['message'] = base_url($directory.'/'.$file_name);
  return $res;
} else {
  $res['status'] = 'error';
  $res['message'] = 'An error occured, please try again';
  return $res;
}
} else {
  $res['status'] = 'error';
  $res['message'] = 'File not selected';
  return $res;
}
}

public function gets_notifications($userid, $count = false){
  $_count = 0;
  if ($count) {
  $qry = $this->db->query("SELECT count(*) cta FROM feeds_logs WHERE status = 1 AND userid_to = ".$userid." AND log_type = 20 GROUP BY userid_to" );
    if ($rows = $qry->getResult()) {
      $_count = $rows[0]->cta;
    }
      return $_count;
  }

  $qry = $this->db->query("SELECT * FROM feeds_logs WHERE status = 1 AND userid_to = ".$userid." ORDER BY log_type ASC");
  return $qry->getResult(); 
}

public function getMsgUsers($userid)
{
if ($userid=='') {
  return [];
}
 
$asc = " ORDER BY us.login ASC ";

$qry = $this->db->query("SELECT us.userid, us.login, us.role, us.email, us.password, us.photo, us.photo_o ,ct.cta, lm.message FROM user us 
LEFT JOIN (SELECT fm1.userid FROM feeds_messages fm1 WHERE fm1.userid_to = $userid GROUP BY fm1.userid ) fma  ON (fma.userid= us.userid)
LEFT JOIN (SELECT fm2.userid_to FROM feeds_messages fm2 WHERE fm2.userid = $userid GROUP BY fm2.userid_to ) fmb  ON (fmb.userid_to = us.userid)
LEFT JOIN (SELECT * FROM feeds_messages WHERE id in(          SELECT MAX(id) FROM feeds_messages GROUP BY userid, userid_to ORDER by id ASC)) lm ON (us.userid = lm.userid AND lm.userid_to = ".@$userid .")
LEFT JOIN (SELECT userid, COUNT(id) cta FROM feeds_messages WHERE recent = 1 and userid_to =".@$userid ." GROUP BY userid_to,userid) ct ON(ct.userid = us.userid )
        WHERE us.role = 0 AND us.deleted_at IS NULL AND us.activated_at  IS NOT NULL  AND (fma.userid IS NOT NULL OR fmb.userid_to IS NOT NULL) $asc ");

return $qry->getResult(); 

}
public function gets_messagesCta($userid, $count = false){
  $_count = 0;
  $qry = $this->db->query("SELECT COUNT(id) cta FROM feeds_messages WHERE recent = 1 AND userid_to = $userid GROUP BY userid_to");
  if ($rows = $qry->getResult()) {
  $_count = $rows[0]->cta;
  }

  return $_count;
}

public function feeds_likes($userid,$id, $feeds_userid = Null)
{
 
$_wh = " AND feeds_userid IS Null";

if ($feeds_userid) {
  $_wh = " AND feeds_userid = ".$feeds_userid;
}

 $rows = [];
 $rows['qry'] = "SELECT * FROM feeds_likes WHERE feedsid =" . $id." AND userid = ".$userid .$_wh;         

 $query = $this->db->query($rows['qry']);
 $rws = $query->getResult();
 $rows['count'] = count($query->getResult());
 $add_like = (count($query->getResult()) > 0 )? false:true;
 
 if ($add_like) {
     $data = ['feedsid'=>$id,'userid'=>$userid,'likes'=>1, 'feeds_userid' => $feeds_userid];
     $save = $this->db->table('feeds_likes')->insert($data);
     $rows['salida']='salida00';
     $rows['qry00']="SELECT count(*) cuenta FROM feeds_likes WHERE feedsid =" . $id." AND feeds_userid = ".$feeds_userid." GROUP BY feedsid, feeds_userid";
     if ($save){
         $query = $this->db->query("SELECT count(*) cuenta FROM feeds_likes WHERE feedsid =" . $id.$_wh." GROUP BY feedsid, feeds_userid");
         $rows['rsp']['likes'] = $query->getResult()[0]->cuenta;
         $query = $this->db->query("UPDATE feeds SET likes = ".$rows['rsp']['likes']." WHERE id =" . $id);

     $this->notificationLog( $userid, 30,$id);
     }
 }else{
     $save = $this->db->query("DELETE FROM feeds_likes WHERE feedsid =" . $id." AND userid = ".$userid.$_wh);
     $rows['salida']='salida01';
     $rows['save']=$save;
     $rows['qry01']= "SELECT count(*) cuenta FROM feeds_likes WHERE feedsid =" . $id.$_wh.$feeds_userid." GROUP BY feedsid, feeds_userid";
     if ($save){
         $query = $this->db->query("SELECT count(*) cuenta FROM feeds_likes WHERE feedsid =" . $id.$_wh." GROUP BY feedsid, feeds_userid");
         if (isset($query->getResult()[0]->cuenta)) {
             $rows['rsp']['likes'] = $query->getResult()[0]->cuenta;
         }else{
             $rows['rsp']['likes'] = 0;
         }
         $query = $this->db->query("UPDATE feeds SET likes = ".$rows['rsp']['likes']." WHERE id =" . $id);
     }
 }

return $rows;

}


}
