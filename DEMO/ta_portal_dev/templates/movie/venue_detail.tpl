<{include file="$smarty_root/header.tpl" }>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td>
<div style="width: 900px;">
	<div id="div2_load" align="left"  style="display:none; vertical-align:middle; padding-left:300px; padding-top:100px">
		<img src="<{$rootpath}>/images/loading.gif"/>
	</div>
	<div id="div2" style="width: 900px;">
	</div>
</div>
<div style="width: 900px;">
	<div id="div3_load" align="left"  style="display:none; vertical-align:middle; padding-left:300px; padding-top:100px">
		<img src="<{$rootpath}>/images/loading.gif"/>
	</div>
	<div id="div3" style="width: 900px;">
	</div>
</div>

</td></tr>
</table>

<script type="text/javascript">	
	var PopupLayer1= new PopupLayer({trigger:"#ele1",popupBlk:"#blk1",closeBtn:"#close1",useFx:true});
	$(function() {		
		$('#div2').css('display','none');
		$('#div2_load').css('display','');
		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		$('#div2').load("venue_detail.php", {"action":"changeVenue"}, function() {
			$('#div2').css('display','');
			$('#div2_load').css('display','none');			
		    
		});
		$('#div3').load("venue_detail.php", {"action":"resetCriteria"}, function() {
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
				ListArray +='<li class="studyplay_starON" style="width:'+settings.StarWidth*k+'px;height:16px;z-index:'+(settings.MaxStar-k+1)+';"></li>';
			}
			container.find('.studyplay_starBg').append(ListArray)
			.find('.studyplay_starON').hover(function(){
													  $("#"+id).hide();
													  $(this).removeClass('studyplay_starON').addClass("studyplay_starovering");
													  },
											  function(){
												  $(this).removeClass('studyplay_starovering').addClass("studyplay_starON");
												  $("#"+id).show();
												  }).click(function(){
							var studyplay_count = settings.MaxStar - $(this).css("z-index")+1;
							$("#"+id).width(studyplay_count*settings.StarWidth)
							$("#div"+id).css('display','');
							//$("#score_number_value"+id).html(studyplay_count);
							$("#score"+id).studyplay_star({MaxStar:5,CurrentStar:CurrentStar,Enabled:false,id:id},function(value){
							});
							$.post("venue_detail.php", {"action":"vote","score":studyplay_count,"venue_id":id}, function(message) {
							});
							if (typeof callback == 'function') {
							callback(studyplay_count);
							return ;
							}
							})
		 }	
		}	

	function changeCity(city_id,long_name) {
		var url = "venue_list.php";
		$.post(url, {"action":"resetLocation","city_id":city_id}, function() {
			window.location.href='venue_list.php';
		});
		$('#header_selecttext_div').html('<span class="header_selecttext">'+long_name+'</span>');
		PopupLayer1.close();
	}
	
	function searchMovie(){
		var keyword=$('#keyword').val();
		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		var url = "venue_detail.php";
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
		var url = "venue_detail.php";
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
		var venue=$('#venue').val();
		$('#div2').css('display','none');
		$('#div2_load').css('display','');
		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		var url = "venue_detail.php";
		if (venue.substring(0,1) == 'v') {
			venue_id = venue.substring(1);
			$('#div2').load(url, {"action":"changeVenue","venue_id":venue_id}, function() {				
				$('#div2').css('display','');
				$('#div2_load').css('display','none');
			});
			$('#div3').load(url, {"action":"resetCriteria","venue_id":venue_id}, function() {
				$('#div3').css('display','');
				$('#div3_load').css('display','none');
			});
		} else {
			$('#div3').css('display','');
			$('#div3_load').css('display','none');
			$('#div2').css('display','');
			$('#div2_load').css('display','none');
		}
	}
	
	
	function changeMovie() {
		var activity_id=$('#activity_id').val();
		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		var url = "venue_detail.php";
		$('#div3').load(url, {"action":"resetCriteria","activity_id":activity_id}, function() {
			$('#div3').css('display','');
			$('#div3_load').css('display','none');
		});
	}
</script>

<{include file="$smarty_root/footer.tpl" }>