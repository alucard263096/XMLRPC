<{foreach item=list from=$hotel_list}>
<table width="730" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td width="1" valign="top"><img src="<{$rootpath}>/images/spacer.gif" height="155" width="1"></td>
		<td width="180" align="center" valign="top" style="padding-top:10px; background-image:url('<{$rootpath}>/images/hotel/photo_frame_bg.gif');background-repeat:no-repeat;" valign="top">
			<img src="<{$rootpath}>/images/hotel/<{$list.image}>" width="160" height="130" border="0" />
			<!-- Image address -->
		</td>
		<td width="549" valign="top">
			<table border="0" width="100%" cellspacing="2" cellpadding="3" style="background-image:url('<{$rootpath}>/images/hotel/title_price_bg.gif');background-repeat:no-repeat;background-position: left top;">
				<tr>
					<td width="350" style="color: #FFFFFF; font-size: 20px; line-height: 20px; padding: 7px 0px 10px 15px;"><{$list.hotel_name}></td>
					<td width="200" rowspan="3">
						<table border="0" width="100%" cellspacing="0" cellpadding="0">
							<tr>
								<td style="padding-top: 5px; padding-right: 30px; text-align: center;">
									<span style="font-size: 14px; line-height: 20px; color: #FFFFFF;"><{if $list.price neq 0}><{$list.currency_name}><{/if}></span>
									<{if $list.price eq 0}><span style="font-size: 18px; line-height: 20px; color: #FFFFFF;"><{$LANG.hotel_list.zero_price}></span><{else}><span style="font-size: 36px; line-height: 40px; color: #FFFFFF;"><{$list.price}></span><{/if}>
									<span style="font-size: 14px; line-height: 20px; color: #FFFFFF;"><{if $list.price neq 0}><{$LANG.hotel_list.base}><{/if}></span>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td height="30" valign="middle" colspan="2">
						<strong><{$LANG.hotel_list.star}> : </strong>&nbsp;
						<span id="score<{$list.hotel_id}>"></span>
						<script type="text/javascript">
						var score='<{$list.star}>';
						var hotel_id='<{$list.hotel_id}>';
						if(score== ''){
							score=0;
						}
						$("#score"+hotel_id).studyplay_star({MaxStar:5,CurrentStar:score,Enabled:false,id:hotel_id},function(value){});
                      </script>
                    </td>
				</tr>
				<tr>
					<td colspan="2"><strong><{$LANG.hotel_list.address}> : </strong><{$list.hotel_address}>&nbsp;</td>
				</tr>
				<tr>
					<td colspan="2">
						<table width="400">
							<tr>
								<td width="400" style="line-height: 18px; text-align: justify;"><{$list.hotel_description}></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td colspan="3"><img src="<{$rootpath}>/images/spacer.gif" height="10"></td>
	</tr>
	<tr>
		<td colspan="3"><img src="<{$rootpath}>/images/separator_691px.jpg"></td>
	</tr>
	<tr>
		<td  colspan="3"><img src="<{$rootpath}>/images/spacer.gif" height="22"></td>
	</tr>
</table>
<{/foreach}>

<table width="730" border="0" cellspacing="0" cellpadding="0">
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
					              	<a href="javascript:void(0)" class="blklink pageno2" onclick="movieBackPage()"><{$LANG.back}></a>
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
								<td width="25" height="23" align="center">
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
								<td width="66" height="23" align="center">
					              	<a href="javascript:void(0)" class="blklink pageno2" onclick="movieNextPages()"><{$LANG.next}></a>
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
<script>
	function changePageNum(page_no){
		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		var url = "hotel_list.php";
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
			var url = "hotel_list.php";
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
			var url = "hotel_list.php";
			$('#div3').load(url, {"action":"resetCriteria","page_no":page_no}, function() {
				$('#div3').css('display','');
				$('#div3_load').css('display','none');
			});
		}
	}
</script>	
	
	
	