<?php /* Smarty version 2.6.26, created on 2010-11-09 08:51:20
         compiled from E:/Apache2.2/htdocs/ta_portal_dev/templates/seatplan/choose_seat_js.tpl */ ?>
<script type="text/javascript">	
	$(document).ready(function() {
		$(".seat .seat_id").unbind();
		$(".seat .seat_id").click(function() {
			
				//get this seat information
				id_str=$(this).attr("id").split('_');
				seat_id=id_str[1];
				row=Number(id_str[2]);
				col=Number(id_str[3]);
				
				if($(this).hasClass("active"))
				{
					//check is near seat
					is_near=false;
					 
					$.each($(".seat .selected"),function() {
						if(is_near==false)
						{
							id_str=$(this).attr("id").split('_');
							d_seat_id=id_str[1];
							d_row=Number(id_str[2]);
							d_col=Number(id_str[3]);
							if(d_row==row)
							{
								if(col+1==d_col||col-1==d_col)
								{
									is_near=true;
								}
							}
						}
					});
					
					
					//selected this seat
					if(is_near==false)
					{
						$(".seat .selected").addClass("active").removeClass("selected");
					}
					$(this).addClass("selected").removeClass("active");
				}
				else if($(this).hasClass("selected"))
				{
					min_col=10000;
					max_col=0;
					
					$.each($(".seat .selected"),function() {
						id_str=$(this).attr("id").split('_');
						d_seat_id=id_str[1];
						d_row=Number(id_str[2]);
						d_col=Number(id_str[3]);
						if(min_col>d_col)
						{
							min_col=d_col;
						}
						if(d_col>max_col)
						{
							max_col=d_col;
						}
					});
					if(col==min_col||col==max_col)
					{
						$(this).addClass("active").removeClass("selected");
					}
				}
		});
		$("#submit_seat").unbind();
		$("#submit_seat").click(function() {
			seat_str="";
			cur=0;
			$.each($(".seat .selected"),function(){
				id_str=$(this).attr("id").split('_');
				d_seat_id=id_str[1];
				d_row=Number(id_str[2]);
				d_col=Number(id_str[3]);
				seat_str+=d_seat_id+",";
				//window.location.href='order_pay.php?show_id='+<?php echo $this->_tpl_vars['param_list']['show_id']; ?>
+'&seat_list='+seat_str;
			});
			if (seat_str!="") {
				$('#errorMsg').html('');
				
				$('#show_id').val(<?php echo $this->_tpl_vars['param_list']['show_id']; ?>
);
				$('#seat_list').val(seat_str);
				$('#form1').submit();
				/*
				<?php if ($this->_tpl_vars['logined'] == 'Y'): ?>
					$('#show_id').val(<?php echo $this->_tpl_vars['param_list']['show_id']; ?>
);
					$('#seat_list').val(seat_str);
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
				*/
			} else {
				$('#errorMsg').html('<?php echo $this->_tpl_vars['LANG']['choose_seat']['please_select_seat']; ?>
');
			}
		});
	});
</script>