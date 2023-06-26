<?php

namespace App\Controllers;

class Edx_ajax extends BaseController
{
    //private $feedsModel;
    private $feedsModel;
//    private $scriptModel;
//    private $configModel;
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->feedsModel = new \App\Models\FeedsSystemModel();
        $this->db = \Config\Database::connect();

    }
    
    public function c_comments($_l=2)
    {
        
        if (!@$this->user->login) {
            die(json_encode(array(
                'redirect' => 'yes',
                'url' => base_url('/user/login'),
                'status' => 'success',
                'message' => _l('Imagen actualizada'),
            )));
        }
        $rows = [];
        $rows['rsp']['comment'] = false; $_comment ='';
        $query = $this->db->query("SELECT fu.id, fu.feedsid, fu.userid, fu.comment, us.login, us.email, fu.mddate, us.photo, fl.likes FROM feeds_users fu LEFT JOIN user us ON (fu.userid = us.userid) 
    LEFT JOIN (SELECT flk.feeds_userid, flk.feedsid, sum(flk.likes) likes FROM feeds_likes flk WHERE flk.feeds_userid IS NOT Null GROUP BY flk.feeds_userid ) fl ON (fu.id = fl.feeds_userid)
            where fu.status = 1 AND fu.feedsid =" . $_POST['id']." ORDER BY fu.mddate DESC ");

        if (isset($query->getResult()[0]->id)) {

            $j=1;
            $__mas = '<div class="text-end"><a class="comments feeds-more"  data-url = "/Edx_ajax/c_comments/10"  data-id ="'.$_POST['id'].'"  data-userid = "'.$_POST['userid'].'"  href="">más...</a></div>';
            if ($_l > 2) {
            $__mas = '<div class="text-end"><a class="comments feeds-more"  data-url = "/Edx_ajax/c_comments"  data-id ="'.$_POST['id'].'"  data-userid = "'.$_POST['userid'].'"  href="">menos...</a></div>';
             }
            $_mas = (count($query->getResult()) > 2 )? $__mas : '';
            foreach ($query->getResult() as $val) {

            $images = $this->feedsModel->getfeedsImages($val->feedsid, $val->id, @$this->user->userid);

            $login = @$this->user->login;
            $user_message = "";
            if ($val->login != $login) { 
            $user_message = '<div class="col-1 my-auto" style="font-size:25px">
                            <a href="" class="menu-left-opt user-message" data-bs-toggle="modal" data-bs-target="#messages" data-search="'.$val->login.'" data-url="/Edx_ajax/messages_users_search"  data-userid= "'.$val->userid.'" data-url2="/Edx_ajax/messages_users_search"><i class="far fa-comments"></i></a>
                        </div>';
            }
            if ($j > $_l) { break; } $j++;
            $_comment .=
            '<div class="comment-'.$val->id .' feed-comment mb-3" data-feeds_userid='.$val->id .'>
               <div class="row py-2">
                   <div class="col-1 px-0">'.user_image($val->email, $val->photo).'
                   </div>
                   <div class="col-10">
                       '.$user_message.$val->login.'<br>'.date('d/m/Y h:i:s a', strtotime($val->mddate)).'
                       <textarea class="form-control" placeholder="Comentario..." name="comment" id="comment" disabled>'.$val->comment.'</textarea>
                   </div>
                </div>
                <div class="row">'.$images.'</div>
                <div class="row pb-2">
                <div class="col-5 offset-6">
    <div class="text-left text-truncate"><i class="fas fa-star mx-2" style="color:darkgoldenrod;"></i><span class="text-truncate margin-left-md">
    <a class="like" data-url = "/Edx_ajax/feeds_user_likes" data-id ="users-'.$val->id.'" data-likes = "likes-users-'.$val->id.'" data-userid = "'.$val->userid.'" href=""> Recomendar</a></span><span class="likes-users-'.$val->id.'" style="font-size:10px"> ('.$val->likes.')</span>
                    </div>
                </div>
                </div>
            </div>';        
            }
            $_comment .=$_mas;
            $rows['rsp']['comments'] = $_comment;
        }else{
            $rows['status'] = 'info';
            $rows['message'] = 'Sé el primero en comentar';
            $rows['error'] = true;
        }
        print_r(json_encode($rows));
        die();

    }
    public function feeds_update($action)
    {
        $rows= $_POST;
        $id = $_POST['id'];
        $comment = $_POST['comments'];
        $title_feed = $_POST['title_feed'];
        $query = $this->db->query("SELECT * FROM feeds WHERE id = $id");
        if ($action!='' && $action == "update") {
        if ($row = $query->getResult()) {
           $save = $this->db->query( 'UPDATE feeds SET comment = "'.$comment.'", title_feed = "'.$title_feed.'" WHERE id='.$id);
           if ($save){
               $feed_id = $id;

           $this->feedsModel->insertFeedsFiles($feed_id, 0, 
               $_FILES);
           $rows['files'] = $_FILES;

               die(json_encode(array(
                   'reload' => true,
                   'status' => 'success',
                   'message' => _l('Se actualizó satisfactoriamente.'),
               )));
           } else {
               die(json_encode(array(
                   'status' => 'error',
                   'message' => _l('An error occured, Please try again'),
               )));
           }
        }else{
          $save = false;
          $rows['status'] = 'error';
          $rows['message'] = 'Error Ocurrió un error inesperado';
          $rows['error'] = true;
           $rows['reload'] = false;
        }}
        if ($action!='' && $action == "delete") {
        if ($query->getResult()) {
            if ($this->feedsModel->dltfeeds($id)) {
                die(json_encode(array(
                    'reload' => true,
                    'status' => 'success',
                    'message' => _l('Se elminó este Post satisfactoriamente.'),
                )));
            }
        }else{
          $save = false;
          $rows['status'] = 'error';
          $rows['message'] = 'Error Ocurrió un error inesperado';
          $rows['error'] = true;
           $rows['reload'] = false;
        }}
        print_r(json_encode($rows));
        die();

    }
    public function images_update($action)
    {
    $_rows= $_POST;
    
    if ($action!='' or $action=='delete') {
        if ($this->feedsModel->dltfeedsImages($_rows['id'])){
            $rows['status'] = 'info';
            $rows['message'] = 'La imagen se eliminó satisfactoriamente';
            $rows['error'] = true;
            }
                }

        print_r(json_encode($rows));
        die();
    }
    public function images_retrieve($action){
        
    $_rows= $_POST;$rows =[]; $feedsid = $_POST['id'];
    $_rows['images'] = $this->feedsModel->getf_Images($this->feedsModel->getRecentFeeds(20), $this->user);

    $rows['rsp']['images'] = $_rows['images'][$feedsid];
    print_r(json_encode($rows));
    die();

    }
    public function feeds_user_likes()
    {
        $_rows= $_POST;
        
        $_feeds_users = explode('-',$_POST['id']);
        $userid = $_POST['userid'];
        $feedsid = $_POST['feedsid'];
        $feeds_userid = $_feeds_users[1];
        $rows = $this->feedsModel->feeds_likes( $userid, $feedsid, $feeds_userid);
        print_r(json_encode($rows));
        die();

    }
    public function user_photo()
    {
        $_rows['post']= $_POST;
        $_fl          = $_FILES['user_photo'];

        $data = []; $_id = false;
        $temporary = explode(".", $_fl["name"]);
        $file_extension = end($temporary);
        $file_name = date('ymdhis').'.'.$file_extension;

        $data['userid']   = $userid = $_POST['userid'];
        $data['photo']    = $file_name;
        $data['photo_o'] = $photo_o = $_fl["name"];

        $query = $this->db->query("SELECT * FROM user WHERE userid = $userid");
        
        if ($row = $query->getResult()) {
           $save = $this->db->query( 'UPDATE user SET photo = "'.$file_name.'", photo_o = "'.$photo_o.'" WHERE userid='.$userid);
        }else{
          $save = false;
        }


        if ($save) {
          $sourcePath = $_fl['tmp_name']; // Storing source path of the file in a variable
          $targetPath = $this->feedsModel->getFilesSets('path-users').'/'.$file_name; // Target path where file is to be stored
          $this->imagen_recortada($sourcePath);
          $uploaded = move_uploaded_file($sourcePath,$targetPath) ; 
          $_id = true;
          die(json_encode(array(
              'redirect' => 'yes',
              'url' => base_url(),
              'status' => 'success',
              'message' => _l('Imagen actualizada'),
          )));
        }

$rows = ['redirect' => 'yes',
         'url' => base_url(),
         'status' => 'danger',
         'message' => _l('Ocurrio un error inesperado')];

        print_r(json_encode($rows));
        die();
    }

    public function feeds ()
    {
        $db = \Config\Database::connect();
        //unset($_POST['row'][csrf_token()]);
        $_rows = $_POST;
        $rows['error'] = false;
        if ($_rows['comments']=='') {
            $rows['status'] = 'error';
            $rows['message'] = 'Falta el comentario';
            $rows['error'] = true;
        }
        if ($_rows['title_feed'] == '') {
            $rows['status'] = 'error';
            $rows['message'] = 'Falta el título';
            $rows['error'] = true;
        }

        if (!$rows['error']) {
            $data['userid'] = $_rows['userid'];            
            $data['title_feed'] = $_rows['title_feed'];            
            $data['comment'] = $_rows['comments'];
        if (!isset($_POST['id'])) {
            $save = $db->table('feeds')->insert($data);
            if ($save){
                $feed_id = $db->insertID();

            $this->feedsModel->insertFeedsFiles($feed_id, 0, 
                $_FILES);
            $rows['files'] = $_FILES;

            $this->feedsModel->notificationLog( $_rows['userid'], 10, $feed_id);

            } else {
                die(json_encode(array(
                    'status' => 'error',
                    'message' => _l('An error occured, Please try again'),
                )));
            }
          }
          else{
                    $rows= $_POST;
        $id = $_POST['id'];
        $comment = $_POST['comments'];
        $title_feed = $_POST['title_feed'];
        $query = $this->db->query("SELECT * FROM feeds WHERE id = $id");
        if ($row = $query->getResult()) {
           $save = $this->db->query( 'UPDATE feeds SET comment = "'.$comment.'", title_feed = "'.$title_feed.'" WHERE id='.$id);
           if ($save){
               $feed_id = $id;

           $this->feedsModel->insertFeedsFiles($feed_id, 0, 
               $_FILES);
           $rows['files'] = $_FILES;

           } else {
               die(json_encode(array(
                   'status' => 'error',
                   'message' => _l('An error occured, Please try again'),
               )));
           }
        }else{
          $save = false;
          $rows['status'] = 'error';
          $rows['message'] = 'Error Ocurrió un error inesperado';
          $rows['error'] = true;
           $rows['reload'] = false;
        }
          }  
        }

        return redirect()->to('/feeds');

    }
    
    public function feeds_users()
    {
        $db = \Config\Database::connect();
        //unset($_POST['row'][csrf_token()]);
        $_rows = $_POST;
        $_FILES;
// save files after save
        $f_size= 0;
         
        $suma = $this->feedsModel->getFeedsFilesSize($_POST['feedsid']);
        $cta = $this->feedsModel->getFeedsFilesQuantity($_POST['feedsid']);
        foreach ($_FILES as $file => $f_dat) {
            $f_size +=$f_dat['size'];
            //upload_media($input, $validextensions, $max_file_size=5, $directory='uploads');
        }
        $f_size_loaded = $f_size + $suma;    
        $f_cta_loaded = count($_FILES) + $cta;

        if (!@$this->user->userid) {
            die(json_encode(array(
                'redirect' => 'yes',
                'url' => base_url('user/login'),
            )));
        };

        $rows['error'] = false;
        if ($f_cta_loaded >= $this->feedsModel->getFilesSets('files_max')) {
            $rows['status'] = 'error';
            $rows['message'] = 'Cantidad máxima alcanzada '.$f_cta_loaded ;
            $rows['error'] = true;
        }
        if ($f_size_loaded > $this->feedsModel->getFilesSets('mfs')*1024*1024) {
            $rows['status'] = 'error';
            $rows['message'] = 'Tamaño máximo alcanzado';
            $rows['error'] = true;
        }

        if ($_rows['comment']=='') {
            $rows['status'] = 'error';
            $rows['message'] = 'Falta el comentario';
            $rows['error'] = true;
        }

        if (!$rows['error']) {
            $data['feedsid'] = $_rows['feedsid'];            
            $data['userid'] = $_rows['userid'];            
            $data['comment'] = $_rows['comment'];            
            $save = $db->table('feeds_users')->insert($data);
            if ($save){
        $feeds_user_id = $db->insertID();
        $Hola = $this->feedsModel->insertFeedsFiles($_POST['feedsid'], $feeds_user_id, 
            $_FILES);
        $this->feedsModel->notificationLog( $_rows['userid'], 20, $data['feedsid'],$feeds_user_id);

            $rows['Insert'] = ($Hola)? $Hola: 'No hay';
                // AQUI EL INSERT
                die(json_encode(array(
                    'redirect' => 'yes',
                    'id' => @$feed_id,
                    'url' => $_POST['url_rtn'],
                    'status' => 'success',
                    'message' => _l('Nuevo comentario añadido.'),
                )));
            } else {
                die(json_encode(array(
                    'status' => 'error',
                    'message' => _l('An error occured, Please try again'),
                )));
            }
            
        }

        print_r(json_encode($rows));
        die();
    }


public function feeds_likes()
{
    $userid = $_POST['userid'];
    $id = $_POST['id'];

    $rows = $this->feedsModel->feeds_likes( $userid, $id);

    $_rows = $_POST;
    $rows['error'] = false;
    print_r(json_encode($rows));
    die();
}

    public function string_seach()
    {
        $_rows = $_POST;
        $stars = [false, 0];
        if (isset($this->user->userid)) {
            $cta = $this->feedsModel->getStarsQuantity($this->user->userid);
            $stars = [true, $cta ];
        }
     
     $_flg = ($_rows['search']!="*false")?true:false  ; 
     $search = ($_rows['search']!="*false")? trim($_rows['search']):20; 
     $rows['rsp']['activity'] =  view('elements/feeds_activity', [
                        'feeds' => $this->feedsModel->getRecentFeeds($search, $_flg ),'userid' => @$this->user->userid, 'images' => $this->feedsModel->getf_Images($this->feedsModel->getRecentFeeds($search, $_flg ), $this->user),
                        'stars' => $stars, 'srchClss' => $_flg
        ]
                    
                    );
    $rows['error'] = false;
    print_r(json_encode($rows));
    die();
    }

    public function show_notifications()
    {
        $_rows = $_POST;
        $stars = [false, 0];
        $_logs = $this->feedsModel->gets_notifications($this->user->userid);
        foreach ($_logs as $val) {
           $feeds_userid_logs[] = $val->feeds_userid;
        }
        $rows['logs'] = $feeds_userid_logs ;
        if (!isset($this->user->userid)) {
            die(json_encode(array(
                'status' => 'info',
                'message' => _l('Login, por favor.'),
            )));
        }
        $_flg = false  ;
        $search = $this->user->userid;
        $rows['rsp']['notification'] =  view('elements/feeds_activity', [
                           'feeds' => $this->feedsModel->getNotification($feeds_userid_logs, $_flg ),'userid' => @$this->user->userid, 'images' => $this->feedsModel->getf_Images($this->feedsModel->getNotification($search, $_flg ), $this->user),
                           'stars' => $stars, 'srchClss' => $_flg, 'logs' => $feeds_userid_logs
        ]);
    $rows['error'] = false;
    print_r(json_encode($rows));
    die();
    }
    
    public function gets_notifications()
    {
        $rows['rsp'] = false;
        if (isset($this->user->userid)) {
            $_notify = $this->feedsModel->gets_notifications($this->user->userid, true);
            if ($_notify > 0) {
                $rows['rsp']['notify_cta'] = $_notify;
                $rows['rsp']['notify'] = true;   
            }else{
                $rows['rsp']['notify_cta'] = '';
                $rows['rsp']['notify'] = true;   

            }
            $_msgCta = $this->feedsModel->gets_messagesCta($this->user->userid);
            if ($_msgCta > 0) {
                $rows['rsp']['msg_cta'] = $_msgCta;
                $rows['rsp']['message'] = true;   
            }else{
                $rows['rsp']['msg_cta'] = '';
                $rows['rsp']['message'] = true;
            }

        $rows['rsp']['smallmsg'] = $this->feedsModel->getMsgUsers(@$this->user->userid);



        }
     $rows['error'] = false;
     print_r(json_encode($rows));
     die();   
    }

    public function imagen_recortada($image)
    {

        $image = \Config\Services::image()
                   ->withFile($image)
                   ->fit(250,250)
                   //->crop($_POST['w'], $_POST['h'], $_POST['x'], $_POST['y'])
                   ->save($image);
        return;
    }
    public function messages_users_search($value='')
    {
        $_rows = $_POST;
        $stars = [false, 0];
        $users = $this->userModel->getAll() ;

        if (isset($this->user->userid)) {
            $cta = $this->feedsModel->getStarsQuantity($this->user->userid);
            $stars = [true, $cta ];
        }
    $_flg = ($_rows['search']!="*false")?true:false  ; 
    $whr = ($_rows['search']!="*false")? " AND us.login LIKE '%".$_POST['search']."%' ":"";
    $asc = ($_rows['search']!="*false")? " ORDER BY us.login ASC ":"";
        $query = $this->db->query("SELECT us.userid, us.login, us.email, us.role, us.deleted_at, us.activated_at, us.confirmation, us.confirmation_sent, us.expire_at, us.photo, us.photo_o, lm.message, ct.cta FROM user us 
LEFT JOIN (SELECT * FROM feeds_messages WHERE id in(          SELECT MAX(id) FROM feeds_messages GROUP BY userid, userid_to ORDER by id ASC)) lm ON (us.userid = lm.userid AND lm.userid_to = ".@$this->user->userid .")
LEFT JOIN (SELECT userid, COUNT(id) cta FROM feeds_messages WHERE recent = 1 GROUP BY userid) ct ON(ct.userid = lm.userid )
            WHERE us.role = 0 AND us.deleted_at IS NULL AND us.activated_at  IS NOT NULL $whr $asc");

        $rows['rsp']['messages_users'] =  view('elements/messages_users', [
                            'users' => $query->getResult(), 'userid' => @$this->user->userid, 'srchClss' => $_flg
                    ]);
        $rows['error'] = false;
        print_r(json_encode($rows));
        die();
    }
    public function messages_det()
    {
    $_rows = $_POST;
    $stars = [false, 0];
    $query = $this->db->query("SELECT fm.*, us.email, us.photo photo FROM feeds_messages fm LEFT JOIN user us ON (fm.userid = us.userid) WHERE fm.userid_to = ".$_POST['userid']. " AND fm.userid = ".$this->user->userid ." OR fm.userid_to = ".$this->user->userid. " AND fm.userid = ".$_POST['userid']." ORDER BY id ASC" );
    
    $rows['rsp']['messages_dets'] =  view('elements/messages_dets', [
            'users' => $query->getResult(), 'userid' => @$this->user->userid,
            'photo' => @$this->user->photo, 'user_email' => @$this->user->email
                ]);

    $this->update_message($_POST['userid']);

    $rows['error'] = false;
    print_r(json_encode($rows));
    die();

    }
    public function message_send()
    {
        $_rows = $_POST;
        $rows['error'] = false;
        if ($_rows['message']=='') {
            $rows['status'] = 'error';
            $rows['message'] = 'Falta el mensaje';
            $rows['error'] = true;
        }
        if (!$rows['error']) {
            $data['userid'] = @$this->user->userid;            
            $data['userid_to'] = $_rows['userid_to'];            
            $data['message'] = $_rows['message'];            
            $save = $this->db->table('feeds_messages')->insert($data);
            if ($save){
            $message_id = $this->db->insertID();
            $this->feedsModel->notificationLog( @$this->user->userid, 30, $message_id);
            $qry = $this->db->query("SELECT * FROM feeds_messages WHERE id =".$message_id);
            $val = $qry->getResult()[0];
            $rows['rsp']['val']= $val;
            $rows['rsp']['message'] = 
  '<div class="d-flex flex-row justify-content-end">
      <div>
        <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">
          '.$data['message'].'
        </p>
        <p class="small me-3 mb-3 rounded-3 text-muted">'.date_format(date_create($val->md_date),"h:i A").' | '.date_format(date_create($val->md_date),"M d").'</p>
      </div>
      <div style="width: 45px; height: 100%;">
        '. user_image(@$this->user->user_email, @$this->user->photo). '
      </div>
    </div>';
            $rows['status'] = 'success';
            $rows['message'] = _l('Mensaje enviado.');            
            }
        }
    print_r(json_encode($rows));
    die();
    }
    public function update_notify(){
        $_rows = $_POST;
        $rows = $_POST['comments'];
        $_feeds_users = [];
        foreach ($_rows['comments'] as $val) {
            $_feeds_users[] = $val['feeds_users'];
        }
        $feeds_users = implode(',', $_feeds_users);
        $qry = $this->db->query("UPDATE feeds_logs SET status = 0 WHERE feeds_userid IN($feeds_users) AND log_type = 20");
        $rows['rsp']['notify_cta'] = 0;
    print_r(json_encode($rows));
    die();   

    }
    
    public function update_message($userid){
        $_rows = $_POST;

        $qry = $this->db->query("UPDATE feeds_messages SET recent = 0 WHERE recent = 1 AND userid = $userid AND userid_to = ".$this->user->userid);

        return  0; 

    }
}