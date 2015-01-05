<script src="<{$rootpath}>/js/movie/imgPreview.js"></script> 
<script>
$(document).ready(function(){
	$(".a").hover(
	function() {
		$(this).stop().animate({"opacity": "0"}, "slow");
	},
	function() {
		$(this).stop().animate({"opacity": "1"}, "slow");
	});
	
});
</script>
<{foreach key=k item=activity from=$activity_detail}>
<table width="722" border="0" cellspacing="0" cellpadding="0">
	<tr>
       <td valign="top">
			<!--==============//////    Start Movie  Menu  \\\\\\=========== -->
           <table width="722" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="182" valign="top"><div class="menu1"><img src="<{$rootpath}>/images/<{$lang}>/movie_menu00.gif"></div></td>
        <td valign="top" width="2"><img src="<{$rootpath}>/images/movie_2px.gif"></td>
        <td width="90"><div class="menu1"><a href="javascript:void(1)" onclick="changeMovieDetailDiv('1')"><img style="opacity: 1;" src="<{$rootpath}>/images/<{$lang}>/movie_menu06_off.gif" alt="" class="a" border="0"><img src="<{$rootpath}>/images/<{$lang}>/movie_menu06_on.gif" alt="" border="0" class="b"></a></div></td>
        <td valign="top" width="2"><img src="<{$rootpath}>/images/movie_2px.gif"></td>
        <td width="90"><div class="menu1"><a href="javascript:void(2)" onclick="changeMovieDetailDiv('2')"><img style="opacity: 1;" src="<{$rootpath}>/images/<{$lang}>/movie_menu07_off.gif" alt="" class="a" border="0"><img src="<{$rootpath}>/images/<{$lang}>/movie_menu07_on.gif" alt="" border="0" class="b"></a></div></td>
        <td valign="top" width="2"><img src="<{$rootpath}>/images/movie_2px.gif"></td>
        <td width="90"><div class="menu1"><a href="javascript:void(3)" onclick="changeMovieDetailDiv('3')"><img style="opacity: 1;" src="<{$rootpath}>/images/<{$lang}>/movie_menu08_off.gif" alt="" class="a" border="0"><img src="<{$rootpath}>/images/<{$lang}>/movie_menu08_on.gif" alt="" border="0" class="b"></a></div></td>
        <td valign="top" width="2"><img src="<{$rootpath}>/images/movie_2px.gif"></td>
        <td width="90"><div class="menu1"><a href="javascript:void(4)" onclick="changeMovieDetailDiv('4')"><img style="opacity: 1;" src="<{$rootpath}>/images/<{$lang}>/movie_menu09_off.gif" alt="" class="a" border="0"><img src="<{$rootpath}>/images/<{$lang}>/movie_menu09_on.gif" alt="" border="0" class="b"></a></div></td>
        <td valign="top" width="2"><img src="<{$rootpath}>/images/movie_2px.gif"></td>
        <td background="<{$rootpath}>/images/movie_menu_bg.gif">&nbsp;</td>
      </tr>
      <tr>
        <td><img src="<{$rootpath}>/images/spacer.gif" width="1" height="15"></td>
        <td width="2"><img src="<{$rootpath}>/images/spacer.gif" width="2" height="15"></td>
        <td><img src="<{$rootpath}>/images/spacer.gif" width="1" height="15"></td>
        <td width="2"><img src="<{$rootpath}>/images/spacer.gif" width="2" height="15"></td>
        <td><img src="<{$rootpath}>/images/spacer.gif" width="1" height="15"></td>
        <td width="2"><img src="<{$rootpath}>/images/spacer.gif" width="2" height="15"></td>
        <td><img src="<{$rootpath}>/images/spacer.gif" width="1" height="15"></td>
        <td width="2"><img src="<{$rootpath}>/images/spacer.gif" width="2" height="15"></td>
        <td><img src="<{$rootpath}>/images/spacer.gif" width="1" height="15"></td>
        <td width="2"><img src="<{$rootpath}>/images/spacer.gif" width="2" height="15"></td>
        <td><img src="<{$rootpath}>/images/spacer.gif" width="1" height="15"></td>
      </tr>
            </table>
            <!--==============//////    End Movie  Menu  \\\\\\=========== -->            
            </td>
          </tr>
		<tr>
         <td valign="top">
		<table width="722" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td valign="top"><table width="642" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="160" valign="top">
                    	<{if $activity.path <> ''}>
                    	<img src="<{$resource_path}><{$activity.path}>" width="160" height="230">
                    	<{/if}>
                    </td>
                    <td width="30"><img src="<{$rootpath}>/images/spacer.gif" width="30" height="1"></td>
                    
                    <td valign="top">
                    <!-- change div-->
                    <div id="msgdiv1" class="msgbtn">
                    <table width="450" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td><span class="text14"><{$LANG.movie_detail.movie_introduction}> : </span><br>
                           	<{$activity.description|truncate:"300":"......" }>
                            <br>
                            </td>
                        </tr>
                      </table>
                      <br>
                      <table width="450" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td class="moviedetail"><span class="text14"><{$LANG.movie_detail.director}> : </span><{$activity.movie_director}></td>
                        </tr>
                        <tr>
                          <td class="moviedetail"><span class="text14"><{$LANG.movie_detail.starring}> : </span><{$activity.movie_artist}></td>
                        </tr>
                        <{if $activity.movie_category|strip neq ""}>
                        <tr>
                          <td class="moviedetail"><span class="text14"><{$LANG.movie_detail.rank}> : </span><{$activity.movie_category}></td>
                        </tr>
                        <{/if}>
                        <tr>
                          <td class="moviedetail"><span class="text14"><{$LANG.movie_detail.language}> : </span><{$activity.movie_language_id}></td>
                        </tr>
                        <{if $activity.show_date|strip neq ""}>
                        <tr>
                          <td class="moviedetail"><span class="text14"><{$LANG.movie_detail.show_date}> : </span><{$activity.show_date|date_format:'%Y'}><{$LANG.movie_detail.year}><{$activity.show_date|date_format:'%m'}><{$LANG.movie_detail.month}><{$activity.show_date|date_format:'%d'}><{$LANG.movie_detail.day}></td>
                        </tr>
                        <{/if}>
                      </table>
                      </div>
                      
                      <div id="msgdiv2" class="msgbtn" style="display:none">
                       <table width="450" border="0" cellspacing="0" cellpadding="0">
                        <tr><td>
		   			  	<{if $image_list|@count neq 0}>
								<{foreach key=k item=ml from=$image_list}>
									<{if $ml.path|strip neq "" }>
										<a href="<{$resource_path}><{$ml.path}>" title="<{$activity.alt_text}>" onclick="return false;"><img src="<{$resource_path}><{$ml.path}>" width="80" height="80" border="0"></img></a>	
										
									<{/if}>	
									<{if $k+1 mod 5  eq 0}>
										<br/>
									<{/if}>
								<{/foreach}>
		   				<{else}>
							<span class="text14" id="imgMes"><{$LANG.movie_detail.no_movie_image_browse}></span>
		  				<{/if}>
		  				</td></tr>
		  			  </table>
					  </div>
			
					  <div id="msgdiv3" class="msgbtn" style="display:none">
					  <table width="450" border="0" cellspacing="0" cellpadding="0">
                        <tr><td>
						<span class="text14"><{$LANG.movie_detail.trailer}></span>
						</td></tr>
					  </table>
	       			  </div>
                      
                      <div id="msgdiv4" class="msgbtn" style="display:none">
                      <table width="450" border="0" cellspacing="0" cellpadding="0">
                        <tr><td>
						<span class="text14"><{$LANG.movie_detail.mobile_equipment}></span>
						</td></tr>
					  </table>
	       			  </div>
                      <!-- end change div-->
                    </td>
                  </tr>
                </table>
                </td>
                <td width="80" valign="top"><!--==============//////    Start Movie Detail Function  \\\\\\=========== -->
                    <table width="80" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="65" align="center"><a href="javascript:void(1)" title="<{$LANG.movie_detail.movie_introduction}>"><img name="isfalse" src="<{$rootpath}>/images/<{$lang}>/movie_detail_fun01_off.gif" border="0" id="ImageId1" onMouseOver="swapImage('1')" onMouseOut="swapImgRestore()" onclick="changeDiv('msgdiv1','1');return false;"></a></td>
                      </tr>
                      <tr>
                        <td width="75" align="center"><a href="javascript:void(2)" title="<{$LANG.movie_detail.movie_image}>"><img name="isfalse" src="<{$rootpath}>/images/<{$lang}>/movie_detail_fun02_off.gif" border="0" id="ImageId2" onMouseOver="swapImage('2')" onMouseOut="swapImgRestore()" onclick="changeDiv('msgdiv2','2');return false;"></a></td>
                      </tr>
                      <tr>
                        <td width="65" align="center"><a href="javascript:void(3)" title="<{$LANG.movie_detail.trailer}>"><img name="isfalse" src="<{$rootpath}>/images/<{$lang}>/movie_detail_fun03_off.gif" border="0" id="ImageId3" onMouseOver="swapImage('3')" onMouseOut="swapImgRestore()" onclick="changeDiv('msgdiv3','3');return false;"></a></td>
                      </tr>
                      <tr>
                        <td width="88" align="center"><a href="javascript:void(4)" title="<{$LANG.movie_detail.mobile_equipment}>"><img name="isfalse" src="<{$rootpath}>/images/<{$lang}>/movie_detail_fun04_off.gif" border="0" id="ImageId4" onMouseOver="swapImage('4')" onMouseOut="swapImgRestore()" onclick="changeDiv('msgdiv4','4');return false;"></a></td>
                      </tr>
                    </table>
                  <!--==============//////    End Movie Detail Function  \\\\\\=========== -->                </td>
              </tr>
            </table>
            </td>
          </tr>
          <tr>
            <td valign="top" background="<{$rootpath}>/images/line.gif">&nbsp;</td>
          </tr>
          <tr>
            <td valign="top">&nbsp;</td>
          </tr>
           
         </table>
         <{/foreach}>
<script type="text/javascript">
     $(function($){  
     if($("#imgMes").css("display") != "inline"){
		$("div#msgdiv2 a").imgPreview({
    		containerID: 'imgPreviewWithStyles',
    		imgCSS: {},
    		onShow: function(link){
        		$(link).stop().animate({opacity:0.4});
        		$('img', this).css({opacity:0,height:$('img',this).attr('height'),width:$('img',this).attr('width')});
    		},
    		onLoad: function(){
        		$(this).animate({opacity:1}, 300);
    		},
    		onHide: function(link){
        		$(link).stop().animate({opacity:1});
    		}
	   	  });
	   }
	});
	function changeMovieDetailDiv(divID){
		for(var k = 1 ; k < 5 ; k++){
			$("#movieDetailMenu"+k).hide();
		}
		$("#movieDetailMenu"+divID).show();
	}
	
</script>
<style type="text/css"> 
	#imgPreviewWithStyles {
    	background: #C21759 url(./../images/loading.gif) no-repeat center;
    	-moz-border-radius: 3px;
   	 	-webkit-border-radius: 3px;
    	padding: 3px;
    	z-index: 999;
    	border: none;
    }
</style>