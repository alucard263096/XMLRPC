<?php /* Smarty version 2.6.26, created on 2010-11-09 05:56:08
         compiled from E:/Apache2.2/htdocs/ta_portal_dev/templates/movie/hot_movie_search.tpl */ ?>
	<!-- AutoComplete -->
		<script type="text/javascript">
		$(function() {
			$("#keyword").autocomplete({
				source: function(request, response) {
					$.ajax({
						url: "<?php echo $this->_tpl_vars['rootpath']; ?>
/search/namesearch.php",
						dataType: 'json',
						data:{ str:$("#keyword").val(),
								category_id:"<?php echo $this->_tpl_vars['param_list']['category_id']; ?>
",
								city_id:"<?php echo $this->_tpl_vars['param_list']['city_id']; ?>
"
						},
					 	success: function(data){response(data)}
					})					
			}								         	       
			});
		})
		</script>

<table width="730" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td>
			<div id="ele5" class="district_div">
				<span class="selecttext"><?php echo $this->_tpl_vars['district_name']; ?>
</span>
				<img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/icon_select_arrow.gif" border="0" align="absmiddle">
			</div>
			
			<div class="clr"></div>
			<div id="blk5" class="blk" style="display:none;" >
			<div class="head"><div class="head-right">
			</div>
			</div>
			<div class="main"> 
				<a href="javascript:void(0)" id="close5" class="closeBtn"><?php echo $this->_tpl_vars['LANG']['close']; ?>
</a>
				<ul>
					 <li><a href="javascript:void(0)" onclick="changeDistrict('-1')"><?php echo $this->_tpl_vars['LANG']['all']; ?>
</a></li>
					<?php $_from = $this->_tpl_vars['district_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['district']):
?>
						<li><a href="javascript:void(0)" onclick="changeDistrict(<?php echo $this->_tpl_vars['district']['district_id']; ?>
)"><?php echo $this->_tpl_vars['district']['long_name']; ?>
</a></li>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
		</td>
		<td height="35">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					 <td width="120" height="20" background="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/search_bg.gif">
					 <input name="keyword" type="text" class="formsearch formsearch130" id="keyword">
					 </td>
					 <td><a href="###"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/button_quick_search.gif" width="30" height="20" border="0" onclick="searchMovie()"></a></td>			        		
				</tr>
			</table>
		</td> 
		<td>&nbsp;</td>
		<td width="110">	
			<select id="venue"  onChange="changeVenue()">
				<option value="v-1"><?php echo $this->_tpl_vars['LANG']['hot_movie']['cinemas']; ?>
</aption>	
					<?php $_from = $this->_tpl_vars['circuit_venue_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['circuit']):
?>
					<option value="c<?php echo $this->_tpl_vars['circuit']['organizer_id']; ?>
" style="background-color:#9E0D44 ;"><?php echo $this->_tpl_vars['circuit']['name']; ?>
</option>
						<?php $_from = $this->_tpl_vars['circuit']['venue_details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['venue']):
?>				        		
							<option value="v<?php echo $this->_tpl_vars['venue']['venue_id']; ?>
"><?php echo $this->_tpl_vars['venue']['name']; ?>
</option>
						<?php endforeach; endif; unset($_from); ?>
					<?php endforeach; endif; unset($_from); ?>
			</select>
		</td>	
		<td width="130">
			<select  id="activity_id"  style="font-size:12px"   onChange="changeMovie()">
				<option value="-1"><?php echo $this->_tpl_vars['LANG']['hot_movie']['selectbroadcastmovie']; ?>
</aption>	
					<?php $_from = $this->_tpl_vars['movie_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['movie']):
?>					        	
						<option value="<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
"><?php echo $this->_tpl_vars['movie']['name']; ?>
</option>
					<?php endforeach; endif; unset($_from); ?>	
			</select>			         
		</td>
		<td width="20"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" width="20" height="1"></td>
	</tr>
	<script type="text/javascript">
		var	PopupLayer5= new PopupLayer({trigger:"#ele5",popupBlk:"#blk5",closeBtn:"#close5",useFx:true});
	</script>
</table>