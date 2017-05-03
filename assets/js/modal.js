$(document).on('click' , '.open-dialog' , function (){
	var id = $(this).data('id');
	$('.modal-body #myId').val(id);
});
