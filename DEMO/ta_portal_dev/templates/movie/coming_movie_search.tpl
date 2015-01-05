<table width="730" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td>
			<div id="ele5" class="district_div">
				<span class="selecttext"><{$district_name}></span>
				<img src="<{$rootpath}>/images/icon_select_arrow.gif" border="0" align="absmiddle">
			</div>
			
			<div class="clr"></div>
			<div id="blk5" class="blk" style="display:none;" >
			<div class="head"><div class="head-right">
			</div>
			</div>
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
		<td height="35">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					 <td width="120" height="20" background="<{$rootpath}>/images/search_bg.gif">
					 <input name="keyword" type="text" class="formsearch130" id="keyword">
					 </td>
					 <td><a href="#"><img src="<{$rootpath}>/images/button_quick_search.gif" width="30" height="20" border="0" onclick="searchMovie()"></a></td>			        		
				</tr>
			</table>
		</td> 
		<td>&nbsp;</td>
		<td width="110" align="right">	
			<select id="venue"  onChange="changeVenue()">
				<option value="v-1"><{$LANG.hot_movie.cinemas}></aption>	
					<{foreach item=circuit from=$circuit_venue_list}>
					<option value="c<{$circuit.organizer_id}>" style="background-color:#9E0D44 ;"><{$circuit.name}></option>
						<{foreach item=venue from=$circuit.venue_details}>				        		
							<option value="v<{$venue.venue_id}>"><{$venue.name}></option>
						<{/foreach}>
					<{/foreach}>
			</select>
		</td>	
		<td width="130" align="left">
			<select  id="activity_id"  style="font-size:12px"   onChange="changeMovie()">
				<option value="-1"><{$LANG.coming_movie.selectbroadcastmovie}></aption>	
					<{foreach item=movie from=$movie_list }>					        	
						<option value="<{$movie.activity_id}>"><{$movie.name}></option>
					<{/foreach}>	
			</select>			         
		</td>
		<td width="20"><img src="<{$rootpath}>/images/spacer.gif" width="20" height="1"></td>
	</tr>
	<script type="text/javascript">
		var	PopupLayer5= new PopupLayer({trigger:"#ele5",popupBlk:"#blk5",closeBtn:"#close5",useFx:true});
	</script>
</table>
