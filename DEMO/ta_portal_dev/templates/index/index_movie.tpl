					<table width="605" border="0" cellspacing="0" cellpadding="0">
		                <tr>
		                  <td width="483" height="278" align="center" background="images/movie_bg.jpg"><table width="457" border="0" cellspacing="0" cellpadding="0">
		                    <tr align="center">
		                      <td><img src="<{$resource_path}><{$detail_data.poster}>" id="activity_poster" width="457" height="252"></td>
		                    </tr>
		                  </table></td>
		                  <td width="13" valign="top">
		                  <table width="13" border="0" cellspacing="0" cellpadding="0">
		                  <{foreach key=k from=$tab_data item=data1}>
		                  	<tr>
		                      <td height="60" align="center"><img src="images/spacer.gif" width="13" height="60" name="m<{$k}>"></td>
		                    </tr>
		                    <tr>
		                      <td height="10"><img src="images/spacer.gif" width="1" height="10"></td>
		                    </tr>
		                  <{/foreach}>
		                  </table>
		                  </td>
		                  <td width="109" align="right" valign="top"><table width="103" border="0" cellspacing="0" cellpadding="0">
		                  <{foreach key=k2 from=$tab_data item=data2}>
		                  	<tr>
		                  		<td height="60" align="center" onMouseOver="this.style.background='#176ee6'" onMouseOut="this.style.background='#999999'" bgcolor="#999999">
		                  		<div class='btn'><img src="<{$resource_path}><{$data2.poster}>" width="99" height="56"  border="0" onClick="changeActivity('<{$param_list.tab}>','<{$data2.id}>','<{$resource_path}><{$data2.poster}>')" onMouseOver="MM_swapImage('m<{$k2}>','','images/movie_arrow.gif',1)" onMouseOut="MM_swapImgRestore()"></div>
		                  		</td>
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