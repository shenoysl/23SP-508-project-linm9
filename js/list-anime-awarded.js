$(document).ready(function(){
	
	$('#table-anime_awarded').DataTable({
		"dom": 'Blfrtip',
		"ordering": false,
		"searching": false,
		"paging": false,
		"responsive": true,
		"ajax":{
			url:"anime-awarded-action.php",
			type:"POST",
			data:{
					action:'listAnimeAwarded'
				 },
			dataType:"json"
		}
	});
	
});