<script type="text/javascript">				
	$(document).ready(function() {
		
		// toggle between hidden and visible on click		
		$('.tree-toggle').click(function () {
			$(this).parent().children('.tree').toggle(200);
		});
				
	});


	
</script>
		
		
<ul>
	<li>
	<label class="tree-toggle" label-default="">Four operations</label>
		<ul class="tree" style="display: none;">
		
			<li>
			<label class="tree-toggle" label-default="">Integers</label>
		
				<ul class="tree" style="display: none;">
				
					<!-- node_select.js responds when class="number_node" is clicked on -->
					<li><a class="number_node" cat_id="2">Addition</a></li>
					<li><a class="number_node" name="number_sub">Subtraction</a></li>
					<li><a class="number_node" name="number_mult">Multiplication</a></li>
					<li><a class="number_node" name="number_division">Division</a></li>
				</ul>
			</li>

			<li>
			<label class="tree-toggle" label-default="">Fractions</label>
		
				<ul class="tree" style="display: none;">
					<li><a href="#">Addition</a></li>
					<li><a href="#">Subtraction</a></li>
					<li><a href="#">Multiplication</a></li>
					<li><a href="#">Multiplication</a></li>
				</ul>
			</li>

			<li>
			<label class="tree-toggle" label-default="">Decimals</label>
		
				<ul class="tree" style="display: none;">
					<li><a href="#">Addition</a></li>
					<li><a href="#">Subtraction</a></li>
					<li><a href="#">Multiplication</a></li>
					<li><a href="#">Multiplication</a></li>
				</ul>
			</li>			

		
		</ul>
	</li>


	<li>	
		<label class="tree-toggle" label-default="">Decimals</label>
		<ul class="tree" style="display: none;">
					
			<li><a href="#">Addition</a></li>
			<li><a href="#">Subtraction</a></li>
			<li><a href="#">Multiplication</a></li>
			<li><a href="#">Division</a></li>
		</ul>			

	</li>
		
		

	<li>	
		<label class="tree-toggle" label-default="">Fractions</label>
		<ul class="tree" style="display: none;">
			<li><a href="#">Fraction shading</a></li>
			<li><a href="#">Equivalent Fractions</a></li>
			<li><a href="#">Ordering Fractions</a></li>
			<li><a href="#">Mixed numbers/Improper fractions</a></li>
		
		</ul>
	</li>

	<li>	
		<label class="tree-toggle" label-default="">Fractions/Decimals/Percentages</label>
		<ul class="tree" style="display: none;">
			<li><a href="#">Ordering Decimals</a></li>
			<li><a href="#">Fractions to Percentages</a></li>
			<li><a href="#">Fractions to Decimals</a></li>			
			<li><a href="#">Ordering Fractions, Decimals and Percentages</a></li>

		
		</ul>
	</li>	
	
</ul>
