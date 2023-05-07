$(document).ready(function(){
	
	$('#table-stars').DataTable({
		"dom": 'Blfrtip',
		"ordering": false,
		"searching": false,
		"paging": false,
		"responsive": true,
		"ajax":{
			url:"stars-action.php",
			type:"POST",
			data:{
					action:'listStars'
				 },
			dataType:"json"
		}
	});
	
});