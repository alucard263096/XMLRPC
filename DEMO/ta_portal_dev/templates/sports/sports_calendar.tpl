<{include file="$smarty_root/header.tpl" }>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="730" valign="top">
        <table width="730" border="0" cellspacing="0" cellpadding="0">
				 <tr>
		            <td height="30" valign="top" background="<{$rootpath}>/images/line_sports_bg.gif">
		            	<img src="<{$rootpath}>/images/<{$lang}>/sports_channel.gif">
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
		          <tr>
		            <td height="10" valign="top"><img src="<{$rootpath}>/images/spacer.gif" width="10" height="10"></td>
		          </tr>
		          <!--<{foreach item=imageList from=$imageList}>
	          		<tr>
	                	<td><a href="<{$imageList.url}>"><img src="<{$rootpath}>/images<{$imageList.path}>" border="0"></img></a>&nbsp;</td>
	                </tr>
	          	  <{/foreach}>//-->
		</table>
		
			<table width="730" border="0" cellspacing="0" cellpadding="0">
				 
		         
		          <tr>
		          <td>
				  
				  <div class="index_cont">

<!-- 大图 Start -->
<div class="hot_show sports">

<div class="sports_hot_pic">
<a href="#">亚运官方网站</a>

<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="257" height="136"> 
    <param name="movie" value="http://swf.ws.126.net/2010/yayun/lh/countDown.swf" /> 
    <param name="quality" value="high" /> 
    <param name="wmode" value="transparent" />    
    <embed src="http://swf.ws.126.net/2010/yayun/lh/countDown.swf" quality="high" wmode="transparent" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="257" height="136"></embed> 
</object>
</div>





</div>
				 
				  
				  
			<div class="sports_list">


	
	<div class="play_time">
    

     <{include file="$smarty_root/sports/$lang/Untitled-$dd.html" }>



</div>
				  
				  
				  </td>
		          </tr>
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