$(document).on('click', '.number_node', function() {

	// get id of selected category
	var cat_id = $(this).attr('cat_id');
	
	// make call to ctest/node_select 
	$.ajax({
	  type: "POST",
	  url: "ctest/node_select",
	  data: { cat_id: cat_id}
	})
	  .success(function() {
	
		// load view of products of selected product id
		$('#myProducts').load('/mbctest/index.php/ctest/my_browsing');
	  });


	
	
});	

// Loads picture of selected product when it is clicked on.
$(document).on('click', '.product', function() {

	var item_id = $(this).attr('item_id');

	$.ajax({
	  type: "POST",
	  url: "ctest/get_item_id",
	  data: { item_id: item_id}
	})
	
	.success(function() {
		
		// loads item details into #myPreview
		$('#myPreview').load('/mbctest/index.php/ctest/load_item_view');	
	
	});


	


	
	
});	


