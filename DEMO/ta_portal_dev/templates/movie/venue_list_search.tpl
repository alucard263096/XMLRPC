<table width="730" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td valign="middle">
                <div id="ele5" class="district_div">
	                <span>
						<span class="selecttext"><{$district_name}></span>
						<img src="<{$rootpath}>/images/icon_select_arrow.gif" border="0" align="absmiddle">
					</span>
				</div>
				<div class="clr"></div>
				<div id="blk5" class="blk" style="display:none;" >
				<div class="head"><div class="head-right"></div></div>
				<div class="main"> 
					<a href="javascript:void(0)" id="close5" class="closeBtn"><{$LANG.close}></a>   
					<ul>
					<li><a href="javascript:void(0)" onclick="changeDistrict('-1')"><{$LANG.all}></a></li>
					<{foreach item=district from=$district_list}>
						<li><a href="javascript:void(0)" onclick="changeDistrict(<{$district.district_id}>)"><{$district.long_name}></a></li>
					<{/foreach}>
				</ul>
				</div>
                </td>
                <td height="35"><table border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="120" height="20" background="<{$rootpath}>/images/search_bg.gif"><input name="textfield2" type="text" class="formsearch130" id="keyword"></td>
                    <td><a href="javascript:void(0)" onclick="searchMovie()"><img src="<{$rootpath}>/images/button_quick_search.gif" width="30" height="20" border="0"></a></td>
                  </tr>
                </table></td>
                <td>&nbsp;</td>
                <td width="110"><label>
                	<select name="select2" class="form100px" id="venue"  onChange="changeVenue(this)">
		    			<option value="v-1"><{$LANG.venue_list.cinemas}></aption>	
		    			<{foreach item=circuit from=$circuit_venue_list}>
				      		<option value="c<{$circuit.organizer_id}>" style="background-color:#9E0D44 ;"><{$circuit.name}></option>
					        <{foreach item=venue2 from=$circuit.venue_details}>				        		
					        		<option value="v<{$venue2.venue_id}>"><{$venue2.name}></option>
					        <{/foreach}>
				   		<{/foreach}>
				   		</select>
                </label></td>
                <td width="130"><label>
                	<select name="select3" class="form140px" id="activity_id"  style="font-size:12px"   onChange="changeMovie()">
				        <option value="-1"><{$LANG.venue_list.selectbroadcastmovie}></aption>	
				        <{foreach item=movie from=$movie_list }>					        	
							<option value="<{$movie.activity_id}>"><{$movie.name}></option>
					  	<{/foreach}>	
					  	</select>
                </label></td>
                <td width="20"><img src="<{$rootpath}>/images/spacer.gif" width="20" height="1"></td>
              </tr>
</table>
<script type="text/javascript">
		var	PopupLayer5= new PopupLayer({trigger:"#ele5",popupBlk:"#blk5",closeBtn:"#close5",useFx:true});
</script>