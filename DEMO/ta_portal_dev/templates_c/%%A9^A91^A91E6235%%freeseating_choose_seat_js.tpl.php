<?php /* Smarty version 2.6.26, created on 2010-11-05 06:16:06
         compiled from E:/Apache2.2/htdocs/ta_portal_dev/templates/seatplan/freeseating_choose_seat_js.tpl */ ?>
<script type="text/javascript">	
	$(document).ready(function() {
		$("#submit_seat").unbind();
		$("#submit_seat").click(function(){
			if(Number($("#ticket_count").val())<=0)
			{
				$('#errorMsg').html('<?php echo $this->_tpl_vars['LANG']['choose_seat']['please_input_ticket_count']; ?>
');
				return;
			}
			<?php if ($this->_tpl_vars['logined'] == 'Y'): ?>
				$("#seat_list").val($("#ticket_count").val());
				$('#form1').submit();
			<?php else: ?>
				$('#div2').css('display','none');
				$('#div2_load').css('display','');
				$('#open_popup').click();
				$('#div2').load("<?php echo $this->_tpl_vars['rootpath']; ?>
/member/choose_seat_login.php", {"action":"loadLogin"}, function() {
					$('#div2').css('display','');
					$('#div2_load').css('display','none');
				});
			<?php endif; ?>	
		});
	});
</script>