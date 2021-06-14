<?php
function print_arr($array){
  echo "<pre>" . print_r($array, true) . "</pre>";
}


function get_cat(){
  global $connection;
  $query="SELECT * FROM category";
  $res =mysqli_query($connection, $query);

  $arr_cat=array();
  while($row=mysqli_fetch_assoc($res)){
    $arr_cat[$row['category_id']]=$row;
  }
return $arr_cat;
}

function maptree($dataset){
  $tree =array();
  foreach ($dataset as $id =>&$node) {
    if(!$node['parent']){
      $tree[$id]=&$node;}
      else {
        $dataset[$node['parent']]['childs'][$id]=&$node;
      }
    }
    return $tree;
  }

  function categories_to_string($data){
  	foreach($data as $item){
  		$string .= categories_to_template($item);
  	}
  	return $string;
  }

  function categories_to_template($category){
  	ob_start();
  	include 'category_template.php';
  	return ob_get_clean();
  }

  function breadcrumbs($array, $id){
  	if(!$id) return false;

  	$count = count($array);
  	$breadcrumbs_array = array();
  	for($i = 0; $i < $count; $i++){
  		if($array[$id]){
  			$breadcrumbs_array[$array[$id]['category_id']] = $array[$id]['category_name'];
  			$id = $array[$id]['parent'];
  		}else break;
  	}
  	return array_reverse($breadcrumbs_array, true);
  }

function cats_id($array, $id){
  if(!$id) return false;
  foreach($array as $item){
    if($item['parent'] == $id){
      $data .= $item['category_id'] . ",";
      $data .= cats_id($array, $item['category_id']);
    }
  }
  return $data;
}


function get_products($ids = false){
  	global $connection;
    if($ids){
  		$query = "SELECT * FROM product WHERE parent IN($ids) ORDER BY product_name";
  	}else{
  		$query = "SELECT * FROM product ORDER BY product_name";
  	}
    $res = mysqli_query($connection, $query);
  	$products = array();
  	while($row = mysqli_fetch_assoc($res)){
  		$products[] = $row;
  	}
  	return $products;
}

function get_product_by_id($product_id){
  global $connection;
  $query ="SELECT * FROM product WHERE product_id=".$product_id;
    $res = mysqli_query($connection, $query);
    $product=mysqli_fetch_assoc($res);
    return $product;
}
function get_related_products($parent){
  global $connection;
  $query ="SELECT * FROM product WHERE parent=".$parent;
    $res = mysqli_query($connection, $query);
    $product=mysqli_fetch_assoc($res);
    return $product;
}
 ?>
