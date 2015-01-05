<{include file="$smarty_root/header.tpl" }>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td>

<div style="width: 900px;">
	<div id="div2_load" align="left"  class="div_load">
		<img src="<{$rootpath}>/images/loading.gif"/>
	</div>
	<div id="div2" style="width: 900px;">
	</div>
</div>
<div style="width: 900px;">
	<div id="div3_load" align="left"  class="div_load">
		<img src="<{$rootpath}>/images/loading.gif"/>
	</div>
	<div id="div3" style="width: 900px;">
	</div>
</div>

</td></tr>
</table>

<script type="text/javascript">	
    
	$(function() {
		
		$('#div2').css('display','none');
		$('#div2_load').css('display','');
		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		$('#div2').load("hot_movie.php", {"action":"resetLocation"}, function() {
			$('#div2').css('display','');
			$('#div2_load').css('display','none');			
		    
		});
		$('#div3').load("hot_movie.php", {"action":"resetCriteria"}, function() {
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
		var url = "hot_movie.php";
		$('#div2').load(url, {"action":"resetLocation","city_id":city_id}, function() {
			$('#div2').css('display','');
			$('#div2_load').css('display','none');
		});
		$('#div3').load(url, {"action":"resetCriteria","city_id":city_id}, function() {
			$('#div3').css('display','');
			$('#div3_load').css('display','none');
		});
		$('#ele1').text(long_name);
	}
	
	function searchMovie(){
		var keyword=$('#keyword').val();
		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		var url = "hot_movie.php";
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
		var url = "hot_movie.php";
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
		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		var url = "hot_movie.php";
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
		var activity_id=$('#activity_id').val();
		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		var url = "hot_movie.php";
		$('#div3').load(url, {"action":"resetCriteria","activity_id":activity_id}, function() {
			$('#div3').css('display','');
			$('#div3_load').css('display','none');
		});
	}
</script>

<{include file="$smarty_root/footer.tpl" }>