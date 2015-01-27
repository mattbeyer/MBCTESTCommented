$(document).on('submit', 'form.ajax', function(event) {
		
		// this stop the browser being updated.
		event.preventDefault();

		// get form data
		var that = $(this),
		url = that.attr('action'), // get form action url
		type = that.attr('method'), // get form method

		data = {};
	
		that.find('[name]').each(function(index, value) {
	
			var that = $(this),
				name = that.attr('name'), 
				value = that.val(); // get value of attributes in form
				
			data[name] = value;
		
		});
	
		console.log(data);

		$.ajax({
			url: url,
			type: type, // form method
			data: data, // user data submitted
			success: function(response) {

				// reload container with updated cart.
				$('#myContainer').load('/mbctest/index.php/ctest/cart');
			}
		});

	
	return false; 

});  


$(document).on('submit', 'form.add_to_cart', function(event) {

		// this stop the browser being updated.
		event.preventDefault();
		var that = $(this),
		url = that.attr('action'), // get form action url
		type = that.attr('method'), // get form method

		data = {};
	
		that.find('[name]').each(function(index, value) {
	
			var that = $(this),
				name = that.attr('name'),
				value = that.val();
				
			data[name] = value;
		
		});
	
		console.log(data);

		$.ajax({
			url: url,
			type: type,
			data: data,
			success: function(response) {

				//$('#myCart').load('/mbctest/index.php/ctest/cart');
			}
		});

	
	return false; 

}); 

$(document).on('click', 'button.checkout', function(event) {

	$('#myContainer').load('/mbctest/index.php/ctest/checkout');

});  
