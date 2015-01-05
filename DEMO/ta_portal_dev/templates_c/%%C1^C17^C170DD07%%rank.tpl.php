<?php /* Smarty version 2.6.26, created on 2010-11-09 05:56:08
         compiled from E:/Apache2.2/htdocs/ta_portal_dev/templates/event_common/rank.tpl */ ?>
<table width="210" border="0" cellspacing="0" cellpadding="0">
  <?php $_from = $this->_tpl_vars['movie_rank_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['movie']):
?>
  <tr>
    <td class="showtable_right_5pxguid" width="25" valign="top" align="center"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['event_type']; ?>
/icon_list_indent<?php echo $this->_tpl_vars['movie']['index']; ?>
.gif" width="17" height="17"></td>
    <td class="showtable_right_5pxguid" valign="top"><a href="detail.php?city_id=<?php echo $this->_tpl_vars['param_list']['city_id']; ?>
&activity_id=<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
" class="blklink"><?php echo $this->_tpl_vars['movie']['name']; ?>
</a></td>
    <td width="25" align="center" valign="top"><span class="moviemark"><!--4.5--></span></td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
</table>
<!--  <table width="210" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td align="right" class="movietable_right_5pxguid"><a href="#" class="showmorelink">+<?php echo $this->_tpl_vars['LANG']['more']; ?>
&gt;&gt;</a></td>
    </tr>
  </table>//-->