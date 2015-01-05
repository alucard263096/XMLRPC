<a name='local' id='local'></a>
<table width="730" border="0" cellspacing="0" cellpadding="0">
 <{foreach from=$movie_full_list item=movie}>
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
								<{if $movie.poster <>''}>
									<a href="detail.php?city_id=<{$movie.city_id}>&activity_id=<{$movie.activity_id}>" >
										<img src="<{$resource_path}><{$movie.poster}>" border="0"/>
									</a>
						  	 	<{/if}>  
							</td>
							<td width="20"><img src="<{$rootpath}>/images/spacer.gif" width="20" height="1"></td>
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
						<td width="80"  ><img src="<{$rootpath}>/images/spacer.gif" width="80" height="1"></td>
						<td width="180" ><img src="<{$rootpath}>/images/spacer.gif" width="180" height="1"></td>
						<td width="160" ><img src="<{$rootpath}>/images/spacer.gif" width="160" height="1"></td>
					</tr>
					<tr>
						<td colspan="3">
						<a href="detail.php?city_id=<{$movie.city_id}>&activity_id=<{$movie.activity_id}>" ><span  class="showname_20px"><{$movie.name}></span></a>
						</td>
					</tr>
					<tr class="labelFont">
						<td >
							<{$LANG.hot_movie.city}>
						</td>
						<td colspan="2">
							<{foreach from=$movie.venue_details item=venue_item}>
								<{$venue_item.city_name}>
							<{/foreach}>
						</td>
					</tr>
					<tr class="labelFont">
						<td >
							<{$LANG.hot_movie.venue}>
						</td>
						<td colspan="2">
							<{foreach from=$movie.venue_details item=venue_item}>
								<{$venue_item.venue_name}>
							<{/foreach}>
						</td>
					</tr>
					<tr class="labelFont">
						<td class='result_showdate' id='movie_s_<{$movie.activity_id}>'>
							<{$LANG.show_detail.show_date}>
						</td>
						<td colspan="2">
                            <span class='start_date'><{convertDate lang=$lang date=$movie.start_date}></span>
                            <{if $movie.start_date <> $movie.end_date}>
                            <span class='scoll'> ~ </span>
                            <span class='end_date'><{convertDate lang=$lang date=$movie.end_date}></span>
                            <{/if}>
						</td>
					</tr>
					<tr class="labelFont">
						<td>
							<{$LANG.hot_movie.price}>
						</td>
						<td colspan="2">
						<span class='result_price' id='movie_p_<{$movie.activity_id}>' align='left'><{$movie.symbol}>
							<{foreach from=$movie.venue_details item=venue_item}>
							 <{foreach from=$venue_item.schedule_details item=schedule_details}>
			                       <span style='display:none;'>
                                   		<{$schedule_details.price}>
                                   </span>
			                  <{/foreach}>
			                <{/foreach}>
						</span>
						</td>
					</tr>
					<tr>
						<td colspan="3">
							<img src="<{$rootpath}>/images/spacer.gif" width='1'  height="5">
						</td>
					</tr>
					<tr class="labelFont">
						<td colspan="2">
							<select name='show_id'  id='movie_d_<{$movie.activity_id}>'>
							<{foreach from=$movie.venue_details item=venue_item}>
							 <{foreach from=$venue_item.schedule_details item=schedule_details}>
			                       <option value='<{$schedule_details.show_id}>_<{$movie.city_id}>'><{convertDateTime lang=$lang date=$schedule_details.show_date}></option>
			                  <{/foreach}>
			                <{/foreach}>
			                </select>
						</td>
						<td rowspan="3" valign="top">
							<table>
								<tr>
									<td>
										<{$LANG.index_number}>：
									</td>
									<td>
										<{if $movie.score <>''}>
											<span class="moviemark"><{$movie.score}></span>
										<{else}>
											<span class="moviemark">0</span>
										<{/if}> 
									</td>
								</tr>
								<tr>
									<td colspan='2'>
									<{include file="$smarty_root/score/score_html.tpl" }>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td colspan="3">
							<img src="<{$rootpath}>/images/spacer.gif"  height="10">
						</td>
					</tr>
					<tr valign='top'>
						<td colspan="3">
						<a href='#' name='movie_d_<{$movie.activity_id}>' class='goto_show'><img src="<{$rootpath}>/images/<{$lang}>/show/button_buy_now_blue.gif"  border="0"></a>
						</td>
						
					</tr>
				</table>
				</td>
	</tr>
	</table>
	</td>
	</tr>


	<{/foreach}>
	<tr>
		<td>&nbsp;
			
		</td>
	</tr>
 	<{if $total_page >0}>
	<tr>
		<td valign="top">
			<table border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td width="75">
					<table width="66" border="0" cellspacing="0" cellpadding="0">
						<tr>
						    <{if $total_page >1}>
								<td width="66" height="23" align="center" background="<{$rootpath}>/images/button_bg_gary.gif">
					              	<a href="#local" class="blklink pageno2" id='pageback'><{$LANG.back}></a>
								</td>
							<{/if}>
						</tr>
					</table>
				</td>
				<td>
					<{if $total_page >1}>	
						<table border="0" cellspacing="0" cellpadding="0">
							<tr>
								<{section name=loop loop=$total_page}> 
								<td width="25" height="23" align="center" valign="middle">
									<{if $param_list.page_from == $smarty.section.loop.index+1 }>
									<span class="pageno_on"  id="<{$smarty.section.loop.index+1}>"><{$smarty.section.loop.index+1}></span>
									<{else}>
									<a class="pageno" href="#local" id="<{$smarty.section.loop.index+1}>" onclick="changePageNum(<{$smarty.section.loop.index+1}>)" ><{$smarty.section.loop.index+1}></a>
									<{/if}>
								</td>
								<td>
									<img src="<{$rootpath}>/images/spacer.gif" width="8" height="8">
								</td>							
								<{/section}>	
							</tr>
						</table>
					<{/if}>
				</td>
				<td width="75" align="right">
					<table width="66" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<{if $total_page >1}>	  
								<td width="66" height="23" align="center" background="<{$rootpath}>/images/button_bg_gary.gif">
					              	<a href='javascript:void(0);' class="blklink pageno2" id='pagenext'><{$LANG.next}></a>	  
								</td>
							 <{/if}>
						</tr>
					</table>
				</td>
			</tr>
			</table>
		</td>
	</tr>
	<{/if}>
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
			var ids = show_str.split("_");
			var str='choose_seat.php?show_id='+ids[0]+'&city_id='+ids[1];
			//alert(str);
			window.location.href=str;
		});
		
		
		$("#pageback").click(function(){
			if(<{$param_list.page_from}> > 1){
				var page_no=<{$param_list.page_from}>-1;
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
			if(<{$param_list.page_from}> < <{$total_page}>){
				var page_no=<{$param_list.page_from}>+1;
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