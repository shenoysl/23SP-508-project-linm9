$(document).ready(function(){
	
	$('#table-rates_reviews').DataTable({
		"dom": 'Blfrtip',
		"ordering": false,
		"searching": false,
		"paging": false,
		"responsive": true,
		"ajax":{
			url:"rates-reviews-action.php",
			type:"POST",
			data:{
					action:'listRatesReviews'
				 },
			dataType:"json"
		}
	});
	
});