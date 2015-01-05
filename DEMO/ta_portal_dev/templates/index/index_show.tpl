						<table width="699" border="0" cellspacing="0" cellpadding="0">
		                <tr>
		                  <td width="557" height="307" align="center" style="background-image:url(<{$rootpath}>/images/movie_bg.jpg); background-repeat:no-repeat;">
		                  <table width="557" height="307" border="0" cellspacing="0" cellpadding="0">
		                    <tr>
		                      <td align="center" style="padding-bottom: 5px;">
		                      	<img src="<{$resource_path}><{$detail_data.poster}>" id="activity_poster" width="537" height="287"></td>
		                    </tr>
		                  </table></td>
		                  <td width="13" valign="top"><table width="13" border="0" cellspacing="0" cellpadding="0">
		                  <{foreach key=k from=$tab_data item=data1}>
		                  	<tr>
		                      <td height="70" align="center"><img src="images/spacer.gif" width="13" height="70" name="m<{$k}>"></td>
		                    </tr>
		                    <tr>
		                      <td height="10"><img src="images/spacer.gif" width="1" height="10"></td>
		                    </tr>
		                  <{/foreach}>
		                  </table></td>
		                  <td width="129" align="right" valign="top"><table width="123" border="0" cellspacing="0" cellpadding="0">
		                  <{foreach key=k2 from=$tab_data item=data2}>
		                  	<tr>
		                  		<td height="70" align="center" onMouseOver="this.style.background='#176ee6'" onMouseOut="this.style.background='#999999'" bgcolor="#999999" style="cursor:hand"><img src="<{$resource_path}><{$data2.poster}>" width="119" height="67"  border="0" onClick="changeActivity('<{$param_list.tab}>','<{$data2.id}>','<{$resource_path}><{$data2.poster}>')" onMouseOver="MM_swapImage('m<{$k2}>','','images/movie_arrow.gif',1)" onMouseOut="MM_swapImgRestore()"></td>
		                    </tr>
		                    <{if $k2 <3}>
		                    <tr>
		                      <td height="10"><img src="images/spacer.gif" width="1" height="10"></td>
		                    </tr>
		                    <{/if}>
		                  <{/foreach}>
		                  </table></td>
		                  </tr>
		              </table>