<?php /* Smarty version 2.6.26, created on 2010-11-09 05:56:08
         compiled from E:/Apache2.2/htdocs/ta_portal_dev/templates/movie/hot_movie_result.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'convertDateTime', 'E:/Apache2.2/htdocs/ta_portal_dev/templates/movie/hot_movie_result.tpl', 145, false),)), $this); ?>
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
<table width="730" border="0" cellspacing="0" cellpadding="0">
 <?php $_from = $this->_tpl_vars['movie_full_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['movie']):
?>
	<tr>
		<td height="35" valign="bottom">
			<table width="730" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="340" class="moviename_20px">
						<a href="movie_detail.php?city_id=<?php echo $this->_tpl_vars['param_list']['city_id']; ?>
&activity_id=<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
" ><?php echo $this->_tpl_vars['movie']['name']; ?>
</a>
					</td>
					<td width="70" valign="middle"><a href="javascript:void(0)"><span id="moviesChosen_<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
" onclick="showMoviesChosen('<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
')" style="color:#C21759;font-weight:bold;"><?php echo $this->_tpl_vars['LANG']['hot_movie']['chosen']; ?>
<span></a></td>
					
					<td width="120" valign="middle">
						
						<div id="eles<?php echo $this->_tpl_vars['k']; ?>
" class="district_div">
							<a href="javascript:void(0)"><span style="color:#C21759;text-decoration: none;font-weight: bold;margin-left: 20px;"><?php echo $this->_tpl_vars['LANG']['hot_movie']['district']; ?>
</span></a>
						</div>
			
						<div class="clr"></div>
						<div id="blks<?php echo $this->_tpl_vars['k']; ?>
" class="blk" style="display:none;" >
						<div class="head"><div class="head-right">
						</div>
						</div>
						<div class="main"> 
						<a href="javascript:void(0)" id="closes<?php echo $this->_tpl_vars['k']; ?>
" class="closeBtn"><?php echo $this->_tpl_vars['LANG']['close']; ?>
</a>
							<ul>
								<?php $_from = $this->_tpl_vars['movie']['district_details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['districtDetails']):
?>
									<li><a href="javascript:void(0)" onclick="changeMovieDistrict('<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
','<?php echo $this->_tpl_vars['districtDetails']['district_id']; ?>
');(PopupLayers<?php echo $this->_tpl_vars['k']; ?>
).close()"><?php echo $this->_tpl_vars['districtDetails']['district_name']; ?>
</a></li>
								<?php endforeach; endif; unset($_from); ?>
							</ul>
						</div>
						<script type="text/javascript">		
							var	PopupLayers<?php echo $this->_tpl_vars['k']; ?>
 = new PopupLayer({trigger:"#eles<?php echo $this->_tpl_vars['k']; ?>
",popupBlk:"#blks<?php echo $this->_tpl_vars['k']; ?>
",closeBtn:"#closes<?php echo $this->_tpl_vars['k']; ?>
",useFx:true}); 
						
						</script>	
					</td>
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
		<td>
			<table width="730" border="0" cellspacing="0" cellpadding="0">
			
			<tr>
				<td width="200"  valign="middle">
					<table width="200" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td>
								&nbsp;
							</td>
						</tr>
						<tr>
							<td>
								<?php if ($this->_tpl_vars['movie']['poster'] <> ''): ?>
									<a href="movie_detail.php?city_id=<?php echo $this->_tpl_vars['param_list']['city_id']; ?>
&activity_id=<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
" >
										<img src="<?php echo $this->_tpl_vars['resource_path']; ?>
<?php echo $this->_tpl_vars['movie']['poster']; ?>
" border="0"/>
									</a>
						  	 	<?php endif; ?>  
							</td>
							<td width="20"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" width="20" height="1"></td>
							<td width="93" valign="top">
								
							</td>
						</tr>
						<tr>
							<td>
								&nbsp;&nbsp;&nbsp;
								<input type="hidden" value="<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
" id="hidden_<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
" />
							</td>
						</tr>
						<tr>
							<td>
							<div id="score_number<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
" >
							<?php echo $this->_tpl_vars['LANG']['index_number']; ?>
：
							<?php if ($this->_tpl_vars['movie']['poster'] <> ''): ?>
								<span class="moviemark" id="score_number_value<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
"><?php echo $this->_tpl_vars['movie']['score']; ?>
</span>
							<?php else: ?> 
								<span class="moviemark" id="score_number_value<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
">0</span>
							<?php endif; ?>
							</div>  
							</td>
							<td>&nbsp;</td>
							<td valign="top">&nbsp;</td>
						</tr>
						<tr height="30px">
							<td>
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/score/score_html.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</td>
						</tr>
					</table>
				</td>
				<td width="530" valign="top">
				<table width="530" border="0" cellspacing="0" cellpadding="0">
					<?php $_from = $this->_tpl_vars['movie']['venue_details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['venue_item']):
?>
					<tr class="movie<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
_<?php echo $this->_tpl_vars['venue_item']['district_id']; ?>
" name="movieList<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
">
						<td width="20">
						<?php if ($this->_tpl_vars['venue_item']['organizer_icon_path'] <> ''): ?>
							<img src="<?php echo $this->_tpl_vars['resource_path']; ?>
<?php echo $this->_tpl_vars['venue_item']['organizer_icon_path']; ?>
" alt="<?php echo $this->_tpl_vars['venue_item']['organizer_icon_alt']; ?>
" align="left">
						<?php endif; ?>
						</td>
						<td width="120" align="right"><a class="black" href="venue_detail.php?city_id=<?php echo $this->_tpl_vars['param_list']['city_id']; ?>
"><?php echo $this->_tpl_vars['venue_item']['venue_name']; ?>
</a></td>
						<td width="320"  align="left" class="tdCRselectBox"  style="padding-left:25px;">
					        <div class="CRselectBox" id="CRselectBox_<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
_<?php echo $this->_tpl_vars['venue_item']['venue_id']; ?>
" onclick="showDiv('CRselectBoxOptions_<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
_<?php echo $this->_tpl_vars['venue_item']['venue_id']; ?>
','CRselectBox_<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
_<?php echo $this->_tpl_vars['venue_item']['venue_id']; ?>
')"> 
						        <input type="hidden" value="<?php echo $this->_tpl_vars['venue_item']['schedule_details']['0']['show_id']; ?>
" id="abc_<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
_<?php echo $this->_tpl_vars['venue_item']['venue_id']; ?>
" /> 
						        <input type="hidden" value="" name="abc_CRtext" id="abc_CRtext" /> 
							    <a style="padding-left:5px;TEXT-DECORATION:none;" rel="<?php echo $this->_tpl_vars['venue_item']['schedule_details']['0']['show_id']; ?>
" id="CRselectValue_<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
_<?php echo $this->_tpl_vars['venue_item']['venue_id']; ?>
" >
							    	
							    </a>
							</div>
							<script type="text/javascript">
								var hot_movie_number_temp=0;
								var CRselectValue_name="";
								var abc_name="";
								var is_already_sold=0;
							</script>
							<ul class="CRselectBoxOptions" id="CRselectBoxOptions_<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
_<?php echo $this->_tpl_vars['venue_item']['venue_id']; ?>
"  >
								<?php $_from = $this->_tpl_vars['venue_item']['schedule_details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['schedule_details']):
?>
									<li id="CRselectBoxItem<?php echo $this->_tpl_vars['schedule_details']['show_id']; ?>
"
									<?php if ($this->_tpl_vars['schedule_details']['remain_ticket'] <= 0): ?>
									<?php else: ?>
									onclick="setValue('CRselectBoxItem<?php echo $this->_tpl_vars['schedule_details']['show_id']; ?>
',
									'CRselectBoxOptions_<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
_<?php echo $this->_tpl_vars['venue_item']['venue_id']; ?>
',
									'CRselectValue_<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
_<?php echo $this->_tpl_vars['venue_item']['venue_id']; ?>
',
									'abc_<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
_<?php echo $this->_tpl_vars['venue_item']['venue_id']; ?>
',
									'CRselectBoxItemA<?php echo $this->_tpl_vars['schedule_details']['show_id']; ?>
_<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
_<?php echo $this->_tpl_vars['venue_item']['venue_id']; ?>
')"
									<?php endif; ?>
									>
										<a href="###" style="TEXT-DECORATION:none;" id="CRselectBoxItemA<?php echo $this->_tpl_vars['schedule_details']['show_id']; ?>
_<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
_<?php echo $this->_tpl_vars['venue_item']['venue_id']; ?>
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
											'CRselectBoxOptions_<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
_<?php echo $this->_tpl_vars['venue_item']['venue_id']; ?>
',
											'CRselectValue_<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
_<?php echo $this->_tpl_vars['venue_item']['venue_id']; ?>
',
											'abc_<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
_<?php echo $this->_tpl_vars['venue_item']['venue_id']; ?>
',
											'CRselectBoxItemA<?php echo $this->_tpl_vars['schedule_details']['show_id']; ?>
_<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
_<?php echo $this->_tpl_vars['venue_item']['venue_id']; ?>
');
										}
										if( (remain_ticket <= 0) && (hot_movie_number_temp==0)){
											is_already_sold=2;
											CRselectValue_name='CRselectValue_<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
_<?php echo $this->_tpl_vars['venue_item']['venue_id']; ?>
';
											abc_name='abc_<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
_<?php echo $this->_tpl_vars['venue_item']['venue_id']; ?>
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
						<td width="70" height="30" align="right">
						<a href="###">
						<img name='abc_<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
_<?php echo $this->_tpl_vars['venue_item']['venue_id']; ?>
' src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/button_buy_now_yel.gif" width="67" height="24" border="0" class="goto_show">
						</a></td>
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
		<td height="2" bgcolor="#c52d47"><img src="images/spacer.gif" alt="" width="2" height="2"></td>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
	<tr>
		<td>
			&nbsp;
		</td>
	</tr>
 	<?php if ($this->_tpl_vars['total_page'] > 0): ?>
	<tr>
		<td valign="top">
			<table border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td width="75">
					<table width="66" border="0" cellspacing="0" cellpadding="0">
						<tr>
						    <?php if ($this->_tpl_vars['total_page'] > 1): ?>
								<td width="66" height="23" align="center" >
					              	<a href="javascript:void(0)" class="blklink  pageno2" onclick="movieBackPage()"><?php echo $this->_tpl_vars['LANG']['back']; ?>
</a>
								</td>
							<?php endif; ?>
						</tr>
					</table>
				</td>
				<td>
					<?php if ($this->_tpl_vars['total_page'] > 1): ?>	
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
								<td>
									<img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" width="8" height="8">
								</td>							
								<?php endfor; endif; ?>	
							</tr>
						</table>
					<?php endif; ?>
				</td>
				<td width="75" align="right">
					<table width="66" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<?php if ($this->_tpl_vars['total_page'] > 1): ?>	  
								<td width="66" height="23" align="center" >
					              	<a href="javascript:void(0)" class="blklink  pageno2" onclick="movieNextPages()"><?php echo $this->_tpl_vars['LANG']['next']; ?>
</a>	  
								</td>
							 <?php endif; ?>
						</tr>
					</table>
				</td>
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
		var url = "hot_movie.php";
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
			var url = "hot_movie.php";
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
			var url = "hot_movie.php";
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

	function changeMovieDistrict(activityId,districtId){
		$("tr[name="+ "movieList"+activityId+"]").hide();
		$(".movie"+activityId+"_"+districtId).show();
	}
	function showMoviesChosen(activityId){
		$("tr[name="+ "movieList"+activityId+"]").show();
	}
</script>

