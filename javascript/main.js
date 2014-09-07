//добавление задачи
function add() {
	console.log('add');
    var msg   = $('#add').serialize();
        $.ajax({
          type: 'POST',
          url: 'system/action.php?add',
          data: msg,
          success: function(data) {
            $('table tbody').html(data);
            $('#add textarea').val('');
          },
          error:  function(xhr, str){
                alert('Возникла ошибка: ' + xhr.responseCode);
            }
        });
}
$(function () {
	//изменение статуса задачи
	$('input[name="status"]').click(function () {
		console.log('close');
		if($(this).prop("checked")) {
			//закрываем задачу
			id = $(this).attr('data-id');
			$.ajax({
			  type: 'POST',
			  url: 'system/action.php?remove&id='+id,
			  data: id,
			  success: function(data) {
				$('table tbody').html(data);
			  },
			  error: function(xhr, str){
					alert('Возникла ошибка: ' + xhr.responseCode);
				}
			});
		}
		else {
			
		}	
	});
});