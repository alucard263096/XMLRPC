<{include file="$smarty_root/header.tpl" }>
<link type="text/css" href="<{$rootpath}>/css/accordion_customer_theme.css" rel="stylesheet" />
<script language="javascript"  type="text/javascript"   src="<{$rootpath}>/js/popup_layer.js"></script>
<link href="<{$rootpath}>/css/star.css" rel="stylesheet" type="text/css" />
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="730" valign="top">
			<table width="730" border="0" cellspacing="0" cellpadding="0">
				 <tr>
		            <td height="30" valign="top" background="<{$rootpath}>/images/line_show_bg.gif">
		            	<img src="<{$rootpath}>/images/<{$lang}>/show_channel.gif">
		            </td>
		          </tr>
		          <tr>
		            <td valign="top">&nbsp;</td>
		          </tr>
		          <tr>
		            <td valign="top" id='banner_td'>
						<{*include file="$smarty_root/event_common/banner.tpl" *}>
		            </td>
		          </tr>
		          <tr>
		            <td height="10" valign="top"><img src="<{$rootpath}>/images/spacer.gif" width="10" height="10"></td>
		          </tr>
		          <tr>
		            <td height="35" background="<{$rootpath}>/images/bg_bar_purple.gif">
		            	<div id="div2_load" align="left"  class="div_load2">
							<img src="<{$rootpath}>/images/loading.gif"/>
						</div>
						<div id="div2" >
						</div>
					</td>
		          </tr>
				  <tr>
					<td valign="top">
						<div id="div3_load" align="left"  class="div_load">
						<img src="<{$rootpath}>/images/loading.gif"/>
						</div>
						<div id="div3" >
						</div>
				  	</td>
				  </tr>
		</table>
        </td>
        <td width="8"><img src="<{$rootpath}>/images/spacer.gif" width="8" height="1"></td>
        <td width="222" valign="top">
        
        
        <!--==============//////    Start Right Adv Banner  \\\\\\=========== -->
         <{include file="$smarty_root/event_common/box.tpl" }>
         <{include file="$smarty_root/event_common/banner_list.tpl" }>
        <!--==============//////    End Right Adv Banner  \\\\\\=========== -->        </td>
      </tr>
    </table>

<script type="text/javascript">	
	var PopupLayer1 = new PopupLayer({trigger:"#ele1",popupBlk:"#blk1",closeBtn:"#close1",useFx:true});
	$(function() {		
		$('#div2').css('display','none');
		$('#div2_load').css('display','');
		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		$('#div2').load("hot.php", {"action":"resetLocation"}, function() {
			$('#div2').css('display','');
			$('#div2_load').css('display','none');			
		    
		});
		
	});
		<{include file="$smarty_root/score/score_js.tpl" }>

	
	function searchMovie(){
		resetCriteria();
	}
	
	
	
	
</script>

<{include file="$smarty_root/footer.tpl" }>