<?php /* Smarty version 2.6.26, created on 2010-10-24 03:20:31
         compiled from F:/Apache2.2/htdocs/ta_portal_dev/templates/show/hot_result.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'convertDate', 'F:/Apache2.2/htdocs/ta_portal_dev/templates/show/hot_result.tpl', 70, false),array('function', 'convertDateTime', 'F:/Apache2.2/htdocs/ta_portal_dev/templates/show/hot_result.tpl', 103, false),)), $this); ?>
<a name='local' id='local'></a>
<table width="730" border="0" cellspacing="0" cellpadding="0">
 <?php $_from = $this->_tpl_vars['movie_full_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['movie']):
?>
 	<tr height='30px'>
 		<td></td>
 	</tr>
	<tr>
		<td>
			<table width="730" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td width="300"  valign="top">
					<table width="300" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td>
								<?php if ($this->_tpl_vars['movie']['poster'] <> ''): ?>
									<a href="detail.php?city_id=<?php echo $this->_tpl_vars['movie']['city_id']; ?>
&activity_id=<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
" >
										<img src="<?php echo $this->_tpl_vars['resource_path']; ?>
<?php echo $this->_tpl_vars['movie']['poster']; ?>
" border="0"/>
									</a>
						  	 	<?php endif; ?>  
							</td>
							<td width="20"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" width="20" height="1"></td>
							<td width="93" valign="top">
								
							</td>
						</tr>
						<tr>
							<td>
								&nbsp;&nbsp;&nbsp;
							</td>
						</tr>
					</table>
				</td>
				<td width="430" valign="top">
				<table width="430" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td width="80"  ><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" width="80" height="1"></td>
						<td width="180" ><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" width="180" height="1"></td>
						<td width="160" ><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" width="160" height="1"></td>
					</tr>
					<tr>
						<td colspan="3">
						<a href="detail.php?city_id=<?php echo $this->_tpl_vars['movie']['city_id']; ?>
&activity_id=<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
" ><span  class="showname_20px"><?php echo $this->_tpl_vars['movie']['name']; ?>
</span></a>
						</td>
					</tr>
					<tr class="labelFont">
						<td >
							<?php echo $this->_tpl_vars['LANG']['hot_movie']['city']; ?>

						</td>
						<td colspan="2">
							<?php $_from = $this->_tpl_vars['movie']['venue_details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['venue_item']):
?>
								<?php echo $this->_tpl_vars['venue_item']['city_name']; ?>

							<?php endforeach; endif; unset($_from); ?>
						</td>
					</tr>
					<tr class="labelFont">
						<td >
							<?php echo $this->_tpl_vars['LANG']['hot_movie']['venue']; ?>

						</td>
						<td colspan="2">
							<?php $_from = $this->_tpl_vars['movie']['venue_details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['venue_item']):
?>
								<?php echo $this->_tpl_vars['venue_item']['venue_name']; ?>

							<?php endforeach; endif; unset($_from); ?>
						</td>
					</tr>
					<tr class="labelFont">
						<td class='result_showdate' id='movie_s_<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
'>
							<?php echo $this->_tpl_vars['LANG']['show_detail']['show_date']; ?>

						</td>
						<td colspan="2">
                            <span class='start_date'><?php echo convertDateSmarty(array('lang' => $this->_tpl_vars['lang'],'date' => $this->_tpl_vars['movie']['start_date']), $this);?>
</span>
                            <?php if ($this->_tpl_vars['movie']['start_date'] <> $this->_tpl_vars['movie']['end_date']): ?>
                            <span class='scoll'> ~ </span>
                            <span class='end_date'><?php echo convertDateSmarty(array('lang' => $this->_tpl_vars['lang'],'date' => $this->_tpl_vars['movie']['end_date']), $this);?>
</span>
                            <?php endif; ?>
						</td>
					</tr>
					<tr class="labelFont">
						<td>
							<?php echo $this->_tpl_vars['LANG']['hot_movie']['price']; ?>

						</td>
						<td colspan="2">
						<span class='result_price' id='movie_p_<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
' align='left'><?php echo $this->_tpl_vars['movie']['symbol']; ?>

							<?php $_from = $this->_tpl_vars['movie']['venue_details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['venue_item']):
?>
							 <?php $_from = $this->_tpl_vars['venue_item']['schedule_details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['schedule_details']):
?>
			                       <span style='display:none;'>
                                   		<?php echo $this->_tpl_vars['schedule_details']['price']; ?>

                                   </span>
			                  <?php endforeach; endif; unset($_from); ?>
			                <?php endforeach; endif; unset($_from); ?>
						</span>
						</td>
					</tr>
					<tr>
						<td colspan="3">
							<img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" width='1'  height="5">
						</td>
					</tr>
					<tr class="labelFont">
						<td colspan="2">
							<select name='show_id'  id='movie_d_<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
'>
							<?php $_from = $this->_tpl_vars['movie']['venue_details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['venue_item']):
?>
							 <?php $_from = $this->_tpl_vars['venue_item']['schedule_details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['schedule_details']):
?>
			                       <option value='<?php echo $this->_tpl_vars['schedule_details']['show_id']; ?>
'><?php echo convertDateTimeSmarty(array('lang' => $this->_tpl_vars['lang'],'date' => $this->_tpl_vars['schedule_details']['show_date']), $this);?>
</option>
			                  <?php endforeach; endif; unset($_from); ?>
			                <?php endforeach; endif; unset($_from); ?>
			                </select>
						</td>
						<td rowspan="3" valign="top">
							<table>
								<tr>
									<td>
										<?php echo $this->_tpl_vars['LANG']['index_number']; ?>
：
									</td>
									<td>
										<?php if ($this->_tpl_vars['movie']['score'] <> ''): ?>
											<span class="moviemark"><?php echo $this->_tpl_vars['movie']['score']; ?>
</span>
										<?php else: ?>
											<span class="moviemark">0</span>
										<?php endif; ?> 
									</td>
								</tr>
								<tr>
									<td colspan='2'>
									<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/score/score_html.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td colspan="3">
							<img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif"  height="10">
						</td>
					</tr>
					<tr valign='top'>
						<td colspan="3">
						<a href='#' name='movie_d_<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
' class='goto_show'><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/show/button_buy_now_blue.gif"  border="0"></a>
						</td>
						
					</tr>
				</table>
				</td>
	</tr>
	</table>
	</td>
	</tr>


	<?php endforeach; endif; unset($_from); ?>
	<tr>
		<td>&nbsp;
			
		</td>
	</tr>
 	<?php if ($this->_tpl_vars['total_page'] > 0): ?>
	<tr>
		<td valign="top">
			<table border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td width="75">
					<table width="66" border="0" cellspacing="0" cellpadding="0">
						<tr>
						    <?php if ($this->_tpl_vars['total_page'] > 1): ?>
								<td width="66" height="23" align="center" background="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/button_bg_gary.gif">
					              	<a href="#local" class="blklink pageno2" id='pageback'><?php echo $this->_tpl_vars['LANG']['back']; ?>
</a>
								</td>
							<?php endif; ?>
						</tr>
					</table>
				</td>
				<td>
					<?php if ($this->_tpl_vars['total_page'] > 1): ?>	
						<table border="0" cellspacing="0" cellpadding="0">
							<tr>
								<?php unset($this->_sections['loop']);
$this->_sections['loop']['name'] = 'loop';
$this->_sections['loop']['loop'] = is_array($_loop=$this->_tpl_vars['total_page']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['loop']['show'] = true;
$this->_sections['loop']['max'] = $this->_sections['loop']['loop'];
$this->_sections['loop']['step'] = 1;
$this->_sections['loop']['start'] = $this->_sections['loop']['step'] > 0 ? 0 : $this->_sections['loop']['loop']-1;
if ($this->_sections['loop']['show']) {
    $this->_sections['loop']['total'] = $this->_sections['loop']['loop'];
    if ($this->_sections['loop']['total'] == 0)
        $this->_sections['loop']['show'] = false;
} else
    $this->_sections['loop']['total'] = 0;
if ($this->_sections['loop']['show']):

            for ($this->_sections['loop']['index'] = $this->_sections['loop']['start'], $this->_sections['loop']['iteration'] = 1;
                 $this->_sections['loop']['iteration'] <= $this->_sections['loop']['total'];
                 $this->_sections['loop']['index'] += $this->_sections['loop']['step'], $this->_sections['loop']['iteration']++):
$this->_sections['loop']['rownum'] = $this->_sections['loop']['iteration'];
$this->_sections['loop']['index_prev'] = $this->_sections['loop']['index'] - $this->_sections['loop']['step'];
$this->_sections['loop']['index_next'] = $this->_sections['loop']['index'] + $this->_sections['loop']['step'];
$this->_sections['loop']['first']      = ($this->_sections['loop']['iteration'] == 1);
$this->_sections['loop']['last']       = ($this->_sections['loop']['iteration'] == $this->_sections['loop']['total']);
?> 
								<td width="25" height="23" align="center" valign="middle">
									<?php if ($this->_tpl_vars['param_list']['page_from'] == $this->_sections['loop']['index']+1): ?>
									<span class="pageno_on"  id="<?php echo $this->_sections['loop']['index']+1; ?>
"><?php echo $this->_sections['loop']['index']+1; ?>
</span>
									<?php else: ?>
									<a class="pageno" href="#local" id="<?php echo $this->_sections['loop']['index']+1; ?>
" onclick="changePageNum(<?php echo $this->_sections['loop']['index']+1; ?>
)" ><?php echo $this->_sections['loop']['index']+1; ?>
</a>
									<?php endif; ?>
								</td>
								<td>
									<img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" width="8" height="8">
								</td>							
								<?php endfor; endif; ?>	
							</tr>
						</table>
					<?php endif; ?>
				</td>
				<td width="75" align="right">
					<table width="66" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<?php if ($this->_tpl_vars['total_page'] > 1): ?>	  
								<td width="66" height="23" align="center" background="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/button_bg_gary.gif">
					              	<a href='javascript:void(0);' class="blklink pageno2" id='pagenext'><?php echo $this->_tpl_vars['LANG']['next']; ?>
</a>	  
								</td>
							 <?php endif; ?>
						</tr>
					</table>
				</td>
			</tr>
			</table>
		</td>
	</tr>
	<?php endif; ?>
</table>
<a id='to_go' href='#local'></a>  
<script type="text/javascript">	
	$(document).ready(function(){
		$(".result_price").each(function(){
			$("#"+$(this).attr("id")+" span:first").show();
		});
		$(".result_showdate").each(function(){
			if($("#"+$(this).attr("id")+" .start_date").text()==$("#"+$(this).attr("id")+" .end_date").text())
			{
				$("#"+$(this).attr("id")+" .scoll").hide();
				$("#"+$(this).attr("id")+" .end_date").hide();
			}
		});
		
		$(".goto_show").click(function(){
			var show_str=$("#"+$(this).attr("name")).val();
			var str='choose_seat.php?show_id='+show_str;
			//alert(str);
			window.location.href=str;
		});
		
		
		$("#pageback").click(function(){
			if(<?php echo $this->_tpl_vars['param_list']['page_from']; ?>
 > 1){
				var page_no=<?php echo $this->_tpl_vars['param_list']['page_from']; ?>
-1;
			$('#div3').hide();
			$('#div3_load').show();
				var url = "hot.php";
				$('#div3').load(url, {"action":"resetCriteria","page_no":page_no}, function() {
				$('#div3').show();
				$('#div3_load').hide();
				$("#to_go").click();
				});
			}
		});
		$("#pagenext").click(function(){
			if(<?php echo $this->_tpl_vars['param_list']['page_from']; ?>
 < <?php echo $this->_tpl_vars['total_page']; ?>
){
				var page_no=<?php echo $this->_tpl_vars['param_list']['page_from']; ?>
+1;
			$('#div3').hide();
			$('#div3_load').show();
				var url = "hot.php";
				$('#div3').load(url, {"action":"resetCriteria","page_no":page_no}, function() {
				$('#div3').show();
				$('#div3_load').hide();
				$("#to_go").click();
				});
			}
		});
	});
	
	function changePageNum(page_no){
		$('#div3').hide();
		$('#div3_load').show();
		var url = "hot.php";
		$('#div3').load(url, {"action":"resetCriteria","page_no":page_no}, function() {
			$('#div3').show();
			$('#div3_load').hide();
		});
	}
	
	
</script>