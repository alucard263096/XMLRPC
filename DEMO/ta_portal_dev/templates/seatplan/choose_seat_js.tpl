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
				//window.location.href='order_pay.php?show_id='+<{$param_list.show_id}>+'&seat_list='+seat_str;
			});
			if (seat_str!="") {
				$('#errorMsg').html('');
				
				$('#show_id').val(<{$param_list.show_id}>);
				$('#seat_list').val(seat_str);
				$('#form1').submit();
				/*
				<{if $logined=='Y'}>
					$('#show_id').val(<{$param_list.show_id}>);
					$('#seat_list').val(seat_str);
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
				*/
			} else {
				$('#errorMsg').html('<{$LANG.choose_seat.please_select_seat}>');
			}
		});
	});
</script>