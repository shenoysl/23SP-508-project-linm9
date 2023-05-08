$(document).ready(function(){
	
	$('#table-producers').DataTable({
		"dom": 'Blfrtip',
		"ordering": false,
		"searching": false,
		"paging": false,
		"responsive": true,
		"ajax":{
			url:"producer-action.php",
			type:"POST",
			data:{
					action:'listProducers'
				 },
			dataType:"json"
		}
	});
	
});