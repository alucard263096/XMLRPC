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
	  	 	<br/>
	  	 	<img src="<{$rootpath}>/images/icon_play.gif" width="20" height="20" align="absmiddle"> <a href="#" class="blklink"><{$LANG.coming_movie.trailer_enjoy>}></a>
		</td>
		<td width="90%" valign="top">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
   					<td colspan="2">
   						<a class="textredbold" href="movie_detail.php?city_id=<{$param_list.city_id}>&activity_id=<{$movie.activity_id}>" ><{$movie.name}></a> <span class="movietitle"><a href="#" class="garylink"><{$LANG.coming_movie.film_review>}></a></span>
   					</td>
   					<td>
   						<{include file="$smarty_root/event_common/activity_alter.tpl" }>
   					</td>        					
   				</tr>
				<tr>
					<td> 
   						<span class="textbold"><{$LANG.movie_detail.show_date}></span>:<{$movie.ticket_date}>&nbsp;&nbsp;&nbsp;&nbsp;
   						<span class="textbold"><{$LANG.coming_movie.length}>:</span><{$movie.duration}><{$LANG.coming_movie.minutes}>&nbsp;&nbsp;<span class="textbold">&nbsp;&nbsp;</span>
   					</td>
				</tr>
				<tr>
					<td>
						<span class="textbold"><{$LANG.coming_movie.official_website}>:</span><{$movie.website}>
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td valign="top" class="movie_description">
						<span class="textbold"><{$LANG.movie_detail.movie_introduction}>:</span><br><{$movie.description}>
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
	<tr>
		<td background="<{$rootpath}>/images/bg_bar_red_20h.gif"><img src="<{$rootpath}>/images/bg_bar_red_20h.gif" width="4" height="20"></td>
		<td background="<{$rootpath}>/images/bg_bar_red_20h.gif">&nbsp;</td>
		<td background="<{$rootpath}>/images/bg_bar_red_20h.gif">&nbsp;</td>
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
								<td width="66" height="23" align="center" >
					              	<a href="javascript:void(0)" class="blklink  pageno2" onclick="movieBackPage()"><{$LANG.back}></a>
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
								<td width="66" height="23" align="center" >
					              	<a href="javascript:void(0)" class="blklink  pageno2" onclick="movieNextPages()"><{$LANG.next}></a>	  
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
var remindDiv;
function changePageNum(page_no){
		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		var url = "coming_movie.php";
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
			var url = "coming_movie.php";
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
			var url = "coming_movie.php";
			$('#div3').load(url, {"action":"resetCriteria","page_no":page_no}, function() {
				$('#div3').css('display','');
				$('#div3_load').css('display','none');
			});
		}
	}
	
	<{include file="$smarty_root/event_common/activity_alter_js.tpl" }>
	
</script>