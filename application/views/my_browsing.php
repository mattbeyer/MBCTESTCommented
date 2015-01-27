<?php

// displays list of products of selected category id

foreach ($results as $result) {

	$id = $result['id'];

	// class="product" invoke an ajax response in node_select.js when an item is clicked on
	
	echo "<div onmouseover='' style='cursor: pointer;' class='product' item_id='$id'>";
	echo $result['name'];
	echo "</div>";
	echo "<br>";
		


};	


?>
