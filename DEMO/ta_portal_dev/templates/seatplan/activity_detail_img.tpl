<table width="730" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td width="300"  valign="top">
					<table width="300" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td>
								<{if $movie.poster <>''}>
										<img src="<{$resource_path}><{$movie.poster}>" border="0"/>
						  	 	<{/if}>  
							</td>
							<td width="20"><img src="<{$rootpath}>/images/spacer.gif" width="20" height="1"></td>
							<td width="93" valign="top">
								
							</td>
						</tr>
						<tr>
							<td>
								&nbsp;&nbsp;&nbsp;
							</td>
						</tr>
					</table>
				</td>
				<td width="430" valign="top">
				<table width="430" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td width="80"  ><img src="<{$rootpath}>/images/spacer.gif" width="80" height="1"></td>
						<td width="180" ><img src="<{$rootpath}>/images/spacer.gif" width="180" height="1"></td>
						<td width="160" ><img src="<{$rootpath}>/images/spacer.gif" width="160" height="1"></td>
					</tr>
					<tr>
						<td colspan="3">
						<a href="detail.php?city_id=<{$movie.city_id}>&activity_id=<{$movie.activity_id}>" ><span  class="showname_20px"><{$movie.name}></span></a>
						</td>
					</tr>
					<tr class="labelFont">
						<td >
							<{$LANG.hot_movie.city}>
						</td>
						<td colspan="2">
							<{foreach from=$movie.venue_details item=venue_item}>
								<{$venue_item.city_name}>
							<{/foreach}>
						</td>
					</tr>
					<tr class="labelFont">
						<td >
							<{$LANG.hot_movie.venue}>
						</td>
						<td colspan="2">
							<{foreach from=$movie.venue_details item=venue_item}>
								<{$venue_item.venue_name}>
							<{/foreach}>
						</td>
					</tr>
					<tr class="labelFont">
						<td class='result_showdate' id='movie_s_<{$movie.activity_id}>'>
							<{$LANG.hot_movie.show_date}>
						</td>
						<td colspan="2">
							<select name='show_id'  id='movie_d_<{$movie.activity_id}>' class='show_ddl'>
							<{foreach from=$movie.venue_details item=venue_item}>
							 <{foreach from=$venue_item.schedule_details item=schedule_details}>
			                       <option <{if $schedule_details.show_id==$param_list.show_id}>selected<{/if}> value='<{$schedule_details.show_id}>'><{convertDateTime lang=$lang date=$schedule_details.show_date}></option>
			                  <{/foreach}>
			                <{/foreach}>
			                </select>
						</td>
					</tr>
					<tr>
						<td colspan="3">
							<img src="<{$rootpath}>/images/spacer.gif" width='1'  height="5">
						</td>
					</tr>
					<tr>
						<td colspan="3">
							<img src="<{$rootpath}>/images/spacer.gif"  height="10">
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
<{include file="$smarty_root/seatplan/login_js.tpl" }>