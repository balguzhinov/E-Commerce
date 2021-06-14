<li style="list-style:none; padding:10px;">
	<a href="/products.php?category=<?=$category['category_id']?>"><?=$category['category_name']?></a>
	<?php if($category['childs']): ?>
	<ul style="list-style:none;">
		<?php echo categories_to_string($category['childs']); ?>
	</ul>
	<?php endif; ?>
</li>
