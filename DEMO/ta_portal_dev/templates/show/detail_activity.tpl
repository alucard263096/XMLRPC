<table width="930"  height='320' >
  				<tr>
  					<td align='left'>
  						<select name="select" class="infoform200px" style='width:537px;' id="activity_id" onChange="changeMovie()">
				          <option value="-1"><{$LANG.show_detail.select_show}></option>
				          <{foreach item=movielist from=$movie_list}>
				               <option value="<{$movielist.activity_id}>"><{$movielist.name}></option>
				          <{/foreach}>
				        </select>
  					</td>
  					<td rowspan='2'>
  						<div class='show_detail_bg' style='width:300;height:260;' >
  							<table style='padding:10px;'>
	  							<tr valign='top'>
	  								<td class='showname_20px_wb'>
	  								<{$activity.name}>
	  								</td>
	  							</tr>
	  							<tr>
	  								<td style='color:#ffffff;'>
	  								<{$LANG.show_detail.show_date}><span id='act_show_date'><{convertDate lang=$lang date=$activity.start_date}></span>
	  								</td>
	  							</tr>
	  							<tr id='clo_tr'>
	  								<td style='color:#ffffff;'>
	  								<{$LANG.show_detail.close_date}><span id='act_close_date'><{convertDate lang=$lang date=$activity.end_date}></span>
	  								</td>
	  							</tr>
	  							<script>
	  								$(document).ready(function(){
	  									if($("#act_show_date").text()==$("#act_close_date").text())
	  									{
	  										$("#clo_tr").hide();
	  									}
	  								});
	  							</script>
	  							<tr>
	  								<td style='color:#ffffff;'>
	  								<{$LANG.show_detail.venue}>
	  								<{foreach from=$activity.venue item=rs }>
	  								<{$rs.name}> 
	  								<{/foreach}>
	  								</td>
	  							</tr>
	  							<!--<tr>
	  								<td style='color:#ffffff;'>
	  								<{$LANG.show_detail.organizers}><span><{$activity.organizer}></span>
	  								</td>
	  							</tr>
	  							<tr>
	  								<td style='color:#ffffff;'>
	  								<{$LANG.show_detail.co_organizers}><span><{$activity.co_organizers}></span>
	  								</td>
	  							</tr>//-->
	  							<tr>
	  								<td><img src="<{$rootpath}>/images/spacer.gif" height="20"/></td>
	  							</tr>
	  							<tr>
	  								<td>
	  								<select id='movie_d'>
	  								<{foreach item=movie from=$show_list}>
	  									<{foreach item=venue_item from=$movie.venue_details}>
	  										<{foreach from=$venue_item.schedule_details item=schedule_details}>
	  										<option value='<{$schedule_details.show_id}>_<{$movie.city_id}>'><{convertDateTime lang=$lang date=$schedule_details.show_date}></option>
	  										<{/foreach}>
	  									<{/foreach}>
	  								<{/foreach}>
	  								</select>
	  								</td>
	  							</tr>
	  							<tr>
	  								<td><img src="<{$rootpath}>/images/spacer.gif" height="20"/></td>
	  							</tr>
								<tr>
									<td>
									<a href='#' name='movie_d' class='goto_show'>
										<img src="<{$rootpath}>/images/<{$lang}>/button_buy_now_blue.gif"  border="0">
									</a>
									</td>
								</tr>
  							</table>
  						</div>
  					</td>
  				</tr>
  				<tr>
  					<td valign='top'>
  					<{if $activity.path <>''}>
						<img src="<{$resource_path}><{$activity.path}>" border="0"/>
					<{/if}>  
  					</td>
  				</tr>
  			</table>