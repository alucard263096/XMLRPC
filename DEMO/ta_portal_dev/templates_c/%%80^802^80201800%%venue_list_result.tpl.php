<?php /* Smarty version 2.6.26, created on 2010-11-09 07:29:52
         compiled from E:/Apache2.2/htdocs/ta_portal_dev/templates/movie/venue_list_result.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'convertDateTime', 'E:/Apache2.2/htdocs/ta_portal_dev/templates/movie/venue_list_result.tpl', 124, false),)), $this); ?>
<script type="text/javascript">	
	function setValue(li_id,ul_id,a_id,val_id,li_a_id){
	    $("#"+li_id).blur(); 
        var value = $("#"+li_a_id).attr("rel");
        var txt = $("#"+li_id).html(); 
        txt=txt.replace("drop_down_list2","drop_down_list1");
        $("#"+val_id).val(value); 
        $("#"+a_id).html(txt);
        $("#"+a_id).removeClass("selected"); 
        $("#"+li_id).addClass("selected"); 
        $("#"+ul_id).hide(); 
	}
</script>
<table>
<tr><td>
<?php $_from = $this->_tpl_vars['venue_full_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['venue']):
?>
<table width="730" border="0" cellspacing="0" cellpadding="0">
     			   <tr>
                    <td height="35" valign="bottom">
                    <table width="730" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="530" class="moviename_20px"><a href="venue_detail.php?city_id=<?php echo $this->_tpl_vars['param_list']['city_id']; ?>
&venue_id=<?php echo $this->_tpl_vars['venue']['venue_id']; ?>
"><span class="moviename_20px"><?php echo $this->_tpl_vars['venue']['venue_name']; ?>
</span></a></td>
                        <td width="70" valign="bottom"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/colour_1.gif" align="left"><?php echo $this->_tpl_vars['LANG']['memberprice']; ?>
</td>
					<td width="130" valign="bottom"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/colour_2.gif" align="left"><?php echo $this->_tpl_vars['LANG']['price']; ?>
</td>
                      </tr>
                    </table>
                    </td>
                   </tr>

                  <tr>
                    <td><table width="730" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="180" valign="top">
                        <table width="180" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="107">
                            	<?php if ($this->_tpl_vars['venue']['poster'] <> ''): ?>
                        		<a href="venue_detail.php?city_id=<?php echo $this->_tpl_vars['param_list']['city_id']; ?>
&venue_id=<?php echo $this->_tpl_vars['venue']['venue_id']; ?>
">
                        			<img src="<?php echo $this->_tpl_vars['resource_path']; ?>
<?php echo $this->_tpl_vars['venue']['poster']; ?>
" border="0" width="<?php echo $this->_tpl_vars['venue']['width']; ?>
" height="<?php echo $this->_tpl_vars['venue']['height']; ?>
">
                        		</a>
                            	<?php endif; ?>	
                            </td>
                            <td width="20"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" width="20" height="1"></td>
                          </tr>
                          <tr>
                            <td valign="top">
                            <!-- 星星指數-->
                            <div id="score<?php echo $this->_tpl_vars['venue']['venue_id']; ?>
">
							   <span>
							   <?php echo $this->_tpl_vars['LANG']['movie_list']['recommend_index']; ?>

							   </span>
							</div>
						    <script type="text/javascript">
						    	var score='<?php echo $this->_tpl_vars['venue']['score']; ?>
';
						    	var venue_id='<?php echo $this->_tpl_vars['venue']['venue_id']; ?>
';
								if(score== ''){
									score=0;
								}
								<?php if ($this->_tpl_vars['venue']['score_enabled'] > 0): ?>
									$("#score"+venue_id).studyplay_star({MaxStar:5,CurrentStar:score,Enabled:false,id:venue_id},function(value){});
								<?php else: ?>
									$("#score"+venue_id).studyplay_star({MaxStar:5,CurrentStar:score,Enabled:true,id:venue_id},function(value){});
								<?php endif; ?>
							</script>
							<!-- end 星星指數-->
							</td>
                          </tr>
                          <tr>
                            <td>
                             <div id="score_number<?php echo $this->_tpl_vars['venue']['venue_id']; ?>
" >
									<?php echo $this->_tpl_vars['LANG']['index_number']; ?>
：
									<?php if ($this->_tpl_vars['venue']['score'] != ""): ?>
									<span class="moviemark" id="score_number_value<?php echo $this->_tpl_vars['venue']['venue_id']; ?>
"><?php echo $this->_tpl_vars['venue']['score']; ?>
</span>
									<?php else: ?> 
									<span class="moviemark" id="score_number_value<?php echo $this->_tpl_vars['venue']['venue_id']; ?>
">0</span>
									<?php endif; ?>
							  </div> 
                            </td>
                          </tr>
                          <tr>
							<td>
								<div id="div<?php echo $this->_tpl_vars['venue']['venue_id']; ?>
" style="display:none">
									<?php echo $this->_tpl_vars['LANG']['assess_success']; ?>

								</div>
							</td>
						  </tr>
                          <tr>
                            <td><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/icon_tools_1.gif">  &nbsp;&nbsp;<img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/icon_tools_2.gif">  &nbsp;&nbsp;<img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/icon_tools_3.gif"></td>
                          </tr>
                        </table></td>
                        <td width="550" valign="top">
                        <table width="550" border="0" cellspacing="0" cellpadding="0">
                        <?php $_from = $this->_tpl_vars['venue']['activity_details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['activity_details']):
?>
                          <tr>
                            <td width="150" align="right"><a class="black" href="movie_detail.php?city_id=<?php echo $this->_tpl_vars['param_list']['city_id']; ?>
&activity_id=<?php echo $this->_tpl_vars['activity_details']['activity_id']; ?>
" ><?php echo $this->_tpl_vars['activity_details']['name']; ?>
</a></td>
                            <td width="330" align="left" class="tdCRselectBox"  style="padding-left:25px;">
                            <div class="CRselectBox" id="CRselectBox_<?php echo $this->_tpl_vars['venue']['venue_id']; ?>
_<?php echo $this->_tpl_vars['activity_details']['activity_id']; ?>
" onclick="showDiv('CRselectBoxOptions_<?php echo $this->_tpl_vars['venue']['venue_id']; ?>
_<?php echo $this->_tpl_vars['activity_details']['activity_id']; ?>
','CRselectBox_<?php echo $this->_tpl_vars['venue']['venue_id']; ?>
_<?php echo $this->_tpl_vars['activity_details']['activity_id']; ?>
')"> 
						        <input type="hidden" value="<?php echo $this->_tpl_vars['activity_details']['schedule_details']['0']['show_id']; ?>
" id="abc_<?php echo $this->_tpl_vars['venue']['venue_id']; ?>
_<?php echo $this->_tpl_vars['activity_details']['activity_id']; ?>
" /> 
						        <input type="hidden" value="" name="abc_CRtext" id="abc_CRtext" /> 
							    <a style="padding-left:5px;TEXT-DECORATION:none;" rel="<?php echo $this->_tpl_vars['activity_details']['schedule_details']['0']['show_id']; ?>
" id="CRselectValue_<?php echo $this->_tpl_vars['venue']['venue_id']; ?>
_<?php echo $this->_tpl_vars['activity_details']['activity_id']; ?>
" >
							    	
							    </a>
							</div>
							<script type="text/javascript">
								var hot_movie_number_temp=0;
								var CRselectValue_name="";
								var abc_name="";
								var is_already_sold=0;
							</script>
							<ul class="CRselectBoxOptions" id="CRselectBoxOptions_<?php echo $this->_tpl_vars['venue']['venue_id']; ?>
_<?php echo $this->_tpl_vars['activity_details']['activity_id']; ?>
"  >
								<?php $_from = $this->_tpl_vars['activity_details']['schedule_details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['schedule_details']):
?>
									<li id="CRselectBoxItem<?php echo $this->_tpl_vars['schedule_details']['show_id']; ?>
"
									<?php if ($this->_tpl_vars['schedule_details']['remain_ticket'] <= 0): ?>
									<?php else: ?>
									onclick="setValue('CRselectBoxItem<?php echo $this->_tpl_vars['schedule_details']['show_id']; ?>
',
									'CRselectBoxOptions_<?php echo $this->_tpl_vars['venue']['venue_id']; ?>
_<?php echo $this->_tpl_vars['activity_details']['activity_id']; ?>
',
									'CRselectValue_<?php echo $this->_tpl_vars['venue']['venue_id']; ?>
_<?php echo $this->_tpl_vars['activity_details']['activity_id']; ?>
',
									'abc_<?php echo $this->_tpl_vars['venue']['venue_id']; ?>
_<?php echo $this->_tpl_vars['activity_details']['activity_id']; ?>
',
									'CRselectBoxItemA<?php echo $this->_tpl_vars['schedule_details']['show_id']; ?>
_<?php echo $this->_tpl_vars['venue']['venue_id']; ?>
_<?php echo $this->_tpl_vars['activity_details']['activity_id']; ?>
')"
									<?php endif; ?>
									>
										<a href="###" style="TEXT-DECORATION:none;" id="CRselectBoxItemA<?php echo $this->_tpl_vars['schedule_details']['show_id']; ?>
_<?php echo $this->_tpl_vars['venue']['venue_id']; ?>
_<?php echo $this->_tpl_vars['activity_details']['activity_id']; ?>
" rel="<?php echo $this->_tpl_vars['schedule_details']['show_id']; ?>
" >
											<span class="drop_down_list2">
											<?php echo convertDateTimeSmarty(array('lang' => $this->_tpl_vars['lang'],'date' => $this->_tpl_vars['schedule_details']['show_date']), $this);?>
 <?php echo $this->_tpl_vars['schedule_details']['house_name']; ?>

											</span> 
											&nbsp;
				                        	<span style="color:#C21759">
				                        		<?php echo $this->_tpl_vars['schedule_details']['symbol']; ?>
<?php echo $this->_tpl_vars['schedule_details']['member_price']; ?>

				                        	</span> 
				                        	&nbsp;
				                        	<span  style="color:#36D900">
				                        		<?php echo $this->_tpl_vars['schedule_details']['price']; ?>

				                        	</span> 
				                        	<?php if ($this->_tpl_vars['schedule_details']['remain_ticket'] <= 0): ?>
				                        		<span style="color:#C21759">
													（<?php echo $this->_tpl_vars['LANG']['sold_out']; ?>
）
												</span> 	
											<?php endif; ?>
										</a>
									</li> 
									<script type="text/javascript">
										var remain_ticket='<?php echo $this->_tpl_vars['schedule_details']['remain_ticket']; ?>
';
										if( (remain_ticket >0 ) && (hot_movie_number_temp==0)){
											hot_movie_number_temp=1;
											is_already_sold=0;
											setValue('CRselectBoxItem<?php echo $this->_tpl_vars['schedule_details']['show_id']; ?>
',
											'CRselectBoxOptions_<?php echo $this->_tpl_vars['venue']['venue_id']; ?>
_<?php echo $this->_tpl_vars['activity_details']['activity_id']; ?>
',
											'CRselectValue_<?php echo $this->_tpl_vars['venue']['venue_id']; ?>
_<?php echo $this->_tpl_vars['activity_details']['activity_id']; ?>
',
											'abc_<?php echo $this->_tpl_vars['venue']['venue_id']; ?>
_<?php echo $this->_tpl_vars['activity_details']['activity_id']; ?>
',
											'CRselectBoxItemA<?php echo $this->_tpl_vars['schedule_details']['show_id']; ?>
_<?php echo $this->_tpl_vars['venue']['venue_id']; ?>
_<?php echo $this->_tpl_vars['activity_details']['activity_id']; ?>
');
										}
										if( (remain_ticket <= 0) && (hot_movie_number_temp==0)){
											is_already_sold=2;
											CRselectValue_name='CRselectValue_<?php echo $this->_tpl_vars['venue']['venue_id']; ?>
_<?php echo $this->_tpl_vars['activity_details']['activity_id']; ?>
';
											abc_name='abc_<?php echo $this->_tpl_vars['venue']['venue_id']; ?>
_<?php echo $this->_tpl_vars['activity_details']['activity_id']; ?>
';
										}
									</script>
								<?php endforeach; endif; unset($_from); ?> 
								<script type="text/javascript">
									if((is_already_sold==2)){
										var notxt='<a href="###" style="TEXT-DECORATION:none;"><?php echo $this->_tpl_vars['LANG']['sold_out']; ?>
</a>';
										$("#"+CRselectValue_name).html(notxt);
										$("#"+abc_name).val('-1');
									}
								</script>
							</ul>
                            </td>
                            <td width="70" height="30" align="right"><a href="###" class="goto_show" name='abc_<?php echo $this->_tpl_vars['venue']['venue_id']; ?>
_<?php echo $this->_tpl_vars['activity_details']['activity_id']; ?>
' ><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/button_buy_now_yel.gif" width="67" height="24" border="0" /></a></td>
                          </tr>
                          <?php endforeach; endif; unset($_from); ?>
                        </table>
                        </td>
                      </tr>
                    </table>
                      </td>
                    </tr>
                  <tr>
                    <td height="10">&nbsp;</td>
                    </tr>
                  <tr>
                    <td height="2" bgcolor="#c52d47"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" alt="" width="2" height="2"></td>
                    </tr>
                </table>
                 <?php endforeach; endif; unset($_from); ?>
                <!--==============//////    End Main Movie Content1  \\\\\\=========== -->  
              </td>
          </tr>
          
          <!--分頁-->
          <tr>
            <td valign="top">&nbsp;</td>
          </tr>
          <?php if ($this->_tpl_vars['total_page'] > 1): ?>
          <tr>
            <td valign="top">
            <table border="0" cellspacing="0" cellpadding="0">
              <?php if ($this->_tpl_vars['total_page'] > 1): ?>
              <tr>
                <td width="75">
                <table width="66" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="66" height="23" align="center" ><a href="javascript:void(0)" onclick="movieBackPage()" class="blklink  pageno2"><?php echo $this->_tpl_vars['LANG']['back']; ?>
</a></td>
                  </tr>
                </table>
                </td>
                <?php endif; ?>
                <td>
                <table border="0" cellspacing="0" cellpadding="0">
                  <tr>
                  	<?php unset($this->_sections['loop']);
$this->_sections['loop']['name'] = 'loop';
$this->_sections['loop']['loop'] = is_array($_loop=$this->_tpl_vars['total_page']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['loop']['show'] = true;
$this->_sections['loop']['max'] = $this->_sections['loop']['loop'];
$this->_sections['loop']['step'] = 1;
$this->_sections['loop']['start'] = $this->_sections['loop']['step'] > 0 ? 0 : $this->_sections['loop']['loop']-1;
if ($this->_sections['loop']['show']) {
    $this->_sections['loop']['total'] = $this->_sections['loop']['loop'];
    if ($this->_sections['loop']['total'] == 0)
        $this->_sections['loop']['show'] = false;
} else
    $this->_sections['loop']['total'] = 0;
if ($this->_sections['loop']['show']):

            for ($this->_sections['loop']['index'] = $this->_sections['loop']['start'], $this->_sections['loop']['iteration'] = 1;
                 $this->_sections['loop']['iteration'] <= $this->_sections['loop']['total'];
                 $this->_sections['loop']['index'] += $this->_sections['loop']['step'], $this->_sections['loop']['iteration']++):
$this->_sections['loop']['rownum'] = $this->_sections['loop']['iteration'];
$this->_sections['loop']['index_prev'] = $this->_sections['loop']['index'] - $this->_sections['loop']['step'];
$this->_sections['loop']['index_next'] = $this->_sections['loop']['index'] + $this->_sections['loop']['step'];
$this->_sections['loop']['first']      = ($this->_sections['loop']['iteration'] == 1);
$this->_sections['loop']['last']       = ($this->_sections['loop']['iteration'] == $this->_sections['loop']['total']);
?> 
                      <td width="25" height="23" align="center" valign="middle">
                      <?php if ($this->_tpl_vars['param_list']['page_from'] == $this->_sections['loop']['index']+1): ?>
									<span class="pageno_on"  id="<?php echo $this->_sections['loop']['index']+1; ?>
"><?php echo $this->_sections['loop']['index']+1; ?>
</span>
									<?php else: ?>
									<a class="pageno" href="#" id="<?php echo $this->_sections['loop']['index']+1; ?>
" onclick="changePageNum(<?php echo $this->_sections['loop']['index']+1; ?>
)" ><?php echo $this->_sections['loop']['index']+1; ?>
</a>
									<?php endif; ?>
                      </td>
                      <td><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" width="8" height="8"></td>
                    <?php endfor; endif; ?>
                    </tr>
                </table>
                </td>
                <?php if ($this->_tpl_vars['total_page'] > 1): ?>
                <td width="75" align="right">
                <table width="66" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="66" height="23" align="center" ><a href="javascript:void(0)" onclick="movieNextPages()" class="blklink  pageno2"><?php echo $this->_tpl_vars['LANG']['next']; ?>
</a></td>
                  </tr>
                </table>
                </td>
                <?php endif; ?>
              </tr>
            </table>
            </td>
          </tr>
          <?php endif; ?> 
</table>

<script type="text/javascript">	
	$(document).ready(function(){
		 $(".CRselectBox").hover(function() { 
                $(this).addClass("CRselectBoxHover"); 
            }, function() { 
                $(this).removeClass("CRselectBoxHover"); 
            }); 
		$(".goto_show").click(function(){
			var show_id=$("#"+$(this).attr("name")).val();
			if(show_id > parseInt(0)){
				window.location.href='choose_seat.php?show_id='+show_id;
			}else{
				alert("<?php echo $this->_tpl_vars['LANG']['select_movie_message']; ?>
");
			}
		});
		
     	$(document).click(function(event) {
			var target = event.srcElement? event.srcElement: event.target;
			var id=$(target).attr("id") != ''? $(target).attr("id"): $(target).parent().attr("id");
			var start=($(target).attr("id") != ''? $(target).attr("id"): $(target).parent().attr("id")).indexOf('_');
			var end=($(target).attr("id") != ''? $(target).attr("id"): $(target).parent().attr("id")).length;
			var tag = $('.CRselectBoxOptions'); 	
			$.each(tag, function(){
				if(this.id!=("CRselectBoxOptions"+id.substring(start,end))){
					$("#"+this.id).hide();
				}
			}); 
		});
		
		$(window).resize(function(event) {
			var tag = $('.CRselectBoxOptions'); 	
			$.each(tag, function(){
				var start = this.id.indexOf('_');
				var div = $("#"+"CRselectBox"+this.id.substring(start));
				$("#"+this.id).css('left', div.offset().left+1); 
	        	$("#"+this.id).css('top',div.offset().top + div.get(0).offsetHeight-1.5);
			}); 
		});
	});
	function changePageNum(page_no){
		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		var url = "venue_list.php";
		$('#div3').load(url, {"action":"resetCriteria","page_no":page_no}, function() {
			$('#div3').css('display','');
			$('#div3_load').css('display','none');
		});
	}
	
	function movieNextPages(){
		if(<?php echo $this->_tpl_vars['param_list']['page_from']; ?>
 < <?php echo $this->_tpl_vars['total_page']; ?>
){
			var page_no=<?php echo $this->_tpl_vars['param_list']['page_from']; ?>
+1;
			$('#div3').css('display','none');
			$('#div3_load').css('display','');
			var url = "venue_list.php";
			$('#div3').load(url, {"action":"resetCriteria","page_no":page_no}, function() {
				$('#div3').css('display','');
				$('#div3_load').css('display','none');
			});
		}
	}
	
	function movieBackPage(){				
		if(<?php echo $this->_tpl_vars['param_list']['page_from']; ?>
 > 1){
			var page_no=<?php echo $this->_tpl_vars['param_list']['page_from']; ?>
-1;
			$('#div3').css('display','none');
			$('#div3_load').css('display','');
			var url = "venue_list.php";
			$('#div3').load(url, {"action":"resetCriteria","page_no":page_no}, function() {
				$('#div3').css('display','');
				$('#div3_load').css('display','none');
			});
		}
	}
	function showDiv(ul_id,div_id){
		if ($("#"+ul_id).is(':visible'))
		{
			$("#"+ul_id).hide();
		}
		else
		{
	        $("#"+ul_id).show(); 
	        $("#"+ul_id).css('left',$("#"+div_id).offset().left+1); 
	        $("#"+ul_id).css('top',$("#"+div_id).offset().top + $("#"+div_id).get(0).offsetHeight-1.5);
	    } 
	}
</script>