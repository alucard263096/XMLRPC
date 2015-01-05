<{include file="$smarty_root/header.tpl" }>
<link type="text/css" href="<{$rootpath}>/css/accordion_customer_theme.css" rel="stylesheet" />
<script language="javascript"  type="text/javascript"   src="<{$rootpath}>/js/showcase.js"></script>
<script language="javascript"  type="text/javascript"   src="<{$rootpath}>/js/hotelDetail.js"></script>
<script language="javascript"  type="text/javascript"   src="<{$rootpath}>/js/popup_layer.js"></script>
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.8.1/build/calendar/assets/skins/sam/calendar.css">
<script src="http://yui.yahooapis.com/2.8.1/build/yahoo-dom-event/yahoo-dom-event.js"></script>
<script src="http://yui.yahooapis.com/2.8.1/build/calendar/calendar-min.js"></script>
<link href="<{$rootpath}>/css/startcss.css" rel="stylesheet" type="text/css" />
<script src="<{$rootpath}>/js/movie/imgPreview.js"></script> 
<script src="<{$rootpath}>/js/movie/intervalCalendar.js"></script> 

<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td>
 	<div style="width: 900px;display:none">
		<div id="usual1" class="usual" > 
  <ul> 
    <li><a href="#tab1" class="selected">Tab 1</a></li> 
    <li><a href="#tab2">Tab 2</a></li> 
    <li><a href="#tab3">Tab 3</a></li> 
  </ul> 
  <div id="tab1" style="display: block; ">This is tab 1.</div> 
  <div id="tab2" style="display: none; ">More content in tab 2.</div> 
  <div id="tab3" style="display: none; ">Tab 3 is always last!</div> 
</div> 
 	</div>
 	
 	<!--                           main content            -->
 	
 	<div style="width: 1000px;">
 		<br>
 		<div style="text-decoration: none;font-weight: bold;font-size:25px;color:#EE9215;">
 		<{$hotel_detail.name}><br><br>
 		</div>
 
 		<div id="container-1">
            <ul class="tabs-nav">
                <li class="tabs-selected"><a href="#fragment-1"><span><{$LANG.hotel_detail_room.hotel_date}></span></a></li>
                <li class=""><a href="#fragment-2"><span><{$LANG.hotel_detail_room.reservation_room}></span></a></li>
            </ul>
            <div id="fragment-1" class="tabs-container tabs-hide" style="margin:0 auto;">
				<table style="width:100%;" valign="top" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr valign="top" style="height:2px">
						<td colspan="2">
							<hr width="600" align="left">
						</td>
					</tr>
					<tr>
						<td>
							<img style="width:200px;height:200px" src="<{$rootpath}>/images/img_hotel_115x120.jpg"></img>
						</td>
						<td>
							<table>
								<tr valign="top" style="height:100px">
									<td >
										<div id="hotelImg" style="width:600px;height:100%">
										<{foreach item=hotelImage from=$hotel_detail.all_images}>
											<{foreach item=imageDetail from=$hotelImage.image_details}>
												<a href="<{$rootpath}>/<{$imageDetail.path}>" title="<{$imageDetail.name}>" onclick="return false;"><img src="<{$rootpath}>/<{$imageDetail.path}>" width="80" height="80"></img></a>		
											<{/foreach}>
										<{/foreach}>
										</div>
									</td>									
								</tr>
								<tr valign="top" style="height:35px">
									<td>
										<div class="address"><{$LANG.hotel_detail_room.hotel_address}>:<{$hotel_detail.address}></div>
									</td>
								</tr>
								<!--    在這裡顯示配套ｉｃｏｎｓ     -->
								<tr valign="middle" style="height:25px">
									<td>
									<div style="background:#EEEEEE">
										這裡顯示ICONS
									</div>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<img src="<{$rootpath}>/images/movie/spacer.gif" width="1" height="10">
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<div>
								<div class="description"><{$LANG.hotel_detail_room.hotel_all_detail}>:</div>
								<div class="description2">
									<div>
										<{$hotel_detail.description}>
									</div>
								</div>
							</div>
						</td>
					</tr>
				</table>
            </div>
            
            <!--       div2          -->
            <div id="fragment-2" class="tabs-container tabs-hide" style="">
				<table style="width:100%;" valign="top" border="1" align="center" cellpadding="0" cellspacing="0">
					<tr valign="top" style="height:2px">
						<td colspan="2">
							<hr width="600" align="left">
						</td>
					</tr>
					<tr>
						<td>
							<img style="width:200px;height:200px" src="<{$rootpath}>/images/img_hotel_115x120.jpg"></img>
						</td>
						<td>
							<table style="width:600px;height:250px;" border="0">
								<tr  style="height:20px" valign="top"><td class="hotelText1">
								<{$LANG.hotel_detail_room.hotel_name}>：
								</td><td class="hotelText2"><{$hotel_detail.name}></td></tr>
								<tr style="height:20px" valign="top"><td class="hotelText1">
								<{$LANG.hotel_detail_room.hotel_address}>：
								</td><td class="hotelText2"><{$hotel_detail.address}></td></tr>
								<tr style="height:100px;" valign="top"><td class="hotelText1">
								<{$LANG.hotel_detail_room.basic_data}>：
								</td><td class="hotelText2"><{$hotel_detail.description}></td></tr>
								<tr  valign="middle" height="50"><td class="hotelText1">
								<{$LANG.hotel_detail_room.hotel_date}>：</td>
								<td>
								<input type="text" style="width:75px" id="check_in_date" onClick="showDate()" value="<{$param_list.check_in_date}>" readonly/>
						    	<img id="fnb_calendarIcon" src="<{$rootpath}>/images/hotel/calendarIcon.gif" onClick="showDate()" alt="日历"/> 

								<input type="text" style="width:75px" id="check_out_date" onClick="showDate()" value="<{$param_list.check_out_date}>" readonly/>			        	
								<img id="fnb_calendarIcon" src="<{$rootpath}>/images/hotel/calendarIcon.gif" onClick="showDate()" alt="日历"/> 
						    	<div id="cal1Container" style="border-left:1px solid #C94E7C;border-right:1px solid #C94E7C;border-top:1px solid #C94E7C;border-bottom:1px solid #C94E7C;position:relative;background:#fff;z-index:300;position:absolute;text-align:left;display:none;"></div>								
								</td></tr>
							</table>
						</td>
					</tr>
					
					<tr height="30"><td colspan="2"></td></tr><!-- 間隔-->
					<tr>
						<td colspan="2">
								<table>
									<tr>
										<td>
											<!-- 表單-->
											<form id="hotelMsg">
											<table id="form"  border="0" align="center" cellpadding="0" cellspacing="0"　>
											
												<tr ><td colspan="2" class="titleText"><{$LANG.hotel_detail_room.personal_date}>:</td></tr>
												<tr><td colspan="2">
												<table border="0" align="center" cellpadding="0" cellspacing="0">
												<tr><td class="textlen2" ><{$LANG.hotel_detail_room.name}>:</td>
												<td><input style="width:200px;border:2px solid #E67D08"  id="clientName" type="text"  jVal="{valid:function(val){if (val.length < 3) return '×'; else return ''; }}" ><span style="color:red;font-size:15px"></span></td></tr>
												
												<tr><td class="textlen" ><{$LANG.hotel_detail_room.title}>:<td>
												<select id='honorific_id' style="width:200px">
												<{foreach from=$honorific_list item=rs}>
													<option value='<{$rs.honorific_id}>' ><{$rs.name}></option>
												<{/foreach}>
												</select>
												<!--
												<input id="salutation" type="text" style="width:200px"/>
												-->
												</td></td> 
												<td></td></tr>
												
												<tr><td class="textlen"><{$LANG.hotel_detail_room.email}>:<td><input id="email" type="text" style="width:200px" /></td></td> 
												<td></td></tr>
												
												<tr><td class="textlen"><{$LANG.hotel_detail_room.country}>:<td><select id='country' style='width:200px;border:2px solid #E67D08;'><{foreach from=$country_list item=country}><option value='<{$country.country_id}>'><{$country.long_name}></option><{/foreach}></select></td></td> 
												<td></td></tr>
												
												<tr><td class="textlen2"><{$LANG.hotel_detail_room.phone}>:</td> <td><input style="width:200px;border:2px solid #E67D08"  id="phone" type="text" jVal="{valid:function(val){if (val.length < 7) return '×'; else return ''; }}" ></td>
												<td></td></tr>
												
												<tr><td class="textlen"><{$LANG.hotel_detail_room.fax}>:<td><input id="fax" type="text" style="width:200px"/></td></td> 
												<td></td></tr>

												</table>
												</td></tr>
												<!-- 間隔-->
												<tr><td colspan="2"><img src="<{$rootpath}>/images/movie/spacer.gif" width="1" height="30"></td></tr>
	
												<tr><td colspan="2">
											<div>
													<div id="div2_load" align="left" class="div_load" >
													<img src="<{$rootpath}>/images/loading.gif"/>
													</div>
													<div id="div2" ></div>
												</div>
											</form>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
           		 </div>
            	<!-- end fragment-2-->
        	</div> 
        	<!-- end container-1--> 
        	
        	
 		</div>
 		<!-- end first div-->
	</td>
	</tr>
</table>
<!-- dialog div => show the hotel price-->
<div id="sdialog"></div>

<form id="form1" action="hotel_booking.php" method="post" >
	<input type="hidden" name="ref_no" id="ref_no" />
</form>

<{include file="$smarty_root/footer.tpl" }>


<script type="text/javascript">
	
	$(function() {
		new PopupLayer({trigger:"#ele1",popupBlk:"#blk1",closeBtn:"#close1",useFx:true});
		$('#div2').css('display','none');
		$('#div2_load').css('display','');
		$('#div2').load("hotel_detail.php", {"action":"changeDate"}, function() {
			$('#div2').css('display','');
			$('#div2_load').css('display','none');			
		    
		});
	});
	
	
	
	$(function($){  
		$("div#hotelImg a").imgPreview({
    containerID: 'imgPreviewWithStyles',
    imgCSS: {
        height: 300
    },
    onShow: function(link){
        $(link).stop().animate({opacity:0.4});
        $('img', this).css({opacity:0});
    },
    onLoad: function(){
        $(this).animate({opacity:1}, 300);
    },
    onHide: function(link){
        $(link).stop().animate({opacity:1});
    }
	});
});
	$(function(){
		setDateTxt("<{$param_list.check_in_date}>","<{$param_list.check_out_date}>");
		$('#container-1').tabs(2);
	});

	function showDate(){
		$('#cal1Container').toggle();
		var checkInDate = $('#check_in_date').val();
		var checkOutDate = $("#check_out_date").val();
		
		if($("#cal1Container").css("display") == "none" & $.trim(checkInDate) != "" & $.trim(checkOutDate) != ""){		
			$('#div2').css('display','none');
			$('#div2_load').css('display','');
			$('#div2').load("hotel_detail.php", {"action":"changeDate","check_in_date":checkInDate,"check_out_date":checkOutDate}, function() {
				$('#div2').css('display','');
				$('#div2_load').css('display','none');			 
			});
		}
	
	}
</script>






