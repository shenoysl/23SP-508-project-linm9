$(document).ready(function(){
	
	$('#table-animes').DataTable({
		"dom": 'Blfrtip',
		"ordering": false,
		"searching": false,
		"paging": false,
		"responsive": true,
		"ajax":{
			url:"anime-action.php",
			type:"POST",
			data:{
					action:'listAnimes'
				 },
			dataType:"json"
		}
	});
	
});