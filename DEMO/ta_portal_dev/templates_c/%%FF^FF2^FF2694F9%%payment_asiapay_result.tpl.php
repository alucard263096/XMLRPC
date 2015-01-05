<?php /* Smarty version 2.6.26, created on 2010-11-09 08:56:06
         compiled from E:/Apache2.2/htdocs/ta_portal_dev/templates/payment/payment_asiapay_result.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language="javascript"  type="text/javascript"   src="<?php echo $this->_tpl_vars['rootpath']; ?>
/js/jquery.timers.js"></script>
<div id="waittimer"></div>
<input type="hidden" name="status" id="status" value="<?php echo $this->_tpl_vars['status']; ?>
">
<input type="hidden" name="ref" id="ref" value="<?php echo $this->_tpl_vars['ref']; ?>
">
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0" class="payment_bg">
<tr>
<td>
   <table width="100%"  border="0" cellspacing="0" cellpadding="0">
     <tr align="center">
       <td height="41">
           <img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/titlebar_myorder.gif">
       </td>
     </tr>
   </table>           </td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td>
<table width="960" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr align="center">
    <td><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/tab_1orderdetail_blur.gif" border="0"></td>
    <td><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/tab_2payment_blur.gif" border="0"></td>
    <td valign="bottom"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/tab_3completeorder.gif" border="0" ></td>
  </tr>
</table>
</td>
</tr>
<tr><td>
	<table border="0" cellpadding="0" cellspacing="0" id="table1" width="100%" style="height: 100px;">
		<?php if ($this->_tpl_vars['status'] == 0): ?>
		<tr>
			<td align="center" style="font-weight: bold; font-size: 18px;">
				<div class="result"> <?php echo $this->_tpl_vars['ref']; ?>
 <?php echo $this->_tpl_vars['LANG']['payment']['processing']; ?>
  </br></div>
			</td>
		</tr>		
		<?php else: ?>
		<tr>
			<td align="center" style="font-weight: bold; font-size: 18px;">
				<div><?php echo $this->_tpl_vars['LANG']['payment']['cancel']; ?>
 </div> 
			</td>
		</tr>
		<?php endif; ?>
	</table>
</td></tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/payment/related_service.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script>
$(document).ready(function()
{
	$("#waittimer").oneTime("2s", function() {
		if($('#status').val() == 0)
		{
			$.get('<?php echo $this->_tpl_vars['rootpath']; ?>
/payment/asiapay_checkfeed.php',{ ref: $('#ref').val()} ,function(data) {
				  $('.result').html(data);			
				});
		}
	}); 

})
</script>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>