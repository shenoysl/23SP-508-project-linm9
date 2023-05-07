$(document).ready(function(){
	
	$('#table-actor_award').DataTable({
		"dom": 'Blfrtip',
		"ordering": false,
		"searching": false,
		"paging": false,
		"responsive": true,
		"ajax":{
			url:"actor-award-action.php",
			type:"POST",
			data:{
					action:'listActorAwards'
				 },
			dataType:"json"
		}
	});
	
});