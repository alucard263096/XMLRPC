<{include file="$smarty_root/header.tpl" }>
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=<{$google_key}>" type="text/javascript"></script>
<script type="text/javascript" language="JavaScript" src="<{$rootpath}>/js/jquery.jmap.min-r72.js"> </script>
<link type="text/css" href="<{$rootpath}>/css/core.css" rel="stylesheet" />
<script>
	
	
	function changeMovie() {
	  window.location.href='detail.php?activity_id='+$("#activity_id").val();
	}
	
	function changeMovieDetailDiv(id)
	{
		$(".ptab").hide();
		$("#ptab_"+id).show();
		$(".submenu .a").show();
		$(".menu"+id+" .a").hide();
		
	}	
	
	
	$(document).ready(function(){
		changeMovieDetailDiv(1);
		
		$(".goto_show").click(function(){
			var show_str=$("#"+$(this).attr("name")).val();
			var ids = show_str.split("_");
			var str='choose_seat.php?show_id='+ids[0]+'&city_id='+ids[1];
			//alert(str);
			window.location.href=str;
		});
	});
</script>
<{foreach item=activity from=$activity_detail}>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td>
			<table width="960" >
				<tr height="30" >
					<td id='name_td' >
						<span id="showOfNamed" class="showname_20px_p" ><{$activity.name}></span>
					</td>
					<td valign="top"  background="<{$rootpath}>/images/line_show_bg.gif">
					</td>
				</tr>
			</table>
		</td>
  	</tr>
  	<script>
  		$(document).ready(function(){
  			$("#name_td").width($("#showOfNamed").width());
  		});
  	</script>
  	<tr>
  		<td align='center' background='<{$rootpath}>/images/concert_detail_bg.jpg' >
  			<{include file="$smarty_root/show/detail_activity.tpl" }>
  		</td>
  	</tr>
  	<tr height='15px'>
  		<td></td>
  	</tr>
  	<!--
  	<tr>
  		<td>
  			<table width="960" border="0" cellspacing="0" cellpadding="0">
		      <tr>
		        <td width="182" valign="top"><div class="menu1"><img src="<{$rootpath}>/images/<{$lang}>/concert_menu00.gif"></div></td>
		        <td valign="top" width="2"><img src="<{$rootpath}>/images/concert_2px.gif"></td>
		        <td width="90"><div class="menu1 submenu"><a href="javascript:void(1)" onclick="changeMovieDetailDiv('1')"><img style="opacity: 1;" src="<{$rootpath}>/images/<{$lang}>/concert_menu01_off.gif" alt="" class="a" border="0"><img src="<{$rootpath}>/images/<{$lang}>/concert_menu01_off.gif" alt="" border="0" class="b"></a></div></td>
		        <td background="<{$rootpath}>/images/concert_menu_bg.gif" valign="top" width="2"></td>
		        <td background="<{$rootpath}>/images/concert_menu_bg.gif" width="90"></td>
		        <td background="<{$rootpath}>/images/concert_menu_bg.gif" valign="top" width="2"></td>
		        <td background="<{$rootpath}>/images/concert_menu_bg.gif" width="90"></td>
		        <td background="<{$rootpath}>/images/concert_menu_bg.gif" valign="top" width="2"></td>
		        <td background="<{$rootpath}>/images/concert_menu_bg.gif" width="90"></td>
		        <td background="<{$rootpath}>/images/concert_menu_bg.gif" valign="top" width="2"></td>
		        <td background="<{$rootpath}>/images/concert_menu_bg.gif" width="90"></td>
		        <td background="<{$rootpath}>/images/concert_menu_bg.gif">&nbsp;</td>
		      </tr>
            </table>
  		</td>
  	</tr>//-->
  	<tr>
  		<td>
  			<table width="100%" border="0" cellspacing="0" cellpadding="0">
  				<tr>
  					<td><img src="<{$rootpath}>/images/spacer.gif" width="720" height="1"></td>
  					<td><img src="<{$rootpath}>/images/spacer.gif" width="27" height="1"></td>
  					<td><img src="<{$rootpath}>/images/spacer.gif" width="213" height="1"></td>
  				</tr>
  				<tr height='10px;'>
  					<td></td>
  				</tr>
  				<tr>
  					<td  valign='top'>
  					<div id="ptab_1" class='ptab' style='display:none;'>
  						<{include file="$smarty_root/show/detail_description.tpl" }>
  						<{include file="$smarty_root/show/detail_venue.tpl" }>
  					</div>
  					<div id="ptab_2" class='ptab' style='display:none;'>
  						
  					</div>
  					<div id="ptab_3" class='ptab' style='display:none;'>
  					
  					</div>
  					<div id="ptab_4" class='ptab' style='display:none;'>
	  				
  					</div>
  					<div id="ptab_5" class='ptab' style='display:none;'>
  					
  					</div>
  					
  					
  					</td>
  					<td>
  					</td>
  					<td  valign="top">
				        <!--==============//////    Start Right Adv Banner  \\\\\\=========== -->
				        <{include file="$smarty_root/event_common/box.tpl" }>
			        <!--==============//////    End Right Adv Banner  \\\\\\=========== -->        
			        </td>
			       
  				</tr>
  				
  			</table>
  		</td>
  	</tr>
</table>
<{/foreach}>








<{include file="$smarty_root/footer.tpl" }>