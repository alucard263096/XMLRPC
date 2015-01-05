<?php /* Smarty version 2.6.26, created on 2010-11-12 09:17:07
         compiled from E:/Apache2.2/htdocs/ta_portal_dev/templates/show/detail.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=<?php echo $this->_tpl_vars['google_key']; ?>
" type="text/javascript"></script>
<script type="text/javascript" language="JavaScript" src="<?php echo $this->_tpl_vars['rootpath']; ?>
/js/jquery.jmap.min-r72.js"> </script>
<link type="text/css" href="<?php echo $this->_tpl_vars['rootpath']; ?>
/css/core.css" rel="stylesheet" />
<script>
	
	
	function changeMovie() {
	  window.location.href='detail.php?activity_id='+$("#activity_id").val();
	}
	
	function changeMovieDetailDiv(id)
	{
		$(".ptab").hide();
		$("#ptab_"+id).show();
		$(".submenu .a").show();
		$(".menu"+id+" .a").hide();
		
	}	
	
	
	$(document).ready(function(){
		changeMovieDetailDiv(1);
		
		$(".goto_show").click(function(){
			var show_str=$("#"+$(this).attr("name")).val();
			var ids = show_str.split("_");
			var str='choose_seat.php?show_id='+ids[0]+'&city_id='+ids[1];
			//alert(str);
			window.location.href=str;
		});
	});
</script>
<?php $_from = $this->_tpl_vars['activity_detail']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['activity']):
?>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td>
			<table width="960" >
				<tr height="30" >
					<td id='name_td' >
						<span id="showOfNamed" class="showname_20px_p" ><?php echo $this->_tpl_vars['activity']['name']; ?>
</span>
					</td>
					<td valign="top"  background="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/line_show_bg.gif">
					</td>
				</tr>
			</table>
		</td>
  	</tr>
  	<script>
  		$(document).ready(function(){
  			$("#name_td").width($("#showOfNamed").width());
  		});
  	</script>
  	<tr>
  		<td align='center' background='<?php echo $this->_tpl_vars['rootpath']; ?>
/images/concert_detail_bg.jpg' >
  			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/show/detail_activity.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  		</td>
  	</tr>
  	<tr height='15px'>
  		<td></td>
  	</tr>
  	<!--
  	<tr>
  		<td>
  			<table width="960" border="0" cellspacing="0" cellpadding="0">
		      <tr>
		        <td width="182" valign="top"><div class="menu1"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/concert_menu00.gif"></div></td>
		        <td valign="top" width="2"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/concert_2px.gif"></td>
		        <td width="90"><div class="menu1 submenu"><a href="javascript:void(1)" onclick="changeMovieDetailDiv('1')"><img style="opacity: 1;" src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/concert_menu01_off.gif" alt="" class="a" border="0"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/concert_menu01_off.gif" alt="" border="0" class="b"></a></div></td>
		        <td background="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/concert_menu_bg.gif" valign="top" width="2"></td>
		        <td background="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/concert_menu_bg.gif" width="90"></td>
		        <td background="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/concert_menu_bg.gif" valign="top" width="2"></td>
		        <td background="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/concert_menu_bg.gif" width="90"></td>
		        <td background="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/concert_menu_bg.gif" valign="top" width="2"></td>
		        <td background="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/concert_menu_bg.gif" width="90"></td>
		        <td background="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/concert_menu_bg.gif" valign="top" width="2"></td>
		        <td background="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/concert_menu_bg.gif" width="90"></td>
		        <td background="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/concert_menu_bg.gif">&nbsp;</td>
		      </tr>
            </table>
  		</td>
  	</tr>//-->
  	<tr>
  		<td>
  			<table width="100%" border="0" cellspacing="0" cellpadding="0">
  				<tr>
  					<td><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" width="720" height="1"></td>
  					<td><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" width="27" height="1"></td>
  					<td><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" width="213" height="1"></td>
  				</tr>
  				<tr height='10px;'>
  					<td></td>
  				</tr>
  				<tr>
  					<td  valign='top'>
  					<div id="ptab_1" class='ptab' style='display:none;'>
  						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/show/detail_description.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/show/detail_venue.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  					</div>
  					<div id="ptab_2" class='ptab' style='display:none;'>
  						
  					</div>
  					<div id="ptab_3" class='ptab' style='display:none;'>
  					
  					</div>
  					<div id="ptab_4" class='ptab' style='display:none;'>
	  				
  					</div>
  					<div id="ptab_5" class='ptab' style='display:none;'>
  					
  					</div>
  					
  					
  					</td>
  					<td>
  					</td>
  					<td  valign="top">
				        <!--==============//////    Start Right Adv Banner  \\\\\\=========== -->
				        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/event_common/box.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			        <!--==============//////    End Right Adv Banner  \\\\\\=========== -->        
			        </td>
			       
  				</tr>
  				
  			</table>
  		</td>
  	</tr>
</table>
<?php endforeach; endif; unset($_from); ?>








<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>