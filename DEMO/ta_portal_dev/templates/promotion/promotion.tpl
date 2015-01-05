<{include file="$smarty_root/header.tpl" }>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="730" valign="top">
			<table width="730" border="0" cellspacing="0" cellpadding="0">
				 <tr>
		            <td height="30" valign="top" background="<{$rootpath}>/images/line_offer_bg.gif">
		            	<img src="<{$rootpath}>/images/<{$lang}>/offer_channel.gif">
		            </td>
		          </tr>
		          <tr>
		            <td valign="top">&nbsp;</td>
		          </tr>
		          <tr>
		            <td valign="top">
						<{include file="$smarty_root/event_common/banner.tpl" }>
		            </td>
		          </tr>
		          <{foreach item=imageList from=$imageList}>
	          		<tr>
	                	<td><a href="<{$imageList.url}>"><img src="<{$rootpath}>/images<{$imageList.path}>" border="0"></img></a>&nbsp;</td>
	                </tr>
	          	  <{/foreach}>
		</table>
        </td>
        <td width="25"><img src="<{$rootpath}>/images/spacer.gif" width="25" height="1"></td>
        <td width="205" valign="top">
        
        
        <!--==============//////    Start Right Adv Banner  \\\\\\=========== -->
        <{include file="$smarty_root/event_common/box.tpl" }>
        <{include file="$smarty_root/event_common/banner_list.tpl" }>
        <!--==============//////    End Right Adv Banner  \\\\\\=========== -->        </td>
      </tr>
    </table>


<{include file="$smarty_root/footer.tpl" }>