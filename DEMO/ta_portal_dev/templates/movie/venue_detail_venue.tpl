<table border="1" cellpadding="1" cellspacing="1" style="width: 900px;">
	<tr>
		<td colspan="2" valign="top">
			<{$activity_detail.detail.name}>	
			<hr width="600">
		</td>
	</tr>
	<tr>		
		<td>
	       	<select id="venue"  onChange="changeVenue()">
				<option value="v-1"><{$LANG.venue_detail.selectmovie}></aption>	
				<{foreach item=circuit from=$circuit_venue_list}>		      		
			        <{foreach item=venue from=$circuit.venue_details}>				        		
			        		<option value="v<{$venue.venue_id}>"><{$venue.name}></option>
			        <{/foreach}>
		   		<{/foreach}>
	   		</select>
		</td>
		<td>
			<table>
				<tr>
					<td>
						<{$LANG.venue_detail.address}>：<{$activity_detail.detail.address}>	
					</td>					
				<tr>
				<tr>
					<td>
						<{$LANG.venue_detail.phone}>：<{$activity_detail.detail.phone}>	
					</td>					
				<tr>
				<tr>
					<td>
						<a href="javascript:void(0)" style="color:#333;display:block;">
							<div id="ele6" style="background:#969696;width:100px;text-align:center;">
								<{$LANG.venue_detail.description}>
							</div>
						</a>
						<div class="clr"></div>
				        <div id="blk6" class="blk" style="display:none;" >
				            <div class="head"><div class="head-right"></div></div>
				            <div class="main" >	
				            	
				            		<a href="javascript:void(0)" id="close6" class="closeBtn"><{$LANG.close}></a> 
				            	
				                <ul>
				                	<{$activity_detail.detail.description}>	
				                </ul>
				            </div>
				            <div class="foot"><div class="foot-right"></div></div>
				        </div>				
					</td>
				</tr>
			</table>
		</td>
  	</tr>  	
  	<tr>
  		<td>
  			
  			<{if $activity_detail.image <>''}>
		  		<img src="<{$resource_path}><{$activity_detail.image}>" width="100" height="139" />
		  	<{/if}>    
  		</td>
  	</tr>
  	<script type="text/javascript">
        	var PopupLayer6 =new PopupLayer({trigger:"#ele6",popupBlk:"#blk6",closeBtn:"#close6",useFx:true});
    </script>  
</table>