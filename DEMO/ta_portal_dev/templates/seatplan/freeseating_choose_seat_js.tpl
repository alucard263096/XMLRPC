<script type="text/javascript">	
	$(document).ready(function() {
		$("#submit_seat").unbind();
		$("#submit_seat").click(function(){
			if(Number($("#ticket_count").val())<=0)
			{
				$('#errorMsg').html('<{$LANG.choose_seat.please_input_ticket_count}>');
				return;
			}
			<{if $logined=='Y'}>
				$("#seat_list").val($("#ticket_count").val());
				$('#form1').submit();
			<{else}>
				$('#div2').css('display','none');
				$('#div2_load').css('display','');
				$('#open_popup').click();
				$('#div2').load("<{$rootpath}>/member/choose_seat_login.php", {"action":"loadLogin"}, function() {
					$('#div2').css('display','');
					$('#div2_load').css('display','none');
				});
			<{/if}>	
		});
	});
</script>