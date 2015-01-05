<{include file="$smarty_root/header.tpl" }>
<{foreach item=activity from=$activity_detail}>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
   <tr>
    <td align="center">
      <table width="960" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="40" valign="middle"><span id="movieOfNamed" class="moviename_20pt"><{$activity.name}></span></td>
        <td>&nbsp;</td>
        <td><select name="select" class="infoform200px" id="activity_id" onChange="changeMovie()">
          <option value="-1"><{$LANG.hot_movie.selectbroadcastmovie}></option>
          <{foreach item=movielist from=$movie_list}>
               <option value="<{$movielist.activity_id}>"><{$movielist.name}></option>
          <{/foreach}>
        </select>
        </td>
      </tr>
      <tr>
        <td width="722" valign="top">
            	<div width="722">
				<div id="div2_load" align="left"  style="display:none; vertical-align:middle; padding-left:300px; padding-top:100px">
					<img src="<{$rootpath}>/images/loading.gif"/>
				</div>
				<div id="div2" width="722"></div>
			</div>
  			<div width="722">
				<div id="div3_load" align="left"  style="display:none; vertical-align:middle; padding-left:300px; padding-top:100px">
					<img src="<{$rootpath}>/images/loading.gif"/>
				</div>
				<div id="div3" width="722"></div>
			</div>       
        </td>

        
        
        <td width="25"><img src="<{$rootpath}>/images/spacer.gif" width="25" height="1"></td>
        
        <td width="213" valign="top">
        <!--==============//////    Start Right Adv Banner  \\\\\\=========== -->
        <table width="213" border="0" cellspacing="0" cellpadding="0">
        
          <tr>
            <td><img src="<{$rootpath}>/images/<{$lang}>/movie_rightbox_title1.gif" width="213" height="45"></td>
          </tr>
          <tr>
            <td align="center" background="<{$rootpath}>/images/movie_rightbox_bg.gif">
            <{include file="$smarty_root/event_common/rank.tpl" }>
            </td>
          </tr>
          <tr>
            <td><img src="<{$rootpath}>/images/movie_rightbox_bottom.gif" width="213" height="7"></td>
          </tr>
        </table>
        <table width="213" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td><img src="<{$rootpath}>/images/spacer.gif" width="213" height="20"></td>
          </tr>
          <tr>
            <td><img src="<{$rootpath}>/images/<{$lang}>/movie_rightbox_title3.gif" width="213" height="45"></td>
          </tr>
          <tr>
            <td align="center" background="<{$rootpath}>/images/movie_rightbox_bg.gif"><table width="195" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="17" valign="top"><img src="<{$rootpath}>/images/icon_indent_dort.gif"></td>
                  <td><a href="#" class="blklink">超炫的3D影片《深海探奇》 </a></td>
                </tr>
                <tr>
                  <td valign="top"><img src="<{$rootpath}>/images/icon_indent_dort.gif"></td>
                  <td><a href="#" class="blklink">超炫的3D影片《深海探奇》 </a></td>
                </tr>
                <tr>
                  <td valign="top"><img src="<{$rootpath}>/images/icon_indent_dort.gif"></td>
                  <td><a href="#" class="blklink">超炫的3D影片《深海探奇》 </a></td>
                </tr>
                <tr>
                  <td valign="top"><img src="<{$rootpath}>/images/icon_indent_dort.gif"></td>
                  <td><a href="#" class="blklink">超炫的3D影片《深海探奇》 </a></td>
                </tr>
                <tr>
                  <td valign="top"><img src="<{$rootpath}>/images/icon_indent_dort.gif"></td>
                  <td><a href="#" class="blklink">超炫的3D影片《深海探奇》 </a></td>
                </tr>
                <tr>
                  <td valign="top"><img src="<{$rootpath}>/images/icon_indent_dort.gif"></td>
                  <td><a href="#" class="blklink">超炫的3D影片《深海探奇》 </a></td>
                </tr>
                <tr>
                  <td valign="top"><img src="<{$rootpath}>/images/icon_indent_dort.gif"></td>
                  <td><a href="#" class="blklink">超炫的3D影片《深海探奇》 </a></td>
                </tr>
                <tr>
                  <td valign="top"><img src="<{$rootpath}>/images/icon_indent_dort.gif"></td>
                  <td><a href="#" class="blklink">超炫的3D影片《深海探奇》 </a></td>
                </tr>
                <tr>
                  <td valign="top"><img src="<{$rootpath}>/images/icon_indent_dort.gif"></td>
                  <td><a href="#" class="blklink">超炫的3D影片《深海探奇》 </a></td>
                </tr>
            </table></td>
          </tr>
          <tr>
            <td><img src="<{$rootpath}>/images/movie_rightbox_bottom.gif" width="213" height="7"></td>
          </tr>
        </table>
        <table width="213" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="<{$rootpath}>/images/spacer.gif" width="213" height="20"></td>
          </tr>
          <tr>
            <td><img src="<{$rootpath}>/images/adv_banner_213x80.jpg" width="213" height="80"></td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td><img src="<{$rootpath}>/images/adv_banner2_213x80.jpg" width="213" height="80"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><img src="<{$rootpath}>/images/adv_banner3_213x80.jpg" width="213" height="168"></td>
          </tr>
        </table>
        <!--==============//////    End Right Adv Banner  \\\\\\=========== -->        </td>
      </tr>
    </table>
    </td>
  </tr>
  
</table>
<{/foreach}>
<script>
	var PopupLayer1= new PopupLayer({trigger:"#ele1",popupBlk:"#blk1",closeBtn:"#close1",useFx:true});
	$(function() {
		$('#div2').css('display','none');
		$('#div2_load').css('display','');
		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		$('#div2').load("movie_detail.php", {"action":"changeActivity"}, function() {
			$("#ImageId1").attr("src","<{$rootpath}>/images/<{$lang}>/movie/movie_detail_fun01_on.gif");
			$("#ImageId1").attr("name","istrue");
			$('#div2').css('display','');
			$('#div2_load').css('display','none');			 
		});
		$('#div3').load("movie_detail.php", {"action":"resetCriteria"}, function() {
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
							$.post("movie_detail.php", {"action":"vote","score":studyplay_count,"venue_id":id}, function(message) {
								
							});
							if (typeof callback == 'function') {
							callback(studyplay_count);
							return ;
							}
							})
		 }	
		}	
	
	function changeCity(city_id,long_name) {
		var url = "hot_movie.php";
		$.post(url, {"action":"resetLocation","city_id":city_id}, function() {
			window.location.href='hot_movie.php';
		});
		$('#header_selecttext_div').html('<span class="header_selecttext">'+long_name+'</span>');
		PopupLayer1.close();
	}
	
	function changeMovie() {
	  var activity_id=$('#activity_id').val();
	  if(activity_id != "-1"){
		var movieName = document.getElementById("activity_id").options[document.getElementById("activity_id").selectedIndex].text;		
		$("#movieOfNamed").text(movieName);
		$('#div2').css('display','none');
		$('#div2_load').css('display','');
		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		var url = "movie_detail.php";
		$('#div2').load(url, {"action":"changeActivity","activity_id":activity_id}, function() {
			$('#div2').css('display','');
			$('#div2_load').css('display','none');
		});
		$('#div3').load(url, {"action":"resetCriteria","activity_id":activity_id}, function() {
			$('#div3').css('display','');
			$('#div3_load').css('display','none');
		});
		
	   }
	   $('#activity_id').blur();
	}
	
	function changeDistrict(district_id,long_name) {

		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		var url = "movie_detail.php";

		$('#div3').load(url, {"action":"resetCriteria","district_id":district_id}, function() {
			$('#div3').css('display','');
			$('#div3_load').css('display','none');
		});
		$('#ele5').text(long_name);
	}
	function swapImage(imgId){
		for(var i = 1 ; i < 5 ; i++){
			$("#ImageId"+i).attr("src","<{$rootpath}>/images/<{$lang}>/movie_detail_fun0"+i+"_off.gif");	
		}
		$("#ImageId"+imgId).attr("src","<{$rootpath}>/images/<{$lang}>/movie_detail_fun0"+imgId+"_on.gif");
	}
	function swapImgRestore(){
		for(var i = 1 ; i < 5 ; i++){
			$("#ImageId"+i).attr("src","<{$rootpath}>/images/<{$lang}>/movie_detail_fun0"+i+"_off.gif");	
		}
		var flag=-1;
		var i = 1;
		while(i<5){
			if($("#ImageId"+i).attr("name") == "istrue"){
				flag = i;
				break;
			}
			i++;
		}
		$("#ImageId"+flag).attr("src","<{$rootpath}>/images/<{$lang}>/movie_detail_fun0"+flag+"_on.gif");
	}
	function changeDiv(divId,imgId){
		for(var i = 1 ; i < 5 ; i++){
			$("#ImageId"+i).attr("src","<{$rootpath}>/images/<{$lang}>/movie_detail_fun0"+i+"_off.gif");
			$("#ImageId"+i).attr("name","isfalse");
		}
		$("#ImageId"+imgId).attr("src","<{$rootpath}>/images/<{$lang}>/movie_detail_fun0"+imgId+"_on.gif");
		$("#ImageId"+imgId).attr("name","istrue");
		$(".msgbtn").hide();
		$("#"+divId).show();	
	}
</script>
<{include file="$smarty_root/footer.tpl" }>