<?php
if (!function_exists('user_image')) {
	function user_image($userid = false, $_image = false){

		$image = base_url('/estilos/users/dummy_usr.png'); $user_login = '';
		if($userid){
			$image="";
			    $hash = md5(strtolower(trim($userid)));
    			$image = "https://www.gravatar.com/avatar/$hash?d=identicon&s=60";
		}
		if ($_image) {
				$image = base_url('/estilos/users/'.$_image);
		}
		$_user_image = '<div class="user-image col-8 mx-auto px-0"><img class="img-fluid mx-auto"  src="'.$image.' '.$user_login.'"></div>';
		return $_user_image;
	}
}
if (!function_exists('_l')) {
	function _l($word){
		return $word;
	}
}
if(!function_exists('get_any_table')){
/**
* REtrive content of any table
* @param  [string]  $table  Tabla
* @param  string    $select lista de campos field1,field2,...fieldn
* @param  array     $where  [0=>['field1','value1'], 1=>['field2','value2']]
* @param  boolean   $join   [definicion del join]
* @return [type]            [falso o el valor de la clave del registro añadido ]
*/
function get_any_table($table, $select = "*",  $where = [], $join = false , $orderby = [], $limit = false)
{
    $_where ="";

  $select = ($select == "")? '*': $select;

  $db = db_connect();
  $builder = $db->table($db->prefixTable($table));

  if ($select != '*') {
    $builder->select($select);
  }

  if($limit){
    $builder->limit($limit);
  };
  if ($join) {
    $fst_tbl = $join[0];
    $on_fl1  = $join[1];
    $on_fl2  = $join[2];
    $j_type  = $join[3];
    $builder->join(db_prefix() . $fst_tbl, '' . db_prefix() . $on_fl1 . db_prefix() . $on_fl2, $j_type);
  }

  foreach ($orderby as $kk => $val) {
    $builder->order_by($val[0], $val[1]);
  }

  if ($where) {
    $builder->where($where); 
    
  }

  $resp = $builder->get();
  $return = $resp->getResult();

  if($return){
    return $return;
  }
  return false;
}
}
if(!function_exists('_t')){
  function _t($codtbl, $item_id, $reltbl = false, $relid = false){
    
$wh = [['codtbl',$codtbl],['itemid' , $item_id]];

if ($reltbl) {
  $wh = [['codtbl',$codtbl],['itemid' , $item_id],['reltbl',$reltbl],['relid',$relid]];
}
  $_destbl = get_any_table('ml_msttbl', 'desitem',  $wh);
  $destbl = ($_destbl)? $_destbl[0]['desitem']:false;

    return $destbl;
  }
}
/**
 * Render campo Select
 * $field: Nombre del campo
 * $select: Valor de la sleccion
 * $data: Data del la lsta option,
 * $class: Clases del campo,
 * $attr: atributos personalizados
 * 
 */ 
if(!function_exists('_slt')){
  function _slt($field,$select=false,$data = false, $class = "", $attr = "", $no_first_opt = false){
    if (!is_array( $data)) {
      $data = get_any_table("ml_msttbl", "itemid,desitem",  [['codtbl',$field]]);
    }
    //print_r($data);die();
    $slt = '<select name="'.$field.'" id="'.$field.'" class="'.$class.'"  '.$attr.'>';
    $opt = ($no_first_opt)? '':'<option value="">'._l('Select').'</option>';
    foreach ($data as $val) {
      $slted = ($val['itemid']==$select)? "selected": "";
      $opt .= "<option value='".$val['itemid']."' $slted>".$val['desitem']."</option>";
    }
    $slt .= $opt . '</select>';
  return $slt;  
  }
}
/**
 *Render de Campo select Dependiente 
 * $field: Nombre del campo
 * $select: Valor de la sleccion
 * $campo select Padre
 * $valor del campo select padre
 * $data: Data de la lista option,
 * $class: Clases del campo,
 * $attr: atributos personalizados 
 */
if(!function_exists('_slt_dep')){
  function _slt_dep($field,$select=false,$select_father = false, $data_father = false, $data = false, $class = "", $attr = "", $ajax=false){
    if (!is_array( $data)) {
      $data = get_any_table("ml_msttbl", "itemid,desitem",  [['codtbl',$field],['reltbl',$select_father],['relid',$data_father]]);
      if (!$data) {
        return _slt($field,false,[], 'hidden');
      };
    }
    
    if ($ajax) {
      $opt = '<option value="">'._l('Select').'</option>';
      foreach ($data as $val) {
        $slted = ($val['itemid']==$select)? "selected": "";
        $opt .= "<option value='".$val['itemid']."' $slted>".$val['desitem']."</option>";
      }
      return $opt;
    }


    $slt = _slt($field,$select,$data, $class);

  return $slt;  
  }
}
if(!function_exists('main_image')){
  function postMainImage($feedsid)
  {
    $rows = '';
    $db = \Config\Database::connect();
    $query = $db->query("SELECT ff.id, ff.feedsid, ff.feeds_userid, ff.filename, ff.filename_o, ff.filesize, ff.type, ff.mddate, ff.status, fe.userid user FROM feeds_files ff   LEFT JOIN feeds fe ON ff.feedsid = fe.id WHERE ff.feedsid = $feedsid AND ff.feeds_userid = 0 
      ORDER BY ff.type DESC LIMIT 1");
    $images = ""; $x=true;
    foreach ($query->getResult() as $img) {
       $temporary = explode(".", $img->filename_o);
       $_f_ext = end($temporary);
       $_ext = array_search($_f_ext, ['zip','bin']);
      if (!$_ext) {
        $rows = base_url('estilos/imgs').'/'.$img->filename;
      }else{
        $rows = false;
      }

    }
  return $rows;
  }                   
}
////////////////////////////////////////////////////////////////////////////


