$(document).ready(function(){
	
	$('#table-actor_awarded').DataTable({
		"dom": 'Blfrtip',
		"ordering": false,
		"searching": false,
		"paging": false,
		"responsive": true,
		"ajax":{
			url:"actor-awarded-action.php",
			type:"POST",
			data:{
					action:'listActorAwarded'
				 },
			dataType:"json"
		}
	});
	
});