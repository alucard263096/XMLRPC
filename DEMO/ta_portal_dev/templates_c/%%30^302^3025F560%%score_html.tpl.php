<?php /* Smarty version 2.6.26, created on 2010-10-24 03:22:50
         compiled from F:/Apache2.2/htdocs/ta_portal_dev/templates/score/score_html.tpl */ ?>

								<div id="score<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
">
								   <span  class="ticketCountfont2" id='score_index'>
								   <?php echo $this->_tpl_vars['LANG']['movie_list']['recommend_index']; ?>

								   </span>
								</div>
							    <script type="text/javascript">
							    	var score='<?php echo $this->_tpl_vars['movie']['score']; ?>
';
							    	var activity_id='<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
';
									if(score== ''){
										score=0;
									}
									<?php if ($this->_tpl_vars['movie']['score_enabled'] > 0): ?>
										$("#score"+activity_id).studyplay_star({MaxStar:5,CurrentStar:score,Enabled:false,id:activity_id},function(value){});
									<?php else: ?>
										$("#score"+activity_id).studyplay_star({MaxStar:5,CurrentStar:score,Enabled:true,id:activity_id},function(value){});
									<?php endif; ?>
								</script>
								<div id="div<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
" style="display:none;">
									<br><?php echo $this->_tpl_vars['LANG']['assess_success']; ?>

								</div>