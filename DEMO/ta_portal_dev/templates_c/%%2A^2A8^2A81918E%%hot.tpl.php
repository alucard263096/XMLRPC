<?php /* Smarty version 2.6.26, created on 2010-11-05 10:31:58
         compiled from E:/Apache2.2/htdocs/ta_portal_dev/templates/show/hot.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" href="<?php echo $this->_tpl_vars['rootpath']; ?>
/css/accordion_customer_theme.css" rel="stylesheet" />
<script language="javascript"  type="text/javascript"   src="<?php echo $this->_tpl_vars['rootpath']; ?>
/js/popup_layer.js"></script>
<link href="<?php echo $this->_tpl_vars['rootpath']; ?>
/css/star.css" rel="stylesheet" type="text/css" />
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="730" valign="top">
			<table width="730" border="0" cellspacing="0" cellpadding="0">
				 <tr>
		            <td height="30" valign="top" background="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/line_show_bg.gif">
		            	<img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/show_channel.gif">
		            </td>
		          </tr>
		          <tr>
		            <td valign="top">&nbsp;</td>
		          </tr>
		          <tr>
		            <td valign="top" id='banner_td'>
								            </td>
		          </tr>
		          <tr>
		            <td height="10" valign="top"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" width="10" height="10"></td>
		          </tr>
		          <tr>
		            <td height="35" background="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/bg_bar_purple.gif">
		            	<div id="div2_load" align="left"  class="div_load2">
							<img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/loading.gif"/>
						</div>
						<div id="div2" >
						</div>
					</td>
		          </tr>
				  <tr>
					<td valign="top">
						<div id="div3_load" align="left"  class="div_load">
						<img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/loading.gif"/>
						</div>
						<div id="div3" >
						</div>
				  	</td>
				  </tr>
		</table>
        </td>
        <td width="8"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" width="8" height="1"></td>
        <td width="222" valign="top">
        
        
        <!--==============//////    Start Right Adv Banner  \\\\\\=========== -->
         <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/event_common/box.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
         <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/event_common/banner_list.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <!--==============//////    End Right Adv Banner  \\\\\\=========== -->        </td>
      </tr>
    </table>

<script type="text/javascript">	
	var PopupLayer1 = new PopupLayer({trigger:"#ele1",popupBlk:"#blk1",closeBtn:"#close1",useFx:true});
	$(function() {		
		$('#div2').css('display','none');
		$('#div2_load').css('display','');
		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		$('#div2').load("hot.php", {"action":"resetLocation"}, function() {
			$('#div2').css('display','');
			$('#div2_load').css('display','none');			
		    
		});
		
	});
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/score/score_js.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	
	function searchMovie(){
		resetCriteria();
	}
	
	
	
	
</script>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>