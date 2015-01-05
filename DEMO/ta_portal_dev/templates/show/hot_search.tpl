<script type="text/javascript">
		$(function() {
			$("#keyword").autocomplete({
				source: function(request, response) {
					$.ajax({
						url: "<{$rootpath}>/search/namesearch.php",
						dataType: 'json',
						data:{ str:$("#keyword").val(),
								category_id:"<{$param_list.category_id}>",
								city_id:"<{$param_list.city_id}>"
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
					 <td class='selecttext'><{$LANG.hot_movie.keyword}>
					 <td width="120" height="20" background="<{$rootpath}>/images/search_bg.gif">
					 <input name="keyword" type="text" class="formsearch formsearch130" id="keyword" value='<{$param_list.keyword}>'>
					 </td>
					 <td><a href="###"><img src="<{$rootpath}>/images/button_quick_search.gif" width="30" height="20" border="0" onclick="searchMovie()"></a></td>			        		
				</tr>
			</table>
		</td> 
		<td>&nbsp;</td>	
		<td align='right'>
			<{if $city_name <>''}>
			<table>
				<tr>
					<td>
						<input type='checkbox' class='select_city' id='select_city_<{$city.city_id}>' name='select_type'
							<{if $param_list.select_city==1}>
							 checked="checked"
							<{/if}>  />
					</td>
					<td class='selecttext'><{$LANG.hot_movie.show_on_city}>
					</td>
				</tr>
			</table>
			<{/if}>
		</td>	
		<td width="20"><img src="<{$rootpath}>/images/spacer.gif" width="20" height="1"></td>
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
