<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title><{if $domain=='ticketchina'}>TicketChina - 网罗演唱会、电影、体育、交通、酒店等抢手门票，一站式娱乐旅游消闲网页<{else}>TicketAsia - 網羅演唱會、電影、體育、交通、酒店等搶手門票，一站式娛樂旅遊消閒網頁<{/if}></title>
		<link href="<{$rootpath}>/ticketasia.ico" rel="shortcut icon"/>
		<meta http-equiv="Content-Type" content="text/html; charset=<{$charset}>" />
		<meta name="description" content="網羅演唱會、電影、體育、交通、酒店等搶手門票，一站式娛樂旅遊消閒網頁。">
        <meta name="keywords" content="票量網, TicketAsia, TicketChina, 演唱會, 電影, 體育, 交通, 酒店, 門票, 娛樂, 旅遊, 消閑">
		<link href="<{$rootpath}>/css/stylesheet.css" rel="stylesheet" type="text/css" >
		<link href="<{$rootpath}>/css/stylesheet_<{$lang}>.css" rel="stylesheet" type="text/css" >
		<link href="<{$rootpath}>/css/csshorizontalmenu.css" rel="stylesheet" type="text/css" >
		<link type="text/css" href="<{$rootpath}>/css/movie_index_<{$lang}>.css" rel="stylesheet" />
		<script type="text/javascript" src="<{$rootpath}>/js/jquery-1.4.2.js"></script>
		<script type="text/javascript" src="<{$rootpath}>/js/dream.js"></script>
		<script type="text/javascript" src="<{$rootpath}>/js/onmouseeffect.js"></script>
		<script language="javascript"  type="text/javascript"   src="<{$rootpath}>/js/popup_layer.js"></script>
		<link type="text/css" href="<{$rootpath}>/themes/base/jquery.ui.all.css" rel="stylesheet" />
		<link href="<{$rootpath}>/css/accordion_customer_theme.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="<{$rootpath}>/js/chrome.js"></script>
		<script type="text/javascript" src="<{$rootpath}>/js/ui/jquery-ui-1.8.2.custom.js"></script>
		
		<style type="text/css">
		.ui-autocomplete {
			width: 412px;
		}
		.ui-autocomplete li{
			font-size:10px;	
			white-space: nowrap;	
			min-width : 155px;
			max-width : 405px;
			width: auto;
		}	
		</style>
	
		
		<{foreach item=css from=$csspaths }>
		<link href="<{$rootpath}>/css/<{$css}>" rel="stylesheet" type="text/css" >
		<{/foreach}>	
		
		<script>
		$(document).ready(function(){
			$(".a").hover(
			function() {
				$(this).stop().animate({"opacity": "0"}, "slow");
			},
			function() {
				$(this).stop().animate({"opacity": "1"}, "slow");
			});
			
			$(".quantity").keypress(function (e)
			{
			  if( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57))
			  {
			    return false;
			  }
			});
		
		});
		
		//Google Analytics Code
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', '<{$google_analytics_account}>']);
		_gaq.push(['_setDomainName', '.<{$domain}>.net']);
		_gaq.push(['_trackPageview']);
		
		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
		</script>
		
		<script type="text/javascript">
		function showmenu(elmnt) {
			//$("#"+elmnt").show();
			//document.getElementById(elmnt).style.visibility="visible";
		}
		function hidemenu(elmnt) {
			//$("#"+elmnt").hide();
			//document.getElementById(elmnt).style.visibility="hidden";
		}
		</script>
		
		<!-- AutoComplete -->
		<script type="text/javascript">
		$(function() {
			$("#formsearch").autocomplete({
				source: function(request, response) {
					
					$.ajax({
						url: "<{$rootpath}>/search/namesearch.php",
						dataType: 'json',
						data:{ str:$("#formsearch").val(),
								category_id:"<{$param_list.category_id}>",
								city_id:"<{$param_list.city_id}>"
						},
					 	success: function(data){response(data)}
					})					
			}								         	       
			});
		})
		</script>
		
		
		
	</head>

	<body class="yui-skin-sam" style="margin: 0px;background-image:url(<{$rootpath}>/images/body_bg.gif);background-repeat:repeat-x;background-color:#000000;">
		<center>
		<div style="width:1007px; height:50px;background-image:url(<{$rootpath}>/images/top_bg.gif);">&nbsp;</div>
		<div style="width:1007px; background-color: white;">
		<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0" class="<{if $domain=='ticketchina'}>bg_logo_tc<{else}>bg_logo_ta<{/if}>" bgcolor="white">
			<tr>
				<td width="170"><a id="index_link" href="<{$rootpath}>/index.php"><img src="<{$rootpath}>/images/spacer.gif" border="0" width="170" height=123" alt="<{$LANG.header.homepage}>"></a></td>
				<td width="830" height="130" align="right" valign="top">
					<table width="830" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td align="right" valign="top">
								<table width="830" border="0" cellspacing="2" cellpadding="2">
									<tr>
										<td align="right" colspan="2">
											<!--==============//////    Start Login  Menu  \\\\\\=========== -->
												<{if $smarty.session.member neq ''}>
													<{$LANG.header.welcome}>
													<span class="textmovie">
													<{if $smarty.session.member.first_name <> '' or $smarty.session.member.last_name <> ''}>
														<{$smarty.session.member.first_name}> <{$smarty.session.member.last_name}>
													<{elseif $smarty.session.member.nickname <> ''}>
														<{$smarty.session.member.nickname}>
													<{else}>
														<{$smarty.session.member.login_name}>
													<{/if}>
													</span>&nbsp;&nbsp;&nbsp;
													<a href="<{$rootpath}>/member/change_password.php" class="toplink"><{$LANG.header.change_password}></a>&nbsp;| &nbsp;
													<a href="<{$rootpath}>/member/modify_user_info.php" class="toplink"><{$LANG.header.modify_information}></a>&nbsp;| &nbsp;
													<a href="#" id="logout" class="toplink"><{$LANG.header.member_logout}></a>
												<{else}>
													<a href="<{$rootpath}>/member/login.php" class="toplink"><{$LANG.header.member_login}></a> / 
													<a href="<{$rootpath}>/member/register_user.php" class="toplink"><{$LANG.header.member_register}></a>
												<{/if}>
												&nbsp;&nbsp;&nbsp;
												<{if $lang eq 'en-us'}>
						                    	<a href="<{$file_url}>?<{$file_url_parameter}><{if $file_url_parameter neq ""}>&<{/if}>lang=zh-tc"><{$LANG.header.zh_tc}></a> | 
						                    	<a href="<{$file_url}>?<{$file_url_parameter}><{if $file_url_parameter neq ""}>&<{/if}>lang=zh-sc"><{$LANG.header.zh_sc}></a> 
						                    	<{elseif $lang eq 'zh-sc'}>
						                    	<a href="<{$file_url}>?<{$file_url_parameter}><{if $file_url_parameter neq ""}>&<{/if}>lang=zh-tc"><{$LANG.header.zh_tc}></a> | 
						                    	<a href="<{$file_url}>?<{$file_url_parameter}><{if $file_url_parameter neq ""}>&<{/if}>lang=en-us"><{$LANG.header.en_us}></a>
						                    	<{else}>
						                    	<a href="<{$file_url}>?<{$file_url_parameter}><{if $file_url_parameter neq ""}>&<{/if}>lang=zh-sc"><{$LANG.header.zh_sc}></a> | 
						                    	<a href="<{$file_url}>?<{$file_url_parameter}><{if $file_url_parameter neq ""}>&<{/if}>lang=en-us"><{$LANG.header.en_us}></a>
						                    	<{/if}>
	           								<!--==============//////    End Login  Menu  \\\\\\=========== -->
	           								</td>
	           						</tr>
									<tr>
										<td width="400" valign="top">
										<{if $city_name <>''}>
												<table>
												    <tr>
														<td>
															<table>			
																<tr >
																	<td width="400">
													       		  		<table background="<{$rootpath}>/images/<{$lang}>/select_area_city.gif" style="background-repeat:no-repeat" width="300">
															       		  		<tr align="left">
															       		  			<td align="center">
															       		  				<{$LANG.city_name}>
															       		  			</td>
															       		  			<td>
															       		  				&nbsp;&nbsp;&nbsp;
															       		  			</td>
															       		  			<td >
															       		  				<div class="cicy_menu1" align="center">
															       		  					<{if $smarty.session.city_id =="1"}>
																			                <a href="<{$file_url}>?<{$file_url_parameter}><{if $file_url_parameter neq ""}>&<{/if}>city_id=1">
																				                <img style="opacity: 1;" src="<{$rootpath}>/images/<{$lang}>/guangzhou_on.gif" alt="" border="0" >
																			                </a>  
																			               <{else}>
																			                 <a href="<{$file_url}>?<{$file_url_parameter}><{if $file_url_parameter neq ""}>&<{/if}>city_id=1">
																				                <img style="opacity: 1;" src="<{$rootpath}>/images/<{$lang}>/guangzhou_off.gif" alt="" class="a" border="0" >
																				                <img src="<{$rootpath}>/images/<{$lang}>/guangzhou_mouse_on.gif" alt="" border="0" class="b" >
																			                </a> 
																			                <{/if}> 
																		                </div> 
																		               
															       		  			</td>
															       		  			<td > 
															       		  				<div class="cicy_menu1" align="center">
															       		  					<{if $smarty.session.city_id =="2"}>
																			                <a href="<{$file_url}>?<{$file_url_parameter}><{if $file_url_parameter neq ""}>&<{/if}>city_id=2">
																				                <img style="opacity: 1;" src="<{$rootpath}>/images/<{$lang}>/hk_on.gif" alt="" border="0" >
																			                </a>  
																			               <{else}>
																			                <a href="<{$file_url}>?<{$file_url_parameter}><{if $file_url_parameter neq ""}>&<{/if}>city_id=2">
																				                <img style="opacity: 1;" src="<{$rootpath}>/images/<{$lang}>/hk_off.gif" alt="" class="a" border="0" >
																				                <img src="<{$rootpath}>/images/<{$lang}>/hk_mouse_on.gif" alt="" border="0" class="b">
																			                </a> 
																			                <{/if}>  
																		                </div>
															       		  			</td>
															       		  			<td>
															       		  				<div class="cicy_menu1" align="center">
															       		  					<{if $smarty.session.city_id =="3"}>
																			                <a >
																				                <img  src="<{$rootpath}>/images/<{$lang}>/aomen_on.gif" alt="" border="0" border="0" >
																			                </a>  
																			               <{else}>
																			                <a class="aomen_a" href="<{$file_url}>?<{$file_url_parameter}><{if $file_url_parameter neq ""}>&<{/if}>city_id=3">
																				                <img  src="<{$rootpath}>/images/<{$lang}>/aomen_off.gif" alt="" class="a" border="0" >
																				                <img src="<{$rootpath}>/images/<{$lang}>/aomen_mouse_on.gif" alt="" border="0" class="b" >
																			                </a>
																			                <{/if}>   
																		                </div>
															       		  			</td>
															       		  		</tr>
														       		  	</table>
															       	</td>
															       <!--
																	<td id="header_selecttext_div">
														       		  	<span class="header_selecttext"><{$city_name}></span>
														       		  	<input type="hidden" id="hidden_city_id" value=""/>
															       	</td>
															       	-->		       			       	
		       													</tr>
	       													</table>
														</td>
													</tr>	
												</table>
											<{/if}>
										</td>
										<td width="430" align="right" valign="top">
            							<{if $domain == 'ticketasia'}>
            							<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fticketasia&amp;layout=button_count&amp;show_faces=false&amp;width=100&amp;action=like&amp;colorscheme=light&amp;height=22"
											scrolling="no" frameborder="0"
											style="border: none; overflow: hidden; width: 100px; height: 20px;"
											allowTransparency="true"></iframe>
										<{/if}>
            							<{if $smarty.session.city_id == $gz_city_id }>
										<img src="<{$rootpath}>/images/4006838000.gif">
										<{elseif $smarty.session.city_id == $mo_city_id }>
										<img src="<{$rootpath}>/images/28282888.gif">
										<{else}>
										<img src="<{$rootpath}>/images/68838000.gif">
										<{/if}>
            							
              							<!--==============//////    Start Top Menu  \\\\\\=========== -->
              								<!--<table width="824" border="0" cellspacing="0" cellpadding="0">
              									<tr>
                									<td align="right">
 														
                									</td>
                									<td width="290" align="right"><img src="<{$rootpath}>/images/<{$lang}>/hotline_top_movie.gif" width="290" height="30"></td>
									                <td width="38"><img src="<{$rootpath}>/images/spacer.gif" width="38" height="1"></td>
									                <td width="94" valign="bottom"><a href="#"><img src="<{$rootpath}>/images/<{$lang}>/icon_zone.gif" width="94" height="34" border="0"></a></td>
									                <td width="13"><img src="<{$rootpath}>/images/spacer.gif" width="13" height="1"></td>
									                <td width="49" valign="bottom"><a href="#"><img src="<{$rootpath}>/images/<{$lang}>/icon_online_service.gif" width="49" height="34" border="0"></a></td>
                									<td width="146" height="40" align="right" valign="bottom">
                										<table width="146" border="0" cellspacing="0" cellpadding="0">
															<tr>
										                    	<td align="right" class="textpurple"><a href="#"><{$LANG.header.mhp}></a> &nbsp;|&nbsp; <a href="#"><{$LANG.header.tc}></a> &nbsp;|&nbsp; <a href="#">English</a></td>
										                    </tr>
                										</table>
                									</td>
              									</tr>
											</table>//-->
              							<!--==============//////    End Top Menu  \\\\\\=========== --> 
              							</td>
										
          							</tr>

        						</table>
        					</td>
      					</tr>
      					<tr>
        					<td valign="top">
        						<table width="824" border="0" cellspacing="0" cellpadding="0">
          							<tr>
										<td height="37">
            							<!--==============//////    Start Navigation  Menu  \\\\\\=========== -->
            							<form id='searchform' action='<{$rootpath}>/show/hot.php'>
	              							<table width="824" border="0" cellspacing="0" cellpadding="0" background="<{$rootpath}>/images/top_menu_bg.jpg">
	              								<tr>
													<td align="left">
														<table align="left" border="0" cellspacing="0" cellpadding="0">
															<tr>
						                						<td width="46" >
							                						<div class="menu0">
							                							<a href="<{$rootpath}>/index.php"><img style="opacity: 1;" src="<{$rootpath}>/images/nav_box1.gif" alt="" class="a" border="0">
							                							<img src="<{$rootpath}>/images/nav_box1_o.gif" alt="" border="0" class="b"></a>
							                						</div>
												                </td>
															<{if $smarty.session.city_id <> $hk_city_id }>
																<td <{if $param_list.category_id <> $movie_category_id }>onMouseOver="showmenu('navi')" onMouseOut="hidemenu('navi')"<{/if}>>
																	<div class="menu1">
																		<a href="<{if $smarty.session.city_id == $mo_city_id }>http://www.jt-ticket.net/category.php?action=bGlzdF9ldmVudA==&cat_id=MTM5" target="_blank"<{else}><{$rootpath}>/movie/hot_movie.php"<{/if}>><img style="opacity: 1;" src="<{$rootpath}>/images/<{$lang}>/nav_01_off.gif" alt="" class="a" border="0">
																			<img src="<{$rootpath}>/images/<{$lang}>/nav_01_on.gif" alt="" border="0" class="b">
																		</a>
																	</div>
						                							<table width="200" class="<{if $param_list.category_id == $movie_category_id }>menushow<{else}>menu<{/if}>" id="navi" border="0" cellspacing="0" cellpadding="0">
														                <tr>
														                    <!--<td width="73" height"26"><a href="<{$rootpath}>/movie/hot_movie.php"><img src="<{$rootpath}>/images/<{$lang}>/nav_sub1_01_off.gif" id="Image1" onMouseOver="MM_swapImage('Image1','','<{$rootpath}>/images/<{$lang}>/nav_sub1_01_on.gif',1)" onMouseOut="MM_swapImgRestore()" border="0"></a></td>
														                    <td width="71" height"26"><a href="<{$rootpath}>/movie/venue_list.php"><img src="<{$rootpath}>/images/<{$lang}>/nav_sub1_02_off.gif" id="Image2" onMouseOver="MM_swapImage('Image2','','<{$rootpath}>/images/<{$lang}>/nav_sub1_02_on.gif',1)" onMouseOut="MM_swapImgRestore()" border="0"></a></td>
														                    <td width="71" height"26"><a href="<{$rootpath}>/movie/coming_movie.php"><img src="<{$rootpath}>/images/<{$lang}>/nav_sub1_03_off.gif" id="Image3" onMouseOver="MM_swapImage('Image3','','<{$rootpath}>/images/<{$lang}>/nav_sub1_03_on.gif',1)" onMouseOut="MM_swapImgRestore()" border="0"></a></td>
														                    <td width="71" height"26"><a href="#"><img src="<{$rootpath}>/images/<{$lang}>/nav_sub1_04_off.gif" id="Image4" onMouseOver="MM_swapImage('Image4','','<{$rootpath}>/images/<{$lang}>/nav_sub1_04_on.gif',1)" onMouseOut="MM_swapImgRestore()" border="0"></a></td>//-->
														                    <td>&nbsp;</td>
														                </tr>
						                							</table>
						                						</td>
						                					<{/if}>
						                						<td <{if $param_list.category_id <> $show_category_id }> onMouseOver="showmenu('nav2')" onMouseOut="hidemenu('nav2')" <{/if}>>
							                						<div class="menu1">
							                							<a href="<{$rootpath}>/show/hot.php"><img style="opacity: 1;" src="<{$rootpath}>/images/<{$lang}>/nav_02_off.gif" alt="" class="a" border="0">
							                							<img src="<{$rootpath}>/images/<{$lang}>/nav_02_on.gif" alt="" border="0" class="b"></a>
							                						</div>
													                <!--<table width="200" class="<{if $param_list.category_id == $show_category_id }>menushow<{else}>menu<{/if}>" id="nav2" border="0" cellspacing="0" cellpadding="0">
														                <tr>
														                    <td width="73" height"26"><a href="<{$rootpath}>/show/hot.php"><img src="<{$rootpath}>/images/<{$lang}>/nav_sub2_01_off.gif" id="Image6" onMouseOver="MM_swapImage('Image6','','<{$rootpath}>/images/<{$lang}>/nav_sub2_01_on.gif',1)" onMouseOut="MM_swapImgRestore()" border="0"></a></td>
														                    <td width="72" height"26"><a href="<{$rootpath}>/show/coming.php"><img src="<{$rootpath}>/images/<{$lang}>/nav_sub2_02_off.gif" id="Image11" onMouseOver="MM_swapImage('Image11','','<{$rootpath}>/images/<{$lang}>/nav_sub2_02_on.gif',1)" onMouseOut="MM_swapImgRestore()" border="0"></a></td>
														                    <td width="72" height"26"><a href="#"><img src="<{$rootpath}>/images/<{$lang}>/nav_sub2_04_off.gif" id="Image9" onMouseOver="MM_swapImage('Image9','','<{$rootpath}>/images/<{$lang}>/nav_sub2_04_on.gif',1)" onMouseOut="MM_swapImgRestore()" border="0"></a></td>
														                    <td width="72" height"26"><a href="#"><img src="<{$rootpath}>/images/<{$lang}>/nav_sub2_05_off.gif" id="Image10" onMouseOver="MM_swapImage('Image10','','<{$rootpath}>/images/<{$lang}>/nav_sub2_05_on.gif',1)" onMouseOut="MM_swapImgRestore()" border="0"></a></td>
														                </tr>
													                </table>//-->
												                </td>
												                <td onMouseOver="showmenu('nav3')" onMouseOut="hidemenu('nav3')">
													                <div class="menu1">
														                <a href="<{$rootpath}>/transport/transport.php">
															                <img style="opacity: 1;" src="<{$rootpath}>/images/<{$lang}>/nav_03_off.gif" alt="" class="a" border="0">
															                <img src="<{$rootpath}>/images/<{$lang}>/nav_03_on.gif" alt="" border="0" class="b">
														                </a>
													                </div>
												                </td>
												                <td>
												                <div class="menu1">
												                <a href="<{$rootpath}>/hotel/hotel_list.php">
												                <img style="opacity: 1;" src="<{$rootpath}>/images/<{$lang}>/nav_04_off.gif" alt="" class="a" border="0">
												                <img src="<{$rootpath}>/images/<{$lang}>/nav_04_on.gif" alt="" border="0" class="b">
												                </a>
												                </div>
													                <!--<table width="200" class="menu" id="nav4" border="0" cellspacing="0" cellpadding="0">
														                <tr>
														                    <td width="73" height"26"><a href="#"><img src="<{$rootpath}>/images/<{$lang}>/nav_sub4_01_off.gif" id="Image14" onMouseOver="MM_swapImage('Image14','','<{$rootpath}>/images/<{$lang}>/nav_sub4_01_on.gif',1)" onMouseOut="MM_swapImgRestore()" border="0"></a></td>
														                    <td width="72" height"26"><a href="#"><img src="<{$rootpath}>/images/<{$lang}>/nav_sub4_02_off.gif" id="Image15" onMouseOver="MM_swapImage('Image15','','<{$rootpath}>/images/<{$lang}>/nav_sub4_02_on.gif',1)" onMouseOut="MM_swapImgRestore()" border="0"></a></td>
														                    <td width="72" height"26"><a href="#"><img src="<{$rootpath}>/images/<{$lang}>/nav_sub4_03_off.gif" id="Image16" onMouseOver="MM_swapImage('Image16','','<{$rootpath}>/images/<{$lang}>/nav_sub4_03_on.gif',1)" onMouseOut="MM_swapImgRestore()" border="0"></a></td>
														                    <td width="72" height"26"><a href="#"><img src="<{$rootpath}>/images/<{$lang}>/nav_sub4_04_off.gif" id="Image17" onMouseOver="MM_swapImage('Image17','','<{$rootpath}>/images/<{$lang}>/nav_sub4_04_on.gif',1)" onMouseOut="MM_swapImgRestore()" border="0"></a></td>
														                    <td width="72" height"26"><a href="#"><img src="<{$rootpath}>/images/<{$lang}>/nav_sub4_05_off.gif" id="Image18" onMouseOver="MM_swapImage('Image18','','<{$rootpath}>/images/<{$lang}>/nav_sub4_05_on.gif',1)" onMouseOut="MM_swapImgRestore()" border="0"></a></td>
														                </tr>
													                </table>//-->
																</td>
												                <td onMouseOver="showmenu('nav5')" onMouseOut="hidemenu('nav5')"><div class="menu1"><a href="<{$rootpath}>/sports/sports.php"><img style="opacity: 1;" src="<{$rootpath}>/images/<{$lang}>/nav_05_off.gif" alt="" class="a" border="0"><img src="<{$rootpath}>/images/<{$lang}>/nav_05_on.gif" alt="" border="0" class="b"></a></div>
													                
												                </td>
												                <td onMouseOver="showmenu('nav6')" onMouseOut="hidemenu('nav6')"><div class="menu1"><a href="<{$rootpath}>/promotion/promotion.php"><img style="opacity: 1;" src="<{$rootpath}>/images/<{$lang}>/nav_06_off.gif" alt="" class="a" border="0"><img src="<{$rootpath}>/images/<{$lang}>/nav_06_on.gif" alt="" border="0" class="b"></a></div>
													                <!--<table width="200" class="menu" id="nav6" border="0" cellspacing="0" cellpadding="0">
														                <tr>
														                    <td width="73" height"26">&nbsp;</td>
														                    <td width="73" height"26">&nbsp;</td>
														                    <td width="73" height"26">&nbsp;</td>
														                </tr>
													                </table>//-->
												                </td>
												            </tr>
												        </table>
												    </td>
			                						<td width="244" align="right" background="<{$rootpath}>/images/top_search_bg.jpg">
			                						<input name="keyword" type="text" class="formsearch " id="formsearch"></td>
			                						<td width="51" background="<{$rootpath}>/images/nav_seatch_but.gif">
			                							<table width="51" border="0" cellspacing="0" cellpadding="0">
															<tr>
																<td height="15" align="center"><a href="#"  id='topsearch' class="topsearch"><{$LANG.header.search}></a></td>
															</tr>
			                							</table>
			                						</td>
			                						<td width="19"><img src="<{$rootpath}>/images/nav_box2.gif" width="19" height="37"></td>
			              						</tr>
											</table>
										</form>
            							<!--==============//////    End Navigation  Menu  \\\\\\=========== -->            
            							</td>
          							</tr>
		        				</table>
		        			</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td align="center"><img src="<{$rootpath}>/images/spacer.gif" width="1" height="1"></td>
			</tr>
		</table>
		<table border="0" cellspacing="0" cellpadding="0" width="1000" align="center" bgcolor="#FFFFFF">
			<tr>
				<td>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#logout').click(function() {
						$.post("<{$rootpath}>/member/logout.php", function(data){
							window.location.reload();
						});
				});
				$('.aomen_a').click(function(){
					if("<{ $is_cicy_guangzhou}>"=="yes"){
					window.open("http://www.jt-ticket.net");
					}
					
				});
				
				$("#topsearch").click(function(){
					var keyword=$("#formsearch").val();
					$("#searchform").submit();
				});
			});	
		</script>