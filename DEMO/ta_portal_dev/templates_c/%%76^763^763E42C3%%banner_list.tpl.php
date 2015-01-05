<?php /* Smarty version 2.6.26, created on 2010-10-24 03:20:28
         compiled from F:/Apache2.2/htdocs/ta_portal_dev/templates/event_common/banner_list.tpl */ ?>
<!--<table width="205" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" width="205" height="20"></td>
          </tr>
          <tr>
            <td><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/banner_hot_title.gif"></td>
          </tr>
          <tr>
            <td align="center">
            <table width="190" border="0" cellspacing="0" cellpadding="0">
          	  <?php $_from = $this->_tpl_vars['hotShowList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['hotShow']):
?>
          		<tr>
                	<td>
                	<?php if ($this->_tpl_vars['banner']['url'] == ""): ?>
                	<img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/banner<?php echo $this->_tpl_vars['hotShow']['path']; ?>
" border="0" />
                	<?php else: ?>
                	<a href="<?php echo $this->_tpl_vars['hotShow']['url']; ?>
"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/banner<?php echo $this->_tpl_vars['hotShow']['path']; ?>
" border="0" /></a></td>
                	<?php endif; ?>
                </tr>
          	  <?php endforeach; endif; unset($_from); ?>
            </table>
           </td>
          </tr>

</table>//-->
<table width="205" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" width="205" height="20"></td>
          </tr>
          <tr>
            <td><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/banner_week_title.gif"></td>
          </tr>
          <tr>
            <td align="center">
            <table width="205" border="0" cellspacing="0" cellpadding="0">
          	  <?php $_from = $this->_tpl_vars['bannerList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['banner']):
?>
          		<tr>
                	<td>
                	<?php if ($this->_tpl_vars['banner']['url'] == ""): ?>
                	<img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/banner<?php echo $this->_tpl_vars['banner']['path']; ?>
" border="0" />
                	<?php else: ?>
                	<a href="<?php echo $this->_tpl_vars['banner']['url']; ?>
"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/banner<?php echo $this->_tpl_vars['banner']['path']; ?>
" border="0" /></a></td>
                	<?php endif; ?>
                </tr>
          	  <?php endforeach; endif; unset($_from); ?>
            </table>
           </td>
          </tr>

</table>