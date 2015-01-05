<?php /* Smarty version 2.6.26, created on 2010-11-05 06:15:59
         compiled from E:/Apache2.2/htdocs/ta_portal_dev/templates/seatplan/area_seat_plan.tpl */ ?>
	<style>
	.seat
	{
		position: static;
		background: none;
	}
	.seat div{
		position: static;
		display: block;
		width: 23px;
		height: 24px;
	}
	.seatpri{
		display: block;
		width: 23px;
		height: 24px;
	}
	
	.seat .active{
		background-repeat: no-repeat;
		background-position: center;
		cursor: pointer;
	}
	.seat .aisle{
		text-align:center;
		padding: 3px;
	}
	.seat .selected{
		background-image: url(<?php echo $this->_tpl_vars['rootpath']; ?>
//images/selected_seat.jpg);
		background-repeat: no-repeat;
		background-position: center;
		cursor: pointer;
	}
	.seat .hold{
		background-image: url(<?php echo $this->_tpl_vars['rootpath']; ?>
//images/hold_seat.jpg);
		background-repeat: no-repeat;
		background-position: center;
	}
	.seat .sold{
		background-image: url(<?php echo $this->_tpl_vars['rootpath']; ?>
//images/sold_seat.jpg);
		background-repeat: no-repeat;
		background-position: center;
	}
	.seat .disabled{
		background-image: url(<?php echo $this->_tpl_vars['rootpath']; ?>
//images/disabled_seat.jpg);
		background-repeat: no-repeat;
		background-position: center;
	}
	
	
	<?php $_from = $this->_tpl_vars['seat_style']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rs']):
?>
	.seat_style_<?php echo $this->_tpl_vars['rs']['id']; ?>
{
		color:<?php echo $this->_tpl_vars['rs']['fg_color']; ?>
;
		background-image:url(<?php echo $this->_tpl_vars['resource_path']; ?>
<?php echo $this->_tpl_vars['rs']['path']; ?>
);
		background-repeat:no-repeat;
	}
	<?php endforeach; endif; unset($_from); ?>
	
	</style>
	<div id='abcd' >
		<?php $_from = $this->_tpl_vars['seat_style']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rs']):
?>
		<?php if ($this->_tpl_vars['rs']['ticket_group_id'] == $this->_tpl_vars['ticket_group_id']): ?>
		<div style='float:left;'>
			<table><tr><td class='seatpri seat_style_<?php echo $this->_tpl_vars['rs']['id']; ?>
'></td><td><?php echo $this->_tpl_vars['rs']['symbol']; ?>
<?php echo $this->_tpl_vars['rs']['price']; ?>
</td></tr></table>
		</div>
		<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
		<div style='float:left;'>
		<table><tr><td class='seatpri'><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/selected_seat.jpg" alt="" /></td><td><?php echo $this->_tpl_vars['LANG']['choose_seat']['selected_seat']; ?>
</td></tr></table>
		</div>
		<div style='float:left;'>
		<table><tr><td class='seatpri'><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/sold_seat.jpg" alt="" /></td><td><?php echo $this->_tpl_vars['LANG']['choose_seat']['selling_seat']; ?>
</td></tr></table>
		</div>
		<div style='float:left;'>
		<table><tr><td class='seatpri'><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/hold_seat.jpg" alt="" /></td><td><?php echo $this->_tpl_vars['LANG']['choose_seat']['processing_seat']; ?>
</td></tr></table>
		</div>
		<div style='float:left;'>
		<table><tr><td class='seatpri'><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/disabled_seat.jpg" alt="" /></td><td><?php echo $this->_tpl_vars['LANG']['choose_seat']['wheelchair_seat']; ?>
</td></tr></table>
		</div>
		<div style='float:left;'>
		<span style='color:blue;'><?php echo $this->_tpl_vars['LANG']['seat_plan']['choose_direct_tips']; ?>
</span>
		<br>
		<span style='color:red;' id='select_tips'></span>
		</div>
	</div>
	<div class="panel" style='width:770px;height:400px;overflow:auto;'  >
		<div class='seat' >
			<table id='st_table' >
				<?php $_from = $this->_tpl_vars['seat_plan']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rcs']):
?>
					<tr>
					<?php $_from = $this->_tpl_vars['rcs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rs']):
?>
						<td align='center' valign='middle'>
						<!--<?php echo $this->_tpl_vars['rs']['id']; ?>
<?php echo $this->_tpl_vars['rs']['display_type']; ?>
-->
						<?php if ($this->_tpl_vars['rs']['id'] == 0): ?>
						<div style='display:block;width:10px;height:10px;'>
						</div>
						<?php else: ?>
						<div
							<?php if ($this->_tpl_vars['rs']['display_type'] == 'D'): ?>class='disabled'
							<?php elseif ($this->_tpl_vars['rs']['display_type'] == 'C'): ?>class='aisle'
							<?php elseif ($this->_tpl_vars['rs']['display_type'] == 'S'): ?>
								<?php if ($this->_tpl_vars['rs']['is_active'] == 0): ?>class='hold'
								<?php else: ?>
									<?php if ($this->_tpl_vars['rs']['status'] == 'S'): ?>class='sold'
									<?php elseif ($this->_tpl_vars['rs']['status'] == 'P'): ?>class='hold'
									<?php elseif ($this->_tpl_vars['rs']['status'] == 'R'): ?>class='hold'
									<?php else: ?>
										<?php if ($this->_tpl_vars['rs']['ticket_group_id'] == $this->_tpl_vars['param_list']['ticket_group_id']): ?>
										name='<?php echo $this->_tpl_vars['rs']['link_next_id']; ?>
_<?php echo $this->_tpl_vars['rs']['link_prev_id']; ?>
' class='<?php echo $this->_tpl_vars['rs']['id']; ?>
 seat_id active seat_style_<?php echo $this->_tpl_vars['rs']['seat_style_id']; ?>
'
										<?php else: ?>
										class='hold'
										<?php endif; ?>
									<?php endif; ?>
								<?php endif; ?>
							<?php elseif ($this->_tpl_vars['rs']['display_type'] == 'D'): ?>class='disabled'
							<?php endif; ?>
			 				<?php if ($this->_tpl_vars['rs']['display_type'] == 'S'): ?>id="seat_<?php echo $this->_tpl_vars['rs']['id']; ?>
_<?php echo $this->_tpl_vars['rs']['row']; ?>
_<?php echo $this->_tpl_vars['rs']['col']; ?>
"<?php endif; ?> >
			 				<?php if ($this->_tpl_vars['rs']['display_type'] == 'C'): ?><?php echo $this->_tpl_vars['rs']['row_name']; ?>

			 				<?php elseif ($this->_tpl_vars['rs']['display_type'] != 'D'): ?><div class="seat_name"><?php echo $this->_tpl_vars['rs']['col_name']; ?>
</div>
			 				<?php endif; ?>
			 			</div>
						<?php endif; ?>
						</td>
					<?php endforeach; endif; unset($_from); ?>
					</tr>
				<?php endforeach; endif; unset($_from); ?>
			</table>
		</div>
	</div>
	
	<script>
		$(document).ready(function(){
			//$(".panel").width();
			//alert($("#st_table").width());
			$("#ta_aisa_button_panel").html($("#abcd").html());
			$("#abcd").html("");
			try
			{
				var seat_str_l=$("#seat_list").val().split(',');
				
				for(i=0;i<seat_str_l.length;i++)
				{
					if(seat_str_l[i]!="")
					{
						$("."+seat_str_l[i]).addClass("selected").removeClass("active");
					}
				}
			}
			catch(eq)
			{
			
			}
			$(".seat .seat_id").click(function() {
					//get this seat information
					id_str=$(this).attr("id").split('_');
					seat_id=id_str[1];
					row=Number(id_str[2]);
					col=Number(id_str[3]);
					
					name=$(this).attr("name");
					left_right=name.split('_');
					v_left=left_right[0];
					v_right=left_right[1];
					if($(this).hasClass("active"))
					{
						//check is near seat
						
						var seat_no=$(".seat .selected").length+getOrderSeatQty();
						if(seat_no>=$("#max_order_qty").val())
						{
							//alert("<?php echo $this->_tpl_vars['LANG']['choose_seat']['only_choose']; ?>
"+$("#max_order_qty").val()+"<?php echo $this->_tpl_vars['LANG']['choose_seat']['zhang']; ?>
");
							$("#select_tips").text("<?php echo $this->_tpl_vars['LANG']['choose_seat']['only_choose']; ?>
"+$("#max_order_qty").val()+"<?php echo $this->_tpl_vars['LANG']['choose_seat']['zhang']; ?>
");
							return;
						}
						
						
						is_near=false;
						 
						$.each($(".seat .selected"),function() {
							if(is_near==false)
							{
								name_str=$(this).attr("name").split('_');
								left=Number(name_str[0]);
								right=Number(name_str[1]);
								if(left==seat_id||seat_id==right)
								{
									is_near=true;
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
						is_near=0;
						$.each($(".seat .selected"),function() {
							if(is_near==0)
							{
								id_str=$(this).attr("id").split('_');
								id=Number(id_str[1]);
								if(id==v_left)
								{
									is_near=1;
								}
								
							}
						});
						if(is_near==1)
						{
							$.each($(".seat .selected"),function() {
								if(is_near==1)
								{
									id_str=$(this).attr("id").split('_');
									id=Number(id_str[1]);
									if(id==v_right)
									{
										is_near=2;
									}
								}
									
							});
						}
						if(is_near<2)
						{
							$(this).addClass("active").removeClass("selected");
						}
					}
			});
		});
		function getOrderSeatQty()
		{
			var k=0;
			$.each($(".area_seat"),function(){
				if($(this).attr("id")!="st_<?php echo $this->_tpl_vars['ticket_group_id']; ?>
_<?php echo $this->_tpl_vars['area_id']; ?>
")
				{
					var seat_str_l=$(this).val().split(',');
					for(i=0;i<seat_str_l.length;i++)
					{
						if(seat_str_l[i]!="")
						{
							k++;
						}
					}
				}
			});
			return k++;
		}
	</script>