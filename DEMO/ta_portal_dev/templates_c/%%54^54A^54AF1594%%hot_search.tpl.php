<?php /* Smarty version 2.6.26, created on 2010-11-05 10:31:58
         compiled from E:/Apache2.2/htdocs/ta_portal_dev/templates/show/hot_search.tpl */ ?>
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
		<td width='10px'>
			
		</td>
		<td height="35">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					 <td class='selecttext'><?php echo $this->_tpl_vars['LANG']['hot_movie']['keyword']; ?>

					 <td width="120" height="20" background="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/search_bg.gif">
					 <input name="keyword" type="text" class="formsearch formsearch130" id="keyword" value='<?php echo $this->_tpl_vars['param_list']['keyword']; ?>
'>
					 </td>
					 <td><a href="###"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/button_quick_search.gif" width="30" height="20" border="0" onclick="searchMovie()"></a></td>			        		
				</tr>
			</table>
		</td> 
		<td>&nbsp;</td>	
		<td align='right'>
			<?php if ($this->_tpl_vars['city_name'] <> ''): ?>
			<table>
				<tr>
					<td>
						<input type='checkbox' class='select_city' id='select_city_<?php echo $this->_tpl_vars['city']['city_id']; ?>
' name='select_type'
							<?php if ($this->_tpl_vars['param_list']['select_city'] == 1): ?>
							 checked="checked"
							<?php endif; ?>  />
					</td>
					<td class='selecttext'><?php echo $this->_tpl_vars['LANG']['hot_movie']['show_on_city']; ?>

					</td>
				</tr>
			</table>
			<?php endif; ?>
		</td>	
		<td width="20"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" width="20" height="1"></td>
	</tr>
	<script type="text/javascript">
		var	PopupLayer5= new PopupLayer({trigger:"#ele5",popupBlk:"#blk5",closeBtn:"#close5",useFx:true});
	</script>
</table>
<script>
	$(document).ready(function(){
		$(".select_city").change(function(){
			
			resetCriteria();
		});
		resetCriteria();
		
	});
	function getSelectCity(){
		var id='0';
		
		if($(".select_city").attr("checked"))
		{
			id="1";
		}
		return id;
	}
	function resetCriteria()
	{
		$('#div3').hide();
		$('#div3_load').show();
		var id=getSelectCity();
		var keyword=$("#keyword").val();
		$('#div3').load("hot.php", {
						"action":"resetCriteria"
						,"select_city":id
						,"keyword":keyword}, 
						function(data) {
										$('#div3').show();
										$('#div3_load').hide();
						});
		$('#banner_td').load("hot.php", {
						"action":"resetBanner"
						,"select_city":id
						,"keyword":keyword}, 
						function(data) {
						});
		$('#rank_td').load("hot.php", {
						"action":"resetRank"
						,"select_city":id
						,"keyword":keyword}, 
						function(data) {
						});
	}
</script>