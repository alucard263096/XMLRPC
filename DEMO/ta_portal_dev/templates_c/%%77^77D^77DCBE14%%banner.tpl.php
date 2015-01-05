<?php /* Smarty version 2.6.26, created on 2010-10-24 03:20:34
         compiled from F:/Apache2.2/htdocs/ta_portal_dev/templates/event_common/banner.tpl */ ?>
<script language="javascript"  type="text/javascript"   src="<?php echo $this->_tpl_vars['rootpath']; ?>
/js/showcase.js"></script>
<div id="showcase_right">
	<?php if ($this->_tpl_vars['banner_count'] > 0): ?>
		<?php $_from = $this->_tpl_vars['banner_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['banner']):
?>
	        <a href="<?php if ($this->_tpl_vars['banner']['link_url'] != ''): ?><?php echo $this->_tpl_vars['banner']['link_url']; ?>
<?php else: ?><?php echo $this->_tpl_vars['movie_head']; ?>
detail.php?city_id=<?php echo $this->_tpl_vars['banner']['city_id']; ?>
&activity_id=<?php echo $this->_tpl_vars['banner']['activity_id']; ?>
<?php endif; ?>" >
	          <img src="<?php if ($this->_tpl_vars['banner']['image_url'] != ''): ?><?php echo $this->_tpl_vars['banner']['image_url']; ?>
<?php else: ?><?php echo $this->_tpl_vars['resource_path']; ?>
<?php echo $this->_tpl_vars['banner']['poster']; ?>
<?php endif; ?>" alt="<?php echo $this->_tpl_vars['banner']['name']; ?>
 ">
	        </a>
		<?php endforeach; endif; unset($_from); ?>
		<script>
			$(document).ready(function(){
				$("#showcase_right").showcase({
					css: { "z-index": "1" },
			        animation: { type: "vertical-slider" },
			   	    titleBar: { autoHide: false, 
			   	    			css: { fontStyle: "normal" },
			   	    			enabled:false
			   	    		  },
			     	navigator: { position: "bottom-right",
								 css: { padding: "0px",
								 		margin: "0px 0px 1px 1px" },
								 showNumber: true,
								 autoHide: false
							   }
		        });
			});
		</script>
	<?php else: ?>
	<!--
		<a href="###" >
			<img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/img_blank_banner.jpg" width="730" height="260" alt="">
		</a>
		-->
	<?php endif; ?>
</div>