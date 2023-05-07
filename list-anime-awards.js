$(document).ready(function(){
	
	$('#table-anime_award').DataTable({
		"dom": 'Blfrtip',
		"ordering": false,
		"searching": false,
		"paging": false,
		"responsive": true,
		"ajax":{
			url:"anime-award-action.php",
			type:"POST",
			data:{
					action:'listAnimeAwards'
				 },
			dataType:"json"
		}
	});
	
});