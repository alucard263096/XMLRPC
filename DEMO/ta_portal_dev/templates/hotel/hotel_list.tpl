<{include file="$smarty_root/header.tpl" }>
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.8.1/build/calendar/assets/skins/sam/calendar.css">
<!-- Dependencies -->
<script src="http://yui.yahooapis.com/2.8.1/build/yahoo-dom-event/yahoo-dom-event.js"></script>
<!-- Source file -->
<script src="http://yui.yahooapis.com/2.8.1/build/calendar/calendar-min.js"></script>

<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="730" valign="top">
			<table width="730" border="0" cellspacing="0" cellpadding="0">				
				<tr>
					<td height="30" valign="top" background="<{$rootpath}>/images/line_hotel_bg.gif">
						<img src="<{$rootpath}>/images/<{$lang}>/hotel_channel.gif">
					</td>			  		
			  	</tr>
			  	<tr>
			  		<td>
			  			<td>&nbsp;</td>
			  		</td>
			  	</tr>
			  	<tr>
					<td valign="top">
						<{include file="$smarty_root/hotel/banner.tpl" }>
					</td>
			  	</tr>
			  	<tr>
			  		<td><img src="<{$rootpath}>/images/spacer.gif" height="20"></td>
			  	</tr>
			  	<tr>
					<td valign="top"><img src="<{$rootpath}>/images/ticketasia_travel_logo.jpg"><img src="<{$rootpath}>/images/<{$lang}>/hotel_booking.gif" hspace="5"></td>
			  	</tr>
				<tr>
					<td><img src="<{$rootpath}>/images/spacer.gif" width="10" height="10"></td>
			  	</tr>
			  	<tr>
					<td height="35">
						<div id="div2_load" align="center">
						<img src="<{$rootpath}>/images/loading.gif"/>
						</div>
						<div id="div2" >
						</div>
					</td>
			  	</tr>
			 	 <tr>
					<td valign="top">
						<div><img src="<{$rootpath}>/images/spacer.gif" height="20"></div>
						<div id="div3_load" align="center">
						<img src="<{$rootpath}>/images/loading.gif"/>
						</div>
						<div id="div3" >
						</div>
					</td>
				</tr>
			</table>
        </td>
        <td width="8"><img src="<{$rootpath}>/images/spacer.gif" width="8" height="1"></td>
        <td width="222" valign="top" align="right">
        <!--==============//////    Start Right Adv Banner  \\\\\\=========== -->
        	<{include file="$smarty_root/event_common/box.tpl" }>
        	<{include file="$smarty_root/event_common/banner_list.tpl" }>
        </td>
	</tr>
</table>        

<script type="text/javascript">	
	var PopupLayer1 =new PopupLayer({trigger:"#ele1",popupBlk:"#blk1",closeBtn:"#close1",useFx:true});
	$(function() {
		$('#div2').css('display','none');
		$('#div2_load').css('display','');
		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		$('#div2').load("hotel_list.php", {"action":"resetLocation"}, function() {
			$('#div2').css('display','');
			$('#div2_load').css('display','none');			
		});
		$('#div3').load("hotel_list.php", {"action":"resetCriteria"}, function() {
			$('#div3').css('display','');
			$('#div3_load').css('display','none');
		});
	});
	$.fn.studyplay_star=function(options,callback){
		var id=options.id;
		var CurrentStar=options.CurrentStar;
		var settings ={
			MaxStar      :20,
			StarWidth    :16,
			CurrentStar  :5,
			Enabled      :true 
		};	
		if(options) { jQuery.extend(settings, options); };
		var container = jQuery(this);
		container.css({"position":"absolute"})
		.html('<ul class="studyplay_starBg"></ul>')	
		.find('.studyplay_starBg').width(settings.MaxStar*settings.StarWidth)
		.html('<li class="studyplay_starovering" style="width:'+settings.CurrentStar*settings.StarWidth+'px; z-index:0;" id="'+id+'"></li>');
		if(settings.Enabled)
		{
			var ListArray = "";	
			for(k=1;k<settings.MaxStar+1;k++)
			{
				ListArray +='<li class="studyplay_starON" style="width:'+settings.StarWidth*k+'px; height:16px; z-index:'+(settings.MaxStar-k+1)+';"></li>';
			}
			container.find('.studyplay_starBg').append(ListArray)
			.find('.studyplay_starON')
			.hover(function(){
							  $("#"+id).hide();
							  $(this).removeClass('studyplay_starON').addClass("studyplay_starovering");
							  },
				   function(){
							  $(this).removeClass('studyplay_starovering').addClass("studyplay_starON");
							  $("#"+id).show();
  			 })
	   	   .click(function(){					 
				var studyplay_count = settings.MaxStar - $(this).css("z-index")+1;
				$("#"+id).width(studyplay_count*settings.StarWidth);
				$("#div"+id).css('display','');
				//$("#score_number_value"+id).html(studyplay_count);
				$("#score"+id).studyplay_star({MaxStar:5,CurrentStar:CurrentStar,Enabled:false,id:id},function(value){
				});
				if (typeof callback == 'function') {
					callback(studyplay_count);
					return ;
				}
		  })
	   }	
	}	
	function searchMovie(){
		var keyword=$('#keyword').val();
		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		var url = "hotel_list.php";
		$('#div3').load(url, {"action":"resetCriteria","keyword":keyword}, function() {
			$('#div3').css('display','');
			$('#div3_load').css('display','none');
		});
	}
	
//	function changeCity(city_id,long_name) {
//		var url = "<{$file_url}>";
//		$.post(url, {"action":"resetLocation","city_id":city_id}, function() {
//			window.location.reload();
//		});
//		$('#header_selecttext_div').html('<span class="header_selecttext">'+long_name+'</span>');
//		PopupLayer1.close();
//	}
	
	function changeVenue() {
		var venue=$('#venue').val();
		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		var url = "hotel_list.php";
		if (venue.substring(0,1) == 'c') {
			venue_id = venue.substring(1);
			$('#div3').load(url, {"action":"resetCriteria","organizer_id":venue_id}, function() {
				$('#div3').css('display','');
				$('#div3_load').css('display','none');
			});
		} else if (venue.substring(0,1) == 'v') {
			venue_id = venue.substring(1);
			$('#div3').load(url, {"action":"resetCriteria","venue_id":venue_id}, function() {
				$('#div3').css('display','');
				$('#div3_load').css('display','none');
			});
		} else {
			$('#div3').css('display','');
			$('#div3_load').css('display','none');
		}
	}
	
/*	function searchHotel() {
		var attribute = "";
		var tag = document.getElementsByTagName("input");
		for(i=0;i<tag.length;i++) {
			if(tag[i].type=="checkbox" && tag[i].checked) {
				attribute += tag[i].value + ",";
			}
		}
		var district_id=$('#district_id').val();
		var price=$('#price').val();
		var star=$('#star').val();
		
		var keyword=$('#keyword').val();
		var check_in_date=$('#check_in_date').val();
		var check_out_date=$('#check_out_date').val();

		
		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		var url = "hotel_list.php";
		$('#div3').load(url, {"action":"resetCriteria","district_id":district_id,
		"price":price,"star":star,"keyword":keyword,"check_in_date":check_in_date,
		"check_out_date":check_out_date,"attribute":attribute}, function() {
			$('#div3').css('display','');
			$('#div3_load').css('display','none');
		});
	}
	*/
	function booking(hotel_id,room_type_id,city_id)
	{
		var check_in_date=$("#check_in_date").val();
		var check_out_date=$("#check_out_date").val();
		var url='hotel_detail.php?city_id='+city_id
		+'&hotel_id='+hotel_id
		+'&room_type_id='+room_type_id
		+'&check_in_date='+check_in_date
		+'&check_out_date='+check_out_date;
		
		window.location.href=url;
		
	}
	
</script>

<{include file="$smarty_root/footer.tpl" }>