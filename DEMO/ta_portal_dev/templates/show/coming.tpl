<{include file="$smarty_root/header.tpl" }>
<link type="text/css" href="<{$rootpath}>/css/accordion_customer_theme.css" rel="stylesheet" />
<script language="javascript"  type="text/javascript"   src="<{$rootpath}>/js/showcase.js"></script>

<link href="<{$rootpath}>/css/startcss.css" rel="stylesheet" type="text/css" />
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="730" valign="top">
        	
			<table width="730" border="0" cellspacing="0" cellpadding="0">
				 <tr>
		            <td height="30" valign="top" background="<{$rootpath}>/images/line_show_bg.gif">
		            	<img src="<{$rootpath}>/images/<{$lang}>/show_channel.gif">
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
		          <tr>
		            <td height="35" background="<{$rootpath}>/images/bg_bar_purple.gif">
		            	<div id="div2_load" align="left"  style="display:none; vertical-align:middle; padding-left:300px;">
							<img src="<{$rootpath}>/images/loading.gif"/>
						</div>
						<div id="div2" >
						</div>
					</td>
		          </tr>
				  <tr>
					<td valign="top">
						<div id="div3_load" align="left"  class="div_load" >
						<img src="<{$rootpath}>/images/loading.gif"/>
						</div>
						<div id="div3" >
						</div>
				  	</td>
				  </tr>
		</table>
        </td>
        <td width="25"><img src="<{$rootpath}>/images/spacer.gif" width="25" height="1"></td>
        <td width="215" valign="top">
        
        
        <!--==============//////    Start Right Adv Banner  \\\\\\=========== -->
        <table width="213" border="0" cellspacing="0" cellpadding="0">
        
          <tr>
            <td><img src="<{$rootpath}>/images/<{$lang}>/show/show_rightbox_title1.gif"></td>
          </tr>
          <tr>
            <td align="center" background="<{$rootpath}>/images/show_rightbox_213bg.gif">
            <{include file="$smarty_root/event_common/rank.tpl" }>
            </td>
          </tr>
          <tr>
            <td><img src="<{$rootpath}>/images/show_rightbox_bottom.gif"></td>
          </tr>
        </table>
        <{include file="$smarty_root/event_common/banner_list.tpl" }>
        <!--==============//////    End Right Adv Banner  \\\\\\=========== -->        </td>
      </tr>
    </table>
  

<script type="text/javascript">	
 var PopupLayer1=new PopupLayer({trigger:"#ele1",popupBlk:"#blk1",closeBtn:"#close1",useFx:true});
	$(function() {
		
		$('#div2').css('display','none');
		$('#div2_load').css('display','');
		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		$('#div2').load("coming.php", {"action":"resetLocation"}, function() {
			$('#div2').css('display','');
			$('#div2_load').css('display','none');			
		    
		});
		$('#div3').load("coming.php", {"action":"resetCriteria"}, function() {
			$('#div3').css('display','');
			$('#div3_load').css('display','none');
		});
		
	});
		$.fn.studyplay_star=function(options,callback){
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
			.html('<li class="studyplay_starovering" style="width:'+settings.CurrentStar*settings.StarWidth+'px; z-index:0;" id="studyplay_current"></li>');
			if(settings.Enabled)
			{
			var ListArray = "";	
			for(k=1;k<settings.MaxStar+1;k++)
			{
				ListArray +='<li class="studyplay_starON" style="width:'+settings.StarWidth*k+'px;z-index:'+(settings.MaxStar-k+1)+';"></li>';
			}
			container.find('.studyplay_starBg').append(ListArray)
			.find('.studyplay_starON').hover(function(){
													  $("#studyplay_current").hide();
													  $(this).removeClass('studyplay_starON').addClass("studyplay_starovering");
													  },
											  function(){
												  $(this).removeClass('studyplay_starovering').addClass("studyplay_starON");
												  $("#studyplay_current").show();
												  }).click(function(){
							var studyplay_count = settings.MaxStar - $(this).css("z-index")+1;
							$("#studyplay_current").width(studyplay_count*settings.StarWidth)
							//回调函数
							if (typeof callback == 'function') {
							callback(studyplay_count);
							return ;
							}
							})
		 }	
		}	

	
	function changeCity(city_id,long_name) {
		$('#div2').css('display','none');
		$('#div2_load').css('display','');
		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		var url = "coming.php";
		$('#div2').load(url, {"action":"resetLocation","city_id":city_id}, function() {
			$('#div2').css('display','');
			$('#div2_load').css('display','none');
		});
		$('#div3').load(url, {"action":"resetCriteria","city_id":city_id}, function() {
			$('#div3').css('display','');
			$('#div3_load').css('display','none');
		});
		$('#header_selecttext_div').html('<span class="header_selecttext">'+long_name+'</span>');
		PopupLayer1.close();
	}
	
	function searchMovie(){
		var keyword=$('#keyword').val();
		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		var url = "coming.php";
		$('#div3').load(url, {"action":"resetCriteria","keyword":keyword}, function() {
			$('#div3').css('display','');
			$('#div3_load').css('display','none');
		});
	}
	
	
	
	function changeDistrict(district_id) {
		$('#div2').css('display','none');
		$('#div2_load').css('display','');
		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		var url = "coming.php";
		$('#div2').load(url, {"action":"resetLocation","district_id":district_id}, function() {
			$('#div2').css('display','');
			$('#div2_load').css('display','none');
		});
		$('#div3').load(url, {"action":"resetCriteria","district_id":district_id}, function() {
			$('#div3').css('display','');
			$('#div3_load').css('display','none');
		});
		PopupLayer5.close();
	}
	
	
	function changeVenue() {
		$('#activity_id').attr('value', '-1');
		var venue=$('#venue').val();
		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		var url = "coming.php";
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
	
	function changeMovie() {
		$('#venue').attr('value', 'v-1');
		var activity_id=$('#activity_id').val();
		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		var url = "coming.php";
		$('#div3').load(url, {"action":"resetCriteria","activity_id":activity_id}, function() {
			$('#div3').css('display','');
			$('#div3_load').css('display','none');
		});
	}
</script>

<{include file="$smarty_root/footer.tpl" }>