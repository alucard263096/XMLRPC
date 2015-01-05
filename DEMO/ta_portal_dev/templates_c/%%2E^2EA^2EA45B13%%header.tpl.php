<?php /* Smarty version 2.6.26, created on 2010-10-24 03:17:05
         compiled from F:/Apache2.2/htdocs/ta_portal_dev/templates/header.tpl */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title><?php if ($this->_tpl_vars['domain'] == 'ticketchina'): ?>Welcome to TicketChina<?php else: ?>Welcome to TicketAsia<?php endif; ?></title>
		<link href="<?php echo $this->_tpl_vars['rootpath']; ?>
/ticketasia.ico" rel="shortcut icon"/>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['charset']; ?>
" />
		<link href="<?php echo $this->_tpl_vars['rootpath']; ?>
/css/stylesheet.css" rel="stylesheet" type="text/css" >
		<link href="<?php echo $this->_tpl_vars['rootpath']; ?>
/css/stylesheet_<?php echo $this->_tpl_vars['lang']; ?>
.css" rel="stylesheet" type="text/css" >
		<link href="<?php echo $this->_tpl_vars['rootpath']; ?>
/css/csshorizontalmenu.css" rel="stylesheet" type="text/css" >
		<link type="text/css" href="<?php echo $this->_tpl_vars['rootpath']; ?>
/css/movie_index_<?php echo $this->_tpl_vars['lang']; ?>
.css" rel="stylesheet" />
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['rootpath']; ?>
/js/jquery-1.4.2.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['rootpath']; ?>
/js/dream.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['rootpath']; ?>
/js/onmouseeffect.js"></script>
		<script language="javascript"  type="text/javascript"   src="<?php echo $this->_tpl_vars['rootpath']; ?>
/js/popup_layer.js"></script>
		<link type="text/css" href="<?php echo $this->_tpl_vars['rootpath']; ?>
/themes/base/jquery.ui.all.css" rel="stylesheet" />
		<link href="<?php echo $this->_tpl_vars['rootpath']; ?>
/css/accordion_customer_theme.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['rootpath']; ?>
/js/chrome.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['rootpath']; ?>
/js/ui/jquery-ui-1.8.2.custom.js"></script>
		
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
	
		
		<?php $_from = $this->_tpl_vars['csspaths']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['css']):
?>
		<link href="<?php echo $this->_tpl_vars['rootpath']; ?>
/css/<?php echo $this->_tpl_vars['css']; ?>
" rel="stylesheet" type="text/css" >
		<?php endforeach; endif; unset($_from); ?>	
		
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
		_gaq.push(['_setAccount', '<?php echo $this->_tpl_vars['google_analytics_account']; ?>
']);
		_gaq.push(['_setDomainName', '.<?php echo $this->_tpl_vars['domain']; ?>
.net']);
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
						url: "<?php echo $this->_tpl_vars['rootpath']; ?>
/search/namesearch.php",
						dataType: 'json',
						data:{ str:$("#formsearch").val(),
								category_id:"<?php echo $this->_tpl_vars['param_list']['category_id']; ?>
",
								city_id:"<?php echo $this->_tpl_vars['param_list']['city_id']; ?>
"
						},
					 	success: function(data){response(data)}
					})					
			}								         	       
			});
		})
		</script>
		
		
		
	</head>

	<body class="yui-skin-sam" style="margin: 0px;background-image:url(<?php echo $this->_tpl_vars['rootpath']; ?>
/images/body_bg.gif);background-repeat:repeat-x;background-color:#000000;">
		<center>
		<div style="width:1007px; height:50px;background-image:url(<?php echo $this->_tpl_vars['rootpath']; ?>
/images/top_bg.gif);">&nbsp;</div>
		<div style="width:1007px; background-color: white;">
		<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0" class="<?php if ($this->_tpl_vars['domain'] == 'ticketchina'): ?>bg_logo_tc<?php else: ?>bg_logo_ta<?php endif; ?>" bgcolor="white">
			<tr>
				<td width="170"><a id="index_link" href="<?php echo $this->_tpl_vars['rootpath']; ?>
/index.php"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" border="0" width="170" height=123" alt="<?php echo $this->_tpl_vars['LANG']['header']['homepage']; ?>
"></a></td>
				<td width="830" height="130" align="right" valign="top">
					<table width="830" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td align="right" valign="top">
								<table width="830" border="0" cellspacing="2" cellpadding="2">
									<tr>
										<td width="400" valign="bottom" rowspan="2">
										<?php if ($this->_tpl_vars['city_name'] <> ''): ?>
												<table>
												    <tr>
														<td>
															<table>			
																<tr >
																	<td width="400">
													       		  		<table background="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/select_area_city.gif" style="background-repeat:no-repeat" width="300">
															       		  		<tr align="left">
															       		  			<td align="center">
															       		  				<?php echo $this->_tpl_vars['LANG']['city_name']; ?>

															       		  			</td>
															       		  			<td>
															       		  				&nbsp;&nbsp;&nbsp;
															       		  			</td>
															       		  			<td >
															       		  				<div class="cicy_menu1" align="center">
															       		  					<?php if ($_SESSION['city_id'] == '1'): ?>
																			                <a href="<?php echo $this->_tpl_vars['file_url']; ?>
?<?php echo $this->_tpl_vars['file_url_parameter']; ?>
<?php if ($this->_tpl_vars['file_url_parameter'] != ""): ?>&<?php endif; ?>city_id=1">
																				                <img style="opacity: 1;" src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/guangzhou_on.gif" alt="" border="0" >
																			                </a>  
																			               <?php else: ?>
																			                 <a href="<?php echo $this->_tpl_vars['file_url']; ?>
?<?php echo $this->_tpl_vars['file_url_parameter']; ?>
<?php if ($this->_tpl_vars['file_url_parameter'] != ""): ?>&<?php endif; ?>city_id=1">
																				                <img style="opacity: 1;" src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/guangzhou_off.gif" alt="" class="a" border="0" >
																				                <img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/guangzhou_mouse_on.gif" alt="" border="0" class="b" >
																			                </a> 
																			                <?php endif; ?> 
																		                </div> 
																		               
															       		  			</td>
															       		  			<td > 
															       		  				<div class="cicy_menu1" align="center">
															       		  					<?php if ($_SESSION['city_id'] == '2'): ?>
																			                <a href="<?php echo $this->_tpl_vars['file_url']; ?>
?<?php echo $this->_tpl_vars['file_url_parameter']; ?>
<?php if ($this->_tpl_vars['file_url_parameter'] != ""): ?>&<?php endif; ?>city_id=2">
																				                <img style="opacity: 1;" src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/hk_on.gif" alt="" border="0" >
																			                </a>  
																			               <?php else: ?>
																			                <a href="<?php echo $this->_tpl_vars['file_url']; ?>
?<?php echo $this->_tpl_vars['file_url_parameter']; ?>
<?php if ($this->_tpl_vars['file_url_parameter'] != ""): ?>&<?php endif; ?>city_id=2">
																				                <img style="opacity: 1;" src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/hk_off.gif" alt="" class="a" border="0" >
																				                <img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/hk_mouse_on.gif" alt="" border="0" class="b">
																			                </a> 
																			                <?php endif; ?>  
																		                </div>
															       		  			</td>
															       		  			<td>
															       		  				<div class="cicy_menu1" align="center">
															       		  					<?php if ($_SESSION['city_id'] == '3'): ?>
																			                <a >
																				                <img  src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/aomen_on.gif" alt="" border="0" border="0" >
																			                </a>  
																			               <?php else: ?>
																			                <a class="aomen_a" href="<?php echo $this->_tpl_vars['file_url']; ?>
?<?php echo $this->_tpl_vars['file_url_parameter']; ?>
<?php if ($this->_tpl_vars['file_url_parameter'] != ""): ?>&<?php endif; ?>city_id=3">
																				                <img  src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/aomen_off.gif" alt="" class="a" border="0" >
																				                <img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/aomen_mouse_on.gif" alt="" border="0" class="b" >
																			                </a>
																			                <?php endif; ?>   
																		                </div>
															       		  			</td>
															       		  		</tr>
														       		  	</table>
															       	</td>
															       <!--
																	<td id="header_selecttext_div">
														       		  	<span class="header_selecttext"><?php echo $this->_tpl_vars['city_name']; ?>
</span>
														       		  	<input type="hidden" id="hidden_city_id" value=""/>
															       	</td>
															       	-->		       			       	
		       													</tr>
	       													</table>
														</td>
													</tr>	
												</table>
											<?php endif; ?>
										</td>
										<td width="704" align="right">
										<!--==============//////    Start Login  Menu  \\\\\\=========== -->
											<?php if ($_SESSION['member'] != ''): ?>
												<?php echo $this->_tpl_vars['LANG']['header']['welcome']; ?>

												<span class="textmovie">
													<?php echo $_SESSION['member']['first_name']; ?>
 <?php echo $_SESSION['member']['last_name']; ?>

												</span>&nbsp;&nbsp;&nbsp;
												<a href="<?php echo $this->_tpl_vars['rootpath']; ?>
/member/change_password.php" class="toplink"><?php echo $this->_tpl_vars['LANG']['header']['change_password']; ?>
</a>&nbsp;| &nbsp;
												<a href="<?php echo $this->_tpl_vars['rootpath']; ?>
/member/modify_user_info.php" class="toplink"><?php echo $this->_tpl_vars['LANG']['header']['modify_information']; ?>
</a>&nbsp;| &nbsp;
												<a href="#" id="logout" class="toplink"><?php echo $this->_tpl_vars['LANG']['header']['member_logout']; ?>
</a>
											<?php else: ?>
												<a href="<?php echo $this->_tpl_vars['rootpath']; ?>
/member/login.php" class="toplink"><?php echo $this->_tpl_vars['LANG']['header']['member_login']; ?>
</a> / 
												<a href="<?php echo $this->_tpl_vars['rootpath']; ?>
/member/register_user.php" class="toplink"><?php echo $this->_tpl_vars['LANG']['header']['member_register']; ?>
</a>
											<?php endif; ?>
											&nbsp;&nbsp;&nbsp;
											<?php if ($this->_tpl_vars['lang'] != 'zh-tc'): ?>
					                    	<a href="<?php echo $this->_tpl_vars['file_url']; ?>
?<?php echo $this->_tpl_vars['file_url_parameter']; ?>
<?php if ($this->_tpl_vars['file_url_parameter'] != ""): ?>&<?php endif; ?>lang=zh-tc"><?php echo $this->_tpl_vars['LANG']['header']['zh_tc']; ?>
</a> 
					                    	<?php endif; ?>
					                    	<?php if ($this->_tpl_vars['lang'] != 'zh-sc'): ?>
					                    	<a href="<?php echo $this->_tpl_vars['file_url']; ?>
?<?php echo $this->_tpl_vars['file_url_parameter']; ?>
<?php if ($this->_tpl_vars['file_url_parameter'] != ""): ?>&<?php endif; ?>lang=zh-sc"><?php echo $this->_tpl_vars['LANG']['header']['zh_sc']; ?>
</a>
					                    	<?php endif; ?>
           								<!--==============//////    End Login  Menu  \\\\\\=========== -->
           								</td>
          							</tr>
									<tr>
            							<td height="40" align="right" valign="top" colspan="2">
            							<?php if ($_SESSION['city_id'] == $this->_tpl_vars['gz_city_id']): ?>
										<img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/4006838000.gif">
										<?php elseif ($_SESSION['city_id'] == $this->_tpl_vars['mo_city_id']): ?>
										<img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/28282888.gif">
										<?php else: ?>
										<img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/68838000.gif">
										<?php endif; ?>
            							
              							<!--==============//////    Start Top Menu  \\\\\\=========== -->
              								<!--<table width="824" border="0" cellspacing="0" cellpadding="0">
              									<tr>
                									<td align="right">
 														
                									</td>
                									<td width="290" align="right"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/hotline_top_movie.gif" width="290" height="30"></td>
									                <td width="38"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" width="38" height="1"></td>
									                <td width="94" valign="bottom"><a href="#"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/icon_zone.gif" width="94" height="34" border="0"></a></td>
									                <td width="13"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" width="13" height="1"></td>
									                <td width="49" valign="bottom"><a href="#"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/icon_online_service.gif" width="49" height="34" border="0"></a></td>
                									<td width="146" height="40" align="right" valign="bottom">
                										<table width="146" border="0" cellspacing="0" cellpadding="0">
															<tr>
										                    	<td align="right" class="textpurple"><a href="#"><?php echo $this->_tpl_vars['LANG']['header']['mhp']; ?>
</a> &nbsp;|&nbsp; <a href="#"><?php echo $this->_tpl_vars['LANG']['header']['tc']; ?>
</a> &nbsp;|&nbsp; <a href="#">English</a></td>
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
            							<form id='searchform' action='<?php echo $this->_tpl_vars['rootpath']; ?>
/show/hot.php'>
	              							<table width="824" border="0" cellspacing="0" cellpadding="0" background="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/top_menu_bg.jpg">
	              								<tr>
													<td width="510" align="left">
														<table align="left" border="0" cellspacing="0" cellpadding="0">
															<tr>
						                						<td width="46" >
							                						<div class="menu0">
							                							<a href="<?php echo $this->_tpl_vars['rootpath']; ?>
/index.php"><img style="opacity: 1;" src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/nav_box1.gif" alt="" class="a" border="0">
							                							<img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/nav_box1_o.gif" alt="" border="0" class="b"></a>
							                						</div>
												                </td>
															<?php if ($_SESSION['city_id'] <> $this->_tpl_vars['hk_city_id']): ?>
																<td width="74" <?php if ($this->_tpl_vars['param_list']['category_id'] <> $this->_tpl_vars['movie_category_id']): ?>onMouseOver="showmenu('navi')" onMouseOut="hidemenu('navi')"<?php endif; ?>>
																	<div class="menu1">
																		<a href="<?php if ($_SESSION['city_id'] == $this->_tpl_vars['mo_city_id']): ?>http://www.jt-ticket.net/category.php?action=bGlzdF9ldmVudA==&cat_id=MTM5" target="_blank"<?php else: ?><?php echo $this->_tpl_vars['rootpath']; ?>
/movie/hot_movie.php"<?php endif; ?>><img style="opacity: 1;" src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_01_off.gif" alt="" class="a" border="0">
																			<img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_01_on.gif" alt="" border="0" class="b">
																		</a>
																	</div>
						                							<table width="200" class="<?php if ($this->_tpl_vars['param_list']['category_id'] == $this->_tpl_vars['movie_category_id']): ?>menushow<?php else: ?>menu<?php endif; ?>" id="navi" border="0" cellspacing="0" cellpadding="0">
														                <tr>
														                    <!--<td width="73" height"26"><a href="<?php echo $this->_tpl_vars['rootpath']; ?>
/movie/hot_movie.php"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_sub1_01_off.gif" id="Image1" onMouseOver="MM_swapImage('Image1','','<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_sub1_01_on.gif',1)" onMouseOut="MM_swapImgRestore()" border="0"></a></td>
														                    <td width="71" height"26"><a href="<?php echo $this->_tpl_vars['rootpath']; ?>
/movie/venue_list.php"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_sub1_02_off.gif" id="Image2" onMouseOver="MM_swapImage('Image2','','<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_sub1_02_on.gif',1)" onMouseOut="MM_swapImgRestore()" border="0"></a></td>
														                    <td width="71" height"26"><a href="<?php echo $this->_tpl_vars['rootpath']; ?>
/movie/coming_movie.php"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_sub1_03_off.gif" id="Image3" onMouseOver="MM_swapImage('Image3','','<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_sub1_03_on.gif',1)" onMouseOut="MM_swapImgRestore()" border="0"></a></td>
														                    <td width="71" height"26"><a href="#"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_sub1_04_off.gif" id="Image4" onMouseOver="MM_swapImage('Image4','','<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_sub1_04_on.gif',1)" onMouseOut="MM_swapImgRestore()" border="0"></a></td>//-->
														                    <td>&nbsp;</td>
														                </tr>
						                							</table>
						                						</td>
						                					<?php endif; ?>
						                						<td width="74" <?php if ($this->_tpl_vars['param_list']['category_id'] <> $this->_tpl_vars['show_category_id']): ?> onMouseOver="showmenu('nav2')" onMouseOut="hidemenu('nav2')" <?php endif; ?>>
							                						<div class="menu1">
							                							<a href="<?php echo $this->_tpl_vars['rootpath']; ?>
/show/hot.php"><img style="opacity: 1;" src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_02_off.gif" alt="" class="a" border="0">
							                							<img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_02_on.gif" alt="" border="0" class="b"></a>
							                						</div>
													                <!--<table width="200" class="<?php if ($this->_tpl_vars['param_list']['category_id'] == $this->_tpl_vars['show_category_id']): ?>menushow<?php else: ?>menu<?php endif; ?>" id="nav2" border="0" cellspacing="0" cellpadding="0">
														                <tr>
														                    <td width="73" height"26"><a href="<?php echo $this->_tpl_vars['rootpath']; ?>
/show/hot.php"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_sub2_01_off.gif" id="Image6" onMouseOver="MM_swapImage('Image6','','<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_sub2_01_on.gif',1)" onMouseOut="MM_swapImgRestore()" border="0"></a></td>
														                    <td width="72" height"26"><a href="<?php echo $this->_tpl_vars['rootpath']; ?>
/show/coming.php"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_sub2_02_off.gif" id="Image11" onMouseOver="MM_swapImage('Image11','','<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_sub2_02_on.gif',1)" onMouseOut="MM_swapImgRestore()" border="0"></a></td>
														                    <td width="72" height"26"><a href="#"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_sub2_04_off.gif" id="Image9" onMouseOver="MM_swapImage('Image9','','<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_sub2_04_on.gif',1)" onMouseOut="MM_swapImgRestore()" border="0"></a></td>
														                    <td width="72" height"26"><a href="#"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_sub2_05_off.gif" id="Image10" onMouseOver="MM_swapImage('Image10','','<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_sub2_05_on.gif',1)" onMouseOut="MM_swapImgRestore()" border="0"></a></td>
														                </tr>
													                </table>//-->
												                </td>
												                <td width="75" onMouseOver="showmenu('nav3')" onMouseOut="hidemenu('nav3')">
													                <div class="menu1">
														                <a href="<?php echo $this->_tpl_vars['rootpath']; ?>
/transport/transport.php">
															                <img style="opacity: 1;" src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_03_off.gif" alt="" class="a" border="0">
															                <img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_03_on.gif" alt="" border="0" class="b">
														                </a>
													                </div>
												                </td>
												                <td width="74">
												                <div class="menu1">
												                <a href="<?php echo $this->_tpl_vars['rootpath']; ?>
/hotel/hotel_list.php">
												                <img style="opacity: 1;" src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_04_off.gif" alt="" class="a" border="0">
												                <img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_04_on.gif" alt="" border="0" class="b">
												                </a>
												                </div>
													                <!--<table width="200" class="menu" id="nav4" border="0" cellspacing="0" cellpadding="0">
														                <tr>
														                    <td width="73" height"26"><a href="#"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_sub4_01_off.gif" id="Image14" onMouseOver="MM_swapImage('Image14','','<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_sub4_01_on.gif',1)" onMouseOut="MM_swapImgRestore()" border="0"></a></td>
														                    <td width="72" height"26"><a href="#"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_sub4_02_off.gif" id="Image15" onMouseOver="MM_swapImage('Image15','','<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_sub4_02_on.gif',1)" onMouseOut="MM_swapImgRestore()" border="0"></a></td>
														                    <td width="72" height"26"><a href="#"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_sub4_03_off.gif" id="Image16" onMouseOver="MM_swapImage('Image16','','<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_sub4_03_on.gif',1)" onMouseOut="MM_swapImgRestore()" border="0"></a></td>
														                    <td width="72" height"26"><a href="#"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_sub4_04_off.gif" id="Image17" onMouseOver="MM_swapImage('Image17','','<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_sub4_04_on.gif',1)" onMouseOut="MM_swapImgRestore()" border="0"></a></td>
														                    <td width="72" height"26"><a href="#"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_sub4_05_off.gif" id="Image18" onMouseOver="MM_swapImage('Image18','','<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_sub4_05_on.gif',1)" onMouseOut="MM_swapImgRestore()" border="0"></a></td>
														                </tr>
													                </table>//-->
																</td>
												                <td width="74" onMouseOver="showmenu('nav5')" onMouseOut="hidemenu('nav5')"><div class="menu1"><a href="<?php echo $this->_tpl_vars['rootpath']; ?>
/sports/sports.php"><img style="opacity: 1;" src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_05_off.gif" alt="" class="a" border="0"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_05_on.gif" alt="" border="0" class="b"></a></div>
													                
												                </td>
												                <td width="74" onMouseOver="showmenu('nav6')" onMouseOut="hidemenu('nav6')"><div class="menu1"><a href="<?php echo $this->_tpl_vars['rootpath']; ?>
/promotion/promotion.php"><img style="opacity: 1;" src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_06_off.gif" alt="" class="a" border="0"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/nav_06_on.gif" alt="" border="0" class="b"></a></div>
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
			                						<td width="244" align="right" background="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/top_search_bg.jpg">
			                						<input name="keyword" type="text" class="formsearch " id="formsearch"></td>
			                						<td width="51" background="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/nav_seatch_but.gif">
			                							<table width="51" border="0" cellspacing="0" cellpadding="0">
															<tr>
																<td height="15" align="center"><a href="#"  id='topsearch' class="topsearch"><?php echo $this->_tpl_vars['LANG']['header']['search']; ?>
</a></td>
															</tr>
			                							</table>
			                						</td>
			                						<td width="19"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/nav_box2.gif" width="19" height="37"></td>
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
				<td align="center"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" width="1" height="1"></td>
			</tr>
		</table>
		<table border="0" cellspacing="0" cellpadding="0" width="1000" align="center" bgcolor="#FFFFFF">
			<tr>
				<td>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#logout').click(function() {
						$.post("<?php echo $this->_tpl_vars['rootpath']; ?>
/member/logout.php", function(data){
							window.location.reload();
						});
				});
				$('.aomen_a').click(function(){
					if("<?php echo $this->_tpl_vars['is_cicy_guangzhou']; ?>
"=="yes"){
					window.open("http://www.jt-ticket.net");
					}
					
				});
				
				$("#topsearch").click(function(){
					var keyword=$("#formsearch").val();
					$("#searchform").submit();
				});
			});	
		</script>