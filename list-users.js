$(document).ready(function(){
	
	$('#table-users').DataTable({
		"dom": 'Blfrtip',
		"ordering": false,
		"searching": false,
		"paging": false,
		"responsive": true,
		"ajax":{
			url:"user-action.php",
			type:"POST",
			data:{
					action:'listUsers'
				 },
			dataType:"json"
		}
	});
	
});