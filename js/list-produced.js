$(document).ready(function(){
	
	$('#table-produced').DataTable({
		"dom": 'Blfrtip',
		"ordering": false,
		"searching": false,
		"paging": false,
		"responsive": true,
		"ajax":{
			url:"produced-action.php",
			type:"POST",
			data:{
					action:'listProduced'
				 },
			dataType:"json"
		}
	});
	
});