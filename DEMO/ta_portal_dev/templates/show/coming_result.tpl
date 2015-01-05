<table width="730" border="0" cellspacing="0" cellpadding="0">
	<{foreach from=$movie_full_list item=movie}>
	<tr>
		<td valign="top">&nbsp;</td>
		<td>&nbsp;</td>
		<td valign="top">&nbsp;</td>
	</tr>
	<tr>
		<td  valign="top" style="padding-right: 30px;">
			<{if $movie.poster <>''}>
				<a href="movie_detail.php?city_id=<{$param_list.city_id}>&activity_id=<{$movie.activity_id}>" >
					<img src="<{$resource_path}><{$movie.poster}>" border="0"/>
				</a>
	  	 	<{/if}>  
		</td>
		<td width="90%" valign="top">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
   					<td colspan="2">
   						<a class="textredbold" href="detail.php?city_id=<{$param_list.city_id}>&activity_id=<{$movie.activity_id}>" ><span class='showname_20px'><{$movie.name}></span></a>
   					</td>        					
   				</tr>
				<tr>
					<td> 
   						<span class="textbold"><{$LANG.coming_show.ticket_date}><{convertDate lang=$lang date=$movie.ticket_date}></span>
   					</td>
   					<td rowspan='2' align='right' valign='top'>
   					<{include file="$smarty_root/event_common/activity_alter.tpl" }>
   					</td>
				</tr>
				<tr>
					<td> 
   						<span class="textbold"><{$LANG.coming_show.venue}>
   						<{foreach from=$movie.venue item=rs}>
   						<{$rs.name}>
   						<{/foreach}>
   						</span>
   					</td>
				</tr>
				<tr>
					<td colspan="2">
						<span class="textbold"><{$LANG.coming_movie.official_website}>：</span><a href="<{$movie.website}>" target="_new"><{$movie.website}></a>
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td colspan="2" valign="top" style="word-break:break-all;white-space:normal;word-wrap:break-word;">
						<span class="textbold"><{$LANG.coming_show.introduction}></span><br><{$movie.description}>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td height="30">&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>

	
	<{/foreach}>
	<tr>
		<td>
			&nbsp;
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
					              	<a href="javascript:void(0)" class="blklink" onclick="movieBackPage()"><{$LANG.back}></a>
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
										<a class="pageno" href="#" id="<{$smarty.section.loop.index+1}>" onclick="changePageNum(<{$smarty.section.loop.index+1}>)" ><{$smarty.section.loop.index+1}></a>
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
					              	<a href="javascript:void(0)" class="blklink" onclick="movieNextPages()"><{$LANG.next}></a>	  
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

<script type="text/javascript">	
function changePageNum(page_no){
		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		var url = "coming.php";
		$('#div3').load(url, {"action":"resetCriteria","page_no":page_no}, function() {
			$('#div3').css('display','');
			$('#div3_load').css('display','none');
		});
	}
	
	function movieNextPages(){
		if(<{$param_list.page_from}> < <{$total_page}>){
			var page_no=<{$param_list.page_from}>+1;
			$('#div3').css('display','none');
			$('#div3_load').css('display','');
			var url = "coming.php";
			$('#div3').load(url, {"action":"resetCriteria","page_no":page_no}, function() {
				$('#div3').css('display','');
				$('#div3_load').css('display','none');
			});
		}
	}
	
	function movieBackPage(){
		if(<{$param_list.page_from}> > 1){
			var page_no=<{$param_list.page_from}>-1;
			$('#div3').css('display','none');
			$('#div3_load').css('display','');
			var url = "coming.php";
			$('#div3').load(url, {"action":"resetCriteria","page_no":page_no}, function() {
				$('#div3').css('display','');
				$('#div3_load').css('display','none');
			});
		}
	}
	
	
	<{include file="$smarty_root/event_common/activity_alter_js.tpl" }>
	
</script>