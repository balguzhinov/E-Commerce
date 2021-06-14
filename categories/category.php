<?php

    $categories = get_cat();
    $categories_tree = maptree($categories);
    $categories_menu = categories_to_string($categories_tree);

    if(isset($_GET['category'])){
    	$id = (int)$_GET['category'];
    	$breadcrumbs_array = breadcrumbs($categories, $id);
      if($breadcrumbs_array){
    		foreach($breadcrumbs_array as $id => $title){
    			$breadcrumbs .= "<a href='?category={$id}'>{$title}</a> / ";
    		}
    		$breadcrumbs = rtrim($breadcrumbs, " / ");
    		$breadcrumbs = preg_replace("#(.+)?<a.+>(.+)</a>$#", "$1$2", $breadcrumbs);
    	}else{
    		$breadcrumbs = "Categories";
    	}


      $ids = cats_id($categories, $id);
    	$ids = !$ids ? $id : rtrim($ids, ",");

    	if($ids) $products = get_products($ids);
    		else $products = null;
    }else{
    	$products = get_products();
    }




 ?>
