<?php

namespace App\Libraries;

class Edx_library
{
private $feedsModel;
    public static function c_comments($_l=2, $feedid = false, $user = false)
    {
        $feedsModel = new \App\Models\FeedsSystemModel();
            $rows = [];
            $rows['rsp']['comment'] = false; $_comment ='';
            $builder = \Config\Database::connect();
            $query = $builder->query("SELECT fu.id, fu.feedsid, fu.userid, fu.comment, us.login, us.email, fu.mddate, us.photo, fl.likes FROM feeds_users fu LEFT JOIN user us ON (fu.userid = us.userid) 
        LEFT JOIN (SELECT flk.feeds_userid, flk.feedsid, sum(flk.likes) likes FROM feeds_likes flk WHERE flk.feeds_userid IS NOT Null GROUP BY flk.feeds_userid ) fl ON (fu.id = fl.feeds_userid)
                where fu.status = 1 AND fu.feedsid =" . $feedid." ORDER BY fu.mddate DESC ");

            if (isset($query->getResult()[0]->id)) {

                $j=1;
                $__mas ='' ;
                $_mas = (count($query->getResult()) > 2 )? $__mas : '';
                foreach ($query->getResult() as $val) {

                $images = $feedsModel->getfeedsImages($val->feedsid, $val->id, null);

                $login = @$user->login;
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
                    <div class="col-6 offset-6">
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
                $rows['rsp']['comments'] = '';
            }

        return $rows;
    }
}
