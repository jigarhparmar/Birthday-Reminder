$(document).ready(function() {
			$('#Loading').hide();    
		});

		function check_userName(){

			var userName = $("#userName").val();
			if(userName.length > 2){
				$('#Loading').show();
				$.post("check_userName_availablity.php", {
					userName: $('#userName').val(),
				}, function(response){
					$('#Info').fadeOut();
					 $('#Loading').hide();
					setTimeout("finishAjax('Info', '"+escape(response)+"')", 450);
				});
				return false;
			}
		}
		function finishAjax(id, response){
		 
		  $('#'+id).html(unescape(response));
		  $('#'+id).fadeIn(1000);
		} 