<?php /* Smarty version 2.6.26, created on 2010-11-11 08:24:30
         compiled from E:/Apache2.2/htdocs/ta_portal_dev/templates/member/admin.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td height='70px;'></td>
	</tr>
	<tr>
		<td align="center" valign="top" class="text14">
			 <?php echo $this->_tpl_vars['login_name']; ?>
<?php echo $this->_tpl_vars['LANG']['admin']['welcome']['1']; ?>

		</td>
	</tr>
	<tr>
		<td align="center" valign="top" class="text14">
			<?php echo $this->_tpl_vars['LANG']['admin']['welcome']['2']; ?>

		</td>
	</tr>
	<tr>
		<td height='40px;'></td>
	</tr>
	<tr>
		<td align="center" valign="top" class="text14">
			<?php echo $this->_tpl_vars['LANG']['admin']['welcome']['3']; ?>

		</td>
	</tr>
	<tr>
		<td height='70px;'></td>
	</tr>
</table>
<script>
var t=5;
var timerid;
$(document).ready(function(){

	timerid = setInterval("timerc()",1000); 
		
});
function timerc()
{
	t=t-1;
	$("#member_admin_return").text(t);
	if(t<=0)
	{	
		clearInterval(timerid);
		window.location.href='<?php echo $this->_tpl_vars['rootpath']; ?>
/<?php echo $this->_tpl_vars['index_page']; ?>
';
		$("#update_id").click();
	}
}
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>