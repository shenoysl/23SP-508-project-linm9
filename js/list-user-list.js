$(document).ready(function(){
	
	$('#table-user_list').DataTable({
		"dom": 'Blfrtip',
		"ordering": false,
		"searching": false,
		"paging": false,
		"responsive": true,
		"ajax":{
			url:"user-list-action.php",
			type:"POST",
			data:{
					action:'listUserList'
				 },
			dataType:"json"
		}
	});
	
});