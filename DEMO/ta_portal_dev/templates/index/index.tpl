<{include file="$smarty_root/header.tpl" }>
<link type="text/css" href="<{$rootpath}>/css/accordion_customer_theme.css" rel="stylesheet" />
<link type="text/css" href="<{$rootpath}>/css/core.css" rel="stylesheet" />
<script language="javascript"  type="text/javascript"   src="<{$rootpath}>/js/popup_layer.js"></script>
<link href="<{$rootpath}>/css/star.css" rel="stylesheet" type="text/css" />
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="732" valign="top" align="left">
        <!-- Main Content-->
        	<{include file="$smarty_root/index/rolling_banner.tpl" }>
			<br/>
			<table width="615" border="0" cellspacing="0" cellpadding="0">
	          <tr>
	            <td bgcolor="#43406b"><img src=s"images/spacer.gif" width="1" height="1"></td>
	            <td width="19" bgcolor="#43406b"><img src="images/spacer.gif" width="9" height="1"></td>
	            <td><img src="images/home_line02.gif" width="325" height="1"></td>
	          </tr>
	          <tr>
	            <td valign="bottom" bgcolor="#43406b"><img src="images/home_line01.gif" width="1" height="248"></td>
	            <td width="9"><img src="images/spacer.gif" alt="" width="9" height="1"></td>
	            <td width="605" valign="top">
	            	<!--==============//////    Start Main Content Menu  \\\\\\=========== -->
		            <table width="605" border="0" cellspacing="0" cellpadding="0">
		              <tr>
		              	<{if 1==2}>
		                <td align="center">
		                	<{if $param_list.tab == 'movieTab' }>
		                		<script type="text/javascript">var currenttab = '1';</script>
		                		<img src="images/sub_nav_arrow1.gif" alt="" width="60" height="19" name="sub_arrow1" id="sub_arrow1">
		                	<{else}>
		                		<img src="images/spacer.gif" alt="" width="60" height="19" name="sub_arrow1" id="sub_arrow1">
		                	<{/if}>
		                </td>
		                <td><img src="images/spacer.gif" width="1" height="19"></td>
		                <{/if}>
		                <td align="center">
		                	<{if $param_list.tab == 'showTab' }>
		                		<script type="text/javascript">var currenttab = '2';</script>
		                		<img src="images/sub_nav_arrow2.gif" alt="" width="60" height="19" name="sub_arrow2" id="sub_arrow2">
		                	<{else}>
		                		<img src="images/spacer.gif" alt="" width="60" height="19" name="sub_arrow2" id="sub_arrow2">
		                	<{/if}>
		                </td>
		                <td><img src="images/spacer.gif" width="1" height="19"></td>
		                <td align="center">
		                	<{if $param_list.tab == 'transportTab' }>
		                		<script type="text/javascript">var currenttab = '3';</script>
		                		<img src="images/sub_nav_arrow3.gif" alt="" width="60" height="19" name="sub_arrow3" id="sub_arrow3">
		                	<{else}>
		                		<img src="images/spacer.gif" alt="" width="60" height="19" name="sub_arrow3" id="sub_arrow3">
		                	<{/if}>
		                </td>
		                <td><img src="images/spacer.gif" width="1" height="19"></td>
		                <td align="center">
		                	<{if $param_list.tab == 'hotelTab' }>
		                		<script type="text/javascript">var currenttab = '4';</script>
		                		<img src="images/sub_nav_arrow4.gif" alt="" width="60" height="19" name="sub_arrow4" id="sub_arrow4">
		                	<{else}>
		                		<img src="images/spacer.gif" alt="" width="60" height="19" name="sub_arrow4" id="sub_arrow4">
		                	<{/if}>
		                </td>
		                <td><img src="images/spacer.gif" width="1" height="19"></td>
		                <td align="center">
		                	<{if $param_list.tab == 'packageTab' }>
		                		<script type="text/javascript">var currenttab = '5';</script>
		                		<img src="images/sub_nav_arrow5.gif" alt="" width="60" height="19" name="sub_arrow5" id="sub_arrow5">
		                	<{else}>
		                		<img src="images/spacer.gif" alt="" width="60" height="19" name="sub_arrow5" id="sub_arrow5">
		                	<{/if}>
		                </td>
		                <td><img src="images/spacer.gif" width="1" height="19"></td>
		                <td align="center">
		                <{if $param_list.tab == 'newsTab' }>
		                		<script type="text/javascript">var currenttab = '6';</script>
		                		<img src="images/sub_nav_arrow6.gif" alt="" width="60" height="19" name="sub_arrow6" id="sub_arrow6">
		                	<{else}>
		                		<img src="images/spacer.gif" alt="" width="60" height="19" name="sub_arrow6" id="sub_arrow6">
		                	<{/if}>
		                </td>
		              	<{if 2== 2}>
		                <td align="center">
		                	<img src="images/spacer.gif" alt="" width="60" height="19" name="sub_arrow7" id="sub_arrow7">
		                </td>
		                <td><img src="images/spacer.gif" width="1" height="19"></td>
		              	<{/if}>
		              </tr>
		              <tr>
		              	
		                <td class='movie_tab'><div class="btn"><img src="images/<{$lang}>/sub_nav_01.gif" border="0" onclick="changeTab('1', 'movieTab')" onMouseOver="MM_swapImage('sub_arrow1','','images/sub_nav_arrow1.gif',1)" onMouseOut="checkTab('1')"></div></td>
		                <td class='movie_tab'><img src="images/home_line03.gif" width="1" height="31"></td>
		                <td><div class="btn"><img src="images/<{$lang}>/sub_nav_02.gif" border="0" onclick="changeTab('2', 'showTab')" onMouseOver="MM_swapImage('sub_arrow2','','images/sub_nav_arrow2.gif',1)" onMouseOut="checkTab('2')"></div></td>
		                <td><img src="images/home_line03.gif" width="1" height="31"></td>
		                <td><div class="btn"><img src="images/<{$lang}>/sub_nav_03.gif" border="0" onclick="changeTab('3', 'transportTab')" onMouseOver="MM_swapImage('sub_arrow3','','images/sub_nav_arrow3.gif',1)" onMouseOut="checkTab('3')"></div></td>
		                <td><img src="images/home_line03.gif" width="1" height="31"></td>
		                <td><div class="btn"><img src="images/<{$lang}>/sub_nav_04.gif" border="0" onclick="changeTab('4', 'hotelTab')" onMouseOver="MM_swapImage('sub_arrow4','','images/sub_nav_arrow4.gif',1)" onMouseOut="checkTab('4')"></div></td>
		                <td><img src="images/home_line03.gif" width="1" height="31"></td>
		                <td><div class="btn"><img src="images/<{$lang}>/sub_nav_05.gif" border="0" onclick="changeTab('5', 'packageTab')" onMouseOver="MM_swapImage('sub_arrow5','','images/sub_nav_arrow5.gif',1)" onMouseOut="checkTab('5')"></div></td>
		                <td><img src="images/home_line03.gif" width="1" height="31"></td>
		                <td><div class="btn"><img src="images/<{$lang}>/sub_nav_06.gif" border="0" onclick="changeTab('6', 'newsTab')" onMouseOver="MM_swapImage('sub_arrow6','','images/sub_nav_arrow6.gif',1)" onMouseOut="checkTab('6')"></div></td>
		              </tr>
		              <tr>
		                <td class='movie_tab'><img src="images/spacer.gif" width="1" height="15"></td>
		                <td class='movie_tab'><img src="images/spacer.gif" width="1" height="15"></td>
		                <td><img src="images/spacer.gif" width="1" height="15"></td>
		                <td><img src="images/spacer.gif" width="1" height="15"></td>
		                <td><img src="images/spacer.gif" width="1" height="15"></td>
		                <td><img src="images/spacer.gif" width="1" height="15"></td>
		                <td><img src="images/spacer.gif" width="1" height="15"></td>
		                <td><img src="images/spacer.gif" width="1" height="15"></td>
		                <td><img src="images/spacer.gif" width="1" height="15"></td>
		                <td><img src="images/spacer.gif" width="1" height="15"></td>
		                <td><img src="images/spacer.gif" width="1" height="15"></td>
		              </tr>
		            </table>
		            <!--==============//////    End Main Content Menu  \\\\\\=========== -->
		            <!--==============//////    Start Movie Player Content  \\\\\\=========== -->
		              <div id='activity_tab'></div>
		              <div id="activity_tab_load" align="left"  style="vertical-align:middle; padding-left:300px;">
		              		<br/><br/><br/><br/><br/><br/>
							<img src="<{$rootpath}>/images/loading.gif"/>
					  </div>
		              <!--==============//////    End Movie Player Content  \\\\\\=========== -->
		              <div id='activity_detail'></div>
		              <img src="images/spacer.gif" alt="" width="605" height="30">
	            </td>
	          </tr>
	        </table>
        </td>
        <td width="15"><img src="<{$rootpath}>/images/spacer.gif" width="15" height="1"></td>
        <td width="213" valign="top">
        <!--==============//////    Login  \\\\\\=========== -->
	        <{include file="$smarty_root/event_common/box.tpl" }>
	        <{include file="$smarty_root/event_common/banner_list.tpl" }>
        <!--==============//////    End Right Adv Banner  \\\\\\=========== -->   </td>
      </tr>
    </table>

<script type="text/javascript">
	var PopupLayer1 = new PopupLayer({trigger:"#ele1",popupBlk:"#blk1",closeBtn:"#close1",useFx:true});
	function changeCity(city_id,long_name) {
		var url = "<{$file_url}>";
		$.post(url, {"action":"resetLocation","city_id":city_id}, function() {
			window.location.reload();
		});
		$('#header_selecttext_div').html('<span class="header_selecttext">'+long_name+'</span>');
		PopupLayer1.close();
	}
	//var currenttab = '1';
	var param_list_tab="<{$param_list.tab}>";
	$(function() {		
		$('#activity_tab').css('display','none');
		$('#activity_tab_load').css('display','');
		$('#activity_detail').css('display','none');
		$('#activity_tab').load("index.php", {"tab_action":"<{$param_list.tab}>"}, function() {
			$('#activity_tab').css('display','');
			$('#activity_tab_load').css('display','none');			
		    
		});
		$('#activity_detail').load("index.php", {"tab_action":"<{$param_list.tab}>", "activity_id":"default"}, function() {
			$('#activity_detail').css('display','');
		});
		
	});
	
	function changeTab(arrowNo, tab){
		currenttab = arrowNo;
		resetArrowNo();
		if(tab!=param_list_tab){
		if(i<=6)
		{
			$('#sub_arrow'+i).attr('src', 'images/sub_nav_arrow'+i+'.gif');
		}
		$('#activity_tab').css('display','none');
		$('#activity_tab_load').css('display','');
		$('#activity_detail').css('display','none');
			$('#activity_tab').load("index.php", {"tab_action":tab}, function() {
				$('#activity_tab').css('display','');
				$('#activity_tab_load').css('display','none');			
			});
			
			$('#activity_detail').load("index.php", {"tab_action":tab, "activity_id":"default"}, function() {
				$('#activity_detail').css('display','');
			});
 			param_list_tab=tab;
		}
	}
	
	function resetArrowNo(){
		try
		{
			for(i=1; i <= 6 ;i++){
				if(currenttab != i)
					$('#sub_arrow'+i).attr('src', 'images/spacer.gif');
				else
					$('#sub_arrow'+i).attr('src', 'images/sub_nav_arrow'+i+'.gif');
			}
		}
		catch(ex)
		{
			//alert("what the park");
		}
	}
	
	function checkTab(arrowNo){
		//alert(currenttab);
		if(currenttab != arrowNo){
			MM_swapImgRestore();
		}
	}
	
	function changeActivity(tab, act_id, path){
		$('#activity_poster').attr('src', path);
		$('#activity_detail').load("index.php", {"tab_action":tab, "activity_id":act_id}, function() {
			$('#activity_detail').css('display','');
		});
	}
	
		<{include file="$smarty_root/score/score_js.tpl" }>
		$(document).ready(function(){
			
				$(".movie_tab").hide();
			
		});
</script>

<{include file="$smarty_root/footer.tpl" }>